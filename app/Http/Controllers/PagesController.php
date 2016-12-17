<?php

namespace App\Http\Controllers;

#use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $hour = date("H");
        $dayMode = $hour > 5 && $hour < 18;
        $lessonTypes = ['horse riding', 'piano', 'yoga'];
        return view('pages.welcome', compact('dayMode', 'lessonTypes'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function features()
    {
        return view('pages.features');
    }

    public function admin()
    {
        return view('pages.admin');
    }
}
