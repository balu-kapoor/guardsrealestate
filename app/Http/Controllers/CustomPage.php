<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CustomPage extends Controller
{
    public function index(Request $request)
    {
        $pathinfo = trim($request->getPathInfo(),"\/.");
        if(View::exists('.pages.'.$pathinfo))
        {
            return view('.pages.'.$pathinfo,['filterOptions' => $this->getSearchFilterOptionsForView()]);
            
        }
        else
        {
            abort(404);
        }
    }
}
