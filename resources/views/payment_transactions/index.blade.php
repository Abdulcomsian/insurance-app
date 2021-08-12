@extends('layouts.master', ["page_title"=>"Payment Transactions"])
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
                                <th>Cart Id</th>
                                <th>Customer Name</th>
                                <th>Package Name</th>
                                <th>Billing Name</th>
                                <th>Billing Email</th>
                                <th>Amount</th>
{{--                                <th>Card First 6</th>--}}
{{--                                <th>Card Last 4</th>--}}
{{--                                <th>Card Type</th>--}}
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

                ajax: "{{ route('payment_transactions.index') }}",
                columns: [
                    {data: 'id', name: 'id',defaultContent: ''},
                    {data: 'cart_id', name: 'cart_id',defaultContent: '-'},
                    {data: 'user_name', name: 'user_name',defaultContent: '-'},
                    {data: 'package_name', name: 'package_name',defaultContent: '-'},
                    {data: 'billing_name', name: 'billing_name',defaultContent: '-'},
                    {data: 'billing_email', name: 'billing_email',defaultContent: '-'},
                    {data: 'amount', name: 'amount',defaultContent: '-'},
                    // {data: 'card_first6', name: 'card_first6',defaultContent: '-'},
                    // {data: 'card_last4', name: 'card_last4',defaultContent: '-'},
                    // {data: 'card_type', name: 'card_type',defaultContent: '-'},
                    {data: 'created_at', name: 'created_at',defaultContent: '-'},
                    {data: 'status', name: 'status',defaultContent: '-'},
                    {data: 'action', name: 'action',defaultContent: '-', orderable: false, searchable: false},

                ],
                language: {
                    searchPlaceholder: "Search Transaction",
                    search: ""
                }
            });

        });
        $( document ).ready(function() {
            $('div.dataTables_filter input').addClass('form-control form-control-solid w-250px ps-15');
        });
    </script>
@endsection
