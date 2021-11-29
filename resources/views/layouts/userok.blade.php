@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
        <h3><i class="fs-4 bi-people m-2 p-2"></i>ویرایش کاربران</h3>
    </div>
    <div class="panel_content">
        لیست کاربر ها عبارتند از:
    </div>
    <div class="w-50 form-control">  

        {{ Form::open(['url'=>'admin/users/edit','files'=>true,'id'=>'myform'])}}
        <div class="form-control bg-light text-danger">
            {{ Form::label('id','نام کاربر برای ویرایش:')}}
            <div class="feild-group p-2 m-2 bg-light text-dark">

                <?php
                if ($catlist) {
                    foreach ($catlist as $catlist1 => $gdl) {
                        echo ("<input type=radio class='p-2 m-2' name='id' id='id" . $gdl->id . "' value='" . $gdl->id . "' onchange='rdoch(\"");
                        echo (
                            $gdl->name . "," . 
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
                        echo ("<label for='id" . $gdl->id . "' class='text-dark' >" . $gdl->name . "</label><br>");
                    }
                }
                ?>
            </div>
            <input id="dell" name="dell" value="حذف" type=submit>
        </div>
        <hr>


        <div class="feild-group m-2">
            {{ Form::label('name','نام کاربر')}}
            {{ Form::text('name',null, array('class' => 'form-control'))}}
            @if($errors->has('name'))
            <span>{{ $errors->First('name') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('melicode','کد ملی ')}}
            {{ Form::text('melicode',null, array('class' => 'form-control'))}}
            @if($errors->has('melicode'))
            <span>{{ $errors->First('melicode') }}</span>
            @endif
        </div>
        
                <div class="feild-group m-2">
                    {{ Form::label('companeyname','شرکت ')}}
                    {{ Form::text('companeyname',null, array('class' => 'form-control'))}}
                    @if($errors->has('companeyname'))
                    <span>{{ $errors->First('companeyname') }}</span>
                    @endif
                </div>

        <div class="feild-group m-2">
            {{ Form::label('email','ایمیل ')}}
            {{ Form::text('email',null, array('class' => 'form-control'))}}
            @if($errors->has('email'))
            <span>{{ $errors->First('email') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('mobile','موبایل ')}}
            {{ Form::text('mobile',null, array('class' => 'form-control'))}}
            @if($errors->has('mobile'))
            <span>{{ $errors->First('mobile') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('address','آدرس ')}}
            {{ Form::text('address',null, array('class' => 'form-control'))}}
            @if($errors->has('address'))
            <span>{{ $errors->First('address') }}</span>
            @endif
        </div>


        <div class="feild-group m-2">
            {{ Form::label('postalcode','کد پستی ')}}
            {{ Form::text('postalcode',null, array('class' => 'form-control'))}}
            @if($errors->has('postalcode'))
            <span>{{ $errors->First('postalcode') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('city','شهر ')}}
            {{ Form::text('city',null, array('class' => 'form-control'))}}
            @if($errors->has('city'))
            <span>{{ $errors->First('city') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('expire','انقضاء ')}}
            {{ Form::text('expire',null, array('class' => 'form-control'))}}
            @if($errors->has('expire'))
            <span>{{ $errors->First('expire') }}</span>
            @endif
        </div>
<hr>
        <div class="feild-group m-2">
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

        {{ Form::close()}}
        <div class="feild-group p-3">
            <button class="btn btn-success" onclick="submited()">ذخیره</button>
        </div>

    </div>
</div>
@endsection

<script>
    // $('#myform').submit(function() {
    //       submited();
    //     return true; // return false to cancel form action
    // });

    function submited() {
        var sss = "";
        sss += (document.getElementById('user_lss1').checked==true ? 1 : 0) + "_";
        sss += (document.getElementById('user_lss2').checked==true ? 1 : 0) + "_";
        sss += (document.getElementById('user_lss3').checked==true ? 1 : 0) + "_";
        sss += (document.getElementById('user_lss4').checked==true ? 1 : 0) + "_";
        sss += (document.getElementById('user_lss5').checked==true ? 1 : 0) + "_";
        document.getElementById('user_lss').value = sss;
        document.getElementById('myform').submit();
        // alert("sssooo="+sss);
       }

    function rdoch(this1) {
        // document.getElementById('ttt').innerHTML = ((this1.replace('<', '').replace('>', '')).split(',')[3]).split('_')[1];
        document.getElementById('name').value = (this1.replace('<', '').replace('>', '')).split(',')[0];
        document.getElementById('email').value = (this1.replace('<', '').replace('>', '')).split(',')[1];
        document.getElementById('user_lss1').checked = (((this1.replace('<', '').replace('>', '')).split(',')[3]).split('_')[0] == 1 ? true : false);
        document.getElementById('user_lss2').checked = (((this1.replace('<', '').replace('>', '')).split(',')[3]).split('_')[1] == 1 ? true : false);
        document.getElementById('user_lss3').checked = (((this1.replace('<', '').replace('>', '')).split(',')[3]).split('_')[2] == 1 ? true : false);
        document.getElementById('user_lss4').checked = (((this1.replace('<', '').replace('>', '')).split(',')[3]).split('_')[3] == 1 ? true : false);
        document.getElementById('user_lss5').checked = (((this1.replace('<', '').replace('>', '')).split(',')[3]).split('_')[4] == 1 ? true : false);
        document.getElementById('lss_grp1').checked = (((this1.replace('<', '').replace('>', '')).split(',')[4]) == 1 ? true : false);
        document.getElementById('lss_grp2').checked = (((this1.replace('<', '').replace('>', '')).split(',')[5]) == 1 ? true : false);
        document.getElementById('lss_grp3').checked = (((this1.replace('<', '').replace('>', '')).split(',')[6]) == 1 ? true : false);
        document.getElementById('mobile').value = (this1.replace('<', '').replace('>', '')).split(',')[7];
        document.getElementById('expire').value = (this1.replace('<', '').replace('>', '')).split(',')[8];
        document.getElementById('address').value = (this1.replace('<', '').replace('>', '')).split(',')[9];
        document.getElementById('melicode').value = (this1.replace('<', '').replace('>', '')).split(',')[10];
        document.getElementById('postalcode').value = (this1.replace('<', '').replace('>', '')).split(',')[11];
        document.getElementById('companeyname').value = (this1.replace('<', '').replace('>', '')).split(',')[12];
        document.getElementById('city').value = (this1.replace('<', '').replace('>', '')).split(',')[13];
          
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