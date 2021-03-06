@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
        <h3><i class="fs-4 bi-card-checklist m-2 p-2"></i>گروه بندی ها</h3>
    </div>
    <div class="panel_content">
        لیست گروه ها عبارتند از:
    </div>
    <div class="w-50 form-control">

        {{ Form::open(['url'=>'admin/category','files'=>true])}}

        <div class="feild-group  m-2">
            {{ Form::label('category_parentid','زیر دسته')}}
            {{ Form::select('category_parentid',$catlist,0 , array('class' => 'form-select')) }}
            @if($errors->has('category_parentid'))
            <span>{{ $errors->First('category_parentid') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('category_name','نام دسته')}}
            {{ Form::text('category_name',null, array('class' => 'form-control'))}}
            @if($errors->has('category_name'))
            <span>{{ $errors->First('category_name') }}</span>
            @endif
        </div>

        <div class="form-control p-2">
            <div class="feild-group m-2">

                {{ Form::label('category_ico','تصویر دسته')}}
                {{ Form::file ('category_ico',null)}}
                @if($errors->has('category_ico'))
                <br><span>{{ $errors->First('category_ico') }}</span>
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