<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    use HasFactory;
    protected $table = 'price';
    protected $fillable = [
            'id' ,
            'price_title',
            'price_fee',
            'price_id',
            'price_grp1',
            'price_grp2',
            'price_grp3',
    ];
    
    public static function getpriceid($id)
    {  
        $cat = price::query()->where('price_id', $id)->first();     
        // dd($cat); 
        return $cat;
    }
    
    public static function getpriceall()
    {
             return  price::query()->get();              
    }
      
}
