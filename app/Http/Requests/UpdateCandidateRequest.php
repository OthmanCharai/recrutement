<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCandidateRequest extends FormRequest
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
            'first_name'=>"required",
            'last_name'=>'required',
            'city'=>'required',
            'image'=>'required',
            "type" => "required",
            "phone" => "required",
            "experience" => "required",
            "birthday" => "required",
            "education_levels" => "required",
            "description" => "required",
            "country" => "required",
            'birthday'=>'required',
            'driver_licence'=>'required', 

        ];
    }
}
