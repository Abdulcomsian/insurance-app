@extends('layouts.master', ["page_title"=>"Sanctions Status Request"])
@section('css')
    @include('layouts.datatables_css')
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
                                <th>Id</th>
                                <th>Company</th>
                                <th>Customer Name</th>
                                <th>Search Type</th>
                                <th>Date</th>
                                <th>Status</th>
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
        $(function () {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [  0, ':visible'  ]
                        },

                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [  0, ':visible'  ]
                        },

                    },
                    {
                        extend: 'csvHtml5',
                        exportOptions: {
                            columns: [  0, ':visible'  ]
                        },

                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [  0, ':visible'  ]
                        }
                    },
                ],

                ajax: "{{ route('sanction_request.index') }}",
                columns: [
                    {data: 'id', name: 'id',defaultContent: ''},
                    {data: 'company_name', name: 'company_name',defaultContent: '-'},
                    {data: 'user_name', name: 'user_name',defaultContent: '-'},
                    {data: 'sanctions_type', name: 'sanctions_type',defaultContent: '-'},
                    {data: 'created_at', name: 'created_at',defaultContent: '-'},
                    {data: 'status', name: 'status',defaultContent: '-'},
                    {data: 'action', name: 'action',defaultContent: '-', orderable: false, searchable: false},

                ],
                language: {
                    searchPlaceholder: "Search Sanctions",
                    search: ""
                }
            });

        });
        $( document ).ready(function() {
            $('div.dataTables_filter input').addClass('form-control form-control-solid w-250px ps-15');
        });
    </script>
@endsection
