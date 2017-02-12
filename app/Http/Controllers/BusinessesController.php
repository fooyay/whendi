<?php

namespace App\Http\Controllers;

use App\Business;
use App\Http\Requests\StoreBusiness;
use App\Http\Requests\UpdateBusiness;
use App\Http\Requests\EditBusiness;
use Illuminate\Http\Request;


/**
 * Class BusinessesController
 * @package App\Http\Controllers
 */
class BusinessesController extends Controller
{
    /**
     * Shows a list of all of the businesses.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $businesses = Business::all();

        return view('businesses.index', compact('businesses'));
    }

    /**
     * Show form for creating (registering) a new business.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('businesses.create');
    }

    /**
     * Save a new business record in the database.
     *
     * @param StoreBusiness $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreBusiness $request)
    {
        $business = new Business;
        $business->name = $request->name;
        $business->slug = $request->slug;
        $business->zip_code = $request->zip_code;
        $business->owner_id = $request->user()->id;
        $business->active = true;
        $business->save();

        flash('Business registered.');
        return redirect("/directory/" . $request->slug);
    }

    /**
     * Display the details of a business, with its lessons.
     *
     * @param Business $business
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Business $business, Request $request)
    {
        $isOwner  = ($business->owner == $request->user());
        return view('businesses.show', compact(['business', 'isOwner']));
    }

    /**
     * Present the form to edit a business. Must be the business owner.
     *
     * Logic exists in the EditBusiness form request, do not remove
     * from the argument list.
     *
     * @param EditBusiness $request
     * @param Business $business
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(EditBusiness $request, Business $business)
    {
        return view('businesses.edit', compact('business'));
    }

    /**
     * Update the record. Must be the business owner.
     *
     * @param UpdateBusiness $request
     * @param Business $business
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(UpdateBusiness $request, Business $business)
    {
        $business->name = $request->name;
        $business->slug = $request->slug;
        $business->zip_code = $request->zip_code;
        $business->owner_id = $request->user()->id;
        $business->active = true;
        $business->update();

        flash('Business profile updated.');
        return redirect("/directory/" . $request->slug);
    }
}
