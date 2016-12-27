<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class CustomerController extends Controller
{
    public function changePassword(Request $request)
    {
    	$customer = Auth::user();
    	if (Hash::check($request->current_password, $customer->password))
    	{
    		 $customer->password = bcrypt($request->password);
        	 $customer->save();
        	 return redirect()->back()->with('statusChangePwd', 'success');
    	}
    	return redirect()->back()->with('statusChangePwd', 'fail');
    }
}
