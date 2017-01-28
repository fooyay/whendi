<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
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
