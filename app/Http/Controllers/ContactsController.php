<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentFromContact;
use Mail;

class ContactsController extends Controller
{
    public function requestInformation(CommentFromContact $request)
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
