@section('page_about_us_2')
<a id="about"></a>
<!-- ______________________welcome_____________________________ -->
<section class="my-4 " dir="rtl">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center mt-3 p-2 text-warning">
                <h4 class="fw-bold">
                    {{App\Models\sitepage::getsitepage(['id_page'=>7,'page'=>'7'])->page_title}}
                </h4>
                <h5 class="fw-bold my-4">
                    <a href="http://softlock.ir"> softlock.ir</a>
                </h5>
                <p class="text-black">
                    {{App\Models\sitepage::getsitepage(['id_page'=>7,'page'=>'7'])->page_str1}}
                </p>
                <p>
                    {{App\Models\sitepage::getsitepage(['id_page'=>7,'page'=>'7'])->page_str2}}
                </p>
                <a href="#Q1" type="button" class="btn btn-danger mx-2"> {{App\Models\titels::gettitelsid(['id'=>1])->titles}}</a>
                <a href="#Q2" type="button" class="btn btn-outline-dark mx-2"> {{App\Models\titels::gettitelsid(['id'=>2])->titles}}</a>
                <a href="#Q3" type="button" class="btn btn-danger mx-2"> {{App\Models\titels::gettitelsid(['id'=>3])->titles}}</a>

            </div>
            <div class="col-md-6 mt-3 text-center p-2 text-info">
                <img src="../img/Designer _Isometric.png" class="img-fluid" width="300px">

            </div>
        </div>
    </div>


</section>
@endsection