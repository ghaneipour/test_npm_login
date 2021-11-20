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




        {{ Form::open(['url'=>'admin/users/edit','files'=>true])}}
        <div class="form-control bg-light text-danger">
            {{ Form::label('id','نام کاربر برای ویرایش:')}}
            <div class="feild-group p-2 m-2 bg-light text-dark">
                
                <?php
                if($catlist){
                    foreach($catlist as $catlist1 =>$gdl)
                    {
                        echo("<input type=radio class='p-2 m-2' name='id' id='id".$gdl->id."' value='".$gdl->id."' onchange='rdoch(\"");
                        echo( $gdl->name.",".$gdl->email.",".$gdl->id.",".$gdl->user_lss."\");'>"); 
                        echo("<label for='id".$gdl->id."' class='text-dark' >". $gdl->name."</label><br>"); 
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
            {{ Form::label('email','ایمیل ')}}
            {{ Form::text('email',null, array('class' => 'form-control'))}}
            @if($errors->has('email'))
            <span>{{ $errors->First('email') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('user_lss','سطح دسترسی')}}
            {{ Form::text('user_lss',null, array('class' => 'form-control'))}}
            @if($errors->has('user_lss'))
            <span>{{ $errors->First('user_lss') }}</span>
            @endif
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
        document.getElementById('name').value =(this1.replace('<' ,'').replace('>' ,'')).split(',')[0];
        document.getElementById('email').value = (this1.replace('<' ,'').replace('>' ,'')).split(',')[1];                                       
        document.getElementById('user_lss').value = (this1.replace('<' ,'').replace('>' ,'')).split(',')[3];                                       
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