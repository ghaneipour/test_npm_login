<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sitepage;
use app\Http\Requests\sitepageRQ;

class sitepagecontroller extends Controller
{
      // $catlist="-";
      public function index()
      {
          $catlistg = sitepage::getCatListgood();
          return  view("layouts.admin", ['catlist' => $catlistg,'getgoods'=>sitepage::getgoods()]);
      }

      public function create()
      {
          $catlistg = sitepage::getCatListgood();
          return view("goods.goods", ['catlist' => $catlistg,'getgoods'=>sitepage::getgoods()]);
      }

      public function load(request $request)
      {
          
      return $request;
      }

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
                'goods_name' => $request->goods_name,
                'goods_parentid' => $request->goods_parentid,
                'goods_url' => $request->goods_url,
                'goods_price' => $request->goods_price,
                'goods_discount' => $request->goods_discount,
                'goods_quanty' => $request->goods_quanty,
            ]);
        }
    }
    
    public function update1()
    {

        // document.write( "update1");D:\PHP~\sample\test_npm_login\resources\views\category\categoryed..blade.php
        $catlistg = sitepage::getCatListgood();
        return view("goods.goodsed", ['catlist' => $catlistg,'getgoods'=>sitepage::getgoods()]);
    }

}
