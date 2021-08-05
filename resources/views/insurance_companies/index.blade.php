@extends('layouts.master', ["page_title"=>"Insurance Companies"])
@section('css')
    @include('layouts.datatables')
    <style>
div.dataTables_filter input{
    background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyAgIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIgICB4bWxuczpjYz0iaHR0cDovL2NyZWF0aXZlY29tbW9ucy5vcmcvbnMjIiAgIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyIgICB4bWxuczpzdmc9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiAgIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgICB2ZXJzaW9uPSIxLjEiICAgaWQ9InN2ZzQ0ODUiICAgdmlld0JveD0iMCAwIDIxLjk5OTk5OSAyMS45OTk5OTkiICAgaGVpZ2h0PSIyMiIgICB3aWR0aD0iMjIiPiAgPGRlZnMgICAgIGlkPSJkZWZzNDQ4NyIgLz4gIDxtZXRhZGF0YSAgICAgaWQ9Im1ldGFkYXRhNDQ5MCI+ICAgIDxyZGY6UkRGPiAgICAgIDxjYzpXb3JrICAgICAgICAgcmRmOmFib3V0PSIiPiAgICAgICAgPGRjOmZvcm1hdD5pbWFnZS9zdmcreG1sPC9kYzpmb3JtYXQ+ICAgICAgICA8ZGM6dHlwZSAgICAgICAgICAgcmRmOnJlc291cmNlPSJodHRwOi8vcHVybC5vcmcvZGMvZGNtaXR5cGUvU3RpbGxJbWFnZSIgLz4gICAgICAgIDxkYzp0aXRsZT48L2RjOnRpdGxlPiAgICAgIDwvY2M6V29yaz4gICAgPC9yZGY6UkRGPiAgPC9tZXRhZGF0YT4gIDxnICAgICB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLC0xMDMwLjM2MjIpIiAgICAgaWQ9ImxheWVyMSI+ICAgIDxnICAgICAgIHN0eWxlPSJvcGFjaXR5OjAuNSIgICAgICAgaWQ9ImcxNyIgICAgICAgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjAuNCw4NjYuMjQxMzQpIj4gICAgICA8cGF0aCAgICAgICAgIGlkPSJwYXRoMTkiICAgICAgICAgZD0ibSAtNTAuNSwxNzkuMSBjIC0yLjcsMCAtNC45LC0yLjIgLTQuOSwtNC45IDAsLTIuNyAyLjIsLTQuOSA0LjksLTQuOSAyLjcsMCA0LjksMi4yIDQuOSw0LjkgMCwyLjcgLTIuMiw0LjkgLTQuOSw0LjkgeiBtIDAsLTguOCBjIC0yLjIsMCAtMy45LDEuNyAtMy45LDMuOSAwLDIuMiAxLjcsMy45IDMuOSwzLjkgMi4yLDAgMy45LC0xLjcgMy45LC0zLjkgMCwtMi4yIC0xLjcsLTMuOSAtMy45LC0zLjkgeiIgICAgICAgICBjbGFzcz0ic3Q0IiAvPiAgICAgIDxyZWN0ICAgICAgICAgaWQ9InJlY3QyMSIgICAgICAgICBoZWlnaHQ9IjUiICAgICAgICAgd2lkdGg9IjAuODk5OTk5OTgiICAgICAgICAgY2xhc3M9InN0NCIgICAgICAgICB0cmFuc2Zvcm09Im1hdHJpeCgwLjY5NjQsLTAuNzE3NiwwLjcxNzYsMC42OTY0LC0xNDIuMzkzOCwyMS41MDE1KSIgICAgICAgICB5PSIxNzYuNjAwMDEiICAgICAgICAgeD0iLTQ2LjIwMDAwMSIgLz4gICAgPC9nPiAgPC9nPjwvc3ZnPg==);
    background-repeat: no-repeat;
    background-color: #fff;
    background-position: 0px 3px !important;
    padding-left: 27px !important;
}
.table td:last-child{
    display:flex !important;
}
table.dataTable>thead .sorting:after, table.dataTable>thead .sorting:before, table.dataTable>thead .sorting_asc:after, table.dataTable>thead .sorting_asc:before, table.dataTable>thead .sorting_desc:after, table.dataTable>thead .sorting_desc:before{display:none !important;}
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
    <script>
        $(function () {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                dom: 'lBfrtip',
                // buttons: [
                //     'copyHtml5',
                //     'excelHtml5',
                //     'csvHtml5',
                //     'pdfHtml5'
                // ],


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
                    {data: 'id', name: 'id'},
                    {data: 'company_name', name: 'company_name'},
                    {data: 'country', name: 'country'},
                    {data: 'contact_number', name: 'contact_number'},
                    {data: 'company_type', name: 'company_type'},
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
            // $('.dataTables_wrapper .dataTables_filter input:before').prepend("123");
});
   
    </script>
@endsection
