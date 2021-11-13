<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = ['category_name', 'category_url', 'category_icon', 'category_parentid', 'remember_token'];
    public static function getCatList()
    {
        $array = array();
        $array[0]="دسته اصلی";
        $cat = self::with('getchild')->where('category_parentid', 0)->get();
        foreach ($cat as $key => $value) {
            $array[$value->id] = $value->category_name;
            foreach($value->getchild as $key2=>$value2 ){
                $array[$value2->id] ='< ' . $value2->category_name.' >';

            }
        }
        return $array;
    }

    public function getchild()
    {
        return $this->hasMany(category::class,'category_parentid','id');
    }
}
