<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\http\models;
use App\Http\Requests\goodsRQ;
use App\Models\goods;

class goodscontroller extends Goods
{
    // $catlist="-";
    public function index()
    {
        $catlistg = goods::getCatListgood();
        return  view("layouts.admin", ['catlist' => $catlistg,'getgoods'=>goods::getgoods()]);
    }
    public function create()
    {
        $catlistg = goods::getCatListgood();
        return view("goods.goods", ['catlist' => $catlistg,'getgoods'=>goods::getgoods()]);
    }
    public function store(goodsRQ $request)
    {
        // return $request;
        $goods = new goods($request->all());
        // $url = str_replace("-", "", $goods->get('goods_name'));
        // $url = preg_replace('/\s+/', '-', $url);
        // $goods->goods_url = $url;
        $goods->save();


        //  ensure the request has a file before we attempt anything else.
        if ($request->hasFile('goods_ico')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            $target_dir = "./uploadgood/";
            $target_file = $target_dir . basename($_FILES["goods_ico"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image

            $check = getimagesize($_FILES["goods_ico"]["tmp_name"]);
            if ($check !== false) {
                echo "<br>File is an image - " . $check["mime"] . ".";
                echo "<BR>" . $target_file;
                echo "<BR>" . $_FILES["goods_ico"]["size"];
                move_uploaded_file($_FILES["goods_ico"]["tmp_name"], $target_dir . $goods->id . ".png"); // $target_file);
                $uploadOk = 1;
            } else {
                echo "<br>File is not an image.";
                $uploadOk = 0;
            }
        }
        return redirect('admin/goods/create');
    }


    public function goodsok(request $request)
    {
        if ($request->done=='1') { 
            // dd($request);
            $catid =  goods::where('id', $request->id)->update([
                'goods_done' => '1']);
            }
            else if ($request->done=='dell') { 
                // dd($request);
                $catid =  goods::where('id', $request->id)->update([
                    'goods_done' => '0']);
                }
            return view('goods.goodsok');
    }

    public function edit(request $request)
    {
        if ($request->dell) {
            $catid =  goods::where('id', $request->id)->delete();
        } else {
            // $catid = customers::find($request->id); 
            $catid =  goods::where('id', $request->id)->update([
                'goods_name' => $request->goods_name,
                'goods_parentid' => $request->goods_parentid,
                'goods_url' => $request->goods_url,
                'goods_price' => $request->goods_price,
                'goods_discount' => $request->goods_discount,
                'goods_quanty' => $request->goods_quanty,
            ]);


            //  ensure the request has a file before we attempt anything else.
            if ($request->hasFile('goods_ico')) {

                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);

                $target_dir = "./uploadgood/";
                $target_file = $target_dir . basename($_FILES["goods_ico"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                // Check if image file is a actual image or fake image

                $check = getimagesize($_FILES["goods_ico"]["tmp_name"]);
                if ($check !== false) {
                    // echo "<br>File is an image - " . $check["mime"] . ".";
                    // echo "<BR>" . $target_file;
                    // echo "<BR>" . $_FILES["customers_ico"]["size"];
                    move_uploaded_file($_FILES["goods_ico"]["tmp_name"], $target_dir . $request->id . ".png"); // $target_file);
                    $uploadOk = 1;
                } else {
                    echo "<br>File is not an image.";
                    $uploadOk = 0;
                }
            }
        }
        $catlistg = goods::getCatListgood();
        return view("goods.goodsed", ['catlist' => $catlistg,'getgoods'=>goods::getgoods()]);
    }

    public function update1()
    {

        // document.write( "update1");D:\PHP~\sample\test_npm_login\resources\views\category\categoryed..blade.php
        $catlistg = goods::getCatListgood();
        return view("goods.goodsed", ['catlist' => $catlistg,'getgoods'=>goods::getgoods()]);
    }
     
}
