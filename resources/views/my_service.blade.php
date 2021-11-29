<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.page_head')
    @yield('page_head')
</head>

<body class="antialiased">
    <!-- _______________________________ -->
    @include('layouts.page_header')
    @yield('pageheader')
    @yield('page_tbl_up')
    <!-- _______________________________ -->
    <!-- _______________________________ -->
    @include('layouts.page_box')
    @yield('page_box')

    {{App\Models\titels::gettitelsid(['id'=>1])->texts}}<br>
    تومان در روز
    {{App\Models\price::getpriceid(['price_id'=>1])->price_fee}}
    <?php
                                $req = App\Models\advertising::getAdvertising1();
                                
                                 //dd($req);
                                foreach ($req as $rex) {
                                    echo '<button   ';
                                    echo 'value="';
                                    echo $rex->id; 
                                    echo '" class="btn btn-info" >';
                                   
                                    echo $rex->Advertising_title.'</button>';
                                }
                                ?>
                                 "Advertising_title" => "تبلیغ خدمات 1"
        "Advertising_str1" => "اینجا خدمات و تبلیغات شما قابل ارائه است "
        "Advertising_str2" => "[value-4]"
        "Advertising_seo" => "[value-5]"
        "Advertising_url" => "https://hajifirouz2.cdn.asset.aparat.com/aparat-video/a8960af88c80aa6ee72ebbec7749b95239918957-480p.mp4?wmsAuthSign=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2t ▶"
        "Advertising_grp1" => 1
        "Advertising_grp2" => 0
        "Advertising_grp3" => 0
        "Advertising_grp4" => 0
        "Advertising_expire" => "0000-00-00 00:00:00"
        "Advertising_pay" => 0.0
    <!-- _______________________footer______________________________ -->
    @include('layouts.page_footer')
    @yield('pagefooter')
    <!-- _____________________________________________________ -->
    <hr>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- _____________________________________________________  -->
</body>

</html>