<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home.home');
    }
    public function contact()
    {
        return view('frontend.pages.home.contact');
    }

    public function contactform(Request $request)
    {
        $data = $request->all();
        Mail::send(new ContactForm($data));
    }

    public function food()
    {
        return view('frontend.pages.home.food_and_beverage.food_and_beverage');
    }

}
