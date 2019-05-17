<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name' => 'required|min:5|max:30',
            'password' => 'required|min:8',
            'email' => 'required|unique:users',
            'phone' => 'required|min:10|numeric',
            'address' => 'required|min:4'
        ];
    }

    public function messages()
    {
        return  [
            'name.required' => 'We need to know your full name!',
            'name.min' => 'Name size must be between 2 and 30!',
            'name.max' => 'Name size must be between 2 and 30!',
            'password.required' => 'Password is required',
            'password.min' => 'Password at least eight characters',
            'email.required' => 'Email is required',
            'email.unique' => 'Email already exists',
            'phone.required' => 'Phone is required',
            'phone.min' => 'Phone at least ten number',
            'phone.numeric' => 'Email already exists',
            'address.required' => 'Address is required',
            'address.min' => 'Address at four eight characters'
        ];

    }
}
