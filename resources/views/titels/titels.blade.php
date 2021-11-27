@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
        <h3><i class="fs-4 bi-people m-2 p-2"></i>   عنوان ها</h3>
    </div>
    <div class="panel_content">
        لیست عنوان ها عبارتند از:
    </div>
    <div class="w-50 form-control">

        {{ Form::open(['url'=>'admin/titels/add','files'=>true])}}

         

        <div class="feild-group m-2">
            {{ Form::label('titles','عنوان')}}
            {{ Form::text('titles',null, array('class' => 'form-control'))}}
            @if($errors->has('titles'))
            <span>{{ $errors->First('titles') }}</span>
            @endif
        </div>
        <div class="feild-group m-2">
            {{ Form::label('texts','توضیحات')}}
            {{ Form::text('texts',null, array('class' => 'form-control'))}}
            @if($errors->has('texts'))
            <span>{{ $errors->First('texts') }}</span>
            @endif
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