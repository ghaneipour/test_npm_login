<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sitepage;
use app\Http\Requests\sitepageRQ;

class sitepagecontroller extends Controller
{
      // $catlist="-";
    //   public function index()
    //   {
    //       $catlistg = sitepage::getCatListgood();
    //       return  view("layouts.admin", ['catlist' => $catlistg,'getgoods'=>sitepage::getgoods()]);
    //   }

    //   public function create()
    //   {
    //       $catlistg = sitepage::getCatListgood();
    //       return view("goods.goods", ['catlist' => $catlistg,'getgoods'=>sitepage::getgoods()]);
    //   }

    //   public function load(request $request)
    //   {
          
    //   return $request;
    //   }

      public function save(request $request)
      {

      return $request;
      }
      
      public function store(sitepageRQ $request)
      {
            // return $request;
        $goods = new sitepage($request->all());
        // $url = str_replace("-", "", $goods->get('goods_name'));
        // $url = preg_replace('/\s+/', '-', $url);
        // $goods->goods_url = $url;
        $goods->save();

      }
      
    public function edit(request $request)
    {
        if ($request->dell) {
            $catid =  sitepage::where('id', $request->id)->delete();
        } else {
            // $catid = customers::find($request->id); 
            $catid =  sitepage::where('id', $request->id)->update([
                 
                'page_title'=> $request->page_title,
                'page_str1'=> $request->page_str1 ,
                'page_str2'=> $request->page_str2,
                'page_url'=> $request->page_url, 
                'page_seo'=> $request->page_seo,   
            ]);
        }
        return view("page.page");
    }
    
    public function update1()
    {

        // document.write( "update1");D:\PHP~\sample\test_npm_login\resources\views\category\categoryed..blade.php
        $catlistg = sitepage::getCatListgood();
        return view("goods.goodsed", ['catlist' => $catlistg,'getgoods'=>sitepage::getgoods()]);
    }

}
