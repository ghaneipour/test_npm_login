<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class titels extends Model
{
    use HasFactory;
    protected $table = 'titels';
    protected $fillable = [
            'id',
            'lss_grp1',
            'lss_grp2',
            'lss_grp3',
            'titles',
            'texts',    
    ];
    
    public static function gettitelsid($id)
    {  
        $cat = titels::query()->where('id', $id)->first();     
        //dd($cat); 
        return $cat;
    }
    public static function gettitels()
    {
             return  titels::query()->get();       
         
    }
     
 
}
