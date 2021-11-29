<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class advertising extends Model
{
    use HasFactory;
    protected $table = 'advertising'; 
    protected $fillable = [
        'id',
        'advertising_title',
        'advertising_str1',
        'advertising_str2',
        'advertising_seo',
        'advertising_url',
        'advertising_grp1',
        'advertising_grp2',
        'advertising_grp3',
        'advertising_grp4',
        'advertising_expire',
        'advertising_pay',
    ];
    
    public static function getAdvertising( $request)
    { 
         $re=  advertising::query()
         ->where('id', $request['id'])
             ->first();   
             return $re;
    }
    public static function getAdvertising1()
    { 
             $rq=   advertising::query()
             ->where('advertising_grp1', 1)
             ->get();  
             return $rq; 
    }
     
    public static function getAdvertising2()
    { 
             $rq=   advertising::query()
             ->where('advertising_grp2', 1)
             ->get();  
             return $rq;              
    }
     
    public static function getAdvertising3()
    { 
             $rq=   advertising::query()
             ->where('advertising_grp3', 1)
             ->get();  
             return $rq;  
    }

   
   
}
