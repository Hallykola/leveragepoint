@extends('layouts.frame')
@section('content')
<title>{{$pageTittle}}</title>
<div class="container py-5 px-3">
    <div class="row border border-2 shadow">
        <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="row">
                <div class="col-8 offset-2 pt-5 signinSideA">
                    <div class="row">
                        <div class="col">
                            <h3 class="signinSideAtittle">Welcome Back</h3>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <p>Sign into your account to enjoy the convenience of our services.</p>
                        </div>
                    </div>
                    <div class="row pt-1 pb-5">
                        <div class="col">
                                <!-- Session Status -->
                            <x-auth-session-status class="mb-4 error" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4 error" :errors="$errors" />

                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="row py-3">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input id="email" class="form-control" type="email" name="email" placeholder="Enter your email address" required>
                                    </div>
                                </div>
                                <div class="row py-3">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input id="password" class="form-control" type="password" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-6 text-start">
                                        <input type="checkbox" name="remember" id="remember_me">
                                        <span>Remember me</span>
                                    </div>
                                    <div class="col-6 text-end">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="row text-center py-3">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary btn-lg">Sign into your account</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-block col-lg-4" id="siginSideB">
            <div class="row">
                <div class="col">
                    <div class="container">
                        <div class="row pt-5">
                            <div class="col-3">
                                <img src="/assets/img/signin/Object.png" id="imglatop">
                            </div>
                            <div class="col-9 pt-2">
                                <h5 class="siginSideBTxt">Private Security Registration Company</h5>
                            </div>
                        </div>
                        <div class="row text-center pt-4">
                            <div class="col pt-3 pt-1">
                                <h5 class="siginSideBTxt ">Not Registered?</h5>
                            </div>
                        </div>
                        <div class="row text-center py-3">
                            <div class="col">
                                <img src="/assets/img/signin/Character.png" width="100%"/>
                            </div>
                        </div>
                        <div class="row py-5 text-center">
                            <div class="col-12">
                                <a href="{{ route('register') }}" type="button" class="btn btn-outline-light btn-lg siginSideBbtn">Register with Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection