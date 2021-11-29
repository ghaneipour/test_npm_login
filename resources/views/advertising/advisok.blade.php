@extends('layouts.admin')

<link rel="stylesheet" href="http://babakhani.github.io/PersianWebToolkit/beta/lib/persian-datepicker/dist/css/persian-datepicker.css" />
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="http://babakhani.github.io/PersianWebToolkit/beta/lib/persian-date/dist/persian-date.js"></script>
<script src="http://babakhani.github.io/PersianWebToolkit/beta/lib/persian-datepicker/dist/js/persian-datepicker.js"></script>


@section('content')
<div class="panel form-control p-3">
    <div class="header">
        <h3><i class="fs-4 bi-basket2 m-2 p-2"></i>تایید تبلیغ ها</h3>
    </div>
    <div class="panel_content">
        تایید تبلیغ ها عبارتند از:
    </div>
    <div class="w-75 w-md-50  form-control">
        <script type="text/javascript">
            $(document).ready(function() {
                $('.example3').persianDatepicker();
                $(".example1").pDatepicker({
                    format: "YYYY-MM-DD hh:mm:ss",
                    //format: "DD-MM-YYYY hh:mm:ss",
                    // format: 'YYYY/MM/DD',
                    observer: true,
                    persianDigit: false,
                    altField: '.alt-field-example',
                    autoClose: true,
                });
                $(".example2").pDatepicker();
            });
        </script>


        <input class="example3" type="text">
        <div class="form-control bg-light text-danger">
            {{ Form::label('id','نام تبلیغ برای تایید:')}}

            <div class="feild-group p-2 m-2 bg-light text-dark">
                <?php

                $getgoods = App\Models\advertising::query()->get();

                foreach ($getgoods as $goodli => $gdl) {
                    echo ("<input type=radio class='p-2 m-2'  name='id' id='id"
                        . ($gdl->id)  . "'  value='"
                        . $gdl->id . "' onchange='rdoch(\"");

                    echo ($gdl->Advertising_title .
                        "," . $gdl->Advertising_str1 .
                        "," . $gdl->id .
                        "," . $gdl->Advertising_str2 .
                        "," . $gdl->Advertising_seo .
                        "," . $gdl->Advertising_url .
                        "," . $gdl->Advertising_grp1 .
                        "," . $gdl->Advertising_grp2 .
                        "," . $gdl->Advertising_grp3 .
                        "," . $gdl->Advertising_grp4 .
                        "," . $gdl->Advertising_expire .
                        "," . $gdl->Advertising_pay .
                        "\");'>");
                    if ($gdl->goods_parentid == 0) {
                        echo "<label for='id" . ($gdl->id)  . "' class='text-danger' style='  background-color:#ffecec;' >";
                        if($gdl->advertising_done==1){echo "<span style='color:green; background-color:#ececff;'>";}
                        echo $gdl->Advertising_title;
                        if($gdl->advertising_done==1){echo "</span>";}
                        echo "</label><br>";
                    } else {
                        echo  "< <label for='id" . ($gdl->id)  . "' class='text-dark' >";
                        echo  $gdl->Advertising_title;
                        echo "</label> ><br>";
                    }
                }
                $lss_delete =  explode('_', Auth::user()->user_lss)[3];
                ?>
            </div>


        </div>
        {{ Form::open(['url'=>'admin/advertisingok/advertisingok','id'=>'myform'])}}

        <input id="id" name="id" value="0" type="hidden">
        <input id="done" name="done" value="done" type="hidden">
        <button class="btn btn-success" onclick="submited()">تایید</button>

        <button class="btn btn-danger" onclick="submited2()">غیر فعال کردن </button>
        {{ Form::close()}}
        <hr>
        <div class="feild-group  m-2">
            عنوان: <span id='Advertising_title'></span>
        </div>

        <div class="feild-group m-2">
            متن اول: <span id='Advertising_str1'></span>
        </div>

        <div class="feild-group m-2">
            متن دوم: <span id='Advertising_str2'></span>
        </div>

        <div class="feild-group m-2">
            سئو:<span id='Advertising_seo'></span>
        </div>

        <div class="feild-group m-2">
            آدرس:<span id='Advertising_url'></span>
        </div>


        <div class="feild-group m-2">
            انقضاء: <span id='Advertising_expire'></span>

        </div>


        <div class="feild-group m-2">
            مبلغ قابل پرداخت:<span id='Advertising_pay'></span>
        </div>


        <div class="form-group row">
            <label for="Advertising_grp1" class="col-md-4 col-form-label text-md-right">{{App\Models\titels::gettitelsid(['id'=>1])->titles}}</label>

            <div class="col-md-6">
                <input id="Advertising_grp1" type="radio" class="form-check-input" name="Advertising_grp11" onchange="ckt(1)">
                <input id="Advertising_grp11" style="visibility:hidden;" type="checkbox" class="form-check-input" name="Advertising_grp1">
                <input id="Advertising_grp12" type="text" class="form-input" name="Advertising_grp_p1" value=' {{App\Models\price::getpriceid(['price_id'=>1])->price_fee}} ' readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="Advertising_grp2" class="col-md-4 col-form-label text-md-right">{{App\Models\titels::gettitelsid(['id'=>2])->titles}}</label>

            <div class="col-md-6">
                <input id="Advertising_grp2" type="radio" class="form-check-input" name="Advertising_grp11" onchange="ckt(2)">
                <input id="Advertising_grp21" style="visibility:hidden;" type="checkbox" class="form-check-input" name="Advertising_grp2">
                <input id="Advertising_grp22" type="text" class="form-input" name="Advertising_grp_p2" value=' {{App\Models\price::getpriceid(['price_id'=>2])->price_fee}} ' readonly>

            </div>
        </div>


        <div class="form-group row">
            <label for="Advertising_grp3" class="col-md-4 col-form-label text-md-right">{{App\Models\titels::gettitelsid(['id'=>3])->titles}}</label>

            <div class="col-md-6">
                <input id="Advertising_grp3" type="radio" class="form-check-input" name="Advertising_grp11" onchange="ckt(3)">
                <input id="Advertising_grp31" style="visibility:hidden;" type="checkbox" class="form-check-input" name="Advertising_grp3">
                <input id="Advertising_grp32" type="text" class="form-input" name="Advertising_grp_p3" value=' {{App\Models\price::getpriceid(['price_id'=>3])->price_fee}} ' readonly>

            </div>
        </div>

        <div class="form-group row">
            <label for="Advertising_grp4" class="col-md-4 col-form-label text-md-right">{{App\Models\titels::gettitelsid(['id'=>5])->titles}}</label>

            <div class="col-md-6">
                <input id="Advertising_grp4" type="radio" class="form-check-input" name="Advertising_grp11" onchange="ckt(4)">
                <input id="Advertising_grp411" style="visibility:hidden;" type="checkbox" class="form-check-input" name="Advertising_grp4">
                <input id="Advertising_grp42" type="text" class="form-input" name="Advertising_grp_p4" value=' {{App\Models\price::getpriceid(['price_id'=>4])->price_fee}} ' readonly>
            </div>
        </div>
        <input id="dt" value=1 type='hodden1'>



        <div class="form-control p-2 " style="
         display: grid;
         grid-template-columns: repeat(2, auto-fill);
         grid-template-rows: auto;
         "> 
            <div class="text-center m-2 p-2 col-md-4 col-sm-6">
                <img src="" width=100px id="mp">
            </div>

        </div>

    </div>
