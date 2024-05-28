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
                    <h1>Profile</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--============== start Profile Information=================-->
    @include('profile.partials.update-profile-information-form')
    <!--================End Profile Information =================-->

    <!--============== start update password =================-->
    @include('profile.partials.update-password-form')
    <!--================End update password =================-->

    <!--================ start delete compte =================-->

    @include('profile.partials.delete-user-form')

    <!--================ end  delete compte =================-->

@endsection

@push('custom_js')

	<script src="{{ secure_asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
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
