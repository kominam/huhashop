<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use AUth;
use Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showHistory()
    {
        $orders = Auth::user()->orders;
        return view('frontend.pages.order_history', ['orders' => $orders]);
    }

    public function checkout(Request $request)
    {
        $customer = Auth::user();
        //create order
        $items          = Cart::content();
        $order          = new Order;
        $order->total   = Cart::subtotal(0, '', '');
        $order->is_paid = 1;
        $order->user()->associate($customer);
        $order->save();
        foreach ($items as $item) {
            $order->products()->attach([$item->id => ['quantity' => $item->qty]]);
            $product              = Product::find($item->id);
            $sale_count           = $product->sale_count + $item->qty;
            $product->sale_count = $sale_count;
            $product->save();
            $stock      = $product->stock;
            $stock_qty = $stock->qty - $item->qty;
            $stock->qty = $stock_qty;
            $stock->save();
        }
        $order->save();
        $total = $order->total + (($order->total / 100) * 100);
        $customer->newSubscription('main', 'normal')->create($request->stripeToken);
        $customer->invoiceFor($order->id, $total, [
            'currency' => 'vnd',
        ]);

        Cart::destroy();

        return redirect()->route('order-history')->with('StatusCheckOut', 'success');

    }
}
