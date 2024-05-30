<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ secure_asset('public_admin/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('public_admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}"
        rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ secure_asset('public_admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ secure_asset('public_admin/css/style.css') }}" rel="stylesheet">


</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Admin</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <!-- Vous pouvez ajouter une image de profil ou d'autres éléments ici -->
                    </div>
                    <div class="ms-3">

                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('products.index') }}" class="nav-item nav-link"><i class="fa fa-boxes me-2"></i>
                        Products</a>
                    <a href="{{ route('categories.index') }}" class="nav-item nav-link"><i class="fa fa-tags me-2"></i>
                        Categories</a>
                    <a href="{{ route('brands.index') }}" class="nav-item nav-link"><i class="fa fa-industry me-2"></i>
                        Brands</a>
                    <a href="{{ route('orders.index') }}" class="nav-item nav-link"><i
                            class="fa fa-shopping-cart me-2"></i> Orders</a>
                </div>

            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
            <!-- Navbar End -->

            @yield('content')



        </div>
        <!-- Content End -->

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Les autres bibliothèques semblent être locales, donc vous devez les placer dans le dossier public et les référencer avec asset -->
    <script src="{{ secure_asset('public_admin/lib/chart/chart.min.js') }}"></script>
    <script src="{{ secure_asset('public_admin/lib/easing/easing.min.js') }}"></script>
    <script src="{{ secure_asset('public_admin/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ secure_asset('public_admin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ secure_asset('public_admin/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ secure_asset('public_admin/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ secure_asset('public_admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ secure_asset('public_admin/js/main.js') }}"></script>

</body>

</html>