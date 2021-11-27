@section('page_about_us_1')

<a id="about2"></a>
<!-- ______________________sample____________________________ -->

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#f1f4fc" fill-opacity="1" d="M0,224L120,234.7C240,245,480,267,720,245.3C960,224,1200,160,1320,128L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
</svg>

<section style="background-color:#f1f4fc">

    <div class="container" style="background-color:#f1f4fc">
        <div class="row align-items-center" style="background-color:#f1f4fc">
            <div class="col-md-4 text-center" style="background-color:#f1f4fc">
                <i class="bi bi-stack fs-2 icon"></i>
                <h4 class="fw-bold my-4" style="color: #f5ac0d;">
                    {{App\Models\sitepage::getsitepage(['id_page'=>6,'page'=>'6'])->page_title}}
                </h4>
                <p>
                    {{App\Models\sitepage::getsitepage(['id_page'=>6,'page'=>'6'])->page_str1}}
                </p>
                <a href="/register" class="btn btn-outline-dark">عضویت</a>
            </div>
            <div class="col-md-8" style="background-color:#f1f4fc">
                <div class="row g-4">

                    <div class="col-md-6">

                        <div class="card text-center shadow my-2">
                            <div class="card-body">
                                <i class="bi bi-graph-up fs-2 icon"></i>
                                <h5 class="card-title my-4 ">
                                    {{App\Models\sitepage::getsitepage(['id_page'=>2,'page'=>'2'])->page_title}}
                                </h5>
                                <p class="card-text text-muted">
                                    {{App\Models\sitepage::getsitepage(['id_page'=>2,'page'=>'2'])->page_str1}}
                                </p>
                            </div>
                        </div>

                        <div class="card text-center shadow my-2">
                            <div class="card-body">
                                <i class="bi bi-grid-1x2-fill fs-2 icon"></i>
                                <h5 class="card-title my-4 ">
                                    {{App\Models\sitepage::getsitepage(['id_page'=>3,'page'=>'3'])->page_title}}
                                </h5>
                                <p class="card-text text-muted">
                                    {{App\Models\sitepage::getsitepage(['id_page'=>3,'page'=>'3'])->page_str1}}
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">


                        <div class="card text-center shadow mb-2 mt-5">
                            <div class="card-body">
                                <i class="bi bi-menu-button-wide-fill fs-2 icon"></i>
                                <h5 class="card-title my-4 ">
                                    {{App\Models\sitepage::getsitepage(['id_page'=>4,'page'=>'4'])->page_title}}
                                </h5>
                                <p class="card-text text-muted">
                                    {{App\Models\sitepage::getsitepage(['id_page'=>4,'page'=>'4'])->page_str1}}
                                </p>
                            </div>
                        </div>

                        <div class="card text-center shadow my-2">
                            <div class="card-body">
                                <i class="bi bi-bar-chart-line-fill fs-2 icon"></i>
                                <h5 class="card-title my-4 ">
                                    {{App\Models\sitepage::getsitepage(['id_page'=>5,'page'=>'5'])->page_title}}
                                </h5>
                                <p class="card-text text-muted">
                                    {{App\Models\sitepage::getsitepage(['id_page'=>5,'page'=>'5'])->page_str1}}
                                </p>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#f1f4fc" fill-opacity="1" d="M0,224L120,234.7C240,245,480,267,720,245.3C960,224,1200,160,1320,128L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
</svg>

@endsection