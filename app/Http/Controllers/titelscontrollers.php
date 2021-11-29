<?php

namespace App\Http\Controllers;
use App\Models\titels;

use Illuminate\Http\Request;

class titelscontrollers extends Controller
{
    public static function edit(request $request){
        if ($request->dell) {
            $catid =  titels::where('id', $request->id)->delete();
        } else {
        titels::query()->where(['id'=>$request->id])->update([
            'titles' => $request->titles,
            'texts' => $request->texts,
        ]);
    }
        return view("titels.titelsed");
    }   
    
    public static function add(request $request){
       
        (new titels($request->all()))->save();
        
        return view("titels.titelsed");
    }

}
