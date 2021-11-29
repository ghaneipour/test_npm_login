@section('page_about_us_3')
<a id="about3"></a>
<!-- ______________________slider_______________________________  -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#1b2a4e" fill-opacity="1" d="M0,224L120,234.7C240,245,480,267,720,245.3C960,224,1200,160,1320,128L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
</svg>

<section class="main-section">
    <div class="container ">
        <div class="row text-center text-light">
            <h4>
                {{App\Models\sitepage::getsitepage(['id_page'=>8,'page'=>'8'])->page_title}}
            </h4>
            <p>
                {{App\Models\sitepage::getsitepage(['id_page'=>8,'page'=>'8'])->page_str1}}
            </p>
        </div>
        <div class="row text-center ">

            <div id="carouselExampleCaptions4" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../uploadadve/img_p2.jpg" class="d-block w-100 h-vp" style="width: device-width;height:100vh;" alt="...">
                        <div class="carousel-caption d-none d-md-block shadow text-black" style="background-color:#ececec;opacity: 0.3;">
                            <h5>{{App\Models\sitepage::getsitepage(['id_page'=>9,'page'=>'9'])->page_title}}</h5>
                            <p>{{App\Models\sitepage::getsitepage(['id_page'=>9,'page'=>'9'])->page_str1}}.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../uploadadve/img_p3.jpg" class="d-block w-100 h-vp" style="width: device-width;height:100vh;" alt="...">
                        <div class="carousel-caption d-none d-md-block  shadow text-black" style="background-color:#ececec;opacity: 0.3;">
                            <h5>{{App\Models\sitepage::getsitepage(['id_page'=>10,'page'=>'10'])->page_title}}</h5>
                            <p>{{App\Models\sitepage::getsitepage(['id_page'=>10,'page'=>'10'])->page_str1}}.</p>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../uploadadve/img_p4.jpg" class="d-block w-100 h-vp" style="width: device-width;height:100vh;" alt="...">
                        <div class="carousel-caption d-none d-md-block  shadow text-black" style="background-color:#ececec;opacity: 0.3;">
                            <h5>{{App\Models\sitepage::getsitepage(['id_page'=>11,'page'=>'11'])->page_title}}</h5>
                            <p>{{App\Models\sitepage::getsitepage(['id_page'=>11,'page'=>'11'])->page_str1}}.</p>


                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">قبل</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">بعد</span>
                </button>
            </div>
        </div>
    </div>

</section>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
    <path fill="#1b2a4e" fill-opacity="1" d="M0,224L120,234.7C240,245,480,267,720,245.3C960,224,1200,160,1320,128L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
</svg>
<!-- ________________ / slider _______________ -->
@endsection