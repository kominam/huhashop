<?php

namespace App\Http\Controllers;

use App\Mail\PlaceOrderMail;
use App\Mail\NewOrder;
use App\Order;
use App\Product;
use App\ShippingInfo;
use AUth;
use Cart;
use Illuminate\Http\Request;
use Mail;

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
        $order->total   = $order->total + (($order->total / 100) * 100);
        $order->is_paid = 1;
        $order->user()->associate($customer);
        $order->save();
        foreach ($items as $item) {
            $order->products()->attach([$item->id => ['quantity' => $item->qty]]);
            $product             = Product::find($item->id);
            $sale_count          = $product->sale_count + $item->qty;
            $product->sale_count = $sale_count;
            $product->save();
            $stock      = $product->stock;
            $stock_qty  = $stock->qty - $item->qty;
            $stock->qty = $stock_qty;
            $stock->save();
        }
        $order->save();
        //store shipping info
        $shipping_info = ShippingInfo::create([
            'name'      => $request->name,
            'address'   => $request->address,
            'telephone' => $request->telephone,
            'order_id'  => $order->id,
        ]);
        //Send Mail To Customer
        Mail::to($customer->email)->send(new PlaceOrderMail($order));
        //Send mail to Huhashop
        Mail::to(config('myEmail.email'))->send(new NewOrder($order));
        //Send data to Stripe dashboard
        $customer->newSubscription('main', 'normal')->create($request->stripeToken);
        $customer->invoiceFor($order->id, $order->total, [
            'currency' => 'vnd',
        ]);

        Cart::destroy();

        return redirect()->route('order-history')->with('StatusCheckOut', 'success');

    }
}
