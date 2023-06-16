@extends('layouts.master', ["page_title"=>" Assessors"])



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
                            <form action="{{route('customers.save')}}" method="post" id="kt_invoice_form">
                                @csrf

                                <div class="card-body p-12">
                                <!--begin::Form-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column align-items-start flex-xxl-row">

                                        <!--begin::Input group-->
                                        <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
                                            <!-- <span class="fs-2x fw-bolder text-gray-800">Add New Customer</span> -->
                                            <span class="fs-2x fw-bolder text-gray-800">Add New Assessor </span>

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
                                                <!-- <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Company Name</label> -->
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Assessor</label>

                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input required type="text" name="name" class="form-control @error('name') is-invalid @else form-control-solid  @enderror" value="{{ old('name') }}"  placeholder="Company Name" />
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <!-- <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Full Name</label> 
                                              
                                                <div class="mb-5">
                                                    <input required type="text" name="name" class="form-control @error('name') is-invalid @else form-control-solid  @enderror" value="{{ old('name') }}"   placeholder="Full Name" />
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                             
                                             </div> -->
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Email</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input required type="email" name="email"  class="form-control @error('email') is-invalid @else form-control-solid  @enderror" value="{{ old('email') }}"   placeholder="Email" />
                                                      @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <!-- <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Address</label>
                                               
                                                <div class="mb-5">
                                                    <input required type="text" name="address" class="form-control @error('address') is-invalid @else form-control-solid  @enderror" value="{{ old('address') }}"   placeholder="Address" />
                                                      @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                               
                                            </div> -->
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <!-- <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Country</label>
                                             
                                                <div class="mb-5">
                                                    <select required name="country_id" data-control="select2" data-placeholder="Select a country" data-hide-search="true" class="form-select fw-bolder @error('country_id') is-invalid @else form-control-solid  @enderror" value="{{ old('country_id') }}"  >
                                                        <option value="">Select Country</option>
                                                        @foreach(\Illuminate\Support\Facades\DB::table('countries')->get() as $item)
                                                            <option value="{{$item->id ?: ''}}" @if($item->id == 224) selected @endif  >{{$item->country_name ?: ''}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('country_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                
                                            </div> -->
                                            <!--end::Col-->
                                            <!--begin::Col-->


                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Phone Number</label>
                                        
                                                <div class="mb-5">
                                                    <input required type="text" name="mobile_number" class="form-control @error('mobile_number') is-invalid @else form-control-solid  @enderror" value="{{ old('mobile_number') }}"   placeholder="Phone Number" />
                                                      @error('Phone_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                             
                                            </div> 


                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Mobile Number</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input required type="text" name="mobile_number" class="form-control @error('mobile_number') is-invalid @else form-control-solid  @enderror" value="{{ old('mobile_number') }}"   placeholder="Mobile Number" />
                                                      @error('mobile_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3" >Inspection Date </label>
                                                <div class="mb-5">
                                                <input required type="date" name="inspection_date" class="form-control  form-control-solid" placeholder="Inspection Date">
                                                    </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3" >Assessment Date </label>
                                                <div class="mb-5">
                                                <input required type="date" name="assessment_date" class="form-control  form-control-solid" placeholder="Assessment Date">
                                                    </div>
                                            </div>



                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3"> Inspection Address</label>
                                               
                                                <div class="mb-5">
                                                    <input required type="text" name="address" class="form-control @error('address') is-invalid @else form-control-solid  @enderror" value="{{ old('address') }}"   placeholder="Address" />
                                                      @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                               
                                            </div>

                                           
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <!-- <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Office Number</label>
                                               
                                                <div class="mb-5">
                                                    <input required type="text" name="office_number" class="form-control @error('office_number') is-invalid @else form-control-solid  @enderror" value="{{ old('office_number') }}"  placeholder="Office Number" />
                                                      @error('office_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                              
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">VAT Number</label>
                                              
                                                <div class="mb-5">
                                                    <input type="text" name="vat_number" class="form-control @error('vat_number') is-invalid @else form-control-solid  @enderror" placeholder="VAT Number" />
                                                    @error('vat_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                              
                                            </div> -->
                                            <!-- <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Account Status</label>
                                               
                                                <div class="mb-5">
                                                    <select required name="status" data-control="select2" data-placeholder="Select a country" data-hide-search="true" class="form-select fw-bolder @error('status') is-invalid @else form-control-solid  @enderror" value="{{ old('status') }}">
                                                        <option value="{{\App\Utils\UserStatus::ACTIVE}}">{{\App\Utils\UserStatus::ACTIVE}} </option>
                                                        <option value="{{\App\Utils\UserStatus::INACTIVE}}">{{\App\Utils\UserStatus::INACTIVE}} </option>
                                                    </select>
                                                    @error('status')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            
                                            </div>
{{--                                            {{dd($user)}}--}}
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Email Status</label>
                                                
                                                <div class="mb-5">
                                                    <select name="email_verified_at" data-control="select2" data-placeholder="Select a country" data-hide-search="true" class="form-select fw-bolder @error('email_verified_at') is-invalid @else form-control-solid  @enderror" value="{{ old('email_verified_at') }}">
                                                        <option value="{{null}}">{{\App\Utils\EmailStatus::Unverified}}</option>
                                                        <option value="{{now()}}">{{\App\Utils\EmailStatus::Verified}}</option>
                                                    </select>
                                                </div>
                                               
                                            </div> -->
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
                                                    <input required type="password" name="password" class="form-control @error('password') is-invalid @else form-control-solid  @enderror"   placeholder="Password" />
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-lg-6">
                                                <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Confrim Password</label>
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <input required type="password" name="password_confirmation" class="form-control form-control-solid" placeholder="Confrim Password" />
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Col-->
                                            <button type="submit" class="btn btn-primary updateBtn">
                                                Save Assessor Details
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
