@extends('base')

@push('custom_css')
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/nouislider.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
@endpush

@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Shopping Cart</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form method="POST" action="{{ route('cart.update') }}">
                            @csrf
                            @foreach ($carts as $cart)
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex flex-column align-items-center">
                                            <p>{{ $cart->product->title_product }}</p>
                                            <img src="{{ asset($cart->product->picture) }}" alt=""
                                                style="width: 150px; height: 100px;">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>${{ number_format($cart->product->price_product, 2) }}</h5>
                                </td>
                                <td>
                                    <input type="number" name="quantities[{{ $cart->id }}]"
                                        value="{{ $cart->quantity_product_cart }}" class="input-text qty" min="1">
                                </td>
                                <td>
                                    <h5>${{ number_format($cart->total_price_product, 2) }}</h5>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="4" style="text-align: right;">
                                    <button type="submit" class="btn btn-primary">Update Cart</button>
                                </td>
                            </tr>
                        </form>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>Shopping Cart Total</h5>
                            </td>
                            <td>
                                <h5>${{ number_format($shoppingCartTotal, 2) }}</h5>
                            </td>
                        </tr>
                        <tr class="out_button_area">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="#">Continue Shopping</a>
                                    <a class="primary-btn" href="{{ route('checkout') }}">Proceed to checkout</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================-->

@endsection

@push('custom_js')
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
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