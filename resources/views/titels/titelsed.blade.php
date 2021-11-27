@extends('layouts.admin')

@section('content')
<div class="panel form-control p-3">
    <div class="header">
    <h3><i class="fs-4 bi-people m-2 p-2"></i>ویرایش عنوان ها</h3>
    </div>
    <div class="panel_content">
        لیست عنوان ها عبارتند از:
    </div>
    <div class="w-50 form-control"> 

        {{ Form::open(['url'=>'admin/titels/edit','files'=>true])}}
        <div class="form-control bg-info text-danger">
            {{ Form::label('id','نام عنوان برای ویرایش:')}}
            <div class="feild-group p-2 m-2 bg-light text-dark">
                
                <?php 
                $catlist = App\Models\titels::gettitels();
                foreach ($catlist as $dd=> $catlist1 ) { 
                    $catlist1->titles=str_replace(array("\r\n", "\n", "\r"),'_',$catlist1->titles);
                    $catlist1->texts=str_replace(array("\r\n", "\n", "\r"),'_',$catlist1->texts);
                 
                    echo "<input type=radio class='p-2 m-2' name='id' id='id" . ($catlist1->id)  .
                     "' value='" . ($catlist1->id)  .
                      "' onchange='rdoch(\""
                      .str_replace('\n','',str_replace('\r','',$catlist1->titles)). ","
                      .str_replace('\n','',str_replace('\r','',$catlist1->texts)).",\");'>";
                    echo "<label for='id" . ($catlist1->id)  . 
                      "' class='text-dark' >".$catlist1->titles."</label><br>";  
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

<script>
    function rdoch(this1) {
        document.getElementById('titles').value = this1.replace('<' ,'').replace('>' ,'').split(',')[0];
        document.getElementById('texts').value = this1.replace('<' ,'').replace('>' ,'').split(',')[1];
    }

    function chclk(this1) {
        document.getElementById('titles').value = this1.value.split(',')[0];
        document.getElementById('texts').value = this1.value.split(',')[1];
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