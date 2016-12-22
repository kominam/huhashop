<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index() 
    {
    	return view('frontend.pages.index');
    }

    public function contact()
    {
    	return view('frontend.pages.contact');
    }

    public function about()
    {
    	return view('frontend.pages.about');
    }

    public function shipping()
    {
    	return view('frontend.pages.shipping');
    }

    public function all()
    {
    	return view('frontend.pages.all_product');
    }
    public function term()
    {
        return view('frontend.pages.terms');
    }
}
