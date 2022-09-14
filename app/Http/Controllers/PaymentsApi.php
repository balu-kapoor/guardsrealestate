<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PaymentsApi extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod('post'))
        {
            dd($request->all());
        }
        else
        {
            $authcode = base64_encode(SAGE_INTEGRATION_KEY.':'.SAGE_INTEGRATION_PASSWORD);
            $postfields = array(
                'vendorName' => SAGE_VENDOR_NAME
            );
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://pi-live.sagepay.com/api/v1/merchant-session-keys",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($postfields),
                CURLOPT_HTTPHEADER => array(
                    "Authorization: Basic ".$authcode,
                    "Content-type: application/json"
                )
            ));
    
            $response = curl_exec($curl);
            $response = json_decode($response, true);
            $err = curl_error($curl);
    
            curl_close($curl);
    
            return view('pages.payments',$response);
        }
        
    }
}
