<?php

namespace App\Http\Controllers;

use App\Business;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $owner = $request->user();
        if(empty($owner))
        {
            flash('You must be a registered user to proceed. Please login or register.', 'flash-alert');
            return redirect("/");
        }

        // The slug needs to be unique as well. Adding this to the request.
        $request->merge(array('slug' => str_slug($request->name)));
        $customErrorMessages = [
            'unique' => "That name is already taken.",
        ];
        $this->validate($request, [
            'name' => 'required|unique:businesses',
            'slug' => 'required|unique:businesses',
            'zip_code' => 'required|regex:/\b\d{5}\b/',
        ], $customErrorMessages);

        $business = new Business;
        $business->name = $request->name;
        $business->slug = $request->slug;
        $business->zip_code = $request->zip_code;
        $business->owner_id = $request->user()->id;
        $business->active = true;
        $business->save();

        flash('Business registered.');
        return redirect("/businesses/" . $request->slug);
    }

    /**
     * Display the details of a business, with its lessons.
     *
     * @param Business $business
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Business $business)
    {
        return view('businesses.show', compact('business'));
    }
}
