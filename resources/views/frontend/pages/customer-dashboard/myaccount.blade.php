@extends('frontend.layout.template')

@section('page-title')
<title>SCommerce Website</title>
@endsection

@section('body-css')

@endsection

@section('body-content')

    <div role="main" class="main">

        <section class="page-header page-header-classic">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Pages</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col p-static">
                        <h1 data-title-border>User Profile</h1>

                    </div>
                </div>
            </div>
        </section>

        <div class="container py-2">

            <div class="row">
                <div class="col-lg-3 mt-4 mt-lg-0">

                    <div class="d-flex justify-content-center mb-4">
                        <div class="profile-image-outer-container">
                            <div class="profile-image-inner-container bg-color-primary">
                                <img src="{{asset('frontend/img/avatars/avatar.jpg')}}">
                                <span class="profile-image-button bg-color-dark">
                                    <i class="fas fa-camera text-light"></i>
                                </span>
                            </div>
                            <input type="file" id="file" class="profile-image-input">
                        </div>
                    </div>

                    <aside class="sidebar mt-2" id="sidebar">
                        <ul class="nav nav-list flex-column mb-5">
                            <li class="nav-item"><a class="nav-link text-dark active" href="#">My Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">User Preferences</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Billing</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Invoices</a></li>
                        </ul>
                    </aside>

                </div>
                <div class="col-lg-9">

                    <div class="overflow-hidden mb-1">
                        <h2 class="font-weight-normal text-7 mb-0"><strong class="font-weight-extra-bold">My</strong> Profile</h2>
                    </div>
                    <div class="overflow-hidden mb-4 pb-3">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>

                    <form role="form" class="needs-validation">
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">First name</label>
                            <div class="col-lg-9">
                                <input class="form-control" required type="text" value="John">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Last name</label>
                            <div class="col-lg-9">
                                <input class="form-control" required type="text" value="Doe">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" required type="email" value="email@gmail.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2">Company</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2">Website</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2">Address</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="" placeholder="Street">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2"></label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text" value="" placeholder="City">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text" value="" placeholder="State">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2">Time Zone</label>
                            <div class="col-lg-9">
                                <select id="user_time_zone" class="form-control" size="0">
                                    <option value="Hawaii">(GMT-10:00) Hawaii</option>
                                    <option value="Alaska">(GMT-09:00) Alaska</option>
                                    <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                    <option value="Arizona">(GMT-07:00) Arizona</option>
                                    <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                    <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                    <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                    <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Username</label>
                            <div class="col-lg-9">
                                <input class="form-control" required type="text" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" required type="password" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Confirm password</label>
                            <div class="col-lg-9">
                                <input class="form-control" required type="password" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-lg-9">

                            </div>
                            <div class="form-group col-lg-3">
                                <input type="submit" value="Save" class="btn btn-primary btn-modern float-right" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>

@endsection

@section('body-script')

@endsection