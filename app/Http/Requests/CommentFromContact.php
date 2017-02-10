<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentFromContact extends FormRequest
{
    /**
     * Set the URL to redirect to on validation error.
     *
     * @var string
     */
    protected $redirect = "/#contact";

    /**
     * Determine if the user is authorized to make this request.
     * Everyone is authorzied to send a comment.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'comments' => 'required',
        ];
    }
}
