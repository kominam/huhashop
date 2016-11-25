<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    public function show($slugCategory) 
    {
    	$category = Category::findBySlugOrFail($slugCategory);
    	return view('frontend.pages.category', ['category'=>$category]);
    }
}
