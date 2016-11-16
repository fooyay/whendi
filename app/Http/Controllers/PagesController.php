<?php

namespace App\Http\Controllers;

#use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $hour = date("H");
        $day_mode = $hour > 5 && $hour < 18;
        $lesson_types = ['horse riding', 'piano', 'yoga'];
        return view('pages.welcome', compact('day_mode', 'lesson_types'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function features()
    {
        return view('pages.features');
    }
}
