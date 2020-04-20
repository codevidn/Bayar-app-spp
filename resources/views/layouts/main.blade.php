<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{{ config('app.name', 'Bayar') }}</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('/images/Logo_smkn_4_bandung.png') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- Custom Css -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

    <!-- Wait Me Css -->
    <link href="{{ asset('plugins/waitme/waitMe.css')}}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome-v5.6.3/css/all.css') }}">

    <!-- Base css -->
    <link href="{{ asset('css/base.css')}}" rel="stylesheet" /> 

    <!-- get css -->
    @yield('css')

</head>

<body class="theme-teal">
    <div class="refresh">
        Pull To Refresh 
    </div>
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" onclick="ref()" href="#">Bayar </a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        @include('layouts.sidebar')
    </section>

    <section class="content" >
        @yield('content')
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    
    <!-- Bootstrap Core Js -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    
    <!-- Select Plugin Js -->
    <script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
    
    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    
    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('plugins/node-waves/waves.js')}}"></script>
    
    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('plugins/jquery-countto/jquery.countTo.js')}}"></script>
    
    <!-- Morris Plugin Js -->
    <script src="{{ asset('plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('plugins/morrisjs/morris.js')}}"></script>
    
    <!-- ChartJs -->
    <script src="{{ asset('plugins/chartjs/Chart.bundle.js')}}"></script>
    
    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.time.js')}}"></script>
    
    <!-- Refresh -->
    <script src="{{ asset('plugins/jquery-p2r-master/jquery.p2r.min.js')}}" type='text/javascript'></script>
    
    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('js/admin.js')}}"></script>

    <!-- get js -->
    @yield('js')

    <!-- Refresh -->
    <script>
        function ref() {
            location.reload();
        }
        var mouseY = 0;
        var startMouseY = 0;
        $('body').on('mousedown', function (ev) {
            mouseY = ev.pageY;
            startMouseY = mouseY;
            $(document).mousemove(function (e) {
                if (e.pageY > mouseY) {
                    var d = e.pageY - startMouseY;
                    console.log("d: " + d);
                    if (d >= 200)
                        location.reload();
                    $('body').css('margin-top', d/4 + 'px');
                }
                else
                    $(document).unbind("mousemove");


            });
        });
        $('body').on('mouseup', function () {
            $('body').css('margin-top', '0px');
            $(document).unbind("mousemove");
        });
        $('body').on('mouseleave', function () {
            $('body').css('margin-top', '0px');
            $(document).unbind("mousemove");
        });

    </script>
</body>

</html>
