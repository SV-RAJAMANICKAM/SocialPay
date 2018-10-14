<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('head')
</head>
<body onload="info_noti()">
<!-- Start wrapper-->
<div id="wrapper">
    @include('admin.needs.sidebar')
    @include('admin.needs.navbar')
    <div class="clearfix"></div>
    <div class="content-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
    <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	@include('admin.needs.footer')
  </div>
<!--End wrapper-->
    @yield('inject')
</body>
</html>
