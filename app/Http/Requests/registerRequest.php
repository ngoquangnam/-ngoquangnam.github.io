<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'name' =>'required|unique:test,userAdmins',
            'email' =>'required',
            'password' => 'required',
            'Confirm Password' =>'required',

        ];
    }
    public function messages()
    {
        return [

                'name.required' => 'vui long nhap name',
                'email.required' => 'vui long nhap email',
                'password.required' => 'vui long nhap password',
                'Confirm Password.required' => 'vui long nhap cpassword',
        ];
    }
}
