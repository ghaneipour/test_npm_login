<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name='author' content="pedram ghaneipour">
    <meta name="description" content="RFID Door lock">
    <meta name="keywords" content="RFID ,125khz ,door ,lock ,smart">
    <link rel="stylesheet" href="../../css/bs.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://softlock.ir/wp-content/uploads/2021/03/cropped-ls-180x180.png" type="image/x-icon">
    <!-- D:\PHP~\sample\test_npm_login\public\fonts\IRANSansWeb_Bold.eot -->

    <title>test softlock</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://softlock.ir/wp-content/uploads/2021/03/cropped-ls-180x180.png" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            /* vertical-align:middle; */
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div style="background-color:#f1f4fc" class="d-flex fixed top-0 right-0 px-3 py-2 sm:block bg-light shadow w-100 flex-row-reverse ">
            @if (Route::has('login'))
            @auth


            <div class="bg-light d-inline-block " aria-labelledby="navbarDropdown1">
                <a class="bg-light mx-2 px-2 text-sm text-gray-700  text-decoration-none" href="\">
                    {{ Auth::user()->name }}
                    <!-- </span> <span> -->
                    <i class="bi bi-person-check">
                    </i>
                </a>
            </div>

            <div class="bg-light d-inline-block" aria-labelledby="navbarDropdown1">
                <a class="bg-light mx-2 px-2 text-sm text-gray-700  text-decoration-none" href="loads_shop">
                    سبد خرید
                    <!-- </span> <span> -->
                    <i class="bi bi-cart3">
                    </i>
                </a>
            </div>

            <div class="bg-light d-inline-block " aria-labelledby="navbarDropdown1">
                <a class="bg-light mx-2 px-2 text-sm text-gray-700  text-decoration-none" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    <!-- </span> <span> -->
                    <i class="bi bi-webcam">
                    </i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

            <?php
            $lss_login =  explode('_', Auth::user()->user_lss)[0];
            $lss_new =  explode('_', Auth::user()->user_lss)[1];
            $lss_edit =  explode('_', Auth::user()->user_lss)[2];
            $lss_delete =  explode('_', Auth::user()->user_lss)[3];
            $lss_resource =  explode('_', Auth::user()->user_lss)[4];
            ?>

            @else
            <div class="bg-light d-inline-block " aria-labelledby="navbarDropdown1">
                <a class="bg-light mx-2 px-2 text-sm text-gray-700  text-decoration-none" href="{{ route('login') }}">Log in</a>
            </div>
            <?php
            $lss_login = 0;
            $lss_new = 0;
            $lss_edit = 0;
            $lss_delete = 0;
            $lss_resource = 0;
            ?>
            @if (Route::has('register'))
            <div class="bg-light d-inline-block " aria-labelledby="navbarDropdown1">
                <a class="bg-light mx-2 px-2 text-sm text-gray-700  text-decoration-none" href="{{ route('register') }}">Register</a>
            </div>
            @endif
            @endauth
            @endif
        </div>
        <div style="background-color:#ffffff" class="max-w-6xl mx-auto sm:px-1 lg:px-1 shadow">

            <!-- logo laravel    -->
            <div class="   p-2 m-2   w-100 row justify-content-between align-items-center">
                <div class="d-inline-block p-2   col-2 align-self-center">
                    <br>
                    <img src="https://softlock.ir/wp-content/uploads/2021/03/cropped-ls-180x180.png">
                </div>

                <div class="d-inline-block p-2 text-center   col-2 align-self-center">
                    <h3 class=" text-center">آروین فنآور</h3>
                </div>
            </div>
            <!-- ___________________ Main text ______________________ -->
            <div class=" p-5 w-100" dir="rtl">

                <h3>
                    {{App\Models\sitepage::getsitepage(['id'=>1,'page'=>'1'])->page_title}}
                </h3>
                <h5 class="lh-lg" style='text-align:justify;'>
                    {{App\Models\sitepage::getsitepage(['id'=>1,'page'=>'1'])->page_str1}}
                </h5>
            </div>
            <!-- ______________________Shop__________________________ -->
            <h3 dir=rtl class="align-middle m-2 p-2 align-self-center bg-dark text-light">فروشگاه</h3>
            <div class="  text-dark p-1 m-1 g-1" style="background:#6b7280;width:100%;border-radius:15px;">
                <div class="card-group1 bg-white p-1 m-1 g-1 text-center" style="border-radius:15px;">
                    <?php

                    $catlist = App\Models\goods::getCatListgood();
                    foreach ($catlist as $catlist1 => $p) {
                        if (str_contains($p, 'دسته اصلی')) {
                        } else {
                            if (!str_contains($p, ">")) {
                                echo "<div style='display:block;width:100%;' class='bg-light'>";
                                echo "<label for='id" . ($catlist1)  . "' class='text-dark p-2' ><h2>";
                                echo str_replace('<', '', str_replace('>', '', $p)) . "</h2></label><br>";
                                echo "</div>";
                            } else {
                                $target_file = "./uploadgood/" . $catlist1 . ".png";
                                echo "<div class='card1 bg-white m-3 p-2 shadow'  style='display:inline-block;width:245px;border:1px solid #ececec;border-radius:15px; '>";
                                if (file_exists($target_file)) {
                                    echo "<img class='card-img-top m-2 p-2' style=' height:170px;border-radius:15px;' 
                                    src='../." . $target_file . "' alt='" . str_replace('<', '', str_replace('>', '', $p))  . "'>";
                                }
                                echo "  <div class='card-body'>";
                                echo '   <h5 class="card-title">' . str_replace('<', '', str_replace('>', '', $p))  . '</h5>';
                                $p2 = App\Models\goods::getCatListgood2($catlist1);
                                echo "   <p class='card-text'>قیمت : " .  $p2->goods_price  . "تومان</p>";
                                echo '   <p class="card-text"><small class="text-muted">موجودی انبار : ' . $p2->goods_quanty . '</small></p>';
                                if ($p2->goods_discount > 0) {
                                    echo '   <p class="card-text text-warning bg-primary">حراج : ' . $p2->goods_discount . ' تخفیف</p>';
                                }
                                echo ' <button class="btn btn-outline-info text-center" onclick="submitedr(' . $catlist1 . ')" >سفارش </button>';
                                echo "  </div>";
                                echo "</div>";
                            }
                        }
                    }
                    ?>
                </div>
            </div>
            <form action="shop" method="post" name="form1" id="form1">
                @csrf
                <input id='id' name='id' value=''>
            </form>
            <script>
                function submitedr(id) {
                    document.getElementById('id').value = id;
                    document.getElementById('form1').submit();
                }
            </script>

            <!-- ______________________ Advertising1 _____________________________ -->
            <h3 dir=rtl class="align-middle m-2 p-2 align-self-center bg-dark text-light">{{App\Models\sitepage::getsitepage(['id'=>17,'page'=>'17'])->page_title}}</h3>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#1b2a4e" fill-opacity="1" d="M0,224L120,234.7C240,245,480,267,720,245.3C960,224,1200,160,1320,128L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
            </svg>

            <section class="main-section">
                <div class="container ">
                    <div class="row text-center text-light">
                        <h4>
                            {{App\Models\sitepage::getsitepage(['id'=>17,'page'=>'17'])->page_title}}

                        </h4>
                        <p>
                            {{App\Models\sitepage::getsitepage(['id'=>17,'page'=>'1'])->page_str1}}
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
                                        <img src="../img/img_{{ $rec1->id}}.jpg" class="d-block w-100" style="height:350px;" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>{{$rec1->Advertising_title}}</h5>
                                            <p>{{$rec1->Advertising_str1}}.</p>
                                        </div>
                                    </div>
                                <?php $xi++;} ?>

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

            <!-- ______________________welcome_____________________________ -->
            <section class="my-4 ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center mt-3 p-2 text-warning">
                            <h4 class="fw-bold">
                                {{App\Models\sitepage::getsitepage(['id'=>7,'page'=>'7'])->page_title}}
                            </h4>
                            <h5 class="fw-bold my-4">
                                <a href="http://softlock.ir"> softlock.ir</a>
                            </h5>
                            <p class="text-black">
                                {{App\Models\sitepage::getsitepage(['id'=>7,'page'=>'7'])->page_str1}}
                            </p>
                            <p>
                                {{App\Models\sitepage::getsitepage(['id'=>7,'page'=>'7'])->page_str2}}
                            </p>
                            <button type="button" class="btn btn-danger mx-2">Info</button>
                            <button type="button" class="btn btn-outline-dark mx-2">Dark</button>
                        </div>
                        <div class="col-md-6 mt-3 text-center p-2 text-info">
                            <img src="../img/Designer _Isometric.png" class="img-fluid" width="300px">

                        </div>
                    </div>
                </div>

            </section>
  <!-- ______________________ Advertising2 _____________________________ -->
  <h3 dir=rtl class="align-middle m-2 p-2 align-self-center bg-dark text-light">{{App\Models\sitepage::getsitepage(['id'=>18,'page'=>'18'])->page_title}}</h3>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#1b2a4e" fill-opacity="1" d="M0,224L120,234.7C240,245,480,267,720,245.3C960,224,1200,160,1320,128L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
