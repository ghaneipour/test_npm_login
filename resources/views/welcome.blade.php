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