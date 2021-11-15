<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $fillable = ['customers_name', 'customers_url', 'customers_icon', 'customers_parentid', 'remember_token'];
    public static function getCatList()
    {
        $array = array();
        $array[0]="دسته اصلی";
        $cat = self::with('getchild')->where('customers_parentid', 0)->get();
        foreach ($cat as $key => $value) {
            $array[$value->id] = $value->customers_name;
            foreach($value->getchild as $key2=>$value2 ){
                $array[$value2->id] ='< ' . $value2->customers_name.' >';

            }
        }
        return $array;
    }

    public function getchild()
    {
        return $this->hasMany(customers::class,'customers_parentid','id');
    }

}
