@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
        <h3><i class="fs-4 bi-people m-2 p-2"></i> گروه مشتری ها</h3>
    </div>
    <div class="panel_content">
        لیست مشتری ها عبارتند از:
    </div>
    <div class="w-50 form-control">

        {{ Form::open(['url'=>'admin/customers','files'=>true])}}

        <div class="feild-group  m-2 bg-info text-danger p-2">
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
 
<style>
    .feild-group span {
        color: red;
    }
</style>