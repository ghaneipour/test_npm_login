<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class Advertising extends Model
{
    use HasFactory;
    protected $table = 'Advertising'; 
    protected $fillable = [
        'id',
        'Advertising_title',
        'Advertising_str1',
        'Advertising_str2',
        'Advertising_seo',
        'Advertising_url',
        'Advertising_grp1',
        'Advertising_grp2',
        'Advertising_grp3',
        'Advertising_grp4',
        'Advertising_expire',
        'Advertising_pay',
    ];
    
    public static function getAdvertising( $request)
    {
         //dd($request['id']);
             return  Advertising::query()
             ->where('id', $request['id'])
             ->first();  
    }
    public static function getAdvertising1()
    {
         //dd($request['id']);
             $rq=   Advertising::query()
             ->where('Advertising_grp1', 1)
             ->get(); 
            // dd($rq);
             return $rq; 
    }
     
    public static function getAdvertising2()
    {
         //dd($request['id']);
             $rq=   Advertising::query()
             ->where('Advertising_grp2', 1)
             ->get(); 
            // dd($rq);
             return $rq; 
    }

   
    

}
