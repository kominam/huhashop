<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;
use App\Mail\ContactMail;
use Validator;

class ContactController extends Controller
{
    public function sendContact(Request $request)
    {
    	 $messages = [
               'name.required'=>'Choose category for this post',
               'email.required'=>'Enter the tittle for this post',
               'subject.unique'=>'This tittle is already existing',
               'message.required'=>'Enter the content for this post',
               'captcha.required' => 'Enter the captcha',
               'captcha.captcha' =>'Captcha not correct',
        ];
        $validator = Validator:: make($request->all(),[
              'name' => 'required',
              'email'=>'required|email',
              'subject'=>'required',
              'message'=>'required',
              'captcha' => 'required|captcha'
        ], $messages);
        $myEmail = 'huhashop@gmail.com';
        if ($validator->fails()) {
        	return back()->withErrors($validator)->withInput()->with('statusSendContact','error');
        } else {
        	Mail::to($myEmail)->send(new ContactMail($request));
        	return back()->with('statusSendContact','success');
        }
       
    }
}
