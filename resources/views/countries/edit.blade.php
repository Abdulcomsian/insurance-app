@extends('layouts.master', ["page_title"=>"Countries"])
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid mb-10 mb-lg-0">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card body-->
                            <form action="{{route('customers.update',encrypt($user->id))}}" method="post" id="kt_invoice_form">
                                @csrf

                                <div class="card-body p-12">
                                <!--begin::Form-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start flex-xxl-row">

                                        <!--begin::Input group-->
                                        <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                                            <span class="fs-2x fw-bolder text-gray-800">Edit User</span>
                                        </div>
                                        @if($errors->any())
                                            {!!  implode('', $errors->all('<div class="alter alert-danger form-control">:message</div>'))  !!}
                                        @endif
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-10"></div>
                                    <!--end::Separator-->
                                    <!--begin::Wrapper-->
                                    <div class="mb-0">
                                        <!--begin::Row-->
                                        <div class="row gx-10 mb-5">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Company Name</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" name="company_name" value="{{$user->company_name ?: ''}}" class="form-control form-control-solid" placeholder="Company Name" />
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Full Name</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" name="name" value="{{$user->name ?: ''}}"  class="form-control form-control-solid" placeholder="Full Name" />
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Email</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" name="email" value="{{$user->email ?: ''}}"  class="form-control form-control-solid" placeholder="Email" />
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Address</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" name="address" value="{{$user->address ?: ''}}" class="form-control form-control-solid" placeholder="Address" />
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Country</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <select name="country_id" data-control="select2" data-placeholder="Select a country" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                                        <option></option>
                                                        @foreach(\Illuminate\Support\Facades\DB::table('countries')->get() as $item)--}}
                                                            <option value="{{$item->id ?: ''}}" @if($item->id == $user->country_id) selected @endif>{{$item->country_name ?: ''}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Mobile Number</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" name="mobile_number" value="{{$user->mobile_number ?: ''}}" class="form-control form-control-solid" placeholder="Mobile Number" />
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Office Number</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" name="office_number" value="{{$user->office_number ?: ''}}" class="form-control form-control-solid" placeholder="Office Number" />
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Wrapper-->
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                            <!--begin::Card body-->
                                <div class="card-body p-12">
                                <!--begin::Form-->
{{--                                <form action="" id="kt_invoice_form">--}}
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start flex-xxl-row">

                                        <!--begin::Input group-->
                                        <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                                            <span class="fs-2x fw-bolder text-gray-800">Password</span>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Top-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-10"></div>
                                    <!--end::Separator-->
                                    <!--begin::Wrapper-->
                                    <div class="mb-0">
                                        <!--begin::Row-->
                                        <div class="row gx-10 mb-5">
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Password</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" name="password" class="form-control form-control-solid" placeholder="Password" />
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Confrim Password</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input type="text" name="password_confirmation" class="form-control form-control-solid" placeholder="Confrim Password" />
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <button type="submit" class="btn btn-primary updateBtn">
                                                Update User Details
                                            </button>
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Wrapper-->
{{--                                </form>--}}
                                <!--end::Form-->
                            </div>
                            </form>

                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
