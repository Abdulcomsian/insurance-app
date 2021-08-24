@extends('layouts.master', ["page_title"=>"Insurance Companies"])
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
   #grad1 {
    background-color: : #9C27B0;
    background-image: linear-gradient(120deg, #FF4081, #81D4FA)
}

{
    text-align: center;
    position: relative;
    margin-top: 20px
}

fieldset .form-card {
    box-sizing: border-box;
    width: 100%;
    position: relative
}

fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

fieldset:not(:first-of-type) {
    display: none
}

fieldset .form-card {
    text-align: left;
    color: #9E9E9E
}

input,
textarea {
    padding: 0px 8px 4px 8px;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 16px;
    letter-spacing: 1px
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 2px solid skyblue;
    outline-width: 0
}

.action-button {
    width: 100px;
    background: #2e953e;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
    border-radius:8px;
}

.action-button:hover,
.action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
}

.action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
    border-radius:8px;
}

.action-button-previous:hover,
.action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
}

select.list-dt {
    border: none;
    outline: 0;
    border-bottom: 1px solid #ccc;
    padding: 2px 5px 3px 5px;
    margin: 2px
}

select.list-dt:focus {
    border-bottom: 2px solid skyblue
}

.card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative;
}
#msform fieldset{
    padding:50px !important;
}
#msform .action-button{
    float:right;
}
.fs-title {
    font-size: 25px;
    color: #2C3E50;
    margin-bottom: 50px;
    font-weight: bold;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #000000
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f023"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f09d"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: skyblue
}

.radio-group {
    position: relative;
    margin-bottom: 25px
}

.radio {
    display: inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor: pointer;
    margin: 8px 2px
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
}

.fit-image {
    width: 100%;
    object-fit: cover
}
</style>
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container">
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid mb-10 mb-lg-0">
            <div class="card">
            <div id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                            <li class="active" id="detail"><span>1</span><strong>Company Detail</strong></li>
                                                <li id="director"><span>2</span><strong>Board of Director</strong></li>
                                                <li id="accounting"><span>3</span><strong>Compnay Accounting</strong></li>
                                                <li id="statement"><span>4</span><strong>Income Statement</strong></li>
                                                <li id="investment"><span>5</span><strong>Investment</strong></li>
                                                <li id="subsudaiary"><span>6</span><strong>Subsidiary</strong></li>
                                                <li id="share"><span>7</span><strong>Market Share</strong></li>
                                                <li id="holder"><span>8</span><strong>ShareHolder</strong></li>
                            </ul> <!-- fieldsets -->
                            <fieldset>
                               <form action="">
                               <div class="form-card">
                                    <h2 class="fs-title">Compnay Details</h2> 
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Company Name</label>
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="company_name" class="form-control form-control-solid" placeholder="Company Name" />
                                                        </div>
                                        </div>
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
                                    </div>
                                    
                                </div>
                               </form>
                                
                                <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <form action="">
                                <div class="form-card">
                                    <h2 class="fs-title">Board Of Directors</h2> 
                                    <div class="separator separator-dashed my-10"></div>
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
                                </form>
                             
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <form action="">
                                <div class="form-card">
                                    <h2 class="fs-title">Accounting</h2>
                                    <div class="separator separator-dashed my-10"></div>
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
                                </form>
                                 <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Next" />
                            </fieldset>
                               <fieldset>
                                   <form action="">
                                   <div class="form-card">
                                    <h2 class="fs-title">Income Statement</h2> 
                                    <div class="separator separator-dashed my-10"></div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Name</label>
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="name" class="form-control form-control-solid" placeholder="Name" />
                                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Value</label>
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="value" class="form-control form-control-solid" placeholder="Value" />
                                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Year</label>
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="year" class="form-control form-control-solid" placeholder="Year" />
                                                        </div>
                                        </div>
                                    </div>
                                </div> 
                                   </form>
                               
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <form action="">
                                <div class="form-card">
                                    <h2 class="fs-title">Investment</h2> 
                                    <div class="separator separator-dashed my-10"></div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Name</label>
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="name" class="form-control form-control-solid" placeholder="Name" />
                                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Value</label>
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="value" class="form-control form-control-solid" placeholder="Value" />
                                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Year</label>
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="year" class="form-control form-control-solid" placeholder="Year" />
                                                        </div>
                                        </div>
                                    </div>
                                </div> 
                                </form>
                              
                                 <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>                         
                            <fieldset>
                                <form action="">
                                <div class="form-card">
                                    <h2 class="fs-title">Subsidiary</h2> 
                                    <div class="separator separator-dashed my-10"></div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Dsignation</label>
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="designation" class="form-control form-control-solid" placeholder="Designation" />
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                                
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <form action="">
                                <div class="form-card">
                                    <h2 class="fs-title">Market Share</h2> 
                                    <div class="separator separator-dashed my-10"></div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Authorized Share</label>
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="auth_share" class="form-control form-control-solid" placeholder="Authorized Share" />
                                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Issued Share</label>
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="issue_share" class="form-control form-control-solid" placeholder="Issued Share" />
                                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">No of Share</label>
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="no_share" class="form-control form-control-solid" placeholder="No of Share" />
                                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Paid up Share</label>
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="paid_up_share" class="form-control form-control-solid" placeholder="Paid up Share" />
                                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Total Share</label>
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="total_share" class="form-control form-control-solid" placeholder="Total Share" />
                                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                                 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <form action="">
                                <div class="form-card">
                                    <h2 class="fs-title">ShareHolder</h2> 
                                    <div class="separator separator-dashed my-10"></div>
                                     <!--begin::Row-->
                                     <div class="row gx-10 mb-5">
                                     <div class="col-lg-6">
                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Name</label>
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="name" class="form-control form-control-solid" placeholder="Name" />
                                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Share Percentage</label>
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="percentage" class="form-control form-control-solid" placeholder="Share Percentage" />
                                                        </div>
                                        </div>
                                                    <!--begin::Col-->
                                                    <div class="col-lg-6" id="share_btn_div">
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <button type="button" class="btn btn-primary" id="add_share">+ Add More</button>
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
                                </form>
                               
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                        </div>
</div>
</div>
</div>
</div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 600
});
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
$(this).parent().find('.radio').removeClass('selected');
$(this).addClass('selected');
});

$(".submit").click(function(){
return false;
})

});
</script>
    <script>
        $("#add_share").click(function () {
            i++
            $('#share_btn_div').before(`<div class="col-lg-5 div${i}">
                                <div class="mb-5">
                                    <input type="text" class="form-control form-control-solid" name="share_name[]" placeholder="Name" />
                                </div>
                            </div>
                            <div class="col-lg-5 div${i}">
                                <div class="mb-5">
                                    <input type="text" name="share_percentage[]" class="form-control form-control-solid" placeholder="Share Percentage" />
                                </div>
                            </div>
                            <div class="col-lg-2 div${i}">
                                <div class="mb-5">
                                    <button type="button" class="btn btn-danger" id="del_director" value="${i}">- Remove</button>
                                </div>
                            </div>`);
        });
        let i = 0 ;
        $('#add_director').click(function () {
            console.log("hello")
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

