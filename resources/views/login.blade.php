@extends('base')

@push('custom_css')
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">

	</head>
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

<!--================Login Box Area =================-->

<section class="login_box_area section_gap">
	<div class="container">
		<div class="row">
			<div class="login_box_img">
				<img class="img-fluid" src="img/login.jpg" alt="">
				<div class="hover">
					<h4>New to our website?</h4>
					<p>There are advances being made in science and technology everyday, and a good example of this
						is the</p>
					<a class="primary-btn" href="/register">Create an Account</a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="login_form_inner">
					<h3>Log in to enter</h3>
					<form class="row login_form" method="POST" action="{{ route('login') }}" id="contactForm"
						novalidate="novalidate">
						@csrf
						<div class="col-md-12 form-group">

							@auth
								<div class="alert alert-info">
									You're connected as "{{ Auth::user()->email }}".
									<a href="{{ route('logout') }}"
										onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
								</div>
							@endauth

							<input type="email" class="form-control" id="email" name="email" placeholder="Email"
								onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"
								value="{{ old('email') }}" required autofocus>
							@error('email')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="col-md-12 form-group">
							<input type="password" class="form-control" id="password" name="password"
								placeholder="Password" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Password'" required>
							@error('password')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="col-md-12 form-group">
							<div class="creat_account">
								<input type="checkbox" id="f-option2" name="remember">
								<label for="f-option2">Keep me logged in</label>
							</div>
						</div>
						<div class="col-md-12 form-group">
							<button type="submit" class="primary-btn">Log In</button>
							@if (Route::has('password.request'))
								<a class="text-danger" href="{{ route('password.request') }}">Forgot Password?</a>
							@endif
						</div>
					</form>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!--================Login Box Area =================-->




@endsection


@push('custom_js')

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
		integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
		crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
@endpush