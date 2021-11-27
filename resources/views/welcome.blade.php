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
   
        <div style="background-color:#ffffff" class="max-w-6xl mx-auto sm:px-1 lg:px-1 shadow">
            @include('layouts.page_header')
            @yield('pageheader')

            <!-- _______________________________ -->
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

        </div>
        <!-- _____________________________________________________ -->
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
        <path fill="#f8f9fa" fill-opacity="1" d="M0,224L120,234.7C240,245,480,267,720,245.3C960,224,1200,160,1320,128L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
    </svg>

    <!-- ___________________________ box __________________________ -->
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

    @include('layouts.page_footer')
    @yield('pagefooter')
    <!-- _____________________________________________________ -->
    <hr>
    <center>

        <style>
            .h_iframe-aparat_embed_frame {
                position: relative;
            }

            .h_iframe-aparat_embed_frame .ratio {
                display: block;
                width: 100%;
                height: auto;
            }

            .h_iframe-aparat_embed_frame iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        </style>
        <div class="h_iframe-aparat_embed_frame w-25">
            <span style="display: block;padding-top: 57%"></span>
            <iframe src="{{App\Models\sitepage::getsitepage(['id_page'=>1,'page'=>'1'])->page_url}}" allowFullScreen="true" id="mp2" webkitallowfullscreen="true" mozallowfullscreen="true">
            </iframe>
        </div>

        <a class="btn btn-success" onclick="openfile('r1');">vide01</a>
        <a class="btn btn-success" onclick="openfile('r2');">vide02</a>
        <a class="btn btn-success" onclick="openfile('r3');">vide03</a>
        <a class="btn btn-success" onclick="openfile('o1');">vide04</a>
        <a class="btn btn-success" onclick="openfile('o2');">vide05</a>
    </center>



    <script>
        function openfile(fn) {


            if (fn == 'r1') {
                document.getElementById('mp2').src = "{{App\Models\sitepage::getsitepage(['id_page'=>1,'page'=>'1'])->page_url}}";
            } else
            if (fn == 'r2') {
                document.getElementById('mp2').src = "{{App\Models\sitepage::getsitepage(['id_page'=>2,'page'=>'1'])->page_url}}";
            } else
            if (fn == 'r3') {
                document.getElementById('mp2').src = "{{App\Models\sitepage::getsitepage(['id_page'=>3,'page'=>'1'])->page_url}}";
            } else
            if (fn == 'o1') {
                document.getElementById('mp2').src = "{{App\Models\sitepage::getsitepage(['id_page'=>4,'page'=>'1'])->page_url}}";
            } else
            if (fn == 'o2') {
                document.getElementById('mp2').src = "{{App\Models\sitepage::getsitepage(['id_page'=>5,'page'=>'1'])->page_url}}";
            }
        }
    </script>

    <!-- _____________________________________________________  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>