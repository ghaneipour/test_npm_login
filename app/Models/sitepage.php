<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sitepage extends Model
{
    use HasFactory;
    protected $table = 'sitepage';
    protected $fillable = [
            'id' ,
            'page_title',
            'page_url', 
            'page_str2',
            'page_str1' ,
            'page_seo',    
    ];
    
    public static function getsitepage($id)
    {  
        $cat = sitepage::query()->where('id', $id)->first();     
        //dd($cat); 
        return $cat;
    }
    
    public static function getsitepageall()
    {
             return  sitepage::query()->get();              
    }
      
}
