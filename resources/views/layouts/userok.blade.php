@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
        <h3><i class="fs-4 bi-people m-2 p-2"></i>تایید کاربران</h3>
    </div>
    <div class="panel_content">
        لیست کاربر ها عبارتند از:
    </div>
    <div class="w-50 form-control">

        <div class="form-control bg-light text-danger">
            {{ Form::label('id','نام کاربر برای تایید:')}}
            <div class="feild-group p-2 m-2 bg-light text-dark">

                <?php
                $catlist = App\Models\user::query()->get();
                if ($catlist) {
                    foreach ($catlist as $catlist1 => $gdl) {
                        echo ("<input type=radio class='p-2 m-2' name='id' id='id" . $gdl->id . "' value='" . $gdl->id . "' onchange='rdoch(\"");
                        echo ($gdl->name . "," .
                            $gdl->email . "," .
                            $gdl->id . "," .
                            $gdl->user_lss . "," .
                            $gdl->lss_grp1 . "," .
                            $gdl->lss_grp2 . "," .
                            $gdl->lss_grp3 . "," .
                            $gdl->mobile . "," .
                            $gdl->expire . "," .
                            $gdl->address . "," .
                            $gdl->melicode . "," .
                            $gdl->postalcode . "," .
                            $gdl->companeyname . "," .
                            $gdl->city . "," .
                            "\");'>");
                        echo "<label for='id" . $gdl->id . "'  style='background-color:#ffecec;color:#ff0000'>" ;
                        if($gdl->users_done==1){echo '<span style="background-color:#ececff;color:#000000">';}
                        echo $gdl->name ;
                        if($gdl->users_done==1){echo '</span> ';}
                        echo "</label><br>";
                    }
                }
                ?>
            </div>
        </div>
        {{ Form::open(['url'=>'admin/userok/userok','files'=>true,'id'=>'myform'])}}
        <input name="id" id="id" type="hidden" value="1">
        <input name="done" id="done" type="hidden" value="1">

        <div class="feild-group p-3">
            <button class="btn btn-success" onclick="submited()">تایید کاربر</button>
         
            <button class="btn btn-danger" onclick="submited2()">غیر فعال کردن کاربر</button>
        </div>
        {{ Form::close()}}
        <hr>


        <span class="feild-group m-2 d-inline">
            نام کاربر: <div id='name' class="d-inline text-danger"></div>
        </span>
        <br>
        <span class="feild-group m-2 d-inline">
            کد ملی : <div id='melicode' class="d-inline text-danger"></div>
        </span>
        <br>
        <span class="feild-group m-2 d-inline">
            شرکت: <div id='companeyname' class="d-inline text-danger"></div>
        </span>
        <br>
        <span class="feild-group m-2 d-inline">
            ایمیل: <div id='email' class="d-inline text-danger"></div>
        </span>
        <br>
        <span class="feild-group m-2 d-inline">
            موبایل : <div id='mobile' class="d-inline text-danger"></div>
        </span>
        <br>
        <span class="feild-group m-2 d-inline">
            آدرس : <div id='address' class="d-inline text-danger"></div>
        </span>

        <br>
        <span class="feild-group m-2 d-inline">
            کد پستی : <div id='postalcode' class="d-inline text-danger"></div>
        </span>
        <br>
        <span class="feild-group m-2 d-inline">
            شهر : <div id='city' class="d-inline text-danger"></div>
        </span>
        <br>
        <span class="feild-group m-2 d-inline">
            انقضاء: <div id='expire' class="d-inline text-danger"></div>
        </span>
        <hr>
        <div class="feild-group m-2 d-inline">
            <label>سطح دسترسی</label><br>

            <label for='user_lss1' class='checkbox-inline'>
                <input type=checkbox name='user_lss1' id='user_lss1'>
                ورود به سامانه </label><br>

            <label for='user_lss2' class='checkbox-inline'>
                <input type=checkbox name='user_lss2' id='user_lss2'>
                درج اطلاعات جدید </label><br>

            <label for='user_lss3' class='checkbox-inline'>
                <input type=checkbox name='user_lss3' id='user_lss3'>
                ویرایش اطلاعات </label><br>

            <label for='user_lss4' class='checkbox-inline'>
                <input type=checkbox name='user_lss4' id='user_lss4'>
                حذف اطلاعات </label><br>

            <label for='user_lss5' class='checkbox-inline'>
                <input type=checkbox name='user_lss5' id='user_lss5'>
                دسترسی به منابع </label><br>
            <hr>
            <label for='lss_grp1' class='checkbox-inline'>
                <input type=checkbox name='lss_grp1' id='lss_grp1'>
                {{App\Models\titels::gettitelsid(['id'=>1])->titles}} </label><br>

            <label for='lss_grp2' class='checkbox-inline'>
                <input type=checkbox name='lss_grp2' id='lss_grp2'>
                {{App\Models\titels::gettitelsid(['id'=>2])->titles}} </label><br>

            <label for='lss_grp3' class='checkbox-inline'>
                <input type=checkbox name='lss_grp3' id='lss_grp3'>
                {{App\Models\titels::gettitelsid(['id'=>3])->titles}}</label><br>


        </div>
        <input name="user_lss" id="user_lss" type="hidden" value="0_0_0_0_0_0_">


    </div>
