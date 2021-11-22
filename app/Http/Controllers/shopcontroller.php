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

    public function save(request $request)
    {
        $sell = new shop($request->all());

        $sell->customer_id =  $request->customer_id;
        $sell->order_goods_id = $request->order_goods_id;
        $sell->order_goods_cnt = $request->order_goods_cnt;
        $sell->order_goods_price = $request->order_goods_price;
        $sell->order_goods_discount = $request->order_goods_discount;
        $sell->page_url = $request->page_url;
        $sell->customer_ip = $_SERVER['REMOTE_ADDR'];
        $s = shopcontroller::createorder($request->customer_id);
        
        $sell->order_no = $s  ;
        $sell->order_date =  date('Y/m/d');
        $sell->save();

        return  $sell;
    }

    static function neworder()
    {
        // $sh= shop::whereRaw('id = (select max("id") from shop)')->first();
        $sh = shop::query()->max('id');
        // dd($sh);
        return $sh;
    }

    static function createorder($id)
    {
        $maxordeid = shopcontroller::neworder();
        $userorder = user::query()->where('id', $id)->first();
        if(!$userorder->ticket){
            $userorder->ticket=0;
            $userorder->save();
        }
         
        if(!$userorder->ticketdone){
            $userorder->ticketdone=0;
            $userorder->save();
        }
         
        if($userorder->ticketdone==0)
        {
            $s=$userorder->ticket;
        }
        else
        {
            $s=$maxordeid+1;            
        }

        $userorder->ticket=$s;
        $userorder->ticketdone=0;
        $userorder->save();
        return $s;
    }
}
