<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <link rel="stylesheet" href="../../css/bs.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://softlock.ir/wp-content/uploads/2021/03/cropped-ls-180x180.png" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
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


<body class="antialiased m-2 p-5">
    <!-- ------ top menu ------- -->
    <div class="d-flex fixed top-0 right-0 px-3 py-2 sm:block bg-light shadow w-100 flex-row-reverse">
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
            <a class="bg-light mx-2 px-2 text-sm text-gray-700  text-decoration-none" href="/">
                ادامه خرید
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


        @else

        <div class="bg-light d-inline-block " aria-labelledby="navbarDropdown1">
            <a class="bg-light mx-2 px-2 text-sm text-gray-700  text-decoration-none" href="{{ route('login') }}">Log in</a>
        </div>
        <div class="bg-light d-inline-block" aria-labelledby="navbarDropdown1">
            <a class="bg-light mx-2 px-2 text-sm text-gray-700  text-decoration-none" href="/">
                ادامه خرید
                <!-- </span> <span> -->
                <i class="bi bi-cart3">
                </i>
            </a>
        </div>
        @if (Route::has('register'))
        <div class="bg-light d-inline-block " aria-labelledby="navbarDropdown1">
            <a class="bg-light mx-2 px-2 text-sm text-gray-700  text-decoration-none" href="{{ route('register') }}">Register</a>
        </div>@endif
        @endauth

    </div>
    @endif
    <!-- ------- / menu ------- -->
    <!-- _______ basket ____________  -->
    <h4 class="form-group">
        @if (Route::has('login'))
        @auth
        <br>سبد خرید <i class="bi bi-cart3">
        </i>
        <br>
        <br>
        <br>
        نام خریدار : {{ Auth::user()->name}}
        <br>
        <?php
        $shplist = App\Http\Controllers\shopcontroller::getorderid(Auth::user()->id);

        echo '<br><lable>شماره سفارش : ' . $shplist[0]->order_no . '</lable>';
        echo '<div class="table-responsive">';
        echo "<table    class='table  table-striped  table-hover m-2 p-2'>";
        echo '<thead class="thead-dark">';
        echo '<tr>';
        echo '  <th scope="col">#</th>';
        echo '  <th scope="col">کد کالا</th>';
        echo '  <th scope="col">تعداد </th>';
        echo '  <th scope="col">قیمت تومان</th>';
        echo '  <th scope="col">تخفیف%</th>';
        echo '  <th scope="col">جمع  تومان</th>';
        echo '  <th scope="col"> تاریخ سفارش</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        $i = 1;
        $sum3 = 0;

        foreach ($shplist as $catlist1) {
            echo '<tr >';
            echo '<th scope="row">';
            echo '<button class="btn btn-outline-info text-center" onclick="submitedrx(' . $catlist1->order_goods_id . ')">' . $i++ . '</button >';
            echo '</th>';
            echo '<td>';
            $target_file = "./uploadgood/" . $catlist1->order_goods_id . ".png";
            if (file_exists($target_file)) {
                echo '<img style=" height:40px;width:50px;border-radius:10px;" class="shadow p-0 ml-2 mr-2 mt-0 mb-0" ';
                echo "src='../." . $target_file . "' alt='" . $catlist1->order_goods_id  . "'>";
            }
            echo  $catlist1->order_goods_id . '</td>';
            echo '<td>' . $catlist1->order_goods_cnt . '</td>';
            echo '<td>' . number_format($catlist1->order_goods_price, 0, '.', ',') . '</td>';
            echo '<td>' . $catlist1->order_goods_discount . '%</td>';
            $sum1 = ($catlist1->order_goods_price *  $catlist1->order_goods_cnt);
            $sum2 = ($sum1 * $catlist1->order_goods_discount) / 100;
            $sum3 += ($sum1 - $sum2);
            echo '<td> ' . number_format(($sum1 - $sum2), 0, '.', ',') . '</td>';
            echo '<td> ';
            echo $catlist1->order_date;
            echo '<button class="btn btn-danger mx-2 text-center" onclick="submitedrdel(' . $catlist1->order_goods_id . ',' . $catlist1->customer_id . ',' . $catlist1->order_no . ')">X</button >';

            echo '</td>';
            echo '</tr>';
            // echo '<td>' . $catlist1->customer_id . '</td>';
            // echo '<td>' . $catlist1->page_url . '</td>';
            // echo '<td>' . $catlist1->customer_ip . '</td>';
        }
        echo '</tbody>';
        echo '<tfoot>';
        echo '<tr><td> </td><td> </td><td> </td><td> </td><td>جمع</td><td>' . number_format($sum3, 0, '.', ',') . '</td><td></td></tr>';
        echo '</tfoot>';
        echo '</table>';
        echo '</div>';
        echo '<br>';

        // dd($shplist);
        ?>
        <form action="shop" method="post" name="form11" id="form11">
            @csrf
            <input id='id' name='id' value=''>
        </form>
        <script>
            function submitedrx(id) {
                document.getElementById('id').value = id;
                document.getElementById('form11').submit();
            }

            function submitedrdel(idd, ac, ono) {
                document.getElementById('order_goods_id').value = idd;
                document.getElementById('order_goods_cnt').value = 0;
                document.getElementById('customer_id').value = ac;
                document.getElementById('order_no').value = ono;
                document.getElementById('form1').submit();
            }
        </script>
        @endauth
        @endif
        خرید محصول  :
        <div class="row g-0" style="border-radius:15px;">
            <?php
            // use Illuminate\Foundation\Auth\User as Authenticatable;
            $ispost = 0;
            $fff = 0;
            foreach ($_REQUEST as $gg => $ff) {
                //dd($gg . " - " . $ff);
                if ($gg == 'id') {
                    $ispost = 1;
                    $fff = $ff;
                    break;
                }
            }


            $catlist = App\Models\goods::getgoodsid($fff);
            echo '<div class="col-md-4 bg-info" style="border-radius:15px;">';
            if ($ispost == 1) {
                echo "   <img  alt='" . $catlist->goods_name . "' style='border-radius:15px;' class='card-img-top' src='./uploadgood/" . $catlist->id . ".png'>";
            }
            echo '</div>';
            echo '<div class="col-md-8  bg-warning" style="border-radius:15px;">';
            echo ' <div class="card-body">';
            if ($ispost == 1) {
                echo "  <br><h5 class='card-title'>نام محصول :" . $catlist->goods_name . "</h5>";
                echo "  <p class='card-text'>قیمت محصول :" . $catlist->goods_price . " تومان";
                echo "  <br>میزان تخفیف :" . $catlist->goods_discount;
                echo "  <br>تعداد موجودی انبار :" . $catlist->goods_quanty;
            }
            ?>
            <div class="card mb-3 p-2 bg-secondary text-center" style="max-width: 70%;border-radius:15px;">
                <form method="post" action="saveorder" id="form1" name="form1">
                    @csrf
                    <input name='order_goods_id' id='order_goods_id' value='' type='hidden'>
                    <input name='order_goods_price' id='order_goods_price' value='' type='hidden'>
                    <input name='order_goods_discount' id='order_goods_discount' value='' type='hidden'>
                    <input name='page_url' id='page_url' value='' type='hidden'>
                    <input name='order_no' id='order_no' value='' type='hidden'>
                    <input name='order_goods_cnt' id='order_goods_cnt' value='' type="hidden">
                    @if (Route::has('login'))
                    @auth
                    @if($ispost==1)
                    <br>تعداد سفارش
                    <input name='order_goods_cnt' id='order_goods_cnt' value='1'>
                    @endif
                    <input name='customer_id' id='customer_id' value='{{ Auth::user()->id }}' type='hidden'>
                    @endauth
                    @endif
            </div>
            </form>
            @if (Route::has('login'))
            @auth
            @if($ispost==1)
            <br>
            <a onclick="submitedr('{{$catlist->id }}' ,'{{ $catlist->goods_price}}','{{$catlist->goods_discount}}')" class="btn btn-primary w-25">قرار دادن در سبد خرید </a>
            @endif
            <a onclick="submitedrtt()" class="btn btn-success w-25">اتمام و تسویه حساب </a>
            @endauth
            @endif
        </div>
        </div>

        <a href="\" class="btn btn-danger">ادامه خرید</a><br>
        </div>
        </div>
        <script>
            function submitedr(id, pr, ds) {
                document.getElementById('order_goods_id').value = id;
                document.getElementById('order_goods_price').value = pr;
                document.getElementById('order_goods_discount').value = ds;
                document.getElementById('page_url').value = window.location.href;
                document.getElementById('form1').submit();
            }
        </script>
    </h4>
</body>

</html>