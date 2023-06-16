@extends('layouts.master', ["page_title"=>"Assessors"])
@section('css')
    @include('layouts.datatables_css')
    <style>
        .customer-history .card>.card-header{
            display: block !important;
        }
        .customer-history .dt-buttons{
            right: 240px !important;
        }
        .customer-history  .card>.card-header{
            padding: 0px !important;
        }
    </style>
@endsection
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container customer-history">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--end::Filter-->
                            <!--begin::Add user-->
                            <a href="{{route('customers.create')}}">
                            <button type="button" class="action btn btn-primary" value="Add" style="margin: 13px 30px;" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
                                <span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect>
														<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)" x="4" y="11" width="16" height="2" rx="1"></rect>
													</svg>
												</span>
                                <!--end::Svg Icon-->Add New Assessor</button>
                            <!--end::Add user-->
                            </a>
                        </div>
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
                                <th class="">Action</th>
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
                },
                lengthMenu: [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
            });
        });
        $( document ).ready(function() {
            $('div.dataTables_filter input').addClass('form-control form-control-solid w-250px ps-15');
        });
    </script>

@endsection