</div>
@endsection

<script>
    // $('#myform').submit(function() {
    //       submited();
    //     return true; // return false to cancel form action
    // });

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
        // document.getElementById('ttt').innerHTML = ((this1.replace('<', '').replace('>', '')).split(',')[3]).split('_')[1];
        document.getElementById('name').innerText = (this1.replace('<', '').replace('>', '')).split(',')[0];
        document.getElementById('email').innerText = (this1.replace('<', '').replace('>', '')).split(',')[1];
        document.getElementById('user_lss1').checked = (((this1.replace('<', '').replace('>', '')).split(',')[3]).split('_')[0] == 1 ? true : false);
        document.getElementById('user_lss2').checked = (((this1.replace('<', '').replace('>', '')).split(',')[3]).split('_')[1] == 1 ? true : false);
        document.getElementById('user_lss3').checked = (((this1.replace('<', '').replace('>', '')).split(',')[3]).split('_')[2] == 1 ? true : false);
        document.getElementById('user_lss4').checked = (((this1.replace('<', '').replace('>', '')).split(',')[3]).split('_')[3] == 1 ? true : false);
        document.getElementById('user_lss5').checked = (((this1.replace('<', '').replace('>', '')).split(',')[3]).split('_')[4] == 1 ? true : false);
        document.getElementById('lss_grp1').checked = (((this1.replace('<', '').replace('>', '')).split(',')[4]) == 1 ? true : false);
        document.getElementById('lss_grp2').checked = (((this1.replace('<', '').replace('>', '')).split(',')[5]) == 1 ? true : false);
        document.getElementById('lss_grp3').checked = (((this1.replace('<', '').replace('>', '')).split(',')[6]) == 1 ? true : false);
        document.getElementById('mobile').innerText = (this1.replace('<', '').replace('>', '')).split(',')[7];
        document.getElementById('expire').innerText = (this1.replace('<', '').replace('>', '')).split(',')[8];
        document.getElementById('address').innerText = (this1.replace('<', '').replace('>', '')).split(',')[9];
        document.getElementById('melicode').innerText = (this1.replace('<', '').replace('>', '')).split(',')[10];
        document.getElementById('postalcode').innerText = (this1.replace('<', '').replace('>', '')).split(',')[11];
        document.getElementById('companeyname').innerText = (this1.replace('<', '').replace('>', '')).split(',')[12];
        document.getElementById('city').innerText = (this1.replace('<', '').replace('>', '')).split(',')[13];
        document.getElementById('id').value = (this1.replace('<', '').replace('>', '')).split(',')[2];

    }

    function chclk(this1) {
        document.getElementById('name').value = this1.value;
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