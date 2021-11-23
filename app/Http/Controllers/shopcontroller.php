<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shop;
use App\Models\User;

class shopcontroller extends Controller
{

    public function load(request $request)
    {

        return $request;
    }

    static function getorderid($uid)
    {
        
        $ono = shopcontroller::createorder($uid);
        $sh = shop::query()
            ->where('customer_id', '=', $uid)
            ->where('order_no', '=', $ono)
            ->get();
        return $sh;
    }
    public function save(request $request)
    {
        $sell = new shop($request->all());

        $s = shopcontroller::createorder($request->customer_id);
        $y = shopcontroller::createordercurrent($request->customer_id, $request->order_goods_id, $s);
        if ($y) {
            //dd($request->order_goods_cnt+$y->order_goods_cnt);
            if($request->order_goods_cnt>0){
            $y->order_goods_cnt = $request->order_goods_cnt; //+$y->order_goods_cnt;
            $y->order_goods_price = $request->order_goods_price;
            $y->order_goods_discount = $request->order_goods_discount;
            $y->page_url = $request->page_url;
            $y->customer_ip = $_SERVER['REMOTE_ADDR'];
            $y->update();
            } else
            {
                $y->delete();
            }
        } else {
            $sell->customer_id =  $request->customer_id;
            $sell->order_goods_id = $request->order_goods_id;
            $sell->order_goods_cnt = $request->order_goods_cnt;
            $sell->order_no = $s;
            $sell->order_date =  date('Y/m/d');
            $sell->order_goods_price = $request->order_goods_price;
            $sell->order_goods_discount = $request->order_goods_discount;
            $sell->page_url = $request->page_url;
            $sell->customer_ip = $_SERVER['REMOTE_ADDR'];
            $sell->save();
        }

        return  view('layouts/shop'); // . "  <br>به سبد افزوده شد<br>" .'<a href="\"  class="btn btn-danger">ادامه حرید</a><br>';
    }

    static function neworder()
    {
        // $sh= shop::whereRaw('id = (select max("id") from shop)')->first();
        $sh = shop::query()->max('id');
        // dd($sh);
        return $sh;
    }

    static function createordercurrent($uid, $gid, $ono)
    {
        $sh = shop::query()
            ->where('customer_id', '=', $uid)
            ->where('order_goods_id', '=', $gid)
            ->where('order_no', '=', $ono)
            ->first();
        //  dd($sh);
        //  '',
        //  '',
        //  'order_goods_cnt',
        //  'order_goods_price',
        //  'order_goods_discount',
        // 'page_url',
        // 'customer_ip',
        // '',
        return $sh;
    }

    static function createorder($id)
    {
        $maxordeid = shopcontroller::neworder();
        $userorder = user::query()->where('id', $id)->first();
        if (!$userorder->ticket) {
            $userorder->ticket = 0;
            $userorder->save();
        }

        if (!$userorder->ticketdone) {
            $userorder->ticketdone = 0;
            $userorder->save();
        }

        if ($userorder->ticketdone == 0) {
            $s = $userorder->ticket;
        } else {
            $s = $maxordeid + 1;
        }

        $userorder->ticket = $s;
        $userorder->ticketdone = 0;
        $userorder->save();
        return $s;
    }
}
