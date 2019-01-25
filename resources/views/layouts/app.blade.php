<!doctype html>
<html dir="ltr" lang="en">

<head>
    <title>Stack Managment @yield('title')</title>
    @yield('styleFile')
    @yield('style')
</head>
<body >
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- Topbar header - Include -->
        @include('includes.header')
        <!-- End Topbar - Include -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        @include('includes.leftSidebar')
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        @yield('content')
    </div>
    <!-- ============================================================== -->
    <!-- End Page Main wrapper  -->
    <!-- ============================================================== -->
    @include('includes.scriptFile')
    @yield('scriptFile')
    @yield('footerScript')
</body>
</html>