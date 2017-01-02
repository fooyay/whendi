<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBusiness extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return ($this->business->owner == $this->user());
    }

    /**
     * Set the flash and redirect if unauthorized.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Symfony\Component\HttpFoundation\Response
     */
    public function forbiddenResponse()
    {
        flash('Only the business owner may edit the business profile information.', 'flash-alert');
        return back();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $ignoreThisRow = $this->business->id;

        // The slug needs to be unique as well.
        return [
            'name' => 'required|unique:businesses,name,' . $ignoreThisRow,
            'slug' => 'required|unique:businesses,slug,' . $ignoreThisRow,
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
