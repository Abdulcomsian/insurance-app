@extends('layouts.master', ["page_title" => "Assessors"])

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
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container customer-history">
                <div class="card">

                    <div class="card-header border-0 pt-6">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('assessors.create') }}">
                                <button type="button" class="action btn btn-primary" value="Add"
                                    style="margin: 13px 30px;">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect>
                                            <rect fill="#000000" opacity="0.5"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)"
                                                x="4" y="11" width="16" height="2" rx="1"></rect>
                                        </svg>
                                    </span>
                                    Add New Assessor
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <table class="table align-middle table-bordered fs-6 gy-5 data-table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th>ID</th>
                                    <th>Assessor</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Mobile Number</th>
                                    <th>Inspection Date</th>
                                    <th>Assessment Date</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ],
                ajax: "{{ route('assessors.data') }}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'assessor', name: 'assessor' },
                    { data: 'email', name: 'email' },
                    { data: 'phone_number', name: 'phone_number' },
                    { data: 'mobile_number', name: 'mobile_number' },
                    { data: 'inspection_date', name: 'inspection_date' },
                    { data: 'assessment_date', name: 'assessment_date' },
                    { data: 'address', name: 'address' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ],
                language: {
                    searchPlaceholder: "Search Companies",
                    search: ""
                },
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]]
            });
        });
    </script>
@endsection
