<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Order;
use AUth;

class OrderController extends Controller
{
    public function showHistory() 
    {
    	$orders = Auth::user()->orders;
    	return view('frontend.pages.order_history', ['orders'=> $orders]);
    }

    public function checkout() {
    	$customer = Auth::user();
        //create order 
        $items = Cart::content();
        $order = new Order;
        $order->total = Cart::subtotal(0,'','');
        $order->is_paid=1;
        $order->user()->associate($customer);
        $order->save();
        foreach ($items as $item) {
            $order->products()->attach([$item->id=>['quantity'=>$item->qty]]);
        }
        $order->save();
        Cart::destroy();
        return redirect()->route('order-history')->with('StatusCheckOut','success');
    	
    }
}
