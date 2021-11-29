<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\advertising;
use DateTime;

class advertisingcontroller extends Controller
{ 
    public function add(request $request)
    { 
        $ggg = new advertising();
        $ggg->Advertising_title = $request->Advertising_title;
        $ggg->Advertising_str1 = $request->Advertising_str1;
        $ggg->Advertising_str2 = $request->Advertising_str2;
        $ggg->Advertising_seo = $request->Advertising_seo;
        $ggg->Advertising_url = $request->Advertising_url;
        $ggg->Advertising_grp1 = ($request->Advertising_grp1 == 'on' ? 1 : 0);
        $ggg->Advertising_grp2 = ($request->Advertising_grp2 == 'on' ? 1 : 0);
        $ggg->Advertising_grp3 = ($request->Advertising_grp3 == 'on' ? 1 : 0);
        $ggg->Advertising_grp4 = ($request->Advertising_grp4 == 'on' ? 1 : 0); 
        $ggg->Advertising_expire = $request->Advertising_expire;  
        $ggg->Advertising_pay = $request->Advertising_pay;

        $ggg->save();

         //  ensure the request has a file before we attempt anything else.
         if ($request->hasFile('goods_ico')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            $target_dir = "./uploadadve/img_";
            $target_file = $target_dir . basename($_FILES["goods_ico"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image

            $check = getimagesize($_FILES["goods_ico"]["tmp_name"]);
            if ($check !== false) {
                echo "<br>File is an image - " . $check["mime"] . ".";
                echo "<BR>" . $target_file;
                echo "<BR>" . $_FILES["goods_ico"]["size"];
                move_uploaded_file($_FILES["goods_ico"]["tmp_name"], $target_dir . $request->id . ".jpg"); // $target_file);
                $uploadOk = 1;
            } else {
                echo "<br>File is not an image.";
                $uploadOk = 0;
            }
        }
    
        return view('advertising.advertisinged');
    }
        
    public function edit(request $request)
    { 
        if ($request->dell) {
            $catid =  advertising::where('id', $request->id)->delete();
        } else { 
             
            $catid =  advertising::where('id', $request->id)->update([
                'Advertising_title' => $request->Advertising_title,
                'Advertising_str1' => $request->Advertising_str1,
                'Advertising_str2' => $request->Advertising_str2,
                'Advertising_seo' => $request->Advertising_seo,
                'Advertising_url' => $request->Advertising_url,
                'Advertising_grp1' => ($request->Advertising_grp1 == 'on' ? 1 : 0),
                'Advertising_grp2' => ($request->Advertising_grp2 == 'on' ? 1 : 0),
                'Advertising_grp3' => ($request->Advertising_grp3 == 'on' ? 1 : 0),
                'Advertising_grp4' => ($request->Advertising_grp4 == 'on' ? 1 : 0),
                'Advertising_expire' => $request->Advertising_expire,
                'Advertising_pay' => $request->Advertising_pay,  
            ]);

            //  ensure the request has a file before we attempt anything else.
            if ($request->hasFile('goods_ico')) {

                $request->validate([
                    'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
                ]);

                $target_dir = "./uploadadve/img_";
                $target_file = $target_dir . basename($_FILES["goods_ico"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                // Check if image file is a actual image or fake image

                $check = getimagesize($_FILES["goods_ico"]["tmp_name"]);
                if ($check !== false) {
                    echo "<br>File is an image - " . $check["mime"] . ".";
                    echo "<BR>" . $target_file;
                    echo "<BR>" . $_FILES["goods_ico"]["size"];
                    move_uploaded_file($_FILES["goods_ico"]["tmp_name"], $target_dir . $request->id . ".jpg"); // $target_file);
                    $uploadOk = 1;
                } else {
                    echo "<br>File is not an image.";
                    $uploadOk = 0;
                }
            }
        }
        return view('advertising.advertisinged');
    }

 

}
