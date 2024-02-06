<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function enviarcorreo()
    {
        // return view('send_email');
        return view('index');
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'email'      =>  $request->email,
            'tel'      =>  $request->tel,
            'date'      =>  $request->date,
            'message'   =>   $request->message
        );

        Mail::to('info@cancuntravelexperience.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
}
