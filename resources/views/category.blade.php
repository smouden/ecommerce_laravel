@extends('base')

@push('custom_css')
<link rel="stylesheet" href="{{ secure_asset('css/linearicons.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/nice-select.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/nouislider.min.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/main.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>
	.shift-left {
		margin-left: 80px;
		/* Ajustez cette valeur en fonction de la quantité de décalage souhaitée */
	}

	
</style>
@endpush


@section('content')

<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Shop Category page</h1>
			</div>
		</div>
	</div>
</section>
<br><br><br>
<!-- End Banner Area -->


<div class="container">
	<div class="row">
		<div class="col-12">

			

			<!-- Début du Meilleur Vendeur -->
			@if (isset($category) && isset($products))
			<section class="lattest-product-area pb-40 category-list shift-left">
				<div class="row">
					@foreach ($products as $product)
					<!-- produit individuel -->
					<div class="col-lg-4 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="{{ secure_asset($product->picture) }}"
								alt="{{ $product->title_product }}"
								style="width: 255px !important; height: 272.51px !important; object-fit: cover;">
							<div class="product-details">
								<h6>{{ $product->title_product }}</h6>
								<div class="price">
									<h6>${{ $product->price_product }}</h6>
								</div>
								<div class="prd-bottom">
									<a href="{{ route('cart.add', $product->id) }}" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="{{ route('product.show', $product->id) }}" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</section>
			@endif
			<!-- Fin du Meilleur Vendeur -->

			<!-- End Best Seller -->
		</div>
	</div>
</div>
<br><br><br><br><br>
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
<!--gmaps Js-->
<script src="{{ secure_asset('js/main.js') }}"></script>
@endpush