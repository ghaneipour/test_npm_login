<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\http\models;
use App\Http\Requests\customersRQ;
use App\Models\customers;

class customerscontroller extends Customers
{
    // $catlist="-";
    public function index()
    {
        $catlist = customers::getCatList();
        return  view("layouts.admin", ['catlist' => $catlist]);
    }
    public function create()
    {
        $catlist = customers::getCatList();
        return view("customers.customers", ['catlist' => $catlist]);
    }
    public function store(customersRQ $request)
    {
        // return $request;
        $customers = new customers($request->all());
        // $url = str_replace("-", "", $customers->get('customers_name'));
        // $url = preg_replace('/\s+/', '-', $url);
        // $customers->customers_url = $url;
        $customers->save();


        //  ensure the request has a file before we attempt anything else.
        if ($request->hasFile('customers_ico')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            $target_dir = "./uploadcus/";
            $target_file = $target_dir . basename($_FILES["customers_ico"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image

            $check = getimagesize($_FILES["customers_ico"]["tmp_name"]);
            if ($check !== false) {
                echo "<br>File is an image - " . $check["mime"] . ".";
                echo "<BR>" . $target_file;
                echo "<BR>" . $_FILES["customers_ico"]["size"];
                move_uploaded_file($_FILES["customers_ico"]["tmp_name"], $target_dir . $customers->id . ".png"); // $target_file);
                $uploadOk = 1;
            } else {
                echo "<br>File is not an image.";
                $uploadOk = 0;
            }
        }
        return redirect('admin/customers/create');
    }


    public function edit(request $request)
    {
        if ($request->dell) {
            $catid =  customers::where('id', $request->id)->delete();
        } else {
            // $catid = customers::find($request->id); 
            $catid =  customers::where('id', $request->id)->update([
                'customers_name' => $request->customers_name,
                'customers_parentid' => $request->customers_parentid,
                'customers_url' => $request->customers_url,

            ]);


            //  ensure the request has a file before we attempt anything else.
            if ($request->hasFile('customers_ico')) {

                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);

                $target_dir = "./uploadcus/";
                $target_file = $target_dir . basename($_FILES["customers_ico"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                // Check if image file is a actual image or fake image

                $check = getimagesize($_FILES["customers_ico"]["tmp_name"]);
                if ($check !== false) {
                    // echo "<br>File is an image - " . $check["mime"] . ".";
                    // echo "<BR>" . $target_file;
                    // echo "<BR>" . $_FILES["customers_ico"]["size"];
                    move_uploaded_file($_FILES["customers_ico"]["tmp_name"], $target_dir . $request->id . ".png"); // $target_file);
                    $uploadOk = 1;
                } else {
                    echo "<br>File is not an image.";
                    $uploadOk = 0;
                }
            }
        }
        $catlist = customers::getCatList();
        return view("customers.customersed", ['catlist' => $catlist]);
    }

    public function update1()
    {

        // document.write( "update1");D:\PHP~\sample\test_npm_login\resources\views\category\categoryed..blade.php
        $catlist = customers::getCatList();
        return view("customers.customersed", ['catlist' => $catlist]);
    }
     
}
