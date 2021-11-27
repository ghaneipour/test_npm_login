@extends('layouts.app')

@section('content')
<div class="container" dir=rtl>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ثبت عضویت') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام و نام خانوادگی') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="melicode" class="col-md-4 col-form-label text-md-right">کد ملی</label>

                            <div class="col-md-6">
                                <input id="melicode" type="text" class="form-control" name="melicode">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="companeyname" class="col-md-4 col-form-label text-md-right">نام شرکت</label>

                            <div class="col-md-6">
                                <input id="companeyname" type="text" class="form-control" name="companeyname">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail ایمیل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">موبایل</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control" name="mobile">
                            </div>
                        </div>

<hr>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمز ورود') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('تکرار رمز ورود') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
<hr>
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">شهر</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="postalcode" class="col-md-4 col-form-label text-md-right">کدپستی</label>

                            <div class="col-md-6">
                                <input id="postalcode" type="text" class="form-control" name="postalcode">
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">آدرس</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address">
                            </div>
                        </div>

<hr>

                        <input id="user_lss" type="hidden" name="user_lss" value="1_0_0_0_0_0_0_">
                        <input id='ticketdone' type='hidden' name='ticketdone' value='0'>
                        <input id='expire' type='hidden' name='expire' value='2025/01/01'>


                        <div class="form-group row">
                            <label for="lss_grp1" class="col-md-4 col-form-label text-md-right">{{App\Models\titels::gettitelsid(['id'=>1])->titles}}</label>

                            <div class="col-md-6">
                                <input id="lss_grp1" type="checkbox" class="form-check-input" name="lss_grp1">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lss_grp2" class="col-md-4 col-form-label text-md-right">{{App\Models\titels::gettitelsid(['id'=>2])->titles}}</label>

                            <div class="col-md-6">
                                <input id="lss_grp2" type="checkbox" class="form-check-input" name="lss_grp2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lss_grp3" class="col-md-4 col-form-label text-md-right">{{App\Models\titels::gettitelsid(['id'=>3])->titles}}</label>

                            <div class="col-md-6">
                                <input id="lss_grp3" type="checkbox" class="form-check-input" name="lss_grp3">
                            </div>
                        </div>


                        <div class="form-group row m-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('درخواست ثبت عضویت') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection