<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestroyLesson extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return ($this->lesson->business->owner == $this->user());
    }

    /**
     * Set the flash and redirect if unauthorized.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Symfony\Component\HttpFoundation\Response
     */
    public function forbiddenResponse()
    {
        flash('Only the business owner may delete the business\'s lessons.', 'flash-alert');
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
