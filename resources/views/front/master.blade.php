<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        <meta charset="utf-8"/>

        @yield('title')

        <meta name="description" content=""/>
        <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]"/>

        <!-- mobile settings -->
        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

        <!-- WEB FONTS : use %7C instead of | (pipe) -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700"
              rel="stylesheet" type="text/css"/>

        <!-- CORE CSS -->
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- LAYER SLIDER -->
        <link href="assets/plugins/slider.layerslider/css/layerslider.css" rel="stylesheet" type="text/css"/>

        <!-- THEME CSS -->
        <link href="assets/css/essentials.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/layout.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL SCRIPTS -->
        <link href="assets/css/header-1.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme"/>
    </head>

    <body class="smoothscroll enable-animation">

        <!-- SLIDE TOP -->
        {{--@include('front.slide-top')--}}
        <!-- /SLIDE TOP -->

        <!-- wrapper -->
        <div id="wrapper">

            <!-- Top Nav -->
            @include('front.header')
            <!-- /Top Nav -->

            <!-- LAYER SLIDER -->
            @include('front.layer-slider')
            <!-- /LAYER SLIDER -->

            <!-- FOOTER -->
            @include('front.footer')
            <!-- /FOOTER -->

        </div>
        <!-- /wrapper -->

        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a>

        @yield('preloader')
        <!-- JAVASCRIPT FILES -->
        <script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
        <script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>

        <!-- LAYER SLIDER -->
        <script type="text/javascript" src="assets/plugins/slider.layerslider/js/layerslider_pack.js"></script>
        <script type="text/javascript" src="assets/js/view/demo.layerslider_slider.js"></script>

        <!-- SCRIPTS -->
        <script type="text/javascript" src="assets/js/scripts.js"></script>

    </body>

</html>