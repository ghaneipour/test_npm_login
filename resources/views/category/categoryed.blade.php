@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
        <h3><i class="fs-4 bi-card-checklist m-2 p-2"></i>ویرایش گروه بندی ها</h3>
    </div>
    <div class="panel_content">
        لیست گروه ها عبارتند از:
    </div>
    <div class="w-50 form-control">




        {{ Form::open(['url'=>'admin/category/edit','files'=>true])}}
        <div class="form-control bg-dark text-warning">
            {{ Form::label('id','نام دسته برای ویرایش:')}}
            <div class="feild-group p-2 m-2 bg-light text-dark">
                
                <?php
                foreach ($catlist as $catlist1 => $p) { 
                    // dd($catlist1);
                    // dd($catlist );
                    if (str_contains($p ,'دسته اصلی')) {
                    } else {
                        if(str_contains($p,'<')){
                            echo"  ```` ";
                        }
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

<script>
    function rdoch(this1) {
        document.getElementById('category_name').value = this1.replace('<' ,'').replace('>' ,'');
    }

    function chclk(this1) {
        document.getElementById('category_name').value = this1.value;
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