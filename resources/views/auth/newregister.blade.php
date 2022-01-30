@extends('layouts.frame')
@section('content')
<title>{{$pageTittle}}</title>
<div class="container py-5 px-3">
    <div class="row border border-2 shadow">
        <div class="col-4" id="regSideB">
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
                                <h5 class="siginSideBTxt ">Already Registered?</h5>
                            </div>
                        </div>
                        <div class="row text-center py-3">
                            <div class="col">
                                <img src="/assets/img/signin/Character-Ikbal 2.png" width="100%"/>
                            </div>
                        </div>
                        <div class="row py-5 text-center">
                            <div class="col-12">
                                <a href="{{ route('login') }}" type="button" class="btn btn-outline-light btn-lg siginSideBbtn">Sign in to your account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-8 offset-2 pt-5 signinSideA">
                    <div class="row">
                        <div class="col">
                            <h3 class="signinSideAtittle">Register with Us</h3>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <p>“Leveraging and harnessing on information technology for the prosperity of the security sector of Botswana.”</p>
                        </div>
                    </div>
                    <div class="row pt-1 pb-5">
                        <div class="col">
                                <!-- Session Status -->
                            <x-auth-session-status class="mb-4 error" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4 error" :errors="$errors" />

                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="row py-3">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input id="name" class="form-control" type="text" name="name" placeholder="Fullname" required>
                                    </div>
                                </div>
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
                                <div class="row py-3">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="row text-center py-3">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary btn-lg">Register Account</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection