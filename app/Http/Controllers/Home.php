<?php

namespace App\Http\Controllers;

use App\Models\Properties\GB_PropertySync;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Http;

class Home extends Controller
{
    public function index(Request $request)
    {
        $saleproperties = GB_PropertySync::where('propind','S')->orderBy('id','DESC')->limit(3)->get();
        $lettingsproperties = GB_PropertySync::where('propind','L')->orderBy('id','DESC')->limit(3)->get();
//        dd($this->getSearchFilterOptionsForView());
        return view('pages.home',['filterOptions' => $this->getSearchFilterOptionsForView() ,'saleproperties' => $saleproperties,'lettingsproperties' =>$lettingsproperties]);
    }

    public function repairMaintenance() {       
        return view('pages.repair', ['filterOptions' => $this->getSearchFilterOptionsForView()]);
    }  

    public function getRepairData() {
        $api_url = "https://gowlandwhite.fixflo.com/Issue/GetCategory?categoryId=2&SkipCache=false";
        $response = file_get_contents($api_url);
        $data = json_decode($response);
    
        return response()->json($data);
    }
    
    public function getSubCategory(Request $request) {
        $category = $request->input('cat');
        $api_url = "https://gowlandwhite.fixflo.com/Issue/GetCategory?categoryId=".$category."&SkipCache=false";
        $response = file_get_contents($api_url);
        $data = json_decode($response);
    
        return response()->json($data);
    }

    public function sendRepairIssue(Request $request) {
        // dd($request->all());
        return view('pages.create-issue-success', ['filterOptions' => $this->getSearchFilterOptionsForView()]);
    }

    // valution tool functions
    public function getvaluationTool() {
        return view('pages.valuation-tool', ['filterOptions' => $this->getSearchFilterOptionsForView()]);
    }
    public function getvaluationAddress(Request $request) {
        $address = $request->input('address');
        $api_url = "https://www.foxtons.co.uk/api/v0/address/search/list?postcode=".$address."&SkipCache=false";
        $response = file_get_contents($api_url);
        $data = json_decode($response);
    
        return response()->json($data);
    }

    public function postcodeLookup(Request $request) {
        $post_code = $request->input('post_code');
        $api_url = "https://www.foxtons.co.uk/api/v0/address/search/lookup/".rawurlencode($post_code);
        $response = file_get_contents($api_url);
        $data = json_decode($response);
    
        return response()->json($data);

    }

    public function calculateValuation(Request $request) {
        $form_data = $request->all();       
        $form_data = json_encode($form_data);
        $api_url = "https://www.foxtons.co.uk/api/v1/valuation";
        // return response()->json($data);

        $curl = curl_init($api_url);
        curl_setopt($curl, CURLOPT_URL, $api_url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
        "Authorization: Bearer mt0dgHmLJMVQhvjpNXDyA83vA_PxH23Y",
        "Content-Type: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = <<<DATA
        $form_data
        DATA;

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($curl);
        curl_close($curl);
        $resp = json_decode($response);
    
        return response()->json($resp);
    }

    public function country() {       
        return view('pages.country', ['filterOptions' => $this->getSearchFilterOptionsForView()]);
    }  

    public function london() {       
        return view('pages.london', ['filterOptions' => $this->getSearchFilterOptionsForView()]);
    }  
}
