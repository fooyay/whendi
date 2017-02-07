<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactsController extends Controller
{
    public function requestInformation(Request $request)
    {
        // construct email message
        // leave as-is for now

        // send it
        Mail::raw($request->comments, function($message) use($request)
        {
            $message->from($request->email, $request->name);
            $message->subject('User comment from Whendi home page');
            $message->to(env('MAIL_SUPPORT'));
        });

        // tell user thanks
        return view("pages.thankyou");
    }
}
