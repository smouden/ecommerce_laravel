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
    <!-- for emoji in title -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
@endpush


@section('content')

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Historic</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- Start Order History Table -->

    <div class="whole-wrap pb-100">
        <div class="container">
            <div class="section-top-border">
                <br>
                <h3 class="mb-30">Order History</h3>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="country">Order ID</div>
                            <div class="country">First Name</div>
                            <div class="country">Last Name</div>
                            <div class="country">Order Date</div>
                            <div class="country">Order Status</div>
                        </div>
                        @foreach ($orders as $order)
                        <div class="table-row">
                            <div class="country">{{ $order->id }}</div>
                            <div class="country">{{ $order->firstname }}</div>
                            <div class="country">{{ $order->lastname }}</div>
                            <div class="country">{{ $order->order_date }}</div>
                            <div class="country">
                                @switch($order->status)
                                @case(0)
                                In Progress
                                @break
                                @case(1)
                                Accepted
                                @break
                                @case(2)
                                Refused
                                @break
                                @case(3)
                                Delivered
                                @break
                                @default
                                Unknown
                                @endswitch
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Order History Table -->
<br><br><br>
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