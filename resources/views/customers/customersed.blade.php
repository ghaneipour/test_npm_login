@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
    <h3><i class="fs-4 bi-people m-2 p-2"></i>ویرایش مشتریان ها</h3>
    </div>
    <div class="panel_content">
        لیست مشتری ها عبارتند از:
    </div>
    <div class="w-50 form-control">




        {{ Form::open(['url'=>'admin/customers/edit','files'=>true])}}
        <div class="form-control bg-info text-danger">
            {{ Form::label('id','نام مشتری برای ویرایش:')}}
            <div class="feild-group p-2 m-2 bg-light text-dark">
                
                <?php
                foreach ($catlist as $catlist1 => $p) { 
                    // dd($catlist1);
                    // dd($catlist );
                    if (str_contains($p ,'دسته اصلی')) {
                    } else {
                    echo "<input type=radio class='p-2 m-2' name='id' id='id" . ($catlist1)  . "' value='" . ($catlist1)  . "' onchange='rdoch(\"".$p."\");'> <label for='id" . ($catlist1)  . "' class='text-dark' >".$p."</label><br>";
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
            {{ Form::label('customers_parentid','زیر دسته')}}
            {{ Form::select('customers_parentid',$catlist,0 , array('class' => 'form-select')) }}
            @if($errors->has('customers_parentid'))
            <span>{{ $errors->First('customers_parentid') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('customers_name','نام مشتری')}}
            {{ Form::text('customers_name',null, array('class' => 'form-control'))}}
            @if($errors->has('customers_name'))
            <span>{{ $errors->First('customers_name') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('customers_url','آدرس مشتری')}}
            {{ Form::text('customers_url',null, array('class' => 'form-control'))}}
            @if($errors->has('customers_url'))
            <span>{{ $errors->First('customers_url') }}</span>
            @endif
        </div>
        
        <div class="form-control p-2">
            <div class="feild-group m-2">

                {{ Form::label('customers_ico','تصویر مشتری')}}
                {{ Form::file ('customers_ico',null)}}
                @if($errors->has('customers_ico'))
                <br><span>{{ $errors->First('customers_ico') }}</span>
                @endif
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
        document.getElementById('customers_name').value = this1.replace('<' ,'').replace('>' ,'');
    }

    function chclk(this1) {
        document.getElementById('customers_name').value = this1.value;
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