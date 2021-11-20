<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\http\models;
use App\Http\Requests\usersRQ;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class userscontrollers extends Controller
{
    // $catlist="-";
    public function index()
    {
        $catid =  \App\Models\User::query()->get();
        return view("layouts.useredit", ['catlist' => $catid]);
    }
    public function create()
    {
        $catid =  \App\Models\User::query()->get();
        return view("layouts.useredit", ['catlist' => $catid]); 
    }
    public function store(usersRQ $request)
    { 
        $goods = new \App\Models\User($request->all()); 
        $goods->save(); 
        return redirect('admin/usersedit/create');
    }
 
    public function edit(request $request)
    {
        if ($request->dell) {
            $catid =  \App\Models\User::where('id', $request->id)->delete();
        } else { 
            $catid =  \App\Models\User::where('id', $request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                // 'password' =>Hash::make( $request->password),
                'user_lss' => $request->user_lss,
            ]);
        }        
        
        $catid =  \App\Models\User::query()->get(); 
        return view("layouts.useredit", ['catlist' => $catid]);
    }

    public function update1()
    {
        $catid =  \App\Models\User::query()->get(); 
        return view("layouts.useredit", ['catlist' => $catid]);
    }
     
}
