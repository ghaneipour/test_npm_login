<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\http\models;
use App\Http\Requests\categoryRQ;
use App\Models\category;

class categorycontroller extends Controller
{
    // $catlist="-";
    public function index()
    {
        $catlist = category::getCatList();
        return  view("layouts.admin", ['catlist' => $catlist]);
    }
    public function create()
    {
        $catlist = category::getCatList();
        return view("category.category", ['catlist' => $catlist]);
    }
    public function store(categoryRQ $request)
    {
        // return $request;
        $category = new category($request->all());
        $url = str_replace("-", "", $category->get('category_name'));
        $url = preg_replace('/\s+/', '-', $url);
        $category->category_url = $url;
        $category->save();
        return redirect('admin/category/create');
    }


    public function edit(request $request)
    {
        // $catid = category::find($request->id); 
        $catid=  category::where('id', $request->id)->update([
            'category_name'=>$request->category_name,
            'category_parentid'=>$request->category_parentid,

            ]) ;
        // ([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
        // make('category.createOrUpdate')->with('id', $catid);
        // category::where('id', $catid)
    // ->chunkById(200, function ($request) {
    //     $flights->each->update(['id' => $catid]);
    // }, $column = 'id');
        // dd($catid);
        // 
        $catlist = category::getCatList();
        return view("category.categoryed", ['catlist' => $catlist]);
    }
    public function update(request $request)
    {

        // document.write( "update1");D:\PHP~\sample\test_npm_login\resources\views\category\categoryed..blade.php
        $catlist = category::getCatList();
        return view("category.categoryed", ['catlist' => $catlist]);
    }
    public function destroy()
    {
    }
}
