<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Mail\FeeEnquiry;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cookie;

class About extends Controller
{
    public function index(Request $request)
    {
        return view('pages.about',['filterOptions' => $this->getSearchFilterOptionsForView()]);
    }

    public function fees(Request $request)
    {
        // \Cookie::queue(\Cookie::forget('asked-for-fees')); 

        return view('pages.fees',['filterOptions' => $this->getSearchFilterOptionsForView()]);
    }

    public function certificate(Request $request)
    {
        return view('pages.certificates',['filterOptions' => $this->getSearchFilterOptionsForView()]);
    }

    public function SubmitEnquiry(Request $request)
    {
        $request->validate([
            'name'  => 'required|string',
            'email'  => 'required|email',
            'phone'  => 'required',
        ]);

        Mail::to('brkapoor11@gmail.com')->send(new FeeEnquiry($request->only(['name','email','phone','message'])));
        Cookie::queue('asked-for-fees', 'asked', 60 * 60 * 24);
        return back()->with("status", "Your message has been received, We'll get back to you shortly.");
    }
}
