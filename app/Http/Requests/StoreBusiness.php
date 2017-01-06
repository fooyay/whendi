<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBusiness extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // must be a logged-in user
        return !empty($this->user());
    }

    /**
     * Set the flash and redirect if unauthorized.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Symfony\Component\HttpFoundation\Response
     */
    public function forbiddenResponse()
    {
        flash('You must be a registered user to proceed. Please login or register.', 'flash-alert');
        return redirect("/");
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // The slug needs to be unique as well. Adding this to the request.
        return [
            'name' => 'required|unique:businesses',
            'slug' => 'required|unique:businesses',
            'zip_code' => 'required|regex:/\b\d{5}\b/',
        ];
    }

    /**
     * Need to overwrite all() to add 'slug' to the request.
     *
     * @return array
     */
    public function all()
    {
        $attributes = parent::all();
        $attributes['name'] = trim($attributes['name']);
        $attributes['slug'] = str_slug($attributes['name']);
        return $attributes;
    }

    /**
     * Need to override messages() so that both unique name and unique slug return the same message.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'unique' => "That name is already taken.",
        ];
    }
}
