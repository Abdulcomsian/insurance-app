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
        $(function () {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                dom: 'lBfrtip',
                buttons: [
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: @if(isset($columns)) {{$columns}} @else [ 0,1,2,3, 4 ] @endif
                    },

                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: @if(isset($columns)) {{$columns}} @else [ 0,1,2,3, 4 ] @endif
                    },

                },
                {
                    extend: 'csvHtml5',
                    exportOptions: {
                        columns: @if(isset($columns)) {{$columns}} @else [ 0,1,2,3, 4 ] @endif
                    },

                },
                {
                   extend: 'pdfHtml5',
                    exportOptions: {
                    columns: @if(isset($columns)) {{$columns}} @else [ 0,1,2,3, 4 ] @endif
                    }
                },
                ],

                ajax: "{{ route('insurance_companies.index') }}",
                columns: [
                    {data: 'id', name: 'id',defaultContent: ''},
                    {data: 'company_name', name: 'company_name',defaultContent: ''},
                    {data: 'country', name: 'country',defaultContent: ''},
                    {data: 'contact_number', name: 'contact_number',defaultContent: ''},
                    {data: 'status', name: 'status',defaultContent: ''},
                    {data: 'company_type', name: 'company_type',defaultContent: ''},
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
