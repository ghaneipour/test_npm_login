@section('page_advertising1')

            <!-- ______________________ Advertising1 _____________________________ -->
            <a id="Q1"></a>
            <h3 dir=rtl class="align-middle m-2 p-2 align-self-center bg-dark text-light">
                {{App\Models\titels::gettitelsid(['id'=>1])->titles}}
            </h3>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#1b2a4e" fill-opacity="1" d="M0,224L120,234.7C240,245,480,267,720,245.3C960,224,1200,160,1320,128L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
            </svg>
            <section class="main-section">
                <div class="container ">
                    <div class="row text-center text-light">
                        <h4>
                            {{App\Models\titels::gettitelsid(['id'=>1])->titles}}

                        </h4>
                        <p>
                            {{App\Models\titels::gettitelsid(['id'=>1])->texts}}
                        </p>
                    </div>
                    <div class="row text-center ">

                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <?php
                                $req = App\Models\Advertising::getAdvertising1();
                                $xi = 0;
                                // dd(1);
                                foreach ($req as $rex) {
                                    echo '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="';
                                    echo $xi;
                                    echo '" aria-label="Slide ';
                                    $xi++;
                                    echo $xi;
                                    echo '" ';
                                    if ($xi == 1) {
                                        echo 'class="active" aria-current="true"';
                                    }
                                    echo '></button>';
                                }
                                ?>

                            </div>

                            <div class="carousel-inner">
                                <?php
                                $xi = 0;
                                foreach ($req as $rec1) {
                                    // @dd($rec1);
                                ?>
                                    <div class="carousel-item {{($xi==0?'active':'')}}">
                                        <img src="../uploadadve/img_{{ $rec1->id}}.jpg" class="d-block w-100" style="height:350px;" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>{{$rec1->Advertising_title}}</h5>
                                            <p>{{$rec1->Advertising_str1}}.</p>
                                        </div>
                                    </div>
                                <?php $xi++;
                                } ?>

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">قبل</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
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
            <!-- ________________ / Advert1. _______________ -->
@endsection