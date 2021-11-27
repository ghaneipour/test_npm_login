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

    <!-- D:\PHP~\sample\test_npm_login\public\fonts\IRANSansWeb_Bold.eot -->

    <title>{{ config('app.name', 'سافت لاک') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://softlock.ir/wp-content/uploads/2021/03/cropped-ls-180x180.png" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">


</head>

<body class="antialiased">
    <!-- _______________________________ -->
    @include('layouts.page_header')
    @yield('pageheader')
    @yield('page_tbl_up')
    <!-- _______________________________ -->
    @include('layouts.page_main')
    @yield('page_main')
    <!-- _______________________________ -->
    @include('layouts.page_shop')
    @yield('page_shop')
    <!-- _______________________________ -->
    @include('layouts.page_advertising1')
    @yield('page_advertising1')
    <!-- _______________________________ -->
    @include('layouts.page_aboutus2')
    @yield('page_about_us_2')
    <!-- _______________________________ -->
    @include('layouts.page_advertising2')
    @yield('page_advertising2')
    <!-- _______________________________ -->
    @include('layouts.page_aboutus1')
    @yield('page_about_us_1')
    <!-- _______________________________ -->
    @include('layouts.page_advertising3')
    @yield('page_advertising3')
    <!-- _______________________________ -->
    @include('layouts.page_aboutus3')
    @yield('page_about_us_3')
    <!-- _______________________________ -->
    @yield('page_tbl_end')
    <!-- _______________________________ -->
    @include('layouts.page_box')
    @yield('page_box')
    <!-- _______________________footer______________________________ -->

    @include('layouts.page_footer')
    @yield('pagefooter')
    <!-- _____________________________________________________ -->
    <hr>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- _____________________________________________________  -->
</body>

</html>