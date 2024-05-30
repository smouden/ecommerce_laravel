@extends('base')

@push('custom_css')
    <link rel="stylesheet" href="{{ secure_asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/main.css') }}">
    <!-- for emoji in title -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
@endpush

@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Login/Register</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--==============Register  Box Area =================-->

<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="login_box_img">
                <img class="img-fluid" src="img/login.jpg" alt="">
                <div class="hover">
                    <h4>you have
                        account</h4>
                    <p>There are advances being made in science and technology everyday, and a good example of this
                        is the</p>
                    <a class="primary-btn" href="/login">login</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Register</h3>
                    <form method="POST" action="{{ secure_url('register') }}" class="row login_form" id="contactForm"
                        novalidate="novalidate">
                        @csrf

                        <!-- Name -->
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                value="{{ old('name') }}" required autofocus autocomplete="name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email Address -->
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                value="{{ old('email') }}" required autocomplete="username">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" required autocomplete="new-password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" placeholder="Confirm password" required
                                autocomplete="new-password">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Register Button -->
                        <div class="col-md-12 form-group">
                            <button type="submit" class="primary-btn">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============Register  Box Area =================-->



@endsection


@push('custom_js')

    <script src="{{ secure_asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="{{ secure_asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ secure_asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ secure_asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ secure_asset('js/nouislider.min.js') }}"></script>
    <script src="{{ secure_asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ secure_asset('js/owl.carousel.min.js') }}"></script>
    <!-- gmaps Js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ secure_asset('js/gmaps.min.js') }}"></script>
    <script src="{{ secure_asset('js/main.js') }}"></script>
@endpush