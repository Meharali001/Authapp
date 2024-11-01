<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        
        return view('front.index'); 

    }

    public function aboutus()
    {
        
        return view('front.aboutus'); 

    }
    public function ContectUs()
    {
        
        return view('front.ContactUs'); 

    }
    public function Services()
    {
        
        return view('front.Services'); 

    }
    public function main()
    {
        
        return view('front.main'); 

    }
    public function Testimonials()
    {
        
        return view('front.Testimonials'); 

    }
}
