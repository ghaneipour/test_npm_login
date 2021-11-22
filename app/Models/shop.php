<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
    use HasFactory;
    protected $table = 'shop';
    protected $fillable = [
     'customer_id',
     'order_goods_id',
     'order_goods_cnt',
     'order_goods_price',
     'order_goods_discount',
    'page_url',
    'customer_ip',
    'order_no',
    'order_date',];
    
    

    
    

}
