<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;

use App\Product;

class CartController extends Controller
{
    public function show() {
    	return view('frontend.pages.cart');
    }
     public function AddToCart(Request $request) {
    	$product= Product:: findOrFail($request->product_id);
    	Cart::add(array(
            'id'=>$product->id,
            'name'=>$product->name,
            'price'=>$product->getCurrentPrice(),
            'qty'=>$request->qty,
            'options' => [
              	'url_image'=>$product->url_image
            ]));

    }

    public function update(Request $request, $rowId) {
    	// Will update the quantity
    	Cart::update($rowId, $request->qty); 
    }
    
    public function deleteItem($rowId) {
        Cart::remove($rowId);
    }
    public function removeAll() {
        Cart::destroy();
    }

    public function search($productId) {
    	$cart = Cart::content();
		return ($cart->search(function ($cartItem, $rowId) use ($productId) {	
		    return $cartItem->id == $productId;
		}));
    }


}
