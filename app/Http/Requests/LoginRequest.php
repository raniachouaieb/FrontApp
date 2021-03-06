<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i',
            'password'=>'required|min:8',


        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Please,Enter a valid address email',
            'email.regex' => 'Please,Enter a valid address email',

            'email.required' => 'email cannot be empty.',
            'password.required' => 'pass cannot be empty.',
            'password.min'=> 'password should be at least 8 character'
        ];
    }
}
