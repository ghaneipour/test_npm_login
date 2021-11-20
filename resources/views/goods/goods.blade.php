@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
        <h3><i class="fs-4 bi-basket2 m-2 p-2"></i>   محصول ها</h3>
    </div>
    <div class="panel_content">
        لیست محصول ها عبارتند از:
    </div>
    <div class="w-50 form-control">

        {{ Form::open(['url'=>'admin/goods','files'=>true])}}

        <div class="feild-group  m-2 bg-light text-danger p-2">
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
 
<style>
    .feild-group span {
        color: red;
    }
</style>