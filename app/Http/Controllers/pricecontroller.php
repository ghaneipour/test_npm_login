<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\price;
use app\Http\Requests\sitepageRQ;

class pricecontroller extends Controller
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

    public function add(request $request)
    {
        // return $request;
        $goods = new price($request->all());
        // $url = str_replace("-", "", $goods->get('goods_name'));
        // $url = preg_replace('/\s+/', '-', $url);
        $goods->price_grp1 = ($request->price_grp1 == 'on' ? 1 : 0);
        $goods->price_grp2 = ($request->price_grp2 == 'on' ? 1 : 0);
        $goods->price_grp3 = ($request->price_grp3 == 'on' ? 1 : 0);
        $goods->save();
        return view('price.priceed');
    }

    public function edit(request $request)
    {
        //dd($request);
        if ($request->dell) {
            $catid =  price::where('price_id', $request->id)->delete();
        } else {
            // $catid = customers::find($request->id); 
            $catid =  price::where('price_id', $request->id)->update([

                'price_title' => $request->price_title,
                'price_fee' => $request->price_fee,
                'price_id' => $request->newprice_id,
                'price_grp1' => ($request->price_grp1 == 'on' ? 1 : 0),
                'price_grp2' => ($request->price_grp2 == 'on' ? 1 : 0),
                'price_grp3' => ($request->price_grp3 == 'on' ? 1 : 0),
            ]);
        }
        return view("price.priceed");
    }

    public function update1()
    {

        // document.write( "update1");D:\PHP~\sample\test_npm_login\resources\views\category\categoryed..blade.php
        $catlistg = price::getCatListgood();
        return view("goods.goodsed", ['catlist' => $catlistg, 'getgoods' => price::getgoods()]);
    }
}
