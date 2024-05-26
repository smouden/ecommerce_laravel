@extends('base')

@push('custom_css')
<link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
<link rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/ion.rangeSlider.css') }}">
<link rel="stylesheet" href="{{ asset('css/ion.rangeSlider.skinFlat.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<!-- for emoji in title -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
@endpush



@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Product Details Page</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->



<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="s_Product_carousel">
                    <div class="single-prd-item">
                        <img class="img-fluid" src="{{ asset($product->picture) }}" alt=""
                            style="width: 450px !important; height: 583px !important; object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3>{{ $product->title_product }}</h3> <!-- Titre du produit -->
                    <h2>${{ number_format($product->price_product, 2) }}</h2> <!-- Prix du produit -->
                    <ul class="list">
                        <li><a class="active" href="#"><span>Category</span> : {{ $category->name_category }}</a></li>
                        <!-- Catégorie du produit -->
                    </ul>
                    <p>{{ $product->description_product }}</p> <!-- Description du produit -->
                    <div class="card_area d-flex align-items-center">
                        <a class="primary-btn"  href="{{ route('cart.add', $product->id) }}">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->






<!--================Product Description Area =================-->
<section class="product_description_area">
    <div class="container">
        <ul class="nav nav-tabs " id="myTab" role="tablist">
            <li class="nav-item ">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Spécification</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>
                {{ $product->text_product }}
                </p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <h5>Brand</h5>
                                </td>
                                <td>
                                    <h5> {{ $brand->name_brand }}</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Size</h5>
                                </td>
                                <td>
                                    <h5>{{ $product->size_product }}</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>gender product</h5>
                                </td>
                                <td>
                                    <h5>{{ $product->gender}}</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>release_date</h5>
                                </td>
                                <td>
                                    <h5>{{ $product->created_at}}</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>origin</h5>
                                </td>
                                <td>
                                    <h5>{{ $product->origin }}</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Shipping Time</h5>
                                </td>
                                <td>
                                    <h5>{{ $product->shipping_time }}</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Product Description Area =================-->

@endsection


@push('custom_js')

<script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/nouislider.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script src="{{ asset('js/gmaps.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@endpush