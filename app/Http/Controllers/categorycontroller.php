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


        //  ensure the request has a file before we attempt anything else.
        if ($request->hasFile('category_ico')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            $target_dir = "./uploadcat/";
            $target_file = $target_dir . basename($_FILES["category_ico"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image

            $check = getimagesize($_FILES["category_ico"]["tmp_name"]);
            if ($check !== false) {
                echo "<br>File is an image - " . $check["mime"] . ".";
                echo "<BR>" . $target_file;
                echo "<BR>" . $_FILES["category_ico"]["size"];
                move_uploaded_file($_FILES["category_ico"]["tmp_name"], $target_dir . $category->id . ".png"); // $target_file);
                $uploadOk = 1;
            } else {
                echo "<br>File is not an image.";
                $uploadOk = 0;
            }
        }
        return redirect('admin/category/create');
    }


    public function edit(request $request)
    {
        if ($request->dell) {
            $catid =  category::where('id', $request->id)->delete();
        } else {
            // $catid = category::find($request->id); 
            $catid =  category::where('id', $request->id)->update([
                'category_name' => $request->category_name,
                'category_parentid' => $request->category_parentid,
                // 'category_url' => $request->category_url,

            ]);


            //  ensure the request has a file before we attempt anything else.
            if ($request->hasFile('category_ico')) {

                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);

                $target_dir = "./uploadcat/";
                $target_file = $target_dir . basename($_FILES["category_ico"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                // Check if image file is a actual image or fake image

                $check = getimagesize($_FILES["category_ico"]["tmp_name"]);
                if ($check !== false) {
                    // echo "<br>File is an image - " . $check["mime"] . ".";
                    // echo "<BR>" . $target_file;
                    // echo "<BR>" . $_FILES["category_ico"]["size"];
                    move_uploaded_file($_FILES["category_ico"]["tmp_name"], $target_dir . $request->id . ".png"); // $target_file);
                    $uploadOk = 1;
                } else {
                    echo "<br>File is not an image.";
                    $uploadOk = 0;
                }
            }
        }
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
