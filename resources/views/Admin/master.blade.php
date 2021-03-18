
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">

    <meta http-equiv=”X-UA-Compatible” content=”IE=EmulateIE9”>
    <meta http-equiv=”X-UA-Compatible” content=”IE=9”>
    <base href="{{asset('')}}">
    <link rel="shortcut icon" href="source/images/favicon.png">
    <title>BucketAdmin</title>
    <!--Core CSS -->
    <link href="source/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="source/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="source/css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="source/js/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="source/css/clndr.css" rel="stylesheet">
    <!--clock css-->
    <link href="source/js/css3clock/css/style.css" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="source/js/morris-chart/morris.css">
    <!-- Custom styles for this template -->
    <link href="source/css/style.css" rel="stylesheet">
    <link href="source/css/style-responsive.css" rel="stylesheet"/>
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
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
     <img src="" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="source/images/avatar1_small.jpg">
                <span class="username">John Doe</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li>
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span style="font-size:18px;">Danh Mục</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>Sản Phẩm</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('admin.list.product')}}">Danh Sách Sản Phẩm</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>Khách Hàng</span>
                    </a>
                    <ul class="sub">
                        <li><a href="">Danh Sách Khách Hàng</a></li>
                    </ul>
                </li>
               
                <li>
                    <a href="login.html">
                        <i class="fa fa-user"></i>
                        <span>Đăng Xuất</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
<section class="wrapper">
    @yield('content')

</section>
</section>
<!--main content end-->
<!--right sidebar start-->
<div class="right-sidebar">
<div class="search-row">
    <input type="text" placeholder="Search" class="form-control">
</div>
<div class="right-stat-bar">

</div>
<!--right sidebar end-->
</section>
<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="source/js/jquery.js"></script>
<script src="source/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="source/bs3/js/bootstrap.min.js"></script>
<script src="source/source/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="source/js/jquery.scrollTo.min.js"></script>
<script src="source/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="source/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/skycons/skycons.js"></script>
<script src="source/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="source/js/calendar/clndr.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src="source/js/calendar/moment-2.2.1.js"></script>
<script src="source/js/evnt.calendar.init.js"></script>
<script src="source/js/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="source/js/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
<script src="source/js/gauge/gauge.js"></script>
<!--clock init-->
<script src="source/js/css3clock/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<script src="source/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="source/js/sparkline/jquery.sparkline.js"></script>
<!--Morris Chart-->
<script src="source/js/morris-chart/morris.js"></script>
<script src="source/js/morris-chart/raphael-min.js"></script>
<!--jQuery Flot Chart-->
<script src="source/js/flot-chart/jquery.flot.js"></script>
<script src="source/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="source/js/flot-chart/jquery.flot.resize.js"></script>
<script src="source/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="source/js/flot-chart/jquery.flot.animator.min.js"></script>
<script src="source/js/flot-chart/jquery.flot.growraf.js"></script>
<script src="source/js/dashboard.js"></script>
<script src="source/js/jquery.customSelect.min.js" ></script>
<!--common script init for all pages-->
<script src="js/scripts.js"></script>
<!--script for this page-->
</body>
</html>