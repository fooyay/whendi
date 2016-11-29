<?php

namespace App\Http\Controllers;

use App\Business;
use App\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function store()
    {
        $request = request();

        $lesson = new Lesson;
        $lesson->name = $request->name;
        $lesson->capacity = $request->capacity;

        $business = Business::find($request->businessId);
        $business->lessons()->save($lesson);

        return back();
    }
}
