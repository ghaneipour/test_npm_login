@extends('layouts.admin')

<link rel="stylesheet" href="http://babakhani.github.io/PersianWebToolkit/beta/lib/persian-datepicker/dist/css/persian-datepicker.css" />
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="http://babakhani.github.io/PersianWebToolkit/beta/lib/persian-date/dist/persian-date.js"></script>
<script src="http://babakhani.github.io/PersianWebToolkit/beta/lib/persian-datepicker/dist/js/persian-datepicker.js"></script>


@section('content')
<div class="panel form-control p-3">
    <div class="header">
        <h3><i class="fs-4 bi-basket2 m-2 p-2"></i>ویرایش تبلیغ ها</h3>
    </div>
    <div class="panel_content">
        لیست تبلیغ ها عبارتند از:
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


        {{ Form::open(['url'=>'admin/advertising/edit','files'=>true])}}
        <input class="example3" type="text">
        <div class="form-control bg-light text-danger">
            {{ Form::label('id','نام تبلیغ برای ویرایش:')}}

            <div class="feild-group p-2 m-2 bg-light text-dark">
                <?php


                $getgoods = App\Models\advertising::query()->get();
                // foreach ($catlist as $catlist1 => $p) { 
                //     // dd($catlist1);
                //     // dd($catlist );
                //     if (str_contains($p ,'دسته اصلی')) {
                //     } else {
                //         if(str_contains($p,'<')){
                //             echo"  ```` ";
                //         }
                //     echo "<input type=radio class='p-2 m-2' name='id' id='id" . ($catlist1)  . "' value='" . ($catlist1)  . "' onchange='rdoch(\"".$p."\");'> <label for='id" . ($catlist1)  . "' class='text-dark' >".$p."</label><br>";
                //     }
                // }


                foreach ($getgoods as $goodli => $gdl) {
                    echo ("<input type=radio class='p-2 m-2'  name='id' id='id"
                        . ($gdl->id)  . "'  value='"
                        . $gdl->id . "' onchange='rdoch(\"");

                    //$dx = explode('-', str_replace(' ', '-', $gdl->Advertising_expire));
                    //
                    //if ($dx[0] == '0000') {
                    //} else {
                        //$nd = App\Models\advertising::gregorian_to_jalali($dx[0], $dx[1], $dx[2]);
                        // dd($nd);
                        //$gdl->Advertising_expire = $nd[0] . '-' . $nd[1] . '-' . $nd[2] . ' ' . $dx[3];
                        // dd($gdl);
                    //}
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
                        echo ("<label for='id" . ($gdl->id)  .
                            "' class='text-dark' >" . $gdl->Advertising_title . "</label><br>");
                    } else {
                        echo ("< <label for='id" . ($gdl->id)  .
                            "' class='text-dark' >" . $gdl->Advertising_title . "</label> ><br>");
                    }
                }
                $lss_delete =  explode('_', Auth::user()->user_lss)[3];
                ?>
            </div>
            @if($lss_delete==1)
            <input id="dell" name="dell" value="حذف" type=submit>
            @endif
        </div>
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

            امروز: <input type=text readonly disabled class="example2" style='width:300px'><br>
            <input class="alt-field-example" /><br>

            {{ Form::label('Advertising_expire','انقضاء')}}
            
            <input type="text" disabled class="form-control" id="Advertising_expirefa" name="Advertising_expirefa" dir="ltr" />
            <input type="hidden"   class="form-control" id="Advertising_expire" name="Advertising_expire" dir="ltr" />
            <a class='btn btn-info' onclick="expd(1)">1 روز</a>
            <a class='btn btn-info' onclick="expd(10)">10 روز</a>
            <a class='btn btn-info' onclick="expd(30)">30 روز</a>
            @if($errors->has('Advertising_expire'))
            <span>{{ $errors->First('Advertising_expire') }}</span>
            @endif
        </div>


        <div class="feild-group m-2">
            {{ Form::label('Advertising_pay','مبلغ قابل پرداخت')}}
            {{ Form::text('Advertising_pay',null, array('class' => 'form-control'))}}
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
<div id="hhhh"></div>
@endsection
<body onload="expd(1)"></body>
        
<script>
    function rdoch(this1) {
        document.getElementById('Advertising_title').value = (this1.replace('<', '').replace('>', '')).split(',')[0];
        document.getElementById('Advertising_str1').value = (this1.replace('<', '').replace('>', '')).split(',')[1];
        document.getElementById('mp').src = "../../uploadadve/img_" + (this1.replace('<', '').replace('>', '')).split(',')[2] + ".jpg";
        document.getElementById('Advertising_str2').value = (this1.replace('<', '').replace('>', '')).split(',')[3];
        document.getElementById('Advertising_seo').value = (this1.replace('<', '').replace('>', '')).split(',')[4];
        document.getElementById('Advertising_url').value = (this1.replace('<', '').replace('>', '')).split(',')[5];

        document.getElementById('Advertising_grp1').checked = ((this1.replace('<', '').replace('>', '')).split(',')[6] == 1 ? true : false);
        document.getElementById('Advertising_grp2').checked = ((this1.replace('<', '').replace('>', '')).split(',')[7] == 1 ? true : false);
        document.getElementById('Advertising_grp3').checked = ((this1.replace('<', '').replace('>', '')).split(',')[8] == 1 ? true : false);
        document.getElementById('Advertising_grp4').checked = ((this1.replace('<', '').replace('>', '')).split(',')[9] == 1 ? true : false);
        
         document.getElementById('Advertising_grp11').checked = document.getElementById('Advertising_grp1').checked;
        document.getElementById('Advertising_grp21').checked = document.getElementById('Advertising_grp2').checked;
        document.getElementById('Advertising_grp31').checked = document.getElementById('Advertising_grp3').checked;
        document.getElementById('Advertising_grp411').checked = document.getElementById('Advertising_grp4').checked;

        var xx = (this1.replace('<', '').replace('>', '')).split(',')[10];
        document.getElementById('Advertising_pay').value = (this1.replace('<', '').replace('>', '')).split(',')[11];

        document.getElementById('Advertising_expirefa').value =new Date(xx).toLocaleDateString('fa-IR');
        document.getElementById('Advertising_expire').value =new Date(xx).toLocaleDateString('en-us'); 

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
        let today = new addDays(Date(),id);
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