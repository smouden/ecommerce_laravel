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
@endpush

@section('content')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Confirmation</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->


<!--================Order Details Area =================-->
<section class="order_details section_gap">
    <div class="container">
        <h3 class="title_confirmation">Thank you. Your order has been received.</h3>
        <div class="order_details_table">
            <h2>Your ordered products</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderItems as $item)
                            <tr>
                                <td>
                                    <p>{{ $item->title_product_ordered }}</p>
                                </td>
                                <td>
                                    <h5>x {{ $item->quantity_product_comanded }}</h5>
                                </td>
                                <td>
                                    <p>${{ $item->price_product_ordered }}</p>
                                </td>
                                <td>
                                    <p>${{ $item->total_price_product_commanded }}</p>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3" class="text-right">
                                <strong>Total</strong>
                            </td>
                            <td>
                                <strong>${{ $orderItems->sum('total_price_product_commanded') }}</strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Order Details Area =================-->


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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ secure_asset('js/gmaps.min.js') }}"></script>
    <script src="{{ secure_asset('js/main.js') }}"></script>
@endpush