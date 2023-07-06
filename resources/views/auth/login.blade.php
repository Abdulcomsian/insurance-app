@extends('layouts.master_loggedout', ['page_title' => 'Sign in'])

@section('content')
    <!--begin::Body-->
    <div class="d-flex flex-center flex-column flex-column-fluid" style="background-image: url({{ asset('images/logo-letter-8.jpg') }}); background-size: cover; background-position: center;">
        <!--begin::Wrapper-->
        <div class="w-lg-500px p-10 p-lg-15 mx-auto">
            <!--begin::Form-->
            <div class="d-flex flex-center mb-15">
                <a href="#">
                    <img src="{{ url('images/logo-letter-9.png') }}" class="max-h-100px" alt=""/>
                </a>
            </div>
            <form method="POST" action="{{ route('login') }}" class="form w-100" novalidate="novalidate" id="kt_sign_in_form">
                @csrf
                <!--begin::Heading-->
                <div class="text-center mb-10">
                    <h1 class="text-dark mb-3">Admin Panel</h1>
                </div>
                <!--end::Heading-->

                <!--begin::Input group-->
                <div class="fv-row mb-10 text-center">
                    {{-- <label class="form-label fs-6 fw-bolder text-dark">Email</label> --}}
                    <input class="form-control h-auto   opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5 @error('email') is-invalid @enderror" required type="text" placeholder="Email" name="email"/>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    @if ($message = Session::get('error'))
                        <span class="invalid-feedback d-flex" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @endif
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10 text-center">
                    {{-- <div class="d-flex flex-stack mb-2"> --}}
                        {{-- <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label> --}}
                    {{-- </div> --}}
                    <input class="form-control h-auto   opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5 @error('password') is-invalid @enderror" type="password" placeholder="Password" required name="password"/>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!--end::Input group-->


                <!--begin::Actions-->
                <div class="form-group text-center">
                    <button style=" border: 1px solid #fff;border-radius: 25px"  id="kt_login_signin_submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Sign In</button>
                    {{-- <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-50 mb-5 rounded-circle btn-light-sky">
                        <span class="indicator-label">Login</span>
                        <span class="indicator-progress">Please wait...<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button> --}}
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Body-->
@endsection
