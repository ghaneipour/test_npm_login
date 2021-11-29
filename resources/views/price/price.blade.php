@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
        <h3><i class="fs-4 bi-currency-exchange m-2 p-2"></i> تعرفه ها</h3>
    </div>
    <div class="panel_content">
        لیست تعرفه ها عبارتند از:
    </div>
    <div class="w-50 form-control">

        {{ Form::open(['url'=>'admin/price/add','files'=>true])}}
 

        <div class="feild-group m-2">
            {{ Form::label('price_title','عنوان')}}
            {{ Form::text('price_title',null, array('class' => 'form-control'))}}
            @if($errors->has('price_title'))
            <span>{{ $errors->First('price_title') }}</span>
            @endif
        </div>
        <div class="feild-group m-2">
            {{ Form::label('price_fee','مبلغ تومان در روز')}}
            {{ Form::text('price_fee',null, array('class' => 'form-control'))}}
            @if($errors->has('price_fee'))
            <span>{{ $errors->First('price_fee') }}</span>
            @endif
        </div>
        
        <div class="feild-group m-2">
            {{ Form::label('price_id','کد')}}
            {{ Form::text('price_id',null, array('class' => 'form-control'))}}
            @if($errors->has('price_id'))
            <span>{{ $errors->First('price_id') }}</span>
            @endif
        </div>
        
        
        <div class="form-group row">
            <label for="price_grp1" class="col-md-4 col-form-label text-md-right">{{App\Models\titels::gettitelsid(['id'=>1])->titles}}</label>
            
            <div class="col-md-6">
                <input id="price_grp1" type="checkbox" class="form-check-input" name="price_grp1">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="price_grp2" class="col-md-4 col-form-label text-md-right">{{App\Models\titels::gettitelsid(['id'=>2])->titles}}</label>
            
            <div class="col-md-6">
                <input id="price_grp2" type="checkbox" class="form-check-input" name="price_grp2">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="price_grp3" class="col-md-4 col-form-label text-md-right">{{App\Models\titels::gettitelsid(['id'=>3])->titles}}</label>
            
            <div class="col-md-6">
                <input id="price_grp3" type="checkbox" class="form-check-input" name="price_grp3">
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