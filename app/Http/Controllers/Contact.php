<?php

namespace App\Http\Controllers;

use App\Mail\BookValuation;
use App\Mail\BookViewing;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class Contact extends Controller
{
    public function index(Request $request)
    {
        return view('pages.contact',['filterOptions' => $this->getSearchFilterOptionsForView()]);
    }
    
    public function getInTouch(Request $request)
    {
        $request->validate([
            'name'  => 'required|string',
            'email'  => 'required|email',
            'phone'  => 'required',
                           ]);
    
        Mail::to("info@guardsrealestate.com")->send(new ContactUs($request->only(['name','email','phone','subject','message'])));
        return back()->with("status", "Your message has been received, We'll get back to you shortly.");
    }
    
    public function bookViewing(Request $request)
    {
        $request->validate([
            'name'  => 'required|string',
            'email'  => 'required|email',
            'phone'  => 'required',
            'bookingdate'  => 'required',
            'property'  => 'required',
                           ]);
    
        Mail::to(env('ADMIN_MAIL'))->send(new BookViewing($request->only(
            ['name','email','phone','bookingdate','property','message']
        )));
        return response()->json("Your message has been received, We'll get back to you shortly.");
    }
    public function bookValuation(Request $request)
    {
        $request->validate([
            'name'  => 'required|string',
            'email'  => 'required|email',
            'phone'  => 'required',
            'postcode'  => 'required',
            'bedrooms'  => 'required'
                           ]);
    
        Mail::to(env('ADMIN_MAIL'))->send(new BookValuation($request->only(
            ['name','email','phone','bookingdate','property','message']
        )));
        return response()->json("Your message has been received, We'll get back to you shortly.");
    }
}
