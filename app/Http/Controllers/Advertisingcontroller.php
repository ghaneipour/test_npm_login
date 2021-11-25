<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertising; 

class Advertisingcontroller extends Controller
{
    // 'id',
    // 'Advertising_title',
    // 'Advertising_str1',
    // 'Advertising_str2',
    // 'Advertising_seo',
    // 'Advertising_url',
    // 'Advertising_grp1',
    // 'Advertising_grp2',
    // 'Advertising_grp3',
    // 'Advertising_grp4',
    // 'Advertising_expire',
    // 'Advertising_pay',
      public function index()
      {
          $catlistg = Advertising::getCatListgood();
          return  view("layouts.admin", ['catlist' => $catlistg,'getgoods'=>Advertising::getgoods()]);
      }

      public function create()
      {
          $catlistg = Advertising::getCatListgood();
          return view("goods.goods", ['catlist' => $catlistg,'getgoods'=>Advertising::getgoods()]);
      }

      public function load(request $request)
      {
          
      return $request;
      }

      public function save(request $request)
      {

      return $request;
      }
      
      public function store(Request $request)
      {
            // return $request;
        $goods = new Advertising($request->all());
        // $url = str_replace("-", "", $goods->get('goods_name'));
        // $url = preg_replace('/\s+/', '-', $url);
        // $goods->goods_url = $url;
        $goods->save();

      }
      
    public function edit(request $request)
    {
        if ($request->dell) {
            $catid =  Advertising::where('id', $request->id)->delete();
        } else {
            // $catid = customers::find($request->id); 
            $catid =  Advertising::where('id', $request->id)->update([
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
        $catlistg = Advertising::getCatListgood();
        return view("goods.goodsed", ['catlist' => $catlistg,'getgoods'=>Advertising::getgoods()]);
    }

}
