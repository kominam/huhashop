<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    public function show($slugCategory, $slugProduct) {
    	$product = Product::findBySlugOrFail($slugProduct);
    	$related_products = Product::where('id', '!=', $product->id)->where('category_id','=', $product->category->id)->get();
    	return view('frontend.pages.single_product', ['product'=>$product, 'related_products'=> $related_products]);
    }
}
