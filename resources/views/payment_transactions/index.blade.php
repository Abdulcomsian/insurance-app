@extends('layouts.master', ["page_title"=>"Payment Transactions"])
@section('css')
    @include('layouts.datatables_css')
    <style>
        .fa {
            font-family: "Font Awesome 5 Free" !important;
        }
    </style>
@endsection
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->

                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0 table-responsive">
                        <!--begin::Table-->
                        <div class="table"></div>
                        <table style="margin-top: 80px;" class="table align-middle table-bordered  fs-6 gy-5  data-table">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th>Invoice #</th>
                                <th>Invoice Date</th>
                                <th>To</th>
                                <th>Vehicle</th>
                                <th>Rego</th>
                                <th>Assessment Fee</th>
                                <th>Owner Name</th>
                                <th>Engine Type</th>
                                <th>Action</th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-bold">
                            <!--begin::Table row-->
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
@section('script')
    @include('layouts.datatables_js')
    <script>
        $(document).on("click", ".resend_email", function (event) {
            event.preventDefault();
            let url = $(this).attr('href');

            swal({
                    title: "Are you sure?",
                    text: "You will not be able to reverse this action!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Yes, submit it!',
                    closeOnConfirm: false,
                    //closeOnCancel: false
                },

                function () {
                    window.location = url;
                    swal("Submitted!", "Email has been sent!", "success");
                });
        });
    </script>
    <script>
        $(function () {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                        },
                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                        },
                    },
                    {
                        extend: 'csvHtml5',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                        },
                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                        }
                    },
                    {
                        text: 'Add',
                        action: function () {
                    // Redirect to the specified URL
                    window.location.href = "{{ route('accident-accessing-service.create') }}";
                }
                    }


                ],
                ajax: "{{ route('accident-accessing-service.index') }}",
                columns: [
                    // { data: 'id', name: 'id', defaultContent: '' },
                    { data: 'invoice_no', name: 'invoice_no', defaultContent: '--' },
                    { data: 'invoice_date', name: 'invoice_date', defaultContent: '--' },
                    { data: 'to', name: 'to', defaultContent: '--' },
                    { data: 'vehicle', name: 'vehicle', defaultContent: '--' },
                    { data: 'rego', name: 'rego', defaultContent: '--' },
                    { data: 'assessment_fee', name: 'assessment_fee', defaultContent: '--' },
                    { data: 'owner_name', name: 'owner_name', defaultContent: '--' },
                    { data: 'engine_type', name: 'engine_type', defaultContent: '--' },
                    { data: 'action', name: 'action', defaultContent: '--', orderable: false, searchable: false },
                ],
                language: {
                    searchPlaceholder: "Search Transaction",
                    search: ""
                },
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]]
            });

            $(document).ready(function () {
                $('div.dataTables_filter input').addClass('form-control form-control-solid w-250px ps-15');
            });
        });

    </script>
@endsection
