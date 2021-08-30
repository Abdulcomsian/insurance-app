@extends('layouts.master', ["page_title"=>"Countries & Exchange Rates"])
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
                    <div class="card-header border-0 pt-6">
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-bordered  fs-6 gy-5  data-table">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="">ID</th>
                                <th class="">Country</th>
                                <th class="">Last Updated</th>
                                <th class="dollar_rate">Dollar Rate</th>
                                <th class="">Dollar (USD)</th>
{{--                                <th class="d-none">Exchange Rate in Dollar USD</th>--}}
{{--                                <th class="">Actions</th>--}}
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
                "columnDefs": [
                    {
                        "targets": [ 3 ],
                        "visible": false,
                    },
                    ],
                buttons: [
                    {
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [ 0,1,2,3 ]
                        },

                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [ 0,1,2,3]
                        },

                    },
                    {
                        extend: 'csvHtml5',
                        exportOptions: {
                            columns: [ 0,1,2,3 ]
                        },

                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [ 0,1,2,3]
                        }
                    },
                ],

                ajax: "{{ route('countries.index') }}",
                columns: [
                    {data: 'id', name: 'id',defaultContent: ''},
                    {data: 'country_name', name: 'country_name',defaultContent: ''},
                    {data: 'updated_at', name: 'updated_at',defaultContent: ''},
                    {data: 'dollar_rate', name: 'dollar_rate',defaultContent: ''},
                    {data: 'rate_in_dollar', name: 'rate_in_dollar',defaultContent: ''},
                ],
                language: {
                    searchPlaceholder: "Search Country",
                    search: ""
                },
                lengthMenu: [ [10, 25, 50, -1], [10, 25, 50, "All"] ]

            });

        });
        $( document ).ready(function() {
            $('div.dataTables_filter input').addClass('form-control form-control-solid w-250px ps-15');
            // $('.dollar_rate').addClass('d-none');
        });
    </script>
@endsection
