<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Category;

class SearchController extends Controller
{
    public function index() {
      $products = DB::table('products')->select('name')->get();
      $product_list = array();
      foreach ($products as $item) {
         array_push($product_list, $item->name);
      }
      $categories = DB::table('categories')->select('name')->get();
      $category_list = array();
      foreach ($categories as $item) {
         array_push($category_list, $item->name);
      }
      $all = array(
        "all"   => array(
            "product"   => $product_list,
            "category" => $category_list,
        )
      );
      return response()->json([
         "status" => true,
          "error"  => null,
          "data" => $all
         ]);
	}

   public function showResult($type, $name) {
      if ($type=="Product") {
         $product = Product:: where('name','LIKE', $name)->first();
       return redirect()->route("product.show", ['slugCategory'=> $product->category->slug, 'slugProduct'=>$product->slug]);
      }
      else if ($type=="Category") {
         $category = Category:: where('name','LIKE', $name)->first();
         return redirect()->route('category.show',$category->slug);
      }       
   }

   public function filter(Request $request) {
    $category = $request->category;
    $price = $request->price;
    if ($category && $price) {
       $results = Product::where('category_id', $category)->where('price', '<=', $price)->get();
     }
    return response()->json($results);
   }
}
