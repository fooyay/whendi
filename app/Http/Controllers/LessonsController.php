<?php

namespace App\Http\Controllers;

use App\Business;
use App\Lesson;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class LessonsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
           'name' => [
               'required',
                Rule::unique('lessons')->where(function ($query) use ($request) {
                    $query->where('business_id', $request->businessId);
                }),
           ],
           'capacity' => 'required|numeric|min:1',
        ]);

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
        $businessId = $lesson->business_id;
        $this->validate($request, [
            'name' => [
                'required',
                Rule::unique('lessons')->where(function ($query) use ($businessId) {
                    $query->where('business_id', $businessId);
                }),
            ],
            'capacity' => 'required|numeric|min:1',
        ]);

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
