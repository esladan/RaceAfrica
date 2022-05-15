<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMembershipRequest extends FormRequest
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
            
            'sur_name' => 'required',
            'other_names' => 'required',
            'email' => ['required','email','unique:memberships'],
            'phone' => 'required',
            'cr' => 'required',
            'csr' => 'required',
            'uni' => 'required',
            'wi' => 'required',
            'how' => 'required',
            'howt' => 'required',
            'do' => 'required',
            'ex' => 'required',
            'please' => 'required',
            'gender' => 'required'
            


        ];
    }
}
