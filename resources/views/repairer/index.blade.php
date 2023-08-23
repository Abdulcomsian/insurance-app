@extends('layouts.master', ["page_title"=>"Repairers"])
@section('css')
    @include('layouts.datatables_css')
@endsection

@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container packagesDiv">
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
                                    <!--end::Svg Icon-->Add New Repairer</button>
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
                                            <form id="kt_modal_add_user_form" class="form" action="{{route('repairer.store')}}" method="post">
                                                @csrf
                                                <!--begin::Scroll-->
                                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                    <div class="fv-row mb-7">

                                                        <label class="required fw-bold fs-6 mb-2">Repairer Name</label>

                                                        <input type="text" required name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Repairer Name" />

                                                    </div>

                                                    <div class="fv-row mb-7">

                                                        <label class="required fw-bold fs-6 mb-2">Address</label>

                                                        <input type="text" required name="address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Address" />

                                                    </div>

                                                    <div class="fv-row mb-7">

                                                        <label class="required fw-bold fs-6 mb-2">Contact</label>

                                                        <input type="number" required name="contact" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Contact" />

                                                    </div>

                                                    <div class="fv-row mb-7">

                                                        <label class="required fw-bold fs-6 mb-2">Email</label>

                                                        <input type="email" required name="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Email" />

                                                    </div>




                                                    {{-- <div class="fv-row mb-7">

                                                        <label class="required fw-bold fs-6 mb-2">Phone</label>

                                                        <input type="number" required name="phone" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="phone" />

                                                    </div> --}}


                                                    <div class="fv-row mb-7">

                                                        <label class="required fw-bold fs-6 mb-2">ABN</label>

                                                        <input type="number" required name="mobile" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="ABN" />

                                                    </div>


                                                    {{-- <div class="fv-row mb-7">

                                                        <label class="required fw-bold fs-6 mb-2">Repairer Address</label>

                                                        <input type="text" required name="address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Address" />

                                                    </div> --}}

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
                                <th>Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>ABN</th>
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
        $(document).ready(function() {
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                dom: 'lBfrtip',
                buttons: [
                    {
                        extend: 'copyHtml5',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    },
                    {
                        extend: 'csvHtml5',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6]
                        }
                    }
                ],
                ajax: "{{ route('repairer.index') }}",
                columns: [
                    { data: 'id', name: 'id', defaultContent: '-' },
                    { data: 'name', name: 'name', defaultContent: '-', class: 'name' },
                    { data: 'address', name: 'address', defaultContent: '-', class: 'address' },
                    { data: 'contact', name: 'contact', defaultContent: '-', class: 'contact' },
                    { data: 'email', name: 'email', defaultContent: '-', class: 'email' },
                    // { data: 'contact', name: 'contact', defaultContent: '-', class: 'contact' },
                    // { data: 'phone', name: 'phone', defaultContent: '-', class: 'phone' },
                    { data: 'mobile', name: 'mobile', defaultContent: '-', class: 'mobile' },
                    // { data: 'address', name: 'address', defaultContent: '-', class: 'address' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ],
                language: {
                    searchPlaceholder: "Search Package",
                    search: ""
                },
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]]
            });

            $(document).on('click', '.edit-btn', function()
            {
                var id = $(this).data('id');
                window.location.href = "{{ route('repairer.edit', ':id') }}".replace(':id', id);
            });

            $(document).on('click', '.delete-btn', function()
            {
                var id = $(this).data('id');
                if (confirm("Are you sure you want to delete this repairer?")) {
                    $.ajax({
                        url: "{{ route('repairer.destroy', ':id') }}".replace(':id', id),
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            if (response.success) {
                                table.ajax.reload();
                                alert('Repairer deleted successfully.');
                            } else {
                                alert('Failed to delete the repairer.');
                            }
                        },
                        error: function(xhr) {
                            alert('An error occurred. Please try again later.');
                        }
                    });
                }
            });

        });
    </script>
@endsection
