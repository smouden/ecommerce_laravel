@extends('base')



@push('custom_css')

    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

@endpush


@section('content')


<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Checkout</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->


<!-- start make orders and show what we have in carts  -->
<br><br>
<div class="container">
    <div class="row">
        <!-- Order form -->
        <div class="col-lg-8">
            <form action="{{ route('checkout.store') }}" method="post" class="needs-validation" novalidate>
                @csrf
                <div class="form-group">
                    <label for="first">First name</label>
                    <input type="text" class="form-control" id="first" name="firstname" placeholder="First name"
                        required>
                </div>
                <div class="form-group">
                    <label for="last">Last name</label>
                    <input type="text" class="form-control" id="last" name="lastname" placeholder="Last name" required>
                </div>
                <div class="form-group">
                    <label for="number">Phone number</label>
                    <input type="text" class="form-control" id="number" name="phone_number" placeholder="Phone number"
                        required>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email_address" placeholder="Email address"
                        required>
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <select class="form-control" name="country" required>
                        <option value="">Select a country</option>
                        <option value="USA">USA</option>
                        <option value="France">France</option>
                        <option value="Spain">Spain</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="zip">Postal code</label>
                    <input type="text" class="form-control" id="zip" name="postcode" placeholder="Postal code" required>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                </div>
                <div class="form-group">
                    <label for="add1">Address</label>
                    <input type="text" class="form-control" id="add1" name="adress_line" placeholder="Address" required>
                </div>
                <button type="submit" class="btn btn-primary">Confirm order</button>
            </form>
        </div>

        <!-- Cart details -->
        <div class="col-lg-4">
            <div class="card border-primary mb-3">
                <div class="card-header bg-primary text-white">Your order</div>
                <div class="card-body">
                    <h4 class="card-title">Cart details</h4>
                    <ul class="list-group list-group-flush">
                        <!-- Product list header -->
                        <li class="list-group-item">Product <span class="float-right">Total</span></li>

                        <!-- Dynamic elements of the cart -->
                        @foreach ($cartItems as $item)
                            <li class="list-group-item">
                                {{ $item->product->title_product }} <!-- Product name -->
                                <span class="middle">x {{ $item->quantity_product_cart }}</span> <!-- Quantity -->
                                <span class="badge badge-secondary float-right">${{ $item->total_price_product }}</span>
                                <!-- Total price -->
                            </li>
                        @endforeach

                        <!-- Subtotal, shipping, and total -->
                        <li class="list-group-item">Subtotal <span class="badge badge-primary float-right">${{
    $subtotal }}</span></li>
                        <li class="list-group-item">Shipping <span class="badge badge-warning float-right">${{
    $shipping }}</span></li>
                        <li class="list-group-item">Total <span class="badge badge-success float-right">${{ $total
                                    }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>

<!-- end make orders and show what we have in carts  -->



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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('js/gmaps.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

@endpush