@extends('layouts.master', ["page_title"=>"Packages"])
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
                    <div class="border-0 pt-6">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--end::Filter-->
                            <!--begin::Add user-->
                                <button type="button" class="action btn btn-primary" value="Add" style="margin-right: 30px !important;" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
                                    <span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
														<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)" x="4" y="11" width="16" height="2" rx="1" />
													</svg>
												</span>
                                    <!--end::Svg Icon-->Add New Package</button>
                            <!--end::Add user-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Modal - Add task-->
                            <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                                <!--begin::Modal dialog-->
                                <div class="modal-dialog modal-dialog-centered mw-650px">
                                    <!--begin::Modal content-->
                                    <div class="modal-content">
                                        <!--begin::Modal header-->
                                        <div class="modal-header" id="kt_modal_add_user_header">
                                            <!--begin::Modal title-->
                                            <h2 class="fw-bolder" id="title">Edit Package</h2>
                                            <!--end::Modal title-->
                                            <!--begin::Close-->
                                            <div onclick=" $('.modal').modal('hide');" class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                                                <span class="svg-icon svg-icon-1">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
																			<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
																			<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
																		</g>
																	</svg>
																</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Close-->
                                        </div>
                                        <!--end::Modal header-->
                                        <!--begin::Modal body-->
                                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                            <!--begin::Form-->
                                            <form id="kt_modal_add_user_form" class="form" action="{{route('rates.update')}}" method="post">
                                                @csrf
                                                <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Package Name</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="text" required name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Package Name" />
                                                        <!--end::Input-->
                                                    </div>

                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Amount(AED)</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="number" required name="price" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Amount" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Input group-->
                                                    <!--begin::Input group-->
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Count Sanctions</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="number" required name="sanctions" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Count Sanctions" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Status </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <select type="number" required name="status" class="status form-control form-control-solid mb-3 mb-lg-0" placeholder="Count Sanctions" >
                                                            <option value="{{\App\Utils\Status::Active}}">{{\App\Utils\Status::Active}}</option>
                                                            <option value="{{\App\Utils\Status::Inactive}}">{{\App\Utils\Status::Inactive}}</option>
                                                        </select>
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">Start Date</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="date" required name="start_date" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Count Sanctions" />
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="fv-row mb-7">
                                                        <!--begin::Label-->
                                                        <label class="required fw-bold fs-6 mb-2">End Date</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <input type="date" required name="end_date" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Count Sanctions" />
                                                        <!--end::Input-->
                                                    </div>
                                                </div>
                                                <!--end::Scroll-->
                                                <!--begin::Actions-->
                                                <div class="text-center pt-15">
                                                    <button type="button" class="btn btn-white me-3" data-bs-dismiss="modal">Close</button>
{{--                                                    <button type="reset" class="btn btn-white me-3" data-kt-users-modal-action="cancel">Discard</button>--}}
                                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                        <span class="indicator-label">Submit</span>
                                                        <span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>
                                            <!--end::Form-->
                                        </div>
                                        <!--end::Modal body-->
                                    </div>
                                    <!--end::Modal content-->
                                </div>
                                <!--end::Modal dialog-->
                            </div>
                            <!--end::Modal - Add task-->
                        </div>
                        <!--end::Card toolbar-->
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
                                <th>S.No</th>
                                <th>Package Name</th>
                                <th>Amount(AED)</th>
                                <th>Count Sanctions</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Last Updated</th>
                                <th>Status</th>
                                <th>Actions</th>
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
                                columns: [  0,1,2,3,4,5,6  ]
                            },

                        },
                        {
                            extend: 'excelHtml5',
                            exportOptions: {
                                columns: [  0,1,2,3,4,5,6  ]
                            },

                        },
                        {
                            extend: 'csvHtml5',
                            exportOptions: {
                                columns: [  0,1,2,3,4,5,6  ]
                            },

                        },
                        {
                            extend: 'pdfHtml5',
                            exportOptions: {
                                columns: [  0,1,2,3,4,5,6  ]
                            }
                        },
                    ],

                    ajax: "{{ route('rates.index') }}",
                    columns: [
                        {data: 'id', name: 'id',defaultContent: '-'},
                        {data: 'name', name: 'name',defaultContent: '-',class:'name'},
                        {data: 'price', name: 'price',defaultContent: '-',class:'price'},
                        {data: 'sanctions', name: 'sanctions',defaultContent: '-',class:'sanctions'},
                        {data: 'start_date', name: 'start_date',defaultContent: '-',class:'start_date'},
                        {data: 'end_date', name: 'end_date',defaultContent: '-',class:'end_date'},
                        {data: 'updated_at', name: 'updated_at',defaultContent: '-',class:'updated_at'},
                        {data: 'status', name: 'status',defaultContent: '-',class:'status'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ],
                    language: {
                        searchPlaceholder: "Search Package",
                        search: ""
                    }
                });

            });

            $( document ).ready(function() {
                $('div.dataTables_filter input').addClass('form-control form-control-solid w-250px ps-15');

            //For add and edit package
                $(document).on('click', '.action', function(){
                console.log('Here in function');
                console.log($(this).val());
                let btn_value = $(this).val();
                if (btn_value == 'Add'){
                    $('.form')[0].reset();
                    $('input[name="id"]').remove();
                    $('#title').text('Add Package');
                }else {
                    console.log('Here in else edit');

                    console.log($(this).parent().parent().find($('.price')).text());

                    $('input[name="id"]').remove();
                    $('#title').text('Edit Package');
                    let id = $(this).attr('id')
                    $('.form').append(`<input type="hidden" name="id" value="${id}">`);
                    $('input[name="name"]').val($(this).parent().parent().find($('.name')).text());
                    $('input[name="price"]').val($(this).parent().parent().find($('.price')).text());
                    $('input[name="sanctions"]').val($(this).parent().parent().find($('.sanctions')).text());
                    $('input[name="start_date"]').val($(this).parent().parent().find($('.start_date')).text());
                    $('input[name="end_date"]').val($(this).parent().parent().find($('.end_date')).text());
                    $('select[name="status"]').val($(this).parent().parent().find($('.status')).text());
                }
            });
            });

        </script>
@endsection
