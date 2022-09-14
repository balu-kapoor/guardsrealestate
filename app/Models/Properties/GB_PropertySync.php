<?php

namespace App\Models\Properties;

use DOMNodeList;
use Illuminate\Database\Eloquent\Model;

/***
 * Class GB_Property
 *
 * @package App\Models\Properties
 * @property integer id
 * @property \DateTime created_at
 * @property \DateTime updated_at
 * @property string status
 * @property string title
 * @property string type
 * @property string propind
 * @property string price_display
 * @property float price
 * @property integer beds
 * @property integer bathrooms
 * @property integer receptions
 * @property string bedswithtype
 * @property string summary
 * @property string website_url
 * @property string area
 * @property string amenities
 * @property string reference
 * @property string floorplan
 * @property string epc
 * @property string img_listingIcon
 * @property string img_1200x600
 * @property string img_600x600
 * @property string img_600x1200
 * @property array imagelist
 * @property string rawdata
 * @property string disclaimer_text
 * @property string full_address
 * @property string city
 * @property string postcode
 * @property float latitude
 * @property float longitude
 * @property string virtual_tour_link
 */
class GB_PropertySync extends Model
{
    protected $table = "GB_PropertySync";
    protected $guarded = ['id','imagelist','raw'];
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected $casts = [
        'imagelist'    => 'array',
        'amenities'    => 'array',
    ];
    
    function convertAmenitiesDomNodeToArray(DOMNodeList $amenitiesDomNodeList)
    {
        if(empty($this->amenities))
            $this->amenities = [];
        $ammenities = [];
        for($i=0; $i < $amenitiesDomNodeList->count(); $i++)
        {
            $ammenities[] =$amenitiesDomNodeList->item($i)->nodeValue;
        }
        
        $this->amenities = array_merge($this->amenities,$ammenities);
    
    }
    function convertImagelistDomNodeToArray(DOMNodeList $imagesDomNodeList)
    {
        if(empty($this->imagelist))
            $this->imagelist = [];
        $imageList = [];
        for($i=0; $i < $imagesDomNodeList->count(); $i++)
        {
            $imageList[] =strtok(
                $imagesDomNodeList->item($i)->getAttribute('src'),
                '?'
            );
        }
        
        $this->imagelist = array_merge($this->imagelist,$imageList);
    
    }
}
