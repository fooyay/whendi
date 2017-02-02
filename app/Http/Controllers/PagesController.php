<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        $quotes = [
            ["This is so much better than post-its on a board that no one can see.",
                "Jane Doe, Instructor, Yanni's Yoga"],
            ["Now I can see who's coming - using my phone!",
                "Holli Hunter, Owner, Horses with Holli"],
            ["Now maybe you can make time to feed me.",
                "Paxil, Supervisor, When Can You Do It"],
        ];
        $pricing_schedules = [
            [
                "heading" => "Sole Proprietor",
                "users" => "1",
                "slots" => "20",
                "option" => "&nbsp;",
                "amount" => "$20",
                "period" => "per month",
            ],
            [
                "heading" => "Small Business",
                "users" => "2-10",
                "slots" => "200",
                "option" => "&nbsp;",
                "amount" => "$40",
                "period" => "per month",
            ],
            [
                "heading" => "Enterprise",
                "users" => "11+",
                "slots" => "unlimited",
                "option" => "private label option",
                "amount" => "Contact Us",
                "period" => "for pricing",
            ],
        ];
        return view('pages.home', compact(['quotes', 'pricing_schedules']));
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
