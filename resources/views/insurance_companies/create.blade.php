@extends('layouts.master')
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <form action="{{route('insurance_companies.save')}}" method="post" id="kt_invoice_form">
                <div id="kt_content_container" class="container">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid mb-10 mb-lg-0">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body p-12">
                                    <!--begin::Form-->
                                        <!--begin::Wrapper-->
                                        @csrf
                                        <div class="d-flex flex-column align-items-start flex-xxl-row">

                                            <!--begin::Input group-->
                                            <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                                                <span class="fs-2x fw-bolder text-gray-800">Basic Information</span>
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
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Company Name</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" name="company_name" class="form-control form-control-solid" placeholder="Company Name" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Country</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5" style="position: relative;">
                                                        <!--begin::Input-->
                                                        <select name="basic_info_country" style="position: absolute;" onmousedown="if(this.options.length>8){this.size=8;}"  onchange='this.size=0;' onblur="this.size=0;" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
                                                            <option value="">Select Country</option>
                                                            @foreach($countries as $item)
                                                                <option value="{{$item->country_name ?: null}}">{{$item->country_name ?: 'Not Set'}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Company Type</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" name="basic_info_company_type" class="form-control form-control-solid" placeholder="Company Type" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Email</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" name="basic_info_company_email_id" class="form-control form-control-solid" placeholder="Email" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Contact#</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" name="basic_info_contact_number" class="form-control form-control-solid" placeholder="e.g 0123456789" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Corporate Details</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="basic_info_corporate_details" placeholder="Corporate Details" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Auditor</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="basic_info_auditor" placeholder="Auditor" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">About</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="basic_info_about" placeholder="About" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Total Employees</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid"  name="basic_info_employeee_count" placeholder="e.g 123" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Financial Report Url</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="basic_info_financial_report" placeholder="Financial Report Url" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Incorporated</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" name="basic_info_incorporated" class="form-control form-control-solid" placeholder="e.g YEMEN" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Incorporated Year</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" name="basic_info_incorporated_year" class="form-control form-control-solid" placeholder="e.g 1999" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Toll Free Number</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="basic_info_toll_free_number" placeholder="e.g 3245564" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Trade Name</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="basic_info_trade_name" placeholder="Trade Name" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Alternative Names</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="basic_info_alternative_names" placeholder="Alternative Names" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">


                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->

                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Wrapper-->
                                    <!--end::Form-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Layout-->
                </div>
                <div id="kt_content_container" class="container">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid mb-10 mb-lg-0">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body p-12">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column align-items-start flex-xxl-row">

                                            <!--begin::Input group-->
                                            <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                                                <span class="fs-2x fw-bolder text-gray-800">Board Of Directors</span>
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
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Name</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="b_o_d_name[]" placeholder="Name" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Designation</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" name="b_o_d_designation[]" class="form-control form-control-solid" placeholder="Designation" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-lg-6" id="director_btn_div">
    {{--                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">City</label>--}}
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <button type="button" class="btn btn-primary" id="add_director">+ Add More</button>
    {{--                                                    <input type="text" class="form-control form-control-solid" placeholder="City" />--}}
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Layout-->
                </div>
                <div id="kt_content_container" class="container">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid mb-10 mb-lg-0">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body p-12">
                                    <!--begin::Form-->
                                        <div class="d-flex flex-column align-items-start flex-xxl-row">

                                            <!--begin::Input group-->
                                            <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                                                <span class="fs-2x fw-bolder text-gray-800">Accounting</span>
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
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Financial Strength Rating</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="acc_financial_strength_rating" placeholder="e.g A-" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Gross Written Premium</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="acc_gross_written_premium" placeholder="e.g YR 1,234,56" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                                <!--end::Col-->
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Gross Written Premium Year</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="acc_gross_written_premium_year" placeholder="e.g 2010" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Issue Credit Rating</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="acc_issue_credit_rating" placeholder="e.g bbb-" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Moody Rating</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="acc_moody_rating" placeholder="e.g Aa3/Stable" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">S&P Rating</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="acc_s_andprating" placeholder="e.g AA-" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Other Rating</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="acc_other_rating" placeholder="e.g BBB-' (Good) (FITCH RATINGS)" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Public Listed Company</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="acc_public_listed_company" placeholder="e.g Palestine Securities Exchange (PSE)" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Regulatory Authority</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="acc_regulatory_authority" placeholder="e.g UAE Insurance Authority" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Layout-->
                </div>
                <div id="kt_content_container" class="container">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid mb-10 mb-lg-0">
                            <!--begin::Card-->
                            <div class="card">
                                <!--begin::Card body-->
                                <div class="card-body p-12">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column align-items-start flex-xxl-row">

                                            <!--begin::Input group-->
                                            <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                                                <span class="fs-2x fw-bolder text-gray-800">Market Share</span>
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
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Authorized Shares</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="m_s_authorized_shares" placeholder="e.g Authorized Shares" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Issued Shares</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="m_s_issued_shares" placeholder="e.g Issued Shares" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <!--end::Col-->
                                                <!--end::Col-->
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">No Of Shares</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="m_s_no_of_shares" placeholder="e.g No Of Shares" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Paid Up Shares</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="m_s_paid_up_shares" placeholder="e.g Paid Up Shares" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Total Share</label>
                                                    <!--begin::Input group-->
                                                    <div class="mb-5">
                                                        <input type="text" class="form-control form-control-solid" name="m_s_total_share" placeholder="e.g Total Share" />
                                                    </div>
                                                    <!--end::Input group-->
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Wrapper-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Layout-->
                </div>
                <button type="submit" class="btn btn-primary updateBtn" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                    Save Company Details
                </button>
            </form>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
@section('script')
    <script>
        let i = 0 ;
        $('#add_director').click(function () {
            i++
            $('#director_btn_div').before(`<div class="col-lg-5 div${i}">
                                <div class="mb-5">
                                    <input type="text" class="form-control form-control-solid" name="b_o_d_name[]" placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-lg-5 div${i}">
                                <div class="mb-5">
                                    <input type="text" name="b_o_d_designation[]" class="form-control form-control-solid" placeholder="Designation" />
                                </div>
                            </div>
                            <div class="col-lg-2 div${i}">
                                <div class="mb-5">
                                    <button type="button" class="btn btn-danger" id="del_director" value="${i}">- Remove</button>
                                </div>
                            </div>`);
        });


        $(document).on('click', '#del_director', function(){
            console.log('Here in del');
            console.log("div"+$(this).val());
            let removing_div = "div"+$(this).val();
            console.log(removing_div);
            $("."+removing_div).remove();
        });
    </script>
@endsection

