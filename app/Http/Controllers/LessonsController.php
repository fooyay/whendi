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

        $business = Business::findOrFail($request->businessId);
        $business->lessons()->save($lesson);

        return back();
    }

    public function edit(Lesson $lesson)
    {
        return view('lessons.edit', compact('lesson'));
    }

    public function update(Request $request, Lesson $lesson)
    {
        $lesson->name = $request->name;
        $lesson->capacity = $request->capacity;
        $lesson->update();

        return back();
    }

    public function destroy(Lesson $lesson)
    {
        $slug = $lesson->business->slug;
        $lesson->delete();

        return redirect("/businesses/$slug");
    }

}
