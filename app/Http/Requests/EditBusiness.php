<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditBusiness extends FormRequest
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
        return [
            //
        ];
    }
}
