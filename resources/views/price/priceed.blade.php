@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
        <h3><i class="fs-4 bi-currency-exchange m-2 p-2"></i>ویرایش تعرفه ها</h3>
    </div>
    <div class="panel_content">
       لیست تعرفه ها عبارتند از:
    </div>
    <div class="w-50 form-control">

        {{ Form::open(['url'=>'admin/price/edit','files'=>true])}}
        <div class="form-control bg-info text-danger">
            {{ Form::label('id','تعرفه برای ویرایش:')}}
            <div class="feild-group p-2 m-2 bg-light text-dark">

                <?php
                $catlist = App\Models\price::getpriceall();

                foreach ($catlist as $dd => $catlist1) {
                    $catlist1->price_title = str_replace(array("\r\n", "\n", "\r"), '_', $catlist1->price_title);
                    $catlist1->price_fee = str_replace(array("\r\n", "\n", "\r"), '_', $catlist1->price_fee);
                    echo $catlist1->price_id."-<input type=radio class='p-2 m-2' name='price_id' id='price_id" . 
                        ($catlist1->price_id)  .
                        "' value='" . ($catlist1->price_id)  .
                        "' onchange='rdoch(\""
                        . str_replace(array("\r\n", "\n", "\r"), '_', $catlist1->price_title) . ","
                        . str_replace(array("\r\n", "\n", "\r"), '_', $catlist1->price_fee) . ","
                        . str_replace(array("\r\n", "\n", "\r"), '_', $catlist1->price_id) . ","
                        . str_replace(array("\r\n", "\n", "\r"), '_', ($catlist1->price_grp1==null?0:1)) . ","
                        . str_replace(array("\r\n", "\n", "\r"), '_', ($catlist1->price_grp2==null?0:1)) . ","
                        . str_replace(array("\r\n", "\n", "\r"), '_', ($catlist1->price_grp3==null?0:1)) . ","
                        . str_replace(array("\r\n", "\n", "\r"), '_', $catlist1->price_id) . ","
                        . "\");'>";
                    // dd($catlist1);
                    echo "<label for='price_id" . ($catlist1->price_id)  .
                        "' class='text-dark' >" . $catlist1->price_title . "</label><br>";
                }
                $lss_delete =  explode('_', Auth::user()->user_lss)[3];
                ?>
            </div>
            @if($lss_delete==1)
            <input id="dell" name="dell" value="حذف" type=submit>
            @endif
        </div>
        <hr>

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
            {{ Form::label('newprice_id','کد')}}
            {{ Form::text('newprice_id',null, array('class' => 'form-control'))}}
            @if($errors->has('newprice_id'))
            <span>{{ $errors->First('newprice_id') }}</span>
            @endif
        </div>
        <input type="hidden" id="id" name="id" value="">
        
        <div class="form-group row">
            <label for="price_grp1" class="col-md-4 col-form-label text-md-right">
                {{App\Models\titels::gettitelsid(['id'=>1])->titles}}</label>
            
            <div class="col-md-6">
                <input id="price_grp1" type="checkbox" class="form-check-input" name="price_grp1">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="price_grp2" class="col-md-4 col-form-label text-md-right">
                {{App\Models\titels::gettitelsid(['id'=>2])->titles}}</label>
            
            <div class="col-md-6">
                <input id="price_grp2" type="checkbox" class="form-check-input" name="price_grp2">
            </div>
        </div>
        
        <div class="form-group row">
            <label for="price_grp3" class="col-md-4 col-form-label text-md-right">
                {{App\Models\titels::gettitelsid(['id'=>3])->titles}}</label>
            
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

<script>
    function rdoch(this1) {
        document.getElementById('price_title').value = this1.replace('<', '').replace('>', '').split(',')[0];
        document.getElementById('price_fee').value = this1.replace('<', '').replace('>', '').split(',')[1];
        document.getElementById('id').value = this1.replace('<', '').replace('>', '').split(',')[2];
        document.getElementById('price_grp1').checked = (this1.replace('<', '').replace('>', '').split(',')[3]==1?true:false);
        document.getElementById('price_grp2').checked = (this1.replace('<', '').replace('>', '').split(',')[4]==1?true:false);
        document.getElementById('price_grp3').checked = (this1.replace('<', '').replace('>', '').split(',')[5]==1?true:false);
        document.getElementById('newprice_id').value = this1.replace('<', '').replace('>', '').split(',')[6];
    }
     
    function chclk(this1) {
        document.getElementById('price_title').value = this1.value.split(',')[0];
        document.getElementById('price_fee').value = this1.value.split(',')[1];
        document.getElementById('id').value = this1.value.split(',')[2];
        document.getElementById('price_grp1').checked = (this1.value.split(',')[3]==1?true:false);
        document.getElementById('price_grp2').checked = (this1.value.split(',')[4]==1?true:false);
        document.getElementById('price_grp3').checked = (this1.value.split(',')[5]==1?true:false);
        document.getElementById('newprice_id').value = this1.value.split(',')[6];
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