<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'name' => 
                [ 
                    'required',
                    'min:5'
                ],
            'username' => 
                [
                    'required',
                    'unique:users,username',
                    'min:5'
                ],
            'email' => 
                [
                    'required',
                    'email',
                    'unique:users,email'
                ],
            'gender' => 
                [
                    'required'
                ], 
            'phone_number' => 
                [
                    'required',
                    'unique:users,phone_number',
                    'numeric'

                ], 
            'password' => 
                [
                    'required',
                    'min:8',
                    'confirmed'
                ]
        ];
    }
}
