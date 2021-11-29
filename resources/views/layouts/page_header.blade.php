@section('pageheader')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

    <div style="background-color:#ffffff" class="max-w-6xl mx-auto sm:px-1 lg:px-1 shadow">

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

            <div class="bg-light d-inline-block" aria-labelledby="navbarDropdown1">
                <a class="bg-light mx-2 px-2 text-sm text-gray-700  text-decoration-none" href="my_service">
                    سرویس های من
                    <!-- </span> <span> -->
                    <i class="bi bi-tools">
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



        @endsection

        @section('page_tbl_up')
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
        @endsection

        @section('page_tbl_end')
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style="z-index: 999999 !important;">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <!-- box1 -->
                    <div class="flex items-center">
                        <img src="{{ url('/img/doc.png')}}" width="50">
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            @if( $lss_login==1)
                            <a href="/admin/category/create" class="underline text-gray-900 dark:text-white">
                                {{App\Models\sitepage::getsitepage(['id_page'=>14,'page'=>'14'])->page_title}}
                            </a>
                            @else
                            برای استفاده لاگین بفرمایید
                            @endif
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            {{App\Models\sitepage::getsitepage(['id_page'=>14,'page'=>'14'])->page_str1}}

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
                                            {{App\Models\sitepage::getsitepage(['id_page'=>13,'page'=>'13'])->page_title}}
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
                            {{App\Models\sitepage::getsitepage(['id_page'=>13,'page'=>'13'])->page_str1}}
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">
                        <img src="{{ url('/img/news.png')}}" width="50">

                        <div class="ml-4 text-lg leading-7 font-semibold">
                            @if( $lss_resource==1)
                            <a href="/bs" class="underline text-gray-900 dark:text-white">
                                {{App\Models\sitepage::getsitepage(['id_page'=>16,'page'=>'16'])->page_title}}
                            </a>
                            @else
                            برای استفاده لاگین بفرمایید
                            @endif
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            {{App\Models\sitepage::getsitepage(['id_page'=>16,'page'=>'16'])->page_str1}}
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                    <div class="flex items-center">
                        <img src="{{ url('/img/setting.png')}}" width="50">
                        <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
                            @if( $lss_login==1)
                            <a href="/food" class="fff">
                                {{App\Models\sitepage::getsitepage(['id_page'=>15,'page'=>'15'])->page_title}}
                            </a>
                            @else
                            برای استفاده لاگین بفرمایید
                            @endif
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            {{App\Models\sitepage::getsitepage(['id_page'=>15,'page'=>'15'])->page_str1}}
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
<!-- _____________________________________________________ -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
    <path fill="#f8f9fa" fill-opacity="1" d="M0,224L120,234.7C240,245,480,267,720,245.3C960,224,1200,160,1320,128L1440,96L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
</svg>
@endsection