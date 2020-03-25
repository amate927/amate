<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Model</title>

    <!--Core CSS -->
    <link href="{{ asset('bs3/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-reset.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
{{-- 
    <a href="index.html" class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="">
    </a> --}}
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">

        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="{{ asset('images/avatar1_small.jpg')}}">
                <span class="username">Model</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->

<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->            
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="#">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('tamu/view')}}">
                        <i class="fa fa-user"></i>
                        <span>Tamu</span>
                    </a>
                </li>
            </ul>    
        </div>     
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->
        @yield('konten')
    <!-- page end-->
    </section>
</section>
<!--main content end-->

<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
<script src="{{ asset('Js/jquery.js')}}"></script>
<script src="{{ asset('bs3/js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{ asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{ asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{ asset('js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('js/jquery.nicescroll.js')}}"></script>
<!--Easy Pie Chart-->
<script src="{{ asset('js/easypiechart/jquery.easypiechart.js')}}"></script>
<!--Sparkline Chart-->
<script src="{{ asset('js/sparkline/jquery.sparkline.js')}}"></script>
<!--jQuery Flot Chart-->
<script src="{{ asset('js/flot-chart/jquery.flot.js')}}"></script>
<script src="{{ asset('js/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{ asset('js/flot-chart/jquery.flot.resize.js')}}"></script>
<script src="{{ asset('js/flot-chart/jquery.flot.pie.resize.js')}}"></script>


<!--common script init for all pages-->
<script src="{{ asset('js/scripts.js')}}"></script>

</body>
</html>
