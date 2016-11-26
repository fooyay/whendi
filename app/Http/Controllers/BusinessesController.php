<?php

namespace App\Http\Controllers;

use App\Business;
use Illuminate\Http\Request;

class BusinessesController extends Controller
{
    public function index()
    {
        $businesses = Business::all();

        return view('businesses.index', compact('businesses'));
    }

    public function show($slug)
    {
        $business = Business::where('slug', $slug)->firstOrFail();
        return view('businesses.show', compact('business'));
    }
}
