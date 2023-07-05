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
                            <!-- frontend/img/avatars/avatar.jpg -->
                                <img src="{{Auth::user()->image ? asset('frontend/img/Auth::user()->image') : asset('frontend/img/default.png')}}" alt="User Image">
                                <span class="profile-image-button bg-color-dark">
                                    <i class="fas fa-camera text-light"></i>
                                </span>
                            </div>
                            <input type="file" id="file" class="profile-image-input">
                        </div>
                    </div>

                    <aside class="sidebar mt-2" id="sidebar">
                        <ul class="nav nav-list flex-column mb-5">
                            <li class="nav-item"><a class="nav-link text-dark active" href="{{route('customerDashboard')}}">My Profile</a></li>
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
                        <p class="mb-0">Manage your profile data</p>
                    </div>

                    <form action="{{ route('cprofileUpdate',auth()->id()) }}" role="form" class="needs-validation" method="POST" novalidate>
                        @csrf
                        <!-- <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">First name</label>
                            <div class="col-lg-9">
                                <input class="form-control" required type="text" value="John">
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Full name</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="name" name="name" id="name" value="{{Auth::user()->name}}"
                                autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" name="email" id="email" value="{{Auth::user()->email}}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Phone</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="phone" id="phone" 
                                value="{{ Auth::user()->phone ? Auth::user()->phone : '' }}" placeholder="Update your phone number" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2">Address Line 1</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="address_line1" id="address_line1" 
                                value="{{ Auth::user()->address_line1 ? Auth::user()->address_line1 : '' }}" placeholder="Update your address line 1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2">Address Line 2</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name="address_line2" id="address_line2"
                                value="{{ Auth::user()->address_line2 ? Auth::user()->address_line2 : '' }}" placeholder="Address Line 2">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2"></label>
                            <div class="col-lg-4">
                                <select class="form-control" size="0" id="district_id"  name="district_id" >
                                    <option>Please Select the District</option>
                                    @foreach($districts as $district)
                                        <option value="{{$district->id}}"
                                        @if($district->id == Auth::user()->district_id) selected @endif>{{ $district->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-5">
                                <select class="form-control" size="0" id="division_id"  name="division_id" >
                                    <option>Please Select the Division</option>
                                    @foreach($divisions as $division)
                                        <option value="{{$division->id}}"
                                        @if($division->id == Auth::user()->division_id) selected @endif>{{ $division->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2"></label>
                            <div class="col-lg-4">
                                <input class="form-control" type="text" name="zipCode" id="zipCode" 
                                value="{{ Auth::user()->zipCode ? Auth::user()->zipCode : '' }}" placeholder="Zip Code">
                            </div>
                            <div class="col-lg-5">
                            <input class="form-control" type="text" name="country_name" id="country_name"
                                value="{{ Auth::user()->country_name ? Auth::user()->country_name : '' }}" placeholder="Country Name">
                            </div>
                        </div>
                        <!-- <div class="form-group row">
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
                        </div> -->
                        <div class="form-group row">
                            <div class="form-group col-lg-9">

                            </div>
                            <div class="form-group col-lg-3">
                                <input type="submit" value="Update Details" class="btn btn-primary btn-modern float-right" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                    <div class="overflow-hidden mb-4 pb-3">
                        <p class="mb-0">Change your current password: </p>
                    </div>

                    <form role="form" class="needs-validation" method="POST">
                        <!-- <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Username</label>
                            <div class="col-lg-9">
                                <input class="form-control" required type="text" value="">
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required"
                            for="password" >Password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" name="password" id="password" value=""
                                placeholder="Enter new password" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required"
                            for="password_confirmation">Confirm password</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" value=""
                                placeholder="Confirm password" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col-lg-9">

                            </div>
                            <div class="form-group col-lg-3">
                                <input type="submit" value="Update Password" class="btn btn-primary btn-modern float-right" data-loading-text="Loading...">
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