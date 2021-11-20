<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class goodsRQ extends FormRequest
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
             'goods_name'=>'required',
             'goods_url'=>'required',
             'goods_ico'=>'image',
             'goods_price' => 'required',
             'goods_discount' => 'required',
             'goods_quanty' => 'required',
        ];
    }

    public function Attributes()
    {
        return [
            'goods_name'=>'نام محصول',
            'goods_url'=>'آدرس محصول',
            'goods_ico'=>'آیکون محصول',
            'goods_price' => 'قیمت محصول',
            'goods_discount' => 'تخفیف',
            'goods_quanty' => 'تعداد موجود انبار',
      ];
    }
}
