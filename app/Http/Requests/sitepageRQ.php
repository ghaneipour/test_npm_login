<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sitepageRQ extends FormRequest
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
             'sitepage_title'=>'required',
             'sitepage_url'=>'required',
             'sitepage_str1'=>'image',
             'sitepage_str2' => 'required',
             'sitepage_seo' => 'required', 
        ];
    }

    public function Attributes()
    {
        return [
            'sitepage_title'=>'عنوان صفحه',
            'sitepage_url'=>'آدرس صفحه',
            'sitepage_str1'=>'متن اول',
            'sitepage_str2' => 'متن دوم',
            'sitepage_seo' => 'سئو', 
      ];
    }
}
