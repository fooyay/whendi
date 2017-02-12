<?php

namespace App\Http\Controllers;

use App\Business;
use App\Lesson;
use App\Http\Requests\StoreLesson;
use App\Http\Requests\EditLesson;
use App\Http\Requests\UpdateLesson;
use App\Http\Requests\DestroyLesson;

class LessonsController extends Controller
{
    public function store(StoreLesson $request)
    {
        $lesson = new Lesson;
        $lesson->name = $request->name;
        $lesson->capacity = $request->capacity;

        $business = Business::find($request->business_id);
        $business->lessons()->save($lesson);
        flash('Lesson added.');

        return back();
    }

    public function edit(EditLesson $request, Lesson $lesson)
    {
        return view('lessons.edit', compact('lesson'));
    }

    public function update(UpdateLesson $request, Lesson $lesson)
    {
        $lesson->name = $request->name;
        $lesson->capacity = $request->capacity;
        $lesson->update();
        flash('Lesson updated.');

        return redirect("/directory/" . $lesson->business->slug);
    }

    public function destroy(DestroyLesson $request, Lesson $lesson)
    {
        $lesson->delete();
        flash('Lesson deleted.', 'flash-alert');

        return redirect("/directory/" . $lesson->business->slug);
    }

}
