@extends('layouts.master')
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
                    @include('layouts.flash-message')
                    <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
														</g>
													</svg>
												</span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
{{--                        <div class="card-toolbar">--}}
{{--                            <!--begin::Toolbar-->--}}
{{--                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">--}}
{{--                                <!--end::Filter-->--}}
{{--                                <!--begin::Export-->--}}
{{--                                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">--}}
{{--                                    <!--begin::Svg Icon | path: icons/duotone/Files/Export.svg-->--}}
{{--                                    <span class="svg-icon svg-icon-2">--}}
{{--													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--															<rect x="0" y="0" width="24" height="24" />--}}
{{--															<path d="M17,8 C16.4477153,8 16,7.55228475 16,7 C16,6.44771525 16.4477153,6 17,6 L18,6 C20.209139,6 22,7.790861 22,10 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,9.99305689 C2,7.7839179 3.790861,5.99305689 6,5.99305689 L7.00000482,5.99305689 C7.55228957,5.99305689 8.00000482,6.44077214 8.00000482,6.99305689 C8.00000482,7.54534164 7.55228957,7.99305689 7.00000482,7.99305689 L6,7.99305689 C4.8954305,7.99305689 4,8.88848739 4,9.99305689 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,10 C20,8.8954305 19.1045695,8 18,8 L17,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />--}}
{{--															<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 8.000000) scale(1, -1) rotate(-180.000000) translate(-12.000000, -8.000000)" x="11" y="2" width="2" height="12" rx="1" />--}}
{{--															<path d="M12,2.58578644 L14.2928932,0.292893219 C14.6834175,-0.0976310729 15.3165825,-0.0976310729 15.7071068,0.292893219 C16.0976311,0.683417511 16.0976311,1.31658249 15.7071068,1.70710678 L12.7071068,4.70710678 C12.3165825,5.09763107 11.6834175,5.09763107 11.2928932,4.70710678 L8.29289322,1.70710678 C7.90236893,1.31658249 7.90236893,0.683417511 8.29289322,0.292893219 C8.68341751,-0.0976310729 9.31658249,-0.0976310729 9.70710678,0.292893219 L12,2.58578644 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 2.500000) scale(1, -1) translate(-12.000000, -2.500000)" />--}}
{{--														</g>--}}
{{--													</svg>--}}
{{--												</span>--}}
{{--                                    <!--end::Svg Icon-->Export</button>--}}
{{--                                <!--end::Export-->--}}
{{--                                <!--begin::Add user-->--}}
{{--                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">--}}
{{--                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->--}}
{{--                                    <span class="svg-icon svg-icon-2">--}}
{{--													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--														<rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />--}}
{{--														<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)" x="4" y="11" width="16" height="2" rx="1" />--}}
{{--													</svg>--}}
{{--												</span>--}}
{{--                                    <!--end::Svg Icon-->Add User</button>--}}
{{--                                <!--end::Add user-->--}}
{{--                            </div>--}}
{{--                            <!--end::Toolbar-->--}}
{{--                            <!--begin::Group actions-->--}}
{{--                            <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">--}}
{{--                                <div class="fw-bolder me-5">--}}
{{--                                    <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>--}}
{{--                                <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>--}}
{{--                            </div>--}}
{{--                            <!--end::Group actions-->--}}
{{--                            <!--begin::Modal - Adjust Balance-->--}}
{{--                            <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">--}}
{{--                                <!--begin::Modal dialog-->--}}
{{--                                <div class="modal-dialog modal-dialog-centered mw-650px">--}}
{{--                                    <!--begin::Modal content-->--}}
{{--                                    <div class="modal-content">--}}
{{--                                        <!--begin::Modal header-->--}}
{{--                                        <div class="modal-header">--}}
{{--                                            <!--begin::Modal title-->--}}
{{--                                            <h2 class="fw-bolder">Export Users</h2>--}}
{{--                                            <!--end::Modal title-->--}}
{{--                                            <!--begin::Close-->--}}
{{--                                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">--}}
{{--                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->--}}
{{--                                                <span class="svg-icon svg-icon-1">--}}
{{--																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--																		<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">--}}
{{--																			<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />--}}
{{--																			<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />--}}
{{--																		</g>--}}
{{--																	</svg>--}}
{{--																</span>--}}
{{--                                                <!--end::Svg Icon-->--}}
{{--                                            </div>--}}
{{--                                            <!--end::Close-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Modal header-->--}}
{{--                                        <!--begin::Modal body-->--}}
{{--                                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">--}}
{{--                                            <!--begin::Form-->--}}
{{--                                            <form id="kt_modal_export_users_form" class="form" action="#">--}}
{{--                                                <!--begin::Input group-->--}}
{{--                                                <div class="fv-row mb-10">--}}
{{--                                                    <!--begin::Label-->--}}
{{--                                                    <label class="fs-6 fw-bold form-label mb-2">Select Roles:</label>--}}
{{--                                                    <!--end::Label-->--}}
{{--                                                    <!--begin::Input-->--}}
{{--                                                    <select name="role" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">--}}
{{--                                                        <option></option>--}}
{{--                                                        <option value="Administrator">Administrator</option>--}}
{{--                                                        <option value="Analyst">Analyst</option>--}}
{{--                                                        <option value="Developer">Developer</option>--}}
{{--                                                        <option value="Support">Support</option>--}}
{{--                                                        <option value="Trial">Trial</option>--}}
{{--                                                    </select>--}}
{{--                                                    <!--end::Input-->--}}
{{--                                                </div>--}}
{{--                                                <!--end::Input group-->--}}
{{--                                                <!--begin::Input group-->--}}
{{--                                                <div class="fv-row mb-10">--}}
{{--                                                    <!--begin::Label-->--}}
{{--                                                    <label class="required fs-6 fw-bold form-label mb-2">Select Export Format:</label>--}}
{{--                                                    <!--end::Label-->--}}
{{--                                                    <!--begin::Input-->--}}
{{--                                                    <select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bolder">--}}
{{--                                                        <option></option>--}}
{{--                                                        <option value="excel">Excel</option>--}}
{{--                                                        <option value="pdf">PDF</option>--}}
{{--                                                        <option value="cvs">CVS</option>--}}
{{--                                                        <option value="zip">ZIP</option>--}}
{{--                                                    </select>--}}
{{--                                                    <!--end::Input-->--}}
{{--                                                </div>--}}
{{--                                                <!--end::Input group-->--}}
{{--                                                <!--begin::Actions-->--}}
{{--                                                <div class="text-center">--}}
{{--                                                    <button type="reset" class="btn btn-white me-3" data-kt-users-modal-action="cancel">Discard</button>--}}
{{--                                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">--}}
{{--                                                        <span class="indicator-label">Submit</span>--}}
{{--                                                        <span class="indicator-progress">Please wait...--}}
{{--																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Actions-->--}}
{{--                                            </form>--}}
{{--                                            <!--end::Form-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Modal body-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Modal content-->--}}
{{--                                </div>--}}
{{--                                <!--end::Modal dialog-->--}}
{{--                            </div>--}}
{{--                            <!--end::Modal - New Card-->--}}
{{--                            <!--begin::Modal - Add task-->--}}
{{--                            <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">--}}
{{--                                <!--begin::Modal dialog-->--}}
{{--                                <div class="modal-dialog modal-dialog-centered mw-650px">--}}
{{--                                    <!--begin::Modal content-->--}}
{{--                                    <div class="modal-content">--}}
{{--                                        <!--begin::Modal header-->--}}
{{--                                        <div class="modal-header" id="kt_modal_add_user_header">--}}
{{--                                            <!--begin::Modal title-->--}}
{{--                                            <h2 class="fw-bolder">Add User</h2>--}}
{{--                                            <!--end::Modal title-->--}}
{{--                                            <!--begin::Close-->--}}
{{--                                            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">--}}
{{--                                                <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->--}}
{{--                                                <span class="svg-icon svg-icon-1">--}}
{{--																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--																		<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">--}}
{{--																			<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />--}}
{{--																			<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />--}}
{{--																		</g>--}}
{{--																	</svg>--}}
{{--																</span>--}}
{{--                                                <!--end::Svg Icon-->--}}
{{--                                            </div>--}}
{{--                                            <!--end::Close-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Modal header-->--}}
{{--                                        <!--begin::Modal body-->--}}
{{--                                        <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">--}}
{{--                                            <!--begin::Form-->--}}
{{--                                            <form id="kt_modal_add_user_form" class="form" action="{{route('customers.save')}}" method="post">--}}
{{--                                                @csrf--}}
{{--                                                @if($errors->any())--}}
{{--                                                    {!!  implode('', $errors->all('<div class="alter alert-danger form-control">:message</div>'))  !!}--}}
{{--                                                @endif--}}
{{--                                                <!--begin::Scroll-->--}}
{{--                                                <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">--}}
{{--                                                    <div class="fv-row mb-7">--}}
{{--                                                        <!--begin::Label-->--}}
{{--                                                        <label class="required fw-bold fs-6 mb-2">Company Name</label>--}}
{{--                                                        <!--end::Label-->--}}
{{--                                                        <!--begin::Input-->--}}
{{--                                                        <input type="text" name="company_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Company name" />--}}
{{--                                                        <!--end::Input-->--}}
{{--                                                    </div>--}}

{{--                                                    <!--begin::Input group-->--}}
{{--                                                    <div class="fv-row mb-7">--}}
{{--                                                        <!--begin::Label-->--}}
{{--                                                        <label class="required fw-bold fs-6 mb-2">Full Name</label>--}}
{{--                                                        <!--end::Label-->--}}
{{--                                                        <!--begin::Input-->--}}
{{--                                                        <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" />--}}
{{--                                                        <!--end::Input-->--}}
{{--                                                    </div>--}}
{{--                                                    <!--end::Input group-->--}}
{{--                                                    <!--begin::Input group-->--}}
{{--                                                    <div class="fv-row mb-7">--}}
{{--                                                        <!--begin::Label-->--}}
{{--                                                        <label class="required fw-bold fs-6 mb-2">Email</label>--}}
{{--                                                        <!--end::Label-->--}}
{{--                                                        <!--begin::Input-->--}}
{{--                                                        <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" />--}}
{{--                                                        <!--end::Input-->--}}
{{--                                                    </div>--}}
{{--                                                    <div class="fv-row mb-7">--}}
{{--                                                        <!--begin::Label-->--}}
{{--                                                        <label class="required fw-bold fs-6 mb-2">Address</label>--}}
{{--                                                        <!--end::Label-->--}}
{{--                                                        <!--begin::Input-->--}}
{{--                                                        <input type="text" name="address" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Street 1, House no 4, Rawalpindi, Islamabad" />--}}
{{--                                                        <!--end::Input-->--}}
{{--                                                    </div>--}}
{{--                                                    <div class="fv-row mb-7">--}}
{{--                                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Country</label>--}}
{{--                                                        <!--begin::Input group-->--}}
{{--                                                        <div class="mb-5">--}}
{{--                                                            <select name="country_id" data-control="select2" data-placeholder="Select a country" data-hide-search="true" class="form-select form-select-solid fw-bolder">--}}
{{--                                                                <option></option>--}}
{{--                                                                @foreach(\Illuminate\Support\Facades\DB::table('countries')->get() as $item)--}}
{{--                                                                <option value="{{$item->id ?: ''}}" >{{$item->country_name ?: ''}}</option>--}}
{{--                                                                @endforeach--}}
{{--                                                            </select>--}}
{{--                                                        </div>--}}
{{--                                                            <!--end::Input group-->--}}
{{--                                                    </div>--}}
{{--                                                    <div class="fv-row mb-7">--}}
{{--                                                        <!--begin::Label-->--}}
{{--                                                        <label class="required fw-bold fs-6 mb-2">Mobile Number</label>--}}
{{--                                                        <!--end::Label-->--}}
{{--                                                        <!--begin::Input-->--}}
{{--                                                        <input type="number" name="mobile_number" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="13412315341" />--}}
{{--                                                        <!--end::Input-->--}}
{{--                                                    </div>--}}
{{--                                                    <div class="fv-row mb-7">--}}
{{--                                                        <!--begin::Label-->--}}
{{--                                                        <label class="required fw-bold fs-6 mb-2">Office Number</label>--}}
{{--                                                        <!--end::Label-->--}}
{{--                                                        <!--begin::Input-->--}}
{{--                                                        <input type="number" name="office_number" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="13412315341" />--}}
{{--                                                        <!--end::Input-->--}}
{{--                                                    </div>--}}
{{--                                                    <div class="fv-row mb-7">--}}
{{--                                                        <!--begin::Label-->--}}
{{--                                                        <label class="required fw-bold fs-6 mb-2">Password</label>--}}
{{--                                                        <!--end::Label-->--}}
{{--                                                        <!--begin::Input-->--}}
{{--                                                        <input type="password" name="password" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="password" />--}}
{{--                                                        <!--end::Input-->--}}
{{--                                                    </div>--}}
{{--                                                    <div class="fv-row mb-7">--}}
{{--                                                        <!--begin::Label-->--}}
{{--                                                        <label class="required fw-bold fs-6 mb-2">Confirm Password</label>--}}
{{--                                                        <!--end::Label-->--}}
{{--                                                        <!--begin::Input-->--}}
{{--                                                        <input type="password" name="password_confirmation" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="confirm password" />--}}
{{--                                                        <!--end::Input-->--}}
{{--                                                    </div>--}}
{{--                                                    <!--end::Input group-->--}}
{{--                                                </div>--}}
{{--                                                <!--end::Scroll-->--}}
{{--                                                <!--begin::Actions-->--}}
{{--                                                <div class="text-center pt-15">--}}
{{--                                                    <button type="reset" class="btn btn-white me-3" data-kt-users-modal-action="cancel">Discard</button>--}}
{{--                                                    <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">--}}
{{--                                                        <span class="indicator-label">Submit</span>--}}
{{--                                                        <span class="indicator-progress">Please wait...--}}
{{--																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Actions-->--}}
{{--                                            </form>--}}
{{--                                            <!--end::Form-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Modal body-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Modal content-->--}}
{{--                                </div>--}}
{{--                                <!--end::Modal dialog-->--}}
{{--                            </div>--}}
{{--                            <!--end::Modal - Add task-->--}}
{{--                        </div>--}}
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th class="">S.No</th>
                                <th class="min-w-100px">Country Name</th>
                                <th class="min-w-100px">Dollar Rate</th>
                                <th class="text-end min-w-100px">Actions</th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-bold">
                            <!--begin::Table row-->
                            @foreach($countries as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        {{$item->country_name ?: '-'}}
                                    </td>
                                    <form action="{{route('countries.update',$item->id)}}" method="post">
                                        @csrf
                                        <td><input required class="form-control" name='rate_in_dollar' value="{{$item->rate_in_dollar ?: '' }}" type="text"></td>
                                        <td><button class="btn btn-success" type="submit">Save</button></td>
                                    </form>
                                </tr>
                            @endforeach
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
