@extends('layouts.master', ["page_title"=>"Customers"])
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
                                <th class="">Name</th>
                                <th class="">Last Login</th>
                                <th class="">Reg Date</th>
                                <th class="">Contact#</th>
                                <th>Email</th>
                                <th class="">Email Status</th>
                                <th class="">Account Status</th>
                                <th class="">Actions</th>
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
                            columns: [0, 1, 2,3, 4, 5, 6, 7]
                        },

                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                           columns: [0, 1, 2,3, 4, 5, 6, 7]
                        },

                    },
                    {
                        extend: 'csvHtml5',
                        exportOptions: {
                           columns: [0, 1, 2,3, 4, 5, 6, 7]
                        },

                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                           columns: [0, 1, 2,3, 4, 5, 6, 7]
                        }
                    },
                ],

                ajax: "{{ route('customers.history') }}",
                columns: [
                    {data: 'id', name: 'id', defaultContent: '-'},
                    {data: 'name', name: 'company_name',defaultContent: '-'},
                    {data: 'last_login_at', name: 'country',defaultContent: '-'},
                    {data: 'created_at', name: 'contact_number',defaultContent: '-'},
                    {data: 'mobile_number', name: 'company_type',defaultContent: '-'},
                    {data: 'email', name: 'company_type',defaultContent: '-'},
                    {data: 'email_verified_at', name: 'company_type',defaultContent: '-'},
                    {data: 'status', name: 'company_type',defaultContent: '-'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                language: {
                    searchPlaceholder: "Search Companies",
                    search: ""
                }
            });

        });
        $( document ).ready(function() {
            $('div.dataTables_filter input').addClass('form-control form-control-solid w-250px ps-15');
        });
    </script>
@endsection