</svg>

<section class="main-section">
    <div class="container ">
        <div class="row text-center text-light">
            <h4>
            {{App\Models\sitepage::getsitepage(['id'=>18,'page'=>'17'])->page_title}}

</h4>
<p>
    {{App\Models\sitepage::getsitepage(['id'=>18,'page'=>'1'])->page_str1}}
</p>
        </div>
        <div class="row text-center ">

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php
                    $req = App\Models\Advertising::getAdvertising2();
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
                            <img src="../img/img_{{ $rec1->id}}.jpg" class="d-block w-100" style="height:350px;" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{$rec1->Advertising_title}}</h5>
                                <p>{{$rec1->Advertising_str1}}.</p>
                            </div>
                        </div>
                    <?php $xi++;} ?>

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
<!-- ________________ / Advert2 _______________ -->

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
                                {{App\Models\sitepage::getsitepage(['id'=>6,'page'=>'6'])->page_title}}
                            </h4>
                            <p>
                                {{App\Models\sitepage::getsitepage(['id'=>6,'page'=>'6'])->page_str1}}
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
                                                {{App\Models\sitepage::getsitepage(['id'=>2,'page'=>'2'])->page_title}}
                                            </h5>
                                            <p class="card-text text-muted">
                                                {{App\Models\sitepage::getsitepage(['id'=>2,'page'=>'2'])->page_str1}}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card text-center shadow my-2">
                                        <div class="card-body">
                                            <i class="bi bi-grid-1x2-fill fs-2 icon"></i>
                                            <h5 class="card-title my-4 ">
                                                {{App\Models\sitepage::getsitepage(['id'=>3,'page'=>'3'])->page_title}}
                                            </h5>
                                            <p class="card-text text-muted">
                                                {{App\Models\sitepage::getsitepage(['id'=>3,'page'=>'3'])->page_str1}}
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">


                                    <div class="card text-center shadow mb-2 mt-5">
                                        <div class="card-body">
                                            <i class="bi bi-menu-button-wide-fill fs-2 icon"></i>
                                            <h5 class="card-title my-4 ">
                                                {{App\Models\sitepage::getsitepage(['id'=>4,'page'=>'4'])->page_title}}
                                            </h5>
                                            <p class="card-text text-muted">
                                                {{App\Models\sitepage::getsitepage(['id'=>4,'page'=>'4'])->page_str1}}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card text-center shadow my-2">
                                        <div class="card-body">
                                            <i class="bi bi-bar-chart-line-fill fs-2 icon"></i>
                                            <h5 class="card-title my-4 ">
                                                {{App\Models\sitepage::getsitepage(['id'=>5,'page'=>'5'])->page_title}}
                                            </h5>
                                            <p class="card-text text-muted">
                                                {{App\Models\sitepage::getsitepage(['id'=>5,'page'=>'5'])->page_str1}}
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
            <!-- ______________________slider_______________________________  -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#1b2a4e" fill-opacity="1" d="M0,224L120,234.7C240,245,480,267,720,245.3C960,224,1200,160,1320,128L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
            </svg>

            <section class="main-section">
                <div class="container ">
                    <div class="row text-center text-light">
                        <h4>
                            {{App\Models\sitepage::getsitepage(['id'=>8,'page'=>'8'])->page_title}}

                        </h4>
                        <p>
                            {{App\Models\sitepage::getsitepage(['id'=>8,'page'=>'8'])->page_str1}}
                        </p>
                    </div>
                    <div class="row text-center ">

                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/img_2.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{App\Models\sitepage::getsitepage(['id'=>9,'page'=>'9'])->page_title}}</h5>
                                        <p>{{App\Models\sitepage::getsitepage(['id'=>9,'page'=>'9'])->page_str1}}.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/img_3.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{App\Models\sitepage::getsitepage(['id'=>10,'page'=>'10'])->page_title}}</h5>
                                        <p>{{App\Models\sitepage::getsitepage(['id'=>10,'page'=>'10'])->page_str1}}.</p>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/img_4.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{App\Models\sitepage::getsitepage(['id'=>11,'page'=>'11'])->page_title}}</h5>
                                        <p>{{App\Models\sitepage::getsitepage(['id'=>11,'page'=>'11'])->page_str1}}.</p>


                                    </div>
                                </div>
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
            <!-- ________________ / slider _______________ -->


            <!-- _______________________________ -->
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <!-- box1 -->
                        <div class="flex items-center">
                            <img src="{{ url('/img/doc.png')}}" width="50">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                @if( $lss_login==1)
                                <a href="/admin/category/create" class="underline text-gray-900 dark:text-white">
                                    {{App\Models\sitepage::getsitepage(['id'=>14,'page'=>'14'])->page_title}}
                                </a>
                                @else
                                برای استفاده لاگین بفرمایید
                                @endif
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                {{App\Models\sitepage::getsitepage(['id'=>14,'page'=>'14'])->page_str1}}

                            </div>
                        </div>
                    </div>
                    <!-- shop -->
                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div>

                            <table>
                                <tr>
                                    <td>
                                        <img src="{{ url('/img/shop.jpg')}}" width="70px" height="40px">
                                    </td>
                                    <td>
                                        <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                                            @if( $lss_login==1)
                                            <a href="/softlock">
                                                {{App\Models\sitepage::getsitepage(['id'=>13,'page'=>'13'])->page_title}}
                                            </a>
                                            @else
                                            برای استفاده لاگین بفرمایید
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                {{App\Models\sitepage::getsitepage(['id'=>13,'page'=>'13'])->page_str1}}
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <img src="{{ url('/img/news.png')}}" width="50">

                            <div class="ml-4 text-lg leading-7 font-semibold">
                                @if( $lss_resource==1)
                                <a href="/bs" class="underline text-gray-900 dark:text-white">
                                    {{App\Models\sitepage::getsitepage(['id'=>16,'page'=>'16'])->page_title}}
                                </a>
                                @else
                                برای استفاده لاگین بفرمایید
                                @endif
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                {{App\Models\sitepage::getsitepage(['id'=>16,'page'=>'16'])->page_str1}}
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <img src="{{ url('/img/setting.png')}}" width="50">
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                                @if( $lss_login==1)
                                <a href="/food" class="fff">
                                    {{App\Models\sitepage::getsitepage(['id'=>15,'page'=>'15'])->page_title}}
                                </a>
                                @else
                                برای استفاده لاگین بفرمایید
                                @endif
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                {{App\Models\sitepage::getsitepage(['id'=>15,'page'=>'15'])->page_str1}}
                                <div class=""></div>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">


                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>

                        <a href="https://softlock.ir/shop" class="ml-1 underline">
                            Shop
                        </a>

                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>

                        <a href="https://github.com/ghaneipour" class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
        <path fill="#f8f9fa" fill-opacity="1" d="M0,224L120,234.7C240,245,480,267,720,245.3C960,224,1200,160,1320,128L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
    </svg>
    <!-- _____________________________________________________ -->
    <div>
        <div style="display:flex;flex-direction:column; padding:10px;">
            <div class="container ">
                <div class="row row-cols-2 row-cols-lg-5  row-cols-sm-3 g-2 g-lg-3">
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- _______________________footer______________________________ -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
        <path fill="#f8f9fa" fill-opacity="1" d="M0,224L120,234.7C240,245,480,267,720,245.3C960,224,1200,160,1320,128L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
    </svg>

    <footer class="bg-light">
        <div class="container  p-4 ">
            <div class="row ">
                <div class="col-md-4  align-items-center text-center ">
                    <h3 class="fw-bold"> {{App\Models\sitepage::getsitepage(['id'=>12,'page'=>'12'])->page_title}}</h3>
                    <p>{{App\Models\sitepage::getsitepage(['id'=>12,'page'=>'12'])->page_str1}}</p>
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
                                <li><a href="#">عضویت</a></li>
                                <li><a href="#">درباره ما</a></li>
                                <li><a href="#">محصولات</a></li>
                                <li><a href="#">گالری</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h6 class="fw-bold borderfooter w-75">بخش های سامانه</h6>

                            <ul class="list-unstyled listbb">
                                <li><a href="#">عضویت</a></li>
                                <li><a href="#">درباره ما</a></li>
                                <li><a href="#">محصولات</a></li>
                                <li><a href="#">گالری</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h6 class="fw-bold borderfooter w-75">بخش های سامانه</h6>

                            <ul class="list-unstyled listbb">
                                <li><a href="#">عضویت</a></li>
                                <li><a href="#">درباره ما</a></li>
                                <li><a href="#">محصولات</a></li>
                                <li><a href="#">گالری</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- _____________________________________________________ -->
    <!-- _____________________________________________________  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>