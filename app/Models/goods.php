<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class goods extends Model
{
    use HasFactory;
    protected $table = 'goods';
    protected $fillable = ['goods_name', 'goods_url', 'goods_icon', 'goods_parentid', 'remember_token','id','goods_price','goods_discount','goods_quanty'];
    public static function getCatListgood()
    {
        $array = array();
        $array[0]="دسته اصلی";
        $cat = self::with('getchild')->where('goods_parentid', 0)->get();
        foreach ($cat as $key => $value) {
            $array[$value->id] = $value->goods_name;
            foreach($value->getchild as $key2=>$value2 ){
                $array[$value2->id] ='< ' . $value2->goods_name.' >';
            }
        }
        return $array;
    }
    public static function getgoods()
    {
             return  goods::query()->get();       
         
    }
    public static function getgoodsid($id)
    {
             return  goods::query()->where('id',$id)->first();       
         
    }

    public function getchild()
    {
        return $this->hasMany(goods::class,'goods_parentid','id');
    }

}
