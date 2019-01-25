@extends('layouts.app')

@section('title')
- Stock
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
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Stock </h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                        
                    <form method="POST" action="{{ route('stock.create') }}">
                        @csrf
                        <div class="card-body">
                            <h5 class="card-title">
                                Add Stock
                            </h5>
                            <div class="form-group row">
                                <label for="totalMarksheet" class="col-sm-3 text-right control-label col-form-label">Total Marksheet</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="totalMarksheet" name="totalMarksheet" placeholder="Total Marksheet">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="startSerial" class="col-sm-3 text-right control-label col-form-label">Start Serial No.</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="startSerial" name="startSerial" placeholder="Start Serial No.">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="endSerial" class="col-sm-3 text-right control-label col-form-label">End Serial NO.</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="endSerial" name="endSerial" placeholder="End Serial NO.">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="remarks" class="col-sm-3 text-right control-label col-form-label">Remarks</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Enter Remarks">
                                </div>
                            </div>

                        </div>
                    </form>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
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
<script src="../../assets/libs/select2/dist/js/select2.full.min.js"></script>
<script src="../../assets/libs/select2/dist/js/select2.min.js"></script>

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
<script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

    </script>
    @endsection