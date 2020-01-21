<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\AboutMe;


class SendEmailController extends Controller
{
    function index()
    {
        $aboutmes = AboutMe::all()->toArray();

        return view('send_email', compact('aboutmes'));
    //  return view('send_email');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'firstname'     =>  'required',
      'Email'  =>  'required|email',
      'phoneNo' => 'required|numeric',
      'subject' =>  'required'
     ]);

        $data = array(
            'firstname'      =>  $request->firstname,
            'subject'   =>   $request->subject,
            'phoneNo'      =>  $request->phoneNo,
            'Email'   =>   $request->Email

        );

     Mail::to('nandukuv@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}