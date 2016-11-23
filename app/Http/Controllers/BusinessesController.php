<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessesController extends Controller
{
    public function index()
    {
        $businesses = \DB::table('businesses')->get();

        return view('businesses.index', compact('businesses'));
    }
}
