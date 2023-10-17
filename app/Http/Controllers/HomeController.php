<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;


class HomeController extends Controller
{
    public function contact(Request $request)
    {
        return view('contact');
    }
    public function contact_mail_send(Request $request)
    {

        Mail::to('talbi.hana83@gmail.com')->send(new ContactMail($request));
        return ('contact');
    }
}
