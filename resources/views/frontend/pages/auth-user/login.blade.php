@extends('frontend.layout.template')

@section('page-title')
<title>SCommerce Website</title>
@endsection

@section('body-css')

@endsection

@section('body-content')

    <div role="main" class="main shop py-4">

        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="featured-boxes">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="featured-box featured-box-primary text-left mt-2">
                                    <div class="box-content">
                                        <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">I'm a Returning Customer</h4>
                                        <!-- Login Form -->

                                        <x-auth-session-status class="mb-4" :status="session('status')" />

                                        <form action="{{ route('login') }}" id="frmSignIn" method="POST">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label for="email" class="font-weight-bold text-dark text-2">E-mail Address</label>
                                                    <input type="email" name="email" placeholder="Enter Email" id="email" value="{{ old('email') }}" 
                                                    class="form-control form-control-lg" required autofocus autocomplete="email">
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    @if (Route::has('password.request'))
                                                        <a class="float-right" href="{{ route('password.request') }}">
                                                            {{ __('Lost Password?') }}
                                                        </a>
                                                    @endif
                                                    <label for="password" class="font-weight-bold text-dark text-2">Password</label>
                                                    <input type="password" name="password" class="form-control form-control-lg" id="password"
                                                 placeholder="Enter Password" required autocomplete="current-password"> 
                                                </div>
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-lg-6">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="rememberme" checked>
                                                        <label class="custom-control-label text-2" for="rememberme">Remember Me</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <input type="submit" value="Sign in" class="btn btn-primary float-right" data-loading-text="Loading...">
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="featured-box featured-box-primary text-left mt-2">
                                    <div class="box-content">
                                        <h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Register An Account</h4>
                                        <!-- Registration Form -->
                                        <form action="/" id="frmSignUp" method="post">
                                            <div class="form-row">
                                                <div class="form-group col">
                                                    <label class="font-weight-bold text-dark text-2">E-mail Address</label>
                                                    <input type="text" value="" class="form-control form-control-lg">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-lg-6">
                                                    <label class="font-weight-bold text-dark text-2">Password</label>
                                                    <input type="password" value="" class="form-control form-control-lg">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                    <label class="font-weight-bold text-dark text-2">Re-enter Password</label>
                                                    <input type="password" value="" class="form-control form-control-lg">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-lg-9">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="terms">
                                                        <label class="custom-control-label text-2" for="terms">I have read and agree to the <a href="#">terms of service</a></label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-3">
                                                    <input type="submit" value="Sign up" class="btn btn-primary float-right" data-loading-text="Loading...">
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

        </div>

    </div>

@endsection

@section('body-script')

@endsection