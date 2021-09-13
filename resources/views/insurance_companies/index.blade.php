@extends('layouts.master', ["page_title"=>"Insurance Companies"])
@section('css')
    @include('layouts.datatables_css')
    <style>
    .dt-buttons{

    right: 240px !important;
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
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--end::Filter-->
                                <!--begin::Add user-->
                                <a href="{{route('insurance_companies.create')}}">
                                <button type="button" class="btn btn-primary" style="margin: 12px 30px;" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
                                    <span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
														<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)" x="4" y="11" width="16" height="2" rx="1" />
													</svg>
												</span>
                                    <!--end::Svg Icon-->Add New Company</button>
                                </a>
                                <!--end::Add user-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <!-- <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                                <div class="fw-bolder me-5">
                                    <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                                <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                            </div> -->
                            <!--end::Group actions-->
                        </div>
<!--end::Card toolbar-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-bordered  fs-6 gy-5  data-table">
                        <!-- <div class="table-responsive"> -->
                            <!-- <table class="table table-bordered data-table" >  -->
                            <thead>
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0" role="row">
                                <th>S.No</th>
                                <th>Company Name</th>
                                <th>Country</th>
                                <th>Contact#</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th >Actions</th>
                                <th>About</th>
                                <th>Auditor</th>
                                <th>Company Email</th>
                                <th>Company Website</th>
                                <th>Corporate Details</th>
                                <th>Incorporated</th>
                                <th>Incorporated Year</th>
                                <th>Employee Count</th>
                                <th>Fax Detail</th>
                                <th>Financial Report</th>
                                <th>Location</th>
                                <th>Toll Free Number</th>
                                <th>Trade Name</th>
                                <th>Alternative Names</th>
                                <th>Board Of Directors</th>
                                <th>Currency</th>
                                <th>Financial Strength Rating</th>
                                <th>Gross Written Premium</th>
                                <th>Gross Written Premium year</th>
                                <th>Issue Credit Rating</th>
                                <th>Moody Rating</th>
                                <th>Other Rating</th>
                                <th>Public Listed Company</th>
                                <th>Regulatory Authority</th>
                                <th>S and P Rating</th>
                                <th>Authorized Shares</th>
                                <th>Issued Shares</th>
                                <th>No Of Shares</th>
                                <th>Paid Up Shares</th>
                                <th>Total Share</th>
                            </tr>
                            </thead>
                            <tbody fw-bold text-gray-600>
                            </tbody>
                        </table>
                        <!--end::Table-->
                    <!-- </div> -->
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
        $(document).on("click",".deleteBtn",function(event) {
            event.preventDefault();
            let form_id = $(this).attr('value');
            let form = '#form_'+form_id;

            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this record!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Yes, delete it!',
                    closeOnConfirm: false,
                    //closeOnCancel: false
                },
                function(){
                    swal("Deleted!", "Record has been deleted!", "success");
                    console.log(form);
                    $(form).submit();

                });
        });
    </script>
    <script>
        $(function () {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                dom: 'lBfrtip',
                "columnDefs": [
                    {
                        "targets": [ 7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36 ],
                        "visible": false,
                    },
                ],
                buttons: [
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: [ 0,1,2,3,4,5,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36 ]
                    },

                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [ 0,1,2,3,4,5,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36 ]
                    },

                },
                {
                    extend: 'csvHtml5',
                    exportOptions: {
                        columns: [ 0,1,2,3, 4,5,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36 ]
                    },

                },
                {
                   extend: 'pdfHtml5',
                    exportOptions: {
                    columns: [ 0,1,2,3, 4,5,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36 ]
                    }
                },
                ],
 ajax: {
            "url": "{{ route('insurance_companies.index') }}",
            "type": "POST",
            "data": _token:"{{ csrf() }}"
        },
                // ajax: "{{ route('insurance_companies.index') }}",
                // type:"post",
                columns: [
                    {data: 'id', name: 'id',defaultContent: ''},
                    {data: 'company_name', name: 'company_name',defaultContent: ''},
                    {data: 'country', name: 'country',defaultContent: ''},
                    {data: 'contact_number', name: 'contact_number',defaultContent: ''},
                    {data: 'status', name: 'status',defaultContent: ''},
                    {data: 'company_type', name: 'company_type',defaultContent: ''},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                    {data: 'about', name: 'about',defaultContent: ''},
                    {data: 'auditor', name: 'auditor',defaultContent: ''},
                    {data: 'company_email_id', name: 'company_email_id',defaultContent: ''},
                    {data: 'company_website', name: 'company_website',defaultContent: ''},
                    {data: 'corporate_details', name: 'corporate_details',defaultContent: ''},
                    {data: 'incorporated', name: 'incorporated',defaultContent: ''},
                    {data: 'incorporated_year', name: 'incorporated_year',defaultContent: ''},
                    {data: 'employee_count', name: 'employee_count',defaultContent: ''},
                    {data: 'fax_detail', name: 'fax_detail',defaultContent: ''},
                    {data: 'financial_report', name: 'financial_report',defaultContent: ''},
                    {data: 'location', name: 'location',defaultContent: ''},
                    {data: 'toll_free_number', name: 'toll_free_number',defaultContent: ''},
                    {data: 'trade_name', name: 'trade_name',defaultContent: ''},
                    {data: 'alternative_names', name: 'alternative_names',defaultContent: ''},
                    {
                        data: 'board_of_directors',
                        render: function(data) {
                            let result = '';
                            data.map(item =>{
                                result += item.name +' ('+ item.designation +'), '  ;
                            })
                            return result;
                        }
                    },
                    {data: "company_accounting.currency", defaultContent: ''},
                    {data: "company_accounting.financial_strength_rating", defaultContent: ''},
                    {data: "company_accounting.gross_written_premium", defaultContent: ''},
                    {data: "company_accounting.gross_written_premium_year", defaultContent: ''},
                    {data: "company_accounting.issue_credit_rating", defaultContent: ''},
                    {data: "company_accounting.moody_rating", defaultContent: ''},
                    {data: "company_accounting.other_rating", defaultContent: ''},
                    {data: "company_accounting.public_listed_company", defaultContent: ''},
                    {data: "company_accounting.regulatory_authority", defaultContent: ''},
                    {data: "company_accounting.s_andprating", defaultContent: ''},
                    {data: "market_share.authorized_shares", defaultContent: ''},
                    {data: "market_share.issued_shares", defaultContent: ''},
                    {data: "market_share.no_of_shares", defaultContent: ''},
                    {data: "market_share.paid_up_shares", defaultContent: ''},
                    {data: "market_share.total_share", defaultContent: ''},
                ],
                language: {
                    searchPlaceholder: "Search Companies",
                    search: ""
                },
                lengthMenu: [ [10, 25, 50, -1], [10, 25, 50, "All"] ]

            });

        });
        $( document ).ready(function() {
            $('div.dataTables_filter input').addClass('form-control form-control-solid w-250px ps-15');
        });
    </script>
@endsection
        git add . app/Http/Controllers/HomeController.php
        git add . resources/views/insurance_companies/index.blade.php