</div>
<div id="hhhh"></div>
@endsection

<body onload="expd(1)"></body>

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
        document.getElementById('Advertising_title').innerText = (this1.replace('<', '').replace('>', '')).split(',')[0];
        document.getElementById('Advertising_str1').innerText = (this1.replace('<', '').replace('>', '')).split(',')[1];
        document.getElementById('mp').src = "../../uploadadve/img_" + (this1.replace('<', '').replace('>', '')).split(',')[2] + ".jpg";
        document.getElementById('id').value = (this1.replace('<', '').replace('>', '')).split(',')[2] ;
        document.getElementById('Advertising_str2').innerText = (this1.replace('<', '').replace('>', '')).split(',')[3];
        document.getElementById('Advertising_seo').innerText = (this1.replace('<', '').replace('>', '')).split(',')[4];
        document.getElementById('Advertising_url').innerText = (this1.replace('<', '').replace('>', '')).split(',')[5];

        document.getElementById('Advertising_grp1').checked = ((this1.replace('<', '').replace('>', '')).split(',')[6] == 1 ? true : false);
        document.getElementById('Advertising_grp2').checked = ((this1.replace('<', '').replace('>', '')).split(',')[7] == 1 ? true : false);
        document.getElementById('Advertising_grp3').checked = ((this1.replace('<', '').replace('>', '')).split(',')[8] == 1 ? true : false);
        document.getElementById('Advertising_grp4').checked = ((this1.replace('<', '').replace('>', '')).split(',')[9] == 1 ? true : false);

        document.getElementById('Advertising_grp11').checked = document.getElementById('Advertising_grp1').checked;
        document.getElementById('Advertising_grp21').checked = document.getElementById('Advertising_grp2').checked;
        document.getElementById('Advertising_grp31').checked = document.getElementById('Advertising_grp3').checked;
        document.getElementById('Advertising_grp411').checked = document.getElementById('Advertising_grp4').checked;

        var xx = (this1.replace('<', '').replace('>', '')).split(',')[10];
        document.getElementById('Advertising_pay').innerText = (this1.replace('<', '').replace('>', '')).split(',')[11];
        document.getElementById('Advertising_expire').innerText=xx;
    }

    function ckt(tt) {
        document.getElementById('Advertising_grp11').checked = document.getElementById('Advertising_grp1').checked;
        document.getElementById('Advertising_grp21').checked = document.getElementById('Advertising_grp2').checked;
        document.getElementById('Advertising_grp31').checked = document.getElementById('Advertising_grp3').checked;
        document.getElementById('Advertising_grp411').checked = document.getElementById('Advertising_grp4').checked;

        if (document.getElementById('Advertising_grp11').checked) {
            document.getElementById('Advertising_pay').value =
                document.getElementById('dt').value *
                document.getElementById('Advertising_grp12').value;
        } else if (document.getElementById('Advertising_grp21').checked) {
            document.getElementById('Advertising_pay').value =
                document.getElementById('dt').value *
                document.getElementById('Advertising_grp22').value;
        } else if (document.getElementById('Advertising_grp31').checked) {
            document.getElementById('Advertising_pay').value =
                document.getElementById('dt').value *
                document.getElementById('Advertising_grp32').value;
        } else if (document.getElementById('Advertising_grp411').checked) {
            document.getElementById('Advertising_pay').value =
                document.getElementById('dt').value *
                document.getElementById('Advertising_grp42').value;
        }
        // alert(tt.checked);
    }

    function expd(id) {
        // let tm1 = addDays(document.getElementById('Advertising_expire').value, id);
        let today = new addDays(Date(), id);
        document.getElementById('Advertising_expirefa').value = today.toLocaleDateString('fa-IR');
        document.getElementById('Advertising_expire').value = today.toLocaleDateString('en-us');
        document.getElementById('dt').value = id;
        ckt(1);
    }

    function addDays(date, days) {
        var result = new Date(date);
        result.setDate(result.getDate() + days);
        return result;
    }

    function chclk(this1) {
        document.getElementById('goods_name').value = this1.value;
    }
    expd(1);
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