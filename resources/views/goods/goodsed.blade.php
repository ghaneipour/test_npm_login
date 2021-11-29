@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
        <h3><i class="fs-4 bi-basket2 m-2 p-2"></i>ویرایش محصول ها</h3>
    </div>
    <div class="panel_content">
        لیست محصول ها عبارتند از:
    </div>
    <div class="w-75 w-md-50  form-control">

        {{ Form::open(['url'=>'admin/goods/edit','files'=>true])}}
        <div class="form-control bg-light text-danger">
            {{ Form::label('id','نام محصول برای ویرایش:')}}
            <div class="feild-group p-2 m-2 bg-light text-dark">

                <?php
                foreach ($catlist as $catlist1 => $p) {
                    // dd($catlist1);
                    // dd($catlist );
                    if (str_contains($p, 'دسته اصلی')) {
                    } else {
                        if (str_contains($p, '<')) {
                            echo "  ```` ";
                        }
                        $getgoods=App\Models\goods::getgoodsid(['id'=>$catlist1 ]);
                        echo "<input type=radio class='p-2 m-2' name='id' id='id"
                            . ($getgoods->id)
                            . "' value='" . ($getgoods->id)
                            . "' onchange='rdoch(\""
                            . $getgoods->goods_name . ","
                            . $getgoods->goods_url . ","
                            . $getgoods->id . ","  
                            . $getgoods->goods_price . ","  
                            . $getgoods->goods_discount . ","  
                            . $getgoods->goods_quanty . ","  
                            . "\");'> <label for='id"
                            . ($getgoods->id)  . "' class='text-dark' >" 
                            . $getgoods->goods_name . "</label><br>";
                    }
                }
                echo "<hr>";

                // foreach ($getgoods as $goodli => $gdl) {
                //     echo ("<input type=radio class='p-2 m-2'  name='id' id='id"
                //         . ($gdl->id)  . "'  value='"
                //         . $gdl->id . "' onchange='rdoch(\"");
                //     echo ($gdl->goods_name . ","
                //         . $gdl->goods_url . ","
                //         . $gdl->id . "\");'>");
                //     if ($gdl->goods_parentid == 0) {
                //         echo ("<label for='id" . ($gdl->id)  .
                //             "' class='text-dark' >" . $gdl->goods_name . "</label><br>");
                //     } else {
                //         echo ("< <label for='id" . ($gdl->id)  .
                //             "' class='text-dark' >" . $gdl->goods_name . "</label> ><br>");
                //     }
                // }
                $lss_delete =  explode('_', Auth::user()->user_lss)[3];
                ?>
            </div>
            @if($lss_delete==1)
            <input id="dell" name="dell" value="حذف" type=submit>
            @endif
        </div>
        <hr>
        <div class="feild-group  m-2">
            {{ Form::label('goods_parentid','زیر دسته')}}
            {{ Form::select('goods_parentid',$catlist,0 , array('class' => 'form-select')) }}
            @if($errors->has('goods_parentid'))
            <span>{{ $errors->First('goods_parentid') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('goods_name','نام محصول')}}
            {{ Form::text('goods_name',null, array('class' => 'form-control'))}}
            @if($errors->has('goods_name'))
            <span>{{ $errors->First('goods_name') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('goods_url','آدرس محصول')}}
            {{ Form::text('goods_url',null, array('class' => 'form-control'))}}
            @if($errors->has('goods_url'))
            <span>{{ $errors->First('goods_url') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('goods_price','قیمت محصول')}}
            {{ Form::text('goods_price',null, array('class' => 'form-control'))}}
            @if($errors->has('goods_price'))
            <span>{{ $errors->First('goods_price') }}</span>
            @endif
        </div>


        <div class="feild-group m-2">
            {{ Form::label('goods_discount','تخفیف محصول')}}
            {{ Form::text('goods_discount',null, array('class' => 'form-control'))}}
            @if($errors->has('goods_discount'))
            <span>{{ $errors->First('goods_discount') }}</span>
            @endif
        </div>


        <div class="feild-group m-2">
            {{ Form::label('goods_quanty','تعداد موجود انبار')}}
            {{ Form::text('goods_quanty',null, array('class' => 'form-control'))}}
            @if($errors->has('goods_quanty'))
            <span>{{ $errors->First('goods_quanty') }}</span>
            @endif
        </div>


        <div class="form-control p-2 " style="
         display: grid;
    grid-template-columns: repeat(2, auto-fill);
    grid-template-rows: auto;
  ">

            <div class="  m-2 p-2 col-md-4 col-sm-6">

                {{ Form::label('goods_ico','تصویر محصول')}}
                {{ Form::file ('goods_ico',null)}}
                @if($errors->has('goods_ico'))
                <br><span>{{ $errors->First('goods_ico') }}
                </span>
                @endif
            </div>
            <div class="text-center m-2 p-2 col-md-4 col-sm-6">
                <img src="" width=100px id="mp">
            </div>

        </div>

        <div class="feild-group p-3">
            <button class="btn btn-success">ذخیره</button>
        </div>
        {{ Form::close()}}

    </div>
</div>
@endsection

<script>
    function rdoch(this1) {
        document.getElementById('goods_name').value = (this1.replace('<', '').replace('>', '')).split(',')[0];
        document.getElementById('goods_url').value = (this1.replace('<', '').replace('>', '')).split(',')[1];
        document.getElementById('mp').src = "../../uploadgood/" + (this1.replace('<', '').replace('>', '')).split(',')[2] + ".png";
        document.getElementById('goods_price').value = (this1.replace('<', '').replace('>', '')).split(',')[3];
        document.getElementById('goods_discount').value = (this1.replace('<', '').replace('>', '')).split(',')[4];
        document.getElementById('goods_quanty').value = (this1.replace('<', '').replace('>', '')).split(',')[4];
    }

    
    function chclk(this1) {
        document.getElementById('goods_name').value = this1.value;
    }
</script>
<style>
    .feild-group span {
        color: red;
    }
</style>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif