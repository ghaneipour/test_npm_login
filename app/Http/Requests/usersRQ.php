<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usersRQ extends FormRequest
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
             'name'=>'required',
             'email'=>'required',
             'password'=>'required',
             'user_lss'=>'required',
              
        ];
    }
    
    public function Attributes()
    {
        return [
            'name'=>'نام  ',
            'email'=>'آدرس ایمیل',
            'password'=>'رمز ',
            'user_lss'=>' سطح دسترسی',
       ];
    }
}
