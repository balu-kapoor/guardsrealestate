<?php

namespace App\Http\Controllers;

use App\Models\Properties\GB_PropertySync;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Intervention\Image\Facades\Image;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected function getSearchFilterOptionsForView()
    {
        $filterOptions = [
            'rent'  => [
                            'property_type_list' => [],
                            'postcode_list' => [],
                            'price_bracket_list' => [],
                        ],
            'buy'  => [
                            'property_type_list' => [],
                            'postcode_list' => [],
                            'price_bracket_list' => [],
                        ],
        ];

        //todo: Cache results for 6 hours
        $filterOptions['rent']['property_type_list'] = DB::table('GB_PropertySync')->select('type')
            ->where('propind','L')->groupBy('type')->orderBy('type')->get()
                                                                    ->pluck('type')->toArray();

        $filterOptions['rent']['postcode_list'] = DB::table('GB_PropertySync')->select('postcode')
            ->where('propind','L')->groupBy('postcode')->orderBy('postcode')->get()
                                                                    ->pluck('postcode')->toArray();

        $priceminmax = DB::table('GB_PropertySync')->where('propind','L')
                                                   ->selectRaw('max(price) as maxprice, min(price) as minprice')->first();
        for($p = round($priceminmax->minprice,0,PHP_ROUND_HALF_DOWN); $p <= round($priceminmax->maxprice,0,PHP_ROUND_HALF_UP); $p+=PROPERTY_PRICE_BRACKET_LETTING)
        {
            $filterOptions['rent']['price_bracket_list'][] = array('min' => $p,'max' => $p+PROPERTY_PRICE_BRACKET_LETTING);
        }

        $filterOptions['buy']['property_type_list'] = DB::table('GB_PropertySync')->select('type')
            ->where('propind','S')->groupBy('type')->orderBy('type')->get()
                                                                    ->pluck('type')->toArray();

        $filterOptions['buy']['postcode_list'] = DB::table('GB_PropertySync')->select('postcode')
            ->where('propind','S')->groupBy('postcode')->orderBy('postcode')->get()
                                                                    ->pluck('postcode')->toArray();

        $priceminmax = DB::table('GB_PropertySync')->where('propind','S')
                         ->selectRaw('max(price) as maxprice, min(price) as minprice')->first();
        for($p = round($priceminmax->minprice,0,PHP_ROUND_HALF_DOWN); $p <= round($priceminmax->maxprice,0,PHP_ROUND_HALF_UP); $p+=PROPERTY_PRICE_BRACKET_SALE)
        {
            $filterOptions['buy']['price_bracket_list'][] = array('min' => $p,'max' => $p+PROPERTY_PRICE_BRACKET_SALE);
        }
        return $filterOptions;
    }
    public function search1090($propind,$totalnumber, $pagesize =null, $pagenumber = null, $property_id = null)
    {
        $v2WebsiteBusinessKey = "guardsrealestate";
        $v2WebsiteUrl = "http://www.guardsrealestate.com/";

        if(empty($pagesize))
            $pagesize=$totalnumber;
        if(empty($pagenumber))
            $pagenumber = "";
        $businessCatId = 1;
        $stateValues = '1,2';
        $UseSubmittedStateOnly = 'true';
        $colnumber = 1;
        $photowidth = 800;
        $photoheight = 496;
        $photocrop = 'true';
        $photousewidth = 'true';
        $photouseheight = 'true';
        $thumbwidth = 90;
        $thumbheight = 68;
        $overallHtml='';
        if($propind == "S") {
            $orderby = "SalesPropertyDetails.DateAvailable";
        } else {
            $orderby = "LettingsPropertyDetails.DateAvailable";
        }
        $orderdir = "DESC";

        if($propind == 'L') {
            $overallHtml .= '<<LETTINGS>>';
        } else if ($propind == 'S') {
            $overallHtml .= '<<SALES>>';
        } else {
            $overallHtml .= '<<LETTINGS>><<SALES>>';
        }
        $fields = array(
            'action'=>'getSearch',
            'id'=>urlencode($property_id),
            'propid'=>urlencode($property_id),
            'websiteBusinessKey'=>urlencode($v2WebsiteBusinessKey),
            'orderby'=>urlencode($orderby),
            'orderdirection'=>urlencode($orderdir),
            'propind'=>urlencode($propind),
            'TotalNumber'=>urlencode($totalnumber),
            'pagesize'=>urlencode($pagesize),
            'page'=>urlencode($pagenumber),
//            'ColNumber'=>urlencode($colnumber),
            'stateValues'=>($stateValues),
            'UseSubmittedStateOnly'=>urlencode($UseSubmittedStateOnly),
            'PhotoWidth'=>urlencode($photowidth),
            'PhotoHeight'=>urlencode($photoheight),
            'PhotoCrop'=>urlencode($photocrop),
            'PhotoUseWidth'=>urlencode($photousewidth),
            'PhotoUseHeight'=>urlencode($photouseheight),
            'businessCategoryId'=>urlencode($businessCatId),
            'translateDocTags'=>'true',
//            'showSelectedOnly'=>'false',
            'PropContainerHtml'=>View::make('components.10ninetyPropertyJson')->render(),
//            'PropContainerHtml'=> $propContainerHtml,
            'OverallHtml'=>$overallHtml
        );
//        dd($fields);
        if(empty($property_id))
            $resp = $this->send1090Post($fields,'WebsitePropertySearch/Search');
        else
        {
            $resp = $this->send1090Post($fields,'WebsitePropertySearch/Search');
        }

        $propertiesRawData = (explode('<|PROPERTY_TAG|>',$resp));

        $properties = [];
        foreach($propertiesRawData as $propdata)
        {
            $propertyIndData = explode('||||||',$propdata);
            $property = ['status' => '','title' => '','type' => '','price_display' => '',
                 'beds' => '','bathrooms' => '','receptions' => '','bedswithtype' => '','summary' => '',
                'website_url' => '','area' => '',
                'amenities' => '','reference' => '','floorplan' => '','full_address' => '','city' => '','postcode' => '',
                'latitude' => null,'longitude' => null,
                'disclaimer_text' => '','price' => '','price_qualifier' => '',
                'img_listingIcon' => '','img_1200x600' => '','img_600x600' => '','img_600x1200' => '',
                'virtual_tour_link' => '',
                'imagelist' => [],
                'raw' => $propertyIndData,];
            if(count($propertyIndData) > 3)
            {
                $i=0;
                foreach ($propertyIndData as $attributeData)
                {
                    $attributeData = trim($attributeData);
                    switch ($i)
                    {
                        case 0: // status
                            $property['status'] = $attributeData;
                            break;
                        case 1: // DISPLAYADDRESS
                            $property['title'] = $attributeData;
                            break;
                        case 2: // type
                            $property['type'] = $attributeData;
                            break;
                        case 3: // price
                            $property['price_display'] = strip_tags($attributeData);
                            break;
                        case 4: // NumberBeds
                            $property['beds'] = $attributeData;
                            break;
                        case 5: // NumberBathrooms
                            $property['bathrooms'] = $attributeData;
                            break;
                        case 6: // NumberReceptions
                            $property['receptions'] = $attributeData;
                            break;
                        case 7: // beds with type
                            $property['bedswithtype'] = strip_tags($attributeData);
                            break;
                        case 8: // summary
                            $property['summary'] = strip_tags(nl2br(htmlspecialchars_decode(html_entity_decode($attributeData,ENT_QUOTES))));
                            break;
                        case 9: // website url
                            $property['website_url'] = $attributeData;
                            break;
                        case 10: // NumberReceptions
                            $property['area'] = $attributeData;
                            break;

                        case 11: //amenities / feature list
                            if(!empty($attributeData))
                            {
                                $property['amenities'] = explode(',',$attributeData);
                            }
                            break;
                        case 12: //reference
                            $property['reference'] = $attributeData;
                            break;
                        case 13: //FLOORPLANLINK
                            if(!empty($attributeData))
                            {
                                /*** a new dom object ***/
                                $dom = new \DOMDocument();
                                $dom->loadHTML(str_ireplace('&', '&amp;', $attributeData));
                                $dom->preserveWhiteSpace = false;
                                $property['floorplan'] = strtok($dom->getElementsByTagName('img')->item(0)->getAttribute('src'), '?');
                            }
                            break;
                        case 14: //EPCLINK
                            if(!empty($attributeData))
                            {
                                /*** a new dom object ***/
                                $dom = new \DOMDocument();
                                $dom->loadHTML(str_ireplace('&', '&amp;', $attributeData));
                                $dom->preserveWhiteSpace = false;
                                $property['epc'] = strtok($dom->getElementsByTagName('img')->item(0)->getAttribute('src'), '?');
                            }
                            break;
                        case 15: //full_address
                            $property['full_address'] = $attributeData;
                            break;
                        case 16: //Town
                            $property['city'] = $attributeData;
                            break;
                        case 17: //Postcode
                            $property['postcode'] = $attributeData;
                            break;
                        case 18: //Latitude
                            if(!empty($attributeData))
                                $property['latitude'] = $attributeData;
                            break;
                        case 19: //Longitude
                            if(!empty($attributeData))
                                $property['longitude'] = $attributeData;
                            break;
                        case 20: //DisclaimerText
                            $property['disclaimer_text'] = $attributeData;
                            break;
                        case 21: //DisclaimerText
                            $property['price'] = floatval(filter_var(html_entity_decode(strip_tags($attributeData)),FILTER_SANITIZE_NUMBER_FLOAT));
                            break;
                        case 22: //DisclaimerText
                            $property['price_qualifier'] = $attributeData;
                            break;
                        case 23: //VirtualTourLink
                            if(!empty($attributeData))
                            {
                                /*** a new dom object ***/
                                $dom = new \DOMDocument();
                                $dom->loadHTML($attributeData);
                                $dom->preserveWhiteSpace = false;
                                //extract id from url
                                $tmp_url = $dom->getElementsByTagName('a')->item(0)->getAttribute('href');

                                $property['virtual_tour_link'] = $tmp_url;
                            }
                            break;

                        case 24: // photolink
                            if(!empty($attributeData))
                            {
                                /*** a new dom object ***/
                                $dom = new \DOMDocument();
                                $dom->loadHTML(str_ireplace('&', '&amp;', $attributeData));
                                $dom->preserveWhiteSpace = false;
                                //extract id from url
                                $tmp_url = url('/'.$dom->getElementsByTagName('a')->item(0)->getAttribute('href'));
                                $tmp_qstring = [];
                                parse_str(htmlspecialchars_decode($tmp_url), $tmp_qstring);
                                $property['id'] = array_values($tmp_qstring)[0];
                                $property['propind'] = array_values($tmp_qstring)[1];
                                //extract image src from image tag

                                // $property['img_listingIcon'] = $this->getPropertyImage(
                                //     $property['id'],
                                //     strtok($dom->getElementsByTagName('img')->item(0)->getAttribute('src'), '?'),
                                //     1200,
                                //     700
                                // );
                                // $property['img_1200x600'] = $this->getHomeImage(
                                //     $property['id'],
                                //     strtok($dom->getElementsByTagName('img')->item(0)->getAttribute('src'), '?'),
                                //     1200,
                                //     600
                                // );
                                // $property['img_600x600'] = $this->getHomeImage(
                                //     $property['id'],
                                //     strtok($dom->getElementsByTagName('img')->item(0)->getAttribute('src'), '?'),
                                //     600,
                                //     600
                                // );
                                // $property['img_600x1200'] = $this->getHomeImage(
                                //     $property['id'],
                                //     strtok($dom->getElementsByTagName('img')->item(0)->getAttribute('src'), '?'),
                                //     600,
                                //     1200
                                // );
                            }
                            break;

                        case 25: // images
                            if(!empty($attributeData))
                            {
                                $dom = new \DOMDocument();
                                $dom->loadHTML(str_ireplace('&', '&amp;', $attributeData));
                                $dom->preserveWhiteSpace = false;
                                $property['imagelist'] = $dom->getElementsByTagName('img');

                            }
                            break;

                    }

                    unset($attributeData);

                    $i++;
                }

                if(!GB_PropertySync::where('id', $property['id'])->exists())
                {

                    $GB_Property = new GB_PropertySync($property);
                    $GB_Property->id = $property['id'];

                    switch (strtolower($GB_Property->price_qualifier))
                    {
                        case 'pcm': $GB_Property->price = ($GB_Property->price * 12)/52;

                    }

                    if(!empty($property['imagelist']))
                        $GB_Property->convertImagelistDomNodeToArray($property['imagelist']);
                    try{
                        $GB_Property->save();
                    }
                    catch(\Exception $e)
                    {
                        dd($e,$property);
                    }
                }
                $properties[] = $property;
            }
        }
        return $properties;
    }
    private function send1090Post($fields,$target) {
        $v2systemserver = "guardsrealestate.10ninety.co.uk/";

        $fields_string = "";

        // url-ify the data for the POST

        foreach($fields as $key=>$value) {
            if($key == 'stateValues' && strpos($value,',') !== false) {
                $stateValuesArr = explode(",", $value);
                foreach($stateValuesArr as $strval) {
                    $fields_string .= $key. "=" . $strval . "&";
                }
            } else {
                $fields_string .= $key. "=" . $value . "&";
            }
        }
        $fields_string = rtrim($fields_string);
        $fields_string = rtrim($fields_string,'&');

        // $fields_string = http_build_query($fields, '', '&');

        $post_url = "https://" . $v2systemserver . $target;

        $fields_string = str_replace('&#038;','&',$fields_string);

        // open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL,$post_url);
        curl_setopt($ch,CURLOPT_POST,count($fields));
        curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_BINARYTRANSFER,false);
        curl_setopt($ch,CURLOPT_TRANSFERTEXT,false);
        // dont bother doing proper SSL, it involves storing certificate stuff
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded","Content-length: ".strlen($fields_string)));

        // execute post
        $postResult = curl_exec($ch);
        if(!empty($fields['id']))
            dd($post_url,$fields,$postResult);
        // for debug...

        /*

        if(!curl_errno($ch)){
            $info = curl_getinfo($ch);
            echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];
        } else {
            echo 'Curl error: ' . curl_error($ch);
        }

        */

        //$content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        //echo('<!-- ' . $content_type . ' -->' . "\n");
        // close connection

        curl_close($ch);
        return $postResult;

    }

    /**
     * @param $property_id
     * @param $imgpath
     * @param $width
     * @param $height
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
     */
    private function getHomeImage($property_id, $imgpath, $width,$height)
    {
        if(!Storage::exists('static'))
        {
            Storage::makeDirectory('static', $mode = 0777, true, true);
        }
        if(!Storage::exists('static/property'))
        {
            Storage::makeDirectory('static/property', $mode = 0777, true, true);
        }
        if(!Storage::exists('static/property/'.$property_id))
        {
            Storage::makeDirectory('static/property/'.$property_id, $mode = 0777, true, true);
            Storage::makeDirectory('static/property/'.$property_id.'/cache', $mode = 0777, true, true);
        }
        $imagepathname = '/static/property/'.$property_id.'/cache/icon_'.$width.'x'.$height.'jpg';
        $whiteBorderPixels = 40;
        //todo check if exists in cache
        //todo check if exists in storage

        if(!Storage::exists($imagepathname))
        {
            $url_param = '?width='.($width-$whiteBorderPixels).'&height='.($height-$whiteBorderPixels).'&cropToFill=true';
            $img = Image::make($imgpath.$url_param);
            $img->resizeCanvas($width, $height, 'center', false, 'ffffff');
            // $img->save(public_path($imagepathname));
            $imgToSave = $img->stream()->detach();
            Storage::disk('public')->put($imagepathname, $imgToSave);
            
        }

        return ($imagepathname);

    }
    private function getPropertyImage($property_id, $imgpath, $width,$height)
    {
        if(!Storage::exists('static'))
        {
            Storage::makeDirectory('static', $mode = 0777, true, true);
        }
        if(!Storage::exists('static/property'))
        {
            Storage::makeDirectory('static/property', $mode = 0777, true, true);
        }
        if(!Storage::exists('static/property/'.$property_id))
        {
            Storage::makeDirectory('static/property/'.$property_id, $mode = 0777, true, true);
            Storage::makeDirectory('static/property/'.$property_id.'/cache', $mode = 0777, true, true);
        }
        $imagepathname = '/static/property/'.$property_id.'/cache/listingIcon_'.$width.'x'.$height.'jpg';
        //todo check if exists in cache
        //todo check if exists in storage
        if(!Storage::exists($imagepathname))
        {
            $url_param = '?width='.($width).'&height='.($height).'&cropToFill=true';
            $img = Image::make($imgpath.$url_param);
            $img->resizeCanvas($width, $height, 'center', false, 'ffffff');
            $imgToSave = $img->stream()->detach();
            Storage::disk('public')->put($imagepathname, $imgToSave);
            // $img->save(public_path($imagepathname));
        }
        
        return ($imagepathname);

    }
}
