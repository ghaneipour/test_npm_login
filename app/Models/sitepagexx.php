<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class sitepage extends Model
{
    use HasFactory;
    protected $table = 'sitepage';
    protected $fillable = ['page_title', 'page_url', 'page_str2', 'page_str1' ,'id' ,'page_seo'  ];
    
    
    public static function getsitepage( $request)
    {
         //dd($request['id']);
             return  sitepage::query()
             ->where('id', $request['id'])
             ->first();  
    }

   
    

}
