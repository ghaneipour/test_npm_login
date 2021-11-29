 
@section('pagefooter')
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
        <path fill="#f8f9fa" fill-opacity="1" d="M0,224L120,234.7C240,245,480,267,720,245.3C960,224,1200,160,1320,128L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
    </svg>

    <footer class="bg-light">
        <div class="container  p-4 ">
            <div class="row ">
                <div class="col-md-4  align-items-center text-center ">
                    <h3 class="fw-bold"> {{App\Models\sitepage::getsitepage(['id_page'=>12,'page'=>'12'])->page_title}}</h3>
                    <p>{{App\Models\sitepage::getsitepage(['id_page'=>12,'page'=>'12'])->page_str1}}</p>
                    <i class="bi bi-instagram fs-2"></i>
                    <i class="bi bi-telegram fs-2 mx-3"></i>
                    <i class="bi bi-facebook fs-2 me-3"></i>
                    <i class="bi bi-linkedin fs-2"></i>
                </div>
                <div class="col-md-7 offset-md-1  ">
                    <div class="row text-left align-items-center my-3">
                        <div class="col-md-4">
                            <h6 class="fw-bold borderfooter w-75">بخش های سامانه</h6>

                            <ul class="list-unstyled listbb">
                                <li><a href="/register">عضویت</a></li>
                                <li><a href="/#about">درباره ما</a></li>
                                <li><a href="/#products">محصولات</a></li>
                                <li><a href="/#about2">گالری</a></li>
                            </ul>
                        </div>
                        
                        <div class="col-md-4">
                            <h6 class="fw-bold borderfooter w-75">بخش های سامانه</h6>

                            <ul class="list-unstyled listbb">
                                <li><a href="/#Q1">{{App\Models\titels::gettitelsid(['id'=>1])->titles}}</a></li>
                                <li><a href="/#Q2">{{App\Models\titels::gettitelsid(['id'=>2])->titles}}</a></li>
                                <li><a href="/#Q3">{{App\Models\titels::gettitelsid(['id'=>3])->titles}}</a></li>
                                <li><a href="/#about3">فعالیت ها</a></li>
                            </ul>
                        </div>
                        
                        <div class="col-md-4">
                            <h6 class="fw-bold borderfooter w-75">سایر همکاران</h6>

                            <ul class="list-unstyled listbb">
                                <li><a href="http://hemmateirani.com">همت ایرانی</a></li>
                                <li><a href="http://softlock.ir">سافت لاک</a></li>
                                <li><a href="http://supportco.ir">ساپورت</a></li> 
                            </ul>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </footer>
    @endsection