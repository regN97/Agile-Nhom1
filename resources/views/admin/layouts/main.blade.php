<!-----------------------------------------------------------------------------------
    Item Name: Carrot - Multipurpose eCommerce HTML Template.
    Author: ashishmaraviya
    Version: 2.1
    Copyright 2024
----------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:02 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="admin, dashboard, ecommerce, panel" />
    <meta name="description" content="Carrot - Admin.">
    <meta name="author" content="ashishmaraviya">

    <title>Carrot - Admin.</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/img/favicon/favicon.ico') }}">

    <!-- Icon CSS -->
    <link href="{{ asset('admin/assets/css/vendor/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/vendor/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/vendor/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href='{{ asset('admin/assets/css/vendor/datatables.bootstrap5.min.css') }}' rel='stylesheet'>
    <link href='{{ asset('admin/assets/css/vendor/responsive.datatables.min.css') }}' rel='stylesheet'>
    <link href='{{ asset('admin/assets/css/vendor/daterangepicker.css') }}' rel='stylesheet'>
    <link href="{{ asset('admin/assets/css/vendor/simplebar.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/vendor/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/vendor/apexcharts.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">

    <!-- Main CSS -->
    <link id="main-css" href="{{ asset('admin/assets/css/style.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')

</head>

<body>
    <main class="wrapper sb-default ecom">
        @include('admin.layouts.partials.header')

        @include('admin.layouts.partials.sidebar')

        <!-- Main content -->
        <div class="cr-main-content">
            <div class="container-fluid">

                <div class="cr-page-title cr-page-title-2">
                    <div class="cr-breadcrumb">
                        <h5>{{ $title }}</h5>
                        <ul>
                            <li><a href="#">Carrot</a></li>
                            <li>{{ $title }}</li>
                        </ul>
                    </div>
                </div>

                @yield('content')

            </div>
        </div>
        <!-- End Main content -->

        @include('admin.layouts.partials.footer')
    </main>

    <!-- Vendor Custom -->
    <script src="{{ asset('admin/assets/js/vendor/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/owl.carousel.min.js') }}"></script>
    <!-- Data Tables -->
    <script src='{{ asset('admin/assets/js/vendor/jquery.datatables.min.js') }}'></script>
    <script src='{{ asset('admin/assets/js/vendor/datatables.bootstrap5.min.js') }}'></script>
    <script src='{{ asset('admin/assets/js/vendor/datatables.responsive.min.js') }}'></script>
    <!-- Caleddar -->
    <script src="{{ asset('admin/assets/js/vendor/jquery.simple-calendar.js') }}"></script>
    <!-- Date Range Picker -->
    <script src="{{ asset('admin/assets/js/vendor/moment.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/js/vendor/date-range.js') }}"></script>

    <!-- Main Custom -->
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>
    <script src="{{ asset('admin/assets/js/data/ecommerce-chart-data.js') }}"></script>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:34 GMT -->

</html>
