<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;

use Auth;

use App\Http\Controllers\Controller;

class LogOutController extends Controller
{
    public function logout() {
    	Auth::guard('admins')->logout();
    	return redirect('/admin/login');
    }
}
