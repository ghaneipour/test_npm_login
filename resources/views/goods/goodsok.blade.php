@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
        <h3><i class="fs-4 bi-basket2 m-2 p-2"></i>تایید محصول ها</h3>
    </div>
    <div class="panel_content">
        لیست محصول ها عبارتند از:
    </div>
    <div class="w-75 w-md-50  form-control">

        <div class="form-control bg-light text-danger">
            <div class="feild-group p-2 m-2 bg-light text-dark">

                <?php
                $catlist = App\Models\goods::query()->where('goods_parentid', 0)->get();
                foreach ($catlist as $catlist1) {
                    $tmp = $catlist1->id;
                    echo '<label    class="text-dark" >' .
                        $catlist1->goods_name . "</label><br>";

                    $getgoods1 = App\Models\goods::getgoodstopid($tmp);
                    if (isset($getgoods1)) {
                        foreach ($getgoods1 as $getgoods) {
                            echo "  ```` ";
                            // dd( $getgoods);
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
                            . "\");'>";
                            echo " <label for='id"
                            . ($getgoods->id)  . "' class='text-dark' style='background-color:#ffecec;'>";
                            if($getgoods->goods_done){echo "<span style='color:green;background-color:#ececff'>";}
                            echo  $getgoods->goods_name ;
                            if($getgoods->goods_done){echo "</span>";}
                            echo "</label><br>";
                        }
                    }
                }
                echo "<hr>";
                $lss_delete =  explode('_', Auth::user()->user_lss)[3];
                ?>
            </div>
        </div> 
        
        {{ Form::open(['url'=>'admin/goodsok/goodsok' ,'id'=>'myform'])}}
        <div class="feild-group p-3">
            <input id="id" name="id" value="0" type="hidden">
            <input id="done" name="done" value="done" type="hidden">
            <button   class="btn btn-success" onclick="submited()">تایید</button>
            
            <button class="btn btn-danger" onclick="submited2()">غیر فعال کردن </button>
        </div>
        {{ Form::close()}}

        <hr>
        <div class=" p-2 " style="
                display: grid;
                grid-template-columns: 1fr 1fr;
                grid-template-rows: 1;
                ">
            <div class="d-inline-block  col">
                <div class="feild-group m-2">
                    نام محصول :<div class="d-inline-block text-danger" id='goods_name'></div>
                </div>

                <div class="feild-group m-2">
                    آدرس محصول:<div class="d-inline-block text-danger" id='goods_url'></div>
                </div>

                <div class="feild-group m-2">
                    قیمت محصول:<div class="d-inline-block text-danger" id='goods_price'></div>
                </div>

                <div class="feild-group m-2">
                    تخفیف محصول:<div class="d-inline-block text-danger" id='goods_discount'></div>
                </div>
                <div class="feild-group m-2">
                    تعداد موجود انبار:<div class="d-inline-block text-danger" id='goods_quanty'></div>
                </div>

            </div>
            <div class="d-inline-block col">
                <img src="" width=100px id="mp">
            </div>
        </div>

       
    </div>
</div>
@endsection

<script>
 function submited() {
        document.getElementById('done').value = "1";
        document.getElementById('myform').submit();
        // alert("sssooo="+sss);
    }

    function submited2() {
        
        document.getElementById('done').value = "dell";
        document.getElementById('myform').submit();
        // alert("sssooo="+sss);
    }

    function rdoch(this1) {
        document.getElementById('goods_name').innerText = (this1.replace('<', '').replace('>', '')).split(',')[0];
        document.getElementById('goods_url').innerText = (this1.replace('<', '').replace('>', '')).split(',')[1];
        document.getElementById('mp').src = "../../uploadgood/" + (this1.replace('<', '').replace('>', '')).split(',')[2] + ".png";
        document.getElementById('id').value= (this1.replace('<', '').replace('>', '')).split(',')[2];
        document.getElementById('goods_price').innerText = (this1.replace('<', '').replace('>', '')).split(',')[3];
        document.getElementById('goods_discount').innerText = (this1.replace('<', '').replace('>', '')).split(',')[4];
        document.getElementById('goods_quanty').innerText = (this1.replace('<', '').replace('>', '')).split(',')[4];
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