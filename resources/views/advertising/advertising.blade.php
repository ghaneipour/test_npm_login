@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
        <h3><i class="fs-4 bi-basket2 m-2 p-2"></i> تبلیغ ها</h3>
    </div>
    <div class="panel_content">
        لیست تبلیغ ها عبارتند از:
    </div>
    <div class="w-50 form-control">

        {{ Form::open(['url'=>'admin/advertising/add','files'=>true])}}

        <hr>
        <div class="feild-group  m-2">
            {{ Form::label('Advertising_title','عنوان')}}
            {{ Form::text('Advertising_title',0 , array('class' => 'form-control')) }}
            @if($errors->has('Advertising_title'))
            <span>{{ $errors->First('Advertising_title') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('Advertising_str1','متن اول')}}
            {{ Form::text('Advertising_str1',null, array('class' => 'form-control'))}}
            @if($errors->has('Advertising_str1'))
            <span>{{ $errors->First('Advertising_str1') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('Advertising_str2','متن دوم')}}
            {{ Form::text('Advertising_str2',null, array('class' => 'form-control'))}}
            @if($errors->has('Advertising_str2'))
            <span>{{ $errors->First('Advertising_str2') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('Advertising_seo','سئو')}}
            {{ Form::text('Advertising_seo',null, array('class' => 'form-control'))}}
            @if($errors->has('Advertising_seo'))
            <span>{{ $errors->First('Advertising_seo') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('Advertising_url','آدرس')}}
            {{ Form::text('Advertising_url',null, array('class' => 'form-control'))}}
            @if($errors->has('Advertising_url'))
            <span>{{ $errors->First('Advertising_url') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('Advertising_expire','انقضاء')}}
            <input type="text" disabled class="form-control" id="Advertising_expirefa" name="Advertising_expirefa" dir="ltr" />
            <input type="hidden" class="form-control" id="Advertising_expire" name="Advertising_expire" dir="ltr" />
            <a class='btn btn-info' onclick="expd(1)">1 روز</a>
            <a class='btn btn-info' onclick="expd(10)">10 روز</a>
            <a class='btn btn-info' onclick="expd(30)">30 روز</a>

            @if($errors->has('Advertising_expire'))
            <span>{{ $errors->First('Advertising_expire') }}</span>
            @endif
        </div>



        <div class="feild-group m-2">
            {{ Form::label('Advertising_pay','مبلغ قابل پرداخت')}}
            {{ Form::text('Advertising_pay',0, array('class' => 'form-control'))}}
            @if($errors->has('Advertising_pay'))
            <span>{{ $errors->First('Advertising_pay') }}</span>
            @endif
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
        <input id="dt" value=1 type='hodden'>

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

<body onload="expd(1)"></body>

<script>
    function ckt(tt) {
        document.getElementById('Advertising_grp11').checked = document.getElementById('Advertising_grp1').checked;
        document.getElementById('Advertising_grp21').checked = document.getElementById('Advertising_grp2').checked;
        document.getElementById('Advertising_grp31').checked = document.getElementById('Advertising_grp3').checked;
        document.getElementById('Advertising_grp411').checked = document.getElementById('Advertising_grp4').checked;

        if (document.getElementById('Advertising_grp11').checked) {
            document.getElementById('Advertising_pay').value =
                document.getElementById('dt').value * 
                document.getElementById('Advertising_grp12').value;
        }
        else if (document.getElementById('Advertising_grp21').checked) {
            document.getElementById('Advertising_pay').value =
                document.getElementById('dt').value * 
                document.getElementById('Advertising_grp22').value;
        }         
        else if (document.getElementById('Advertising_grp31').checked) {
            document.getElementById('Advertising_pay').value =
                document.getElementById('dt').value * 
                document.getElementById('Advertising_grp32').value;
        }         
        else if (document.getElementById('Advertising_grp411').checked) {
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
    expd(1);
</script>

<style>
    .feild-group span {
        color: red;
    }
</style>