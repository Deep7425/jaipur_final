<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <title>@yield('title', 'Admin Dashboard - Jaipur Jazbaa')</title>
    <meta charset="utf-8">
    <meta name="author" content="Jaipur Jazbaa">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="@yield('description', 'Admin dashboard for managing Jaipur Jazbaa e-commerce platform')">
    
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/admin/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/admin/css/animation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/admin/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/admin/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/admin/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/font/fonts.css')}}">
    <link rel="stylesheet" href="{{url('assets/admin/icon/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/admin/css/sweetalert.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/admin/css/custom.css')}}">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('assets/admin/images/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" href="{{url('assets/admin/images/favicon.ico')}}">
    
    @yield('additional_css')
</head>

<body class="body">
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap">
                <!-- Sidebar -->
                @include('layout.admin.sidebar')
                
                <!-- Main Content -->
                <div class="section-content-right">
                    <!-- Header -->
                    @include('layout.admin.header')
                    
                    <!-- Main Content Area -->
                    <div class="main-content">
                        <div class="main-content-inner">
                            <div class="main-content-wrap">
                                @yield('content')
                            </div>
                        </div>
                        
                        <!-- Footer -->
                        @include('layout.admin.footer')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Files -->
    <script src="{{url('assets/admin/js/jquery.min.js')}}"></script>
    <script src="{{url('assets/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/admin/js/bootstrap-select.min.js')}}"></script>   
    <script src="{{url('assets/admin/js/sweetalert.min.js')}}"></script>    
    <script src="{{url('assets/admin/js/apexcharts/apexcharts.js')}}"></script>
    <script src="{{url('assets/admin/js/main.js')}}"></script>
    
    @yield('additional_js')
</body>

</html>
