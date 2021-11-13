<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoryRQ extends FormRequest
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
             'category_name'=>'required',
             'category_ico'=>'image'
        ];
    }

    public function Attributes()
    {
        return [
            'category_name'=>'نام دسته',
            'category_ico'=>'آیکون دسته',
       ];
    }
}
