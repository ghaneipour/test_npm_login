@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
    <h3><i class="fs-4 bi-people m-2 p-2"></i>ویرایش محصول ها</h3>
    </div>
    <div class="panel_content">
        لیست محصول ها عبارتند از:
    </div>
    <div class="w-50 form-control">




        {{ Form::open(['url'=>'admin/goods/edit','files'=>true])}}
        <div class="form-control bg-light text-danger">
            {{ Form::label('id','نام محصول برای ویرایش:')}}
            <div class="feild-group p-2 m-2 bg-light text-dark">
                
                <?php
                foreach ($catlist as $catlist1 => $p) { 
                    // dd($catlist1);
                    // dd($catlist );
                    if (str_contains($p ,'دسته اصلی')) {
                    } else {
                    echo "<input type=radio class='p-2 m-2' name=id value='" . ($catlist1)  . "' onchange='rdoch(\"".$p."\");'>" . $p . "<br>";
                    }
                }
                ?>
            </div>
            <input id="dell" name="dell" value="حذف" type=submit> 
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

        <div class="form-control p-2">
            <div class="feild-group m-2">

                {{ Form::label('goods_ico','تصویر محصول')}}
                {{ Form::file ('goods_ico',null)}}
                @if($errors->has('goods_ico'))
                <br><span>{{ $errors->First('goods_ico') }}</span>
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
        document.getElementById('goods_name').value = this1.replace('<' ,'').replace('>' ,'');
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