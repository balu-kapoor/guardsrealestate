<?php

namespace App\Http\Controllers;

use App\Models\Properties\GB_PropertySync;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class Properties extends Controller
{
    public function searchResults(Request $request)
    {


        if (Validator::make($request->all(),
                            [
                                'list'  => Rule::in(['l', 's','L', 'S']),
                            ])->fails()) {
            abort(404);
        }


        $properties = GB_PropertySync::where('propind',$request->input('list','L'));
        $allProperties = null;

        if($request->filled('bedrooms'))
        {
            $properties->where('beds',$request->input('bedrooms'));
        }
        if($request->filled('price_min'))
        {
            $properties->where('price','>=',$request->input('price_min'));
        }
        if($request->filled('price_max'))
        {
            $properties->where('price','<=',$request->input('price_max'));
        }
        if($request->filled('pricerange'))
        {
            $pricerange = explode('|',$request->input('pricerange'));
            if(!empty($pricerange))
            {
                if(isset($pricerange[0])) //min
                    $properties->where('price','>=',$pricerange[0]);
                if(isset($pricerange[1])) //max
                    $properties->where('price','<=',$pricerange[1]);

            }

        }
        if($request->filled('postcode'))
        {
            $properties->where('postcode',$request->input('postcode'));
        }
        if($request->filled('type'))
        {
            $properties->where('type',$request->input('type'));
        }
        if($request->filled('sort'))
        {
            switch (strtolower($request->sort))
            {
                case 'plh': //price low to high
                        $properties->orderBy('price','ASC');
                        break;
                case 'phl': //price high to low
                        $properties->orderBy('price','DESC');
                        break;
                case 'bd': //beds
                        $properties->orderBy('beds','ASC');
                        break;
            }
        }
        $results = $properties->get();
        if($results->count() == 0)
        {
            $allProperties = GB_PropertySync::where('propind',$request->input('list','L'))->get();
        }
        return view('pages.listing',['filterOptions' => $this->getSearchFilterOptionsForView(),'properties' => $results,'allproperties' => $allProperties]);
    }

    public function detailPage($slug, Request $request)
    {
        // dd($slug);
        $property = GB_PropertySync::findOrFail($slug);
        // dd($property);
        return view('pages.property',['filterOptions' => $this->getSearchFilterOptionsForView(), 'property'=>$property]);
    }

    public function detailPage10(Request $request)
    {
        $id = $request->get('Id');
        return redirect('/property/view/'.$id);
    }
}
