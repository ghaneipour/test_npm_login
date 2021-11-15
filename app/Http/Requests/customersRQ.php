<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class customersRQ extends FormRequest
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
             'customers_name'=>'required',
             'customers_url'=>'required',
             'customers_ico'=>'image'
        ];
    }

    public function Attributes()
    {
        return [
            'customers_name'=>'نام مشتری',
            'customers_url'=>'آدرس مشتری',
            'customers_ico'=>'آیکون مشتری',
       ];
    }
}
