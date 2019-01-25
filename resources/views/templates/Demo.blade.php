@extends('admin.layouts.app')

@section('title')
{{-- Set The Title Like Department  --}}
- <?php echo ucfirst(explode(".",Request::route()->getName())[0]); ?>
@endsection

@section('styleFile')
<!-- BEGIN TABLE CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/extensions/colReorder.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/tables/extensions/fixedHeader.dataTables.min.css') }}">

<link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/simple-line-icons/style.css">
<!-- END TABLE CSS-->
@endsection

@section('style')
{{-- style code --}}
@endsection
@section('content')

@include('admin.templates.widgets.breadcrumbs')
<div class="content-body">
    @include('admin.templates.widgets.error')
    <div class="row">
        <div class="col-lg-2 col-xs-4 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h6 class="text-muted"> {{ $header_text[0] }} </h6>
                                <h3>{{ $classes }}</h3>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-trophy success font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-xs-4 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h6 class="text-muted"> {{ $header_text[1] }} </h6>
                                <h3>{{ $faculties }}</h3>
                            </div>
                            <div class="align-self-center">
                                <i class="la la-group success font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h6 class="text-muted">Calls</h6>
                                <h3>3,568</h3>
                            </div>
                            <div class="align-self-center">
                                <i class="icon-call-in danger font-large-2 float-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-content collapse show">
                        <div class="card-body  card-dashboard">
                            <table class="table table-striped table-bordered dynamic-table">
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Faculty</th>
                                        <th>Subject</th>
                                        <th>Question</th>
                                        <th>Link</th>
                                        <!-- <th width="50px;">Edit</th> -->
                                        <th width="50px;">Status</th>
                                        <th width="50px;">Delete</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
</div>
@endsection

@section('scriptFile')
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/buttons.colVis.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.colReorder.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.fixedHeader.min.js') }}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->

<!-- END PAGE LEVEL JS-->
@endsection

@section('footerScript')
<script type="text/javascript">

    var mytable;
    /* DELETE Record using AJAX Requres */
    $(document).on('click', '.delete', function () {
        var id = $(this).data("delete-id");
        var token = $(this).data("token");
        swal({
            title: "Are you sure?",
            text: "It will Delete Perminatly !",
            icon: "warning",
            buttons: {
                cancel: {
                    text: "No, cancel it!",
                    value: null,
                    visible: true,
                    className: "",
                    closeModal: false,
                },
                confirm: {
                    text: "Yes, delete it!",
                    value: true,
                    visible: true,
                    className: "",
                    closeModal: false
                }
            }
        })
        .then((isConfirm) => {
            if (isConfirm) {
                $.ajax(
                {
                    url: "/admin/department/" + id,
                    type: 'POST',
                    data: {
                        "id": id,
                        "_method": 'DELETE',
                        "_token": token
                    },
                    success: function (result) {
                        swal("Deleted!", "Your Record is deleted.", "success");
                        mytable.draw();
                    },
                    error: function (request, status, error) {
                        var val = request.responseText;
                        alert("error" + val);
                    }
                });
            } else {
                swal("Cancelled", "Your record is safe", "error");
            }
        });
    });

    $(document).ready(function (e) {
        mytable = $('.dynamic-table').DataTable({
            "processing": true,
            "serverSide": true,
            "responsive": true,
            "ajax": "{{ url('admin/dashboard/getDataTable') }}",
            columns: [
            {data: "class.class_name"},
            {data: "faculty.faculty_fn"},
            {data: "subject.subject_name"},
            {data: "question_id",orderable: false, searchable: false},
            {data: "student_url"},
            {data: "status",orderable: false, searchable: false},
            {data: "delete",orderable: false, searchable: false}
            ]
        });
    });
</script>
@endsection

