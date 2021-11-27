@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
        <h3><i class="fs-4 bi-people m-2 p-2"></i>ویرایش صفحه ها</h3>
    </div>
    <div class="panel_content">
        لیست صفحه ها عبارتند از:
    </div>
    <div class="w-50 form-control">

        {{ Form::open(['url'=>'admin/page/edit','files'=>true])}}
        <div class="form-control bg-info text-danger">
            {{ Form::label('id','صفحه برای ویرایش:')}}
            <div class="feild-group p-2 m-2 bg-light text-dark">

                <?php
                $catlist = App\Models\sitepage::getsitepageall();

                foreach ($catlist as $dd => $catlist1) {
                    $catlist1->page_title = str_replace(array("\r\n", "\n", "\r"), '_', $catlist1->page_title);
                    $catlist1->page_str1 = str_replace(array("\r\n", "\n", "\r"), '_', $catlist1->page_str1);
                    echo $catlist1->id_page."-<input type=radio class='p-2 m-2' name='id' id='id" . ($catlist1->id)  .
                        "' value='" . ($catlist1->id)  .
                        "' onchange='rdoch(\""
                        . str_replace(array("\r\n", "\n", "\r"), '_', $catlist1->page_title) . ","
                        . str_replace(array("\r\n", "\n", "\r"), '_', $catlist1->page_str1) . ","
                        . str_replace(array("\r\n", "\n", "\r"), '_', $catlist1->page_str2) . ","
                        . str_replace(array("\r\n", "\n", "\r"), '_', $catlist1->page_url) . ","
                        . str_replace(array("\r\n", "\n", "\r"), '_', $catlist1->page_seo) . ","
                        . "\");'>";
                    // dd($catlist1);
                    echo "<label for='id" . ($catlist1->id)  .
                        "' class='text-dark' >" . $catlist1->page_title . "</label><br>";
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
            {{ Form::label('page_title','عنوان')}}
            {{ Form::text('page_title',null, array('class' => 'form-control'))}}
            @if($errors->has('page_title'))
            <span>{{ $errors->First('page_title') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('page_str1','1توضیحات')}}
            {{ Form::textarea('page_str1',null, array('class' => 'form-control'))}}
            @if($errors->has('page_str1'))
            <span>{{ $errors->First('page_str1') }}</span>
            @endif
        </div>


        <div class="feild-group m-2">
            {{ Form::label('page_str2','2توضیحات')}}
            {{ Form::textarea('page_str2',null, array('class' => 'form-control'))}}
            @if($errors->has('page_str2'))
            <span>{{ $errors->First('page_str2') }}</span>
            @endif
        </div>


        <div class="feild-group m-2">
            {{ Form::label('page_seo','seo')}}
            {{ Form::text('page_seo',null, array('class' => 'form-control'))}}
            @if($errors->has('page_seo'))
            <span>{{ $errors->First('page_seo') }}</span>
            @endif
        </div>

        <div class="feild-group m-2">
            {{ Form::label('page_url','آدرس')}}
            {{ Form::text('page_url',null, array('class' => 'form-control'))}}
            @if($errors->has('page_url'))
            <span>{{ $errors->First('page_url') }}</span>
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
        document.getElementById('page_title').value = this1.replace('<', '').replace('>', '').split(',')[0];
        document.getElementById('page_str1').value = this1.replace('<', '').replace('>', '').split(',')[1];
        document.getElementById('page_str2').value = this1.replace('<', '').replace('>', '').split(',')[2];
        document.getElementById('page_url').value = this1.replace('<', '').replace('>', '').split(',')[3];
        document.getElementById('page_seo').value = this1.replace('<', '').replace('>', '').split(',')[4];
    }

    function chclk(this1) {
        document.getElementById('page_title').value = this1.value.split(',')[0];
        document.getElementById('page_str1').value = this1.value.split(',')[1];
        document.getElementById('page_str2').value = this1.value.split(',')[2];
        document.getElementById('page_url').value = this1.value.split(',')[3];
        document.getElementById('page_seo').value = this1.value.split(',')[4];
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