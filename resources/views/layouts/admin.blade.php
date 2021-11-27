<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل مدیریت</title>
    <!-- <link href="../css/app.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../../css/bs.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-3 px-sm-2 px-0 bg-dark">

                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    @if (Route::has('login'))
                    <?php
                    $catlist = array("");
                    $lss_login =  explode('_', Auth::user()->user_lss)[0];
                    $lss_new =  explode('_', Auth::user()->user_lss)[1];
                    $lss_edit =  explode('_', Auth::user()->user_lss)[2];
                    $lss_delete =  explode('_', Auth::user()->user_lss)[3];
                    $lss_resource =  explode('_', Auth::user()->user_lss)[4];
                    ?>
                    @auth
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">SoftLock.ir</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item ">
                            <a href="/#" class="nav-link align-middle px-0 ">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">خانه</span>
                            </a>
                        </li>
                        <!-- show -->

                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">تعاریف</span> </a>
                            <ul class="collapse  nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">قراردادها</span> </a>
                                </li>
                                <li class="bg-black m-1"></li>
                                <li class="w-100">
                                    <a href="/admin/titels/" class="nav-link px-0"> <span class="d-none d-sm-inline">تعریف عناوین سمت ها</span> </a>
                                </li>
                                <li class="w-100">
                                    <a href="/admin/titelsed/" class="nav-link px-0"> <span class="d-none d-sm-inline">ویرایش عناوین سمت ها</span> </a>
                                </li>
                                <li class="bg-black m-1"></li>
                                <li class="w-100">
                                    <a href="/admin/page/" class="nav-link px-0"> <span class="d-none d-sm-inline">تعریف صفحات</span> </a>
                                </li>
                                <li class="w-100">
                                    <a href="/admin/page/" class="nav-link px-0"> <span class="d-none d-sm-inline">ویرایش صفحات</span> </a>
                                </li>
                                <li class="bg-black m-1"></li>

                            </ul>
                        </li>

                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-card-checklist"></i> <span class="ms-1 d-none d-sm-inline">گروه بندی</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                @if($lss_new==1)
                                <li class="w-100">
                                    <a href="/admin/category/create#submenu2" class="nav-link px-0"> <span class="d-none d-sm-inline">تعریف گروه</span> </a>
                                </li>
                                @endif
                                @if($lss_edit==1)
                                <li>
                                    <a href="/admin/category/update#submenu2" class="nav-link px-0"> <span class="d-none d-sm-inline">ویرایش گروه</span> </a>
                                </li>
                                @endif
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline"><i class="fs-4 bi-table"></i>گزارش</span> </a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">مشتری ها</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                @if($lss_new==1)
                                <li class="w-100">
                                    <a href="/admin/customers/create#submenu3" class="nav-link px-0"> <span class="d-none d-sm-inline">معرفی مشتری </span> </a>
                                </li>
                                @endif
                                @if($lss_edit==1)
                                <li>
                                    <a href="/admin/customers/update#submenu3" class="nav-link px-0"> <span class="d-none d-sm-inline">ویرایش</span> </a>
                                </li>
                                @endif
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline"><i class="fs-4 bi-table"></i>گزارش</span> </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-basket2"></i> <span class="ms-1 d-none d-sm-inline">محصول ها</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu5" data-bs-parent="#menu">

                                @if($lss_new==1)
                                <li class="w-100">
                                    <a href="/admin/goods/create#submenu5" class="nav-link px-0"> <span class="d-none d-sm-inline">معرفی محصول</span> </a>
                                </li>
                                @endif
                                @if($lss_edit==1)
                                <li>
                                    <a href="/admin/goods/update#submenu5" class="nav-link px-0"> <span class="d-none d-sm-inline">ویرایش</span> </a>
                                </li>
                                @endif
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline"><i class="fs-4 bi-table"></i>گزارش</span> </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/admin/users/update#submenu5" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">کاربران سیستم</span> </a>
                        </li>
                        <li>


                            <?php
                            if (str_contains($_SERVER['REQUEST_URI'], 'category')) {
                                echo '<h4 class="bg-light text-dark">گروه بندی</h4>';
                            }
                            if (str_contains($_SERVER['REQUEST_URI'], 'customers')) {
                                echo '<h4 class="bg-light text-dark">مشتری</h4>';
                            }
                            if (str_contains($_SERVER['REQUEST_URI'], 'goods')) {
                                echo '<h4 class="bg-light text-dark">محصولات</h4>';
                            }
                            if (str_contains($_SERVER['REQUEST_URI'], 'user')) {
                                echo '<h4 class="bg-light text-dark">کاربران</h4>';
                            }
                            if (str_contains($_SERVER['REQUEST_URI'], 'titels')) {
                                echo '<h4 class="bg-light text-dark">عناوین</h4>';
                            }


                            $xi = 0;
                            foreach ($catlist as $valno => $val) {
                                if (str_contains($val, 'دسته اصلی')) {
                                } else {

                                    $xi++;
                                    $target_file = "";
                                    if (str_contains($_SERVER['REQUEST_URI'], 'category')) {
                                        $target_file = "./uploadcat/" . $valno . ".png";
                                    }
                                    if (str_contains($_SERVER['REQUEST_URI'], 'customers')) {
                                        $target_file = "./uploadcus/" . $valno . ".png";
                                    }
                                    if (str_contains($_SERVER['REQUEST_URI'], 'goods')) {
                                        $target_file = "./uploadgood/" . $valno . ".png";
                                    }
                                    // if (str_contains($_SERVER['REQUEST_URI'], 'user')) {
                                    //     $target_file = "./uploadgood/" . $valno . ".png";
                                    // }

                                    if (!str_contains($val, "<")) {
                                        if ($xi > 1) {
                                            echo (' </li></ul>');
                                        }

                                        echo (' <a href="#submenuq' . $xi . '" data-bs-toggle="collapse" class="nav-link px-0 align-middle">');
                                        if (file_exists($target_file)) {
                                            echo (' <img src="../.' . $target_file . '" width="30px" height="30px" style="border-radius:5px;">');
                                        } else {
                                            echo (' <i class="fs-4 bi-grid"></i>');
                                        }
                                        if (str_contains($_SERVER['REQUEST_URI'], 'user')) {
                                            echo (' <span class="ms-1 d-none d-sm-inline">' . $val->name . '</span> </a>');
                                            echo ('<ul class="collapse nav flex-column ms-1" id="submenuq' . $xi . '" data-bs-parent="#menu">');
                                        } else {
                                            echo (' <span class="ms-1 d-none d-sm-inline">' . $val . '</span> </a>');
                                            echo ('<ul class="collapse nav flex-column ms-1" id="submenuq' . $xi . '" data-bs-parent="#menu">');
                                        }
                                    } else {
                                        echo (' <li class="w-100 bg-info"> <a href="#" class="nav-link px-0">');
                                        if (file_exists($target_file)) {
                                            echo (' <img src="../.' . $target_file . '" width="30px" height="30px" style="border-radius:5px;">');
                                        } else {
                                            echo (' <i class="fs-4 bi-grid"></i>');
                                        }
                                        echo (' <span class="d-none d-sm-inline">' . $val . '</span>  </a>');
                                        echo (' </li>');
                                    }
                                }
                            }
                            ?>

                        </li>

                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://avatars.githubusercontent.com/u/16451466?v=4" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">پروفایل من</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li class="p-1 bg-warning text-dark text-center ">{{ Auth::user()->name }}</li>
                            <li class="p-1 bg-warning text-dark text-center ">{{ Auth::user()->user_lss }}</li>
                            <li><a class="dropdown-item" href="#">سبد خرید</a></li>
                            <li><a class="dropdown-item" href="#">سابقه سفارش ها</a></li>
                            <li><a class="dropdown-item" href="/admin/users/update">پروفابل من</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Sign out</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </ul>

                        ------- <br>
                    </div>
                </div>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
                @endauth

                @endif
            </div>
            <div class="col py-3">
                @if($errors->any())
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $err)
                            <p>{{$err}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                @yield('content')
                @if(str_contains($_SERVER['REQUEST_URI'], 'user'))
                salam user
                @elseif(str_contains($_SERVER['REQUEST_URI'], 'titels'))
                salam titels
                @elseif(str_contains($_SERVER['REQUEST_URI'], 'goods'))
                صفحه مربوط به محصولات
                <br>
                <div class="bg-black text-dark p-1 m-1 g-1" style="width:100%;border-radius:15px;">
                    <div class="card-group1 bg-white p-1 m-1 g-1 text-center">
                        <?php
                        // foreach ($getgoods as $goodli => $gdl) {
                        foreach ($catlist as $catlist1 => $p) {
                            if (str_contains($p, 'دسته اصلی')) {
                            } else {
                                if (!str_contains($p, ">")) {
                                    echo "<div style='display:block;width:100%;' class='bg-light'>";
                                    echo "<label for='id" . ($catlist1)  . "' class='text-dark' >";
                                    echo $p . "</label><br>";
                                    echo "</div>";
                                } else {
                                    $target_file = "./uploadgood/" . $catlist1 . ".png";
                                    echo "<div class='card1 bg-white m-2 p-2 shadow'  style='display:inline-block;width:245px;border:1px solid #ececec;border-radius:15px; '>";
                                    if (file_exists($target_file)) {
                                        echo "<img class='card-img-top m-2 p-2' style=' height:170px;border-radius:15px;' src='../." . $target_file . "' alt='" . $gdl->goods_name . "'>";
                                    }
                                    echo "  <div class='card-body'>";
                                    echo '   <h5 class="card-title">' . $p . '</h5>';
                                    echo "   <p class='card-text'>" . $catlist1 . $p . " </p>";
                                    // echo '   <p class="card-text"><small class="text-muted">'.$catlist1.'</small></p>';
                                    echo ' <button class="btn btn-outline-info text-center">سفارش </button>';
                                    echo "  </div>";
                                    echo "</div>";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>

                <hr>

                @elseif(str_contains($_SERVER['REQUEST_URI'], 'customers'))
                صفحه مربوط به مشتری ها
                @elseif(str_contains($_SERVER['REQUEST_URI'], 'category'))
                صفحه مربوط به گروه ها
                @else
                salam click on menu
                @endif
                <hr>

            </div>
        </div>
    </div>

    <style>
        ul li ul li {
            background-color: #454545;
            padding: 0 20px;
            border-bottom: 1px solid #333;
            margin-left: 20px;
            width: 100%;
        }

        ul {
            border-bottom: 1px solid #B6B7B8;
        }

        .nav-link {
            color: antiquewhite;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>