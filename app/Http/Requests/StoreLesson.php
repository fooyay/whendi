<?php

namespace App\Http\Requests;

use App\Business;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StoreLesson extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $business = Business::find($this->business_id);
        return (!empty($business) and ($business->owner == $this->user()));
    }

    /**
     * Set the flash and redirect if unauthorized.
     *
     * @return \Illuminate\Http\RedirectResponse
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
            'name' => [
                'required',
                Rule::unique('lessons')->where(function ($query)  {
                    $query->where('business_id', $this->business_id);
                }),
            ],
            'capacity' => 'required|numeric|min:1',
        ];
    }
}
