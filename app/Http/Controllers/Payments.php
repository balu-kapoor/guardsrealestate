<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Payments extends Controller
{
    public function index(Request $request)
    {
        return view('pages.payments',['filterOptions' => $this->getSearchFilterOptionsForView()]);
     
    }
    
    public function getCrypt(Request $request)
    {
            $sageParams = array(
                'VendorTxCode'    => 'GRPC-'.date('Ymdhis'),
                'Amount'    => $request->input('Amount'),
                'Currency'    => 'GBP',
                'Description'    => 'Guards Real Estate',
                'CustomerName'    => $request->input('BillingSurname'),
                'CustomerEMail'    => $request->input('email'),
                'BillingSurname'    => $request->input('BillingSurname'),
                'BillingFirstnames'    => $request->input('BillingFirstnames'),
                'BillingAddress1'    => $request->input('BillingAddress1'),
                'BillingAddress2'    => $request->input('BillingAddress2'),
                'BillingCity'    => $request->input('BillingCity'),
                'BillingPostCode'    => $request->input('BillingPostCode'),
                'BillingCountry'    => 'GB',
                'BillingPhone'    => $request->input('BillingPhone'),
                'DeliverySurname'    => $request->input('BillingSurname'),
                'DeliveryFirstnames'    => $request->input('BillingFirstnames'),
                'DeliveryAddress1'    => $request->input('BillingAddress1'),
                'DeliveryAddress2'    => $request->input('BillingAddress2'),
                'DeliveryCity'    => $request->input('BillingCity'),
                'DeliveryPostCode'    => $request->input('BillingPostCode'),
                'DeliveryCountry'    => 'GB',
                'DeliveryPhone'    => $request->input('BillingPhone'),
                'SuccessURL'    => route('website-payments').'?success',
                'FailureURL'    => route('website-payments').'?failure'
            );
//            dd($sageParams,urldecode(http_build_query($sageParams)));
//            return $this->AESEncrypt(http_build_query($sageParams));
            return $this->encryptAes_new(urldecode(http_build_query($sageParams)),SAGE_FORM_INTEGRATION_PASSWORD);
        
    }
    private function encryptAes_new ($string, $key) {
        $key = str_pad($key,16,"\0"); # if supplied key is, or may be, less than 16 bytes
        $crypt = openssl_encrypt($string, 'aes-128-cbc', $key, OPENSSL_RAW_DATA, $key);
        // Perform hex encoding and return.
        return "@" . strtoupper(bin2hex($crypt));
    }
    private function AESEncrypt($plaintext)
    {
        $cipher = "aes-128-cbc";
        if (in_array($cipher, openssl_get_cipher_methods()))
        {
            $tag='';
            $ciphertext = openssl_encrypt($plaintext, $cipher, SAGE_FORM_INTEGRATION_PASSWORD, $options=0, SAGE_FORM_INTEGRATION_PASSWORD, $tag);
//            dd($ciphertext);
            return $ciphertext;
        }
    }
}
