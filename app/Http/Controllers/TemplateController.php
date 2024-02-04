<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TemplateController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }


    public function services()
    {
        return view('frontend.services');
    }

    public function customer()
    {
        return view('frontend.customer');
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }


    public function terms()
    {
        return view('frontend.terms');
    }

    public function inquiry()
    {
        return view('frontend.inquiry');
    }


   
    
}
