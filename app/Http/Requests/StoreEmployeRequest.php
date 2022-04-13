<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeRequest extends FormRequest
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
            //
            'name'=>'required',
            'email'=>'required',
            'category'=>'required',
            'birthday'=>'required',
            'country'=>'required',
            'city'=>'required',
            'phone'=>'required',
            'description'=>'required',
            'address'=>'required',
            'image'=>'required | mimes:jpg,png,jpeg',

        ];
    }
}
