@extends('layouts.app')

@section('title')
index
@endsection

@section('styleFile')
<!-- Custom CSS -->
<link href="../../dist/css/style.min.css" rel="stylesheet">
@endsection

@section('style')
{{-- style code --}}
@endsection

@section('content')

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    @include('includes.breadCrumb')
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                        <h6 class="text-white">Dashboard</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                        <h6 class="text-white">Charts</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                        <h6 class="text-white">Widgets</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                        <h6 class="text-white">Tables</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                        <h6 class="text-white">Full Width</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                        <h6 class="text-white">Forms</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
                        <h6 class="text-white">Buttons</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                        <h6 class="text-white">Elements</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-calendar-check"></i></h1>
                        <h6 class="text-white">Calnedar</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-alert"></i></h1>
                        <h6 class="text-white">Errors</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- footer -->
    @include('includes.footer')
    <!-- End footer -->
</div>
@endsection

@section('scriptFile')
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->


<!--Custom JavaScript -->
<script src="../../dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="../../assets/libs/flot/excanvas.js"></script>
<script src="../../assets/libs/flot/jquery.flot.js"></script>
<script src="../../assets/libs/flot/jquery.flot.pie.js"></script>
<script src="../../assets/libs/flot/jquery.flot.time.js"></script>
<script src="../../assets/libs/flot/jquery.flot.stack.js"></script>
<script src="../../assets/libs/flot/jquery.flot.crosshair.js"></script>
<script src="../../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="../../dist/js/pages/chart/chart-page-init.js"></script>
@endsection

@section('footerScript')
Footer
@endsection