@extends('layouts.master', ["page_title"=>" Accident Assessing Services"])
@section('css')
@endsection
@section('content')



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script> -->



    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Document</title>
<style>


.btn:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush):not(.btn-icon) {
    border: 0;
    padding: calc(0.75rem + -3px) calc(0.5rem + 1px);
    margin-left: 0px;
}


.panel-default {
    border-color: white;
}


#msform {
    text-align: center;
    position: relative;
    margin-top: -20px;
}

#msform fieldset .form-card {
    background: white;
    border: 0 none;
     border-radius: 0px;
    /* box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2); */
    padding: 20px 40px 30px 40px;
    box-sizing: border-box;
    width: 94%;
    margin: 0 3% 20px 3%;


    /*stacking fieldsets above each other*/
    position: relative;
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;

    /*stacking fieldsets above each other*/
    position: relative;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}

#msform fieldset .form-card {
    text-align: left;
    color: #9E9E9E;
}

#msform input, #msform textarea {

    background-color: #f5f8fa;
    border-color: #f5f8fa;
    color: #5e6278;
    transition: color .2s ease,background-color .2s ease;
    font-size: 1.1rem;
    font-weight: 500;
    line-height: 1.5;
    background-clip: padding-box;
    border: 1px solid #e4e6ef;
    appearance: none;
    border-radius: 0.475rem;
    padding: 1.4rem 1rem;
}

#msform input:focus, #msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    /* border: none; */
    /* font-weight: bold; */
    /* border-bottom: 2px solid skyblue; */
    outline-width: 0;
}

/*Blue Buttons*/
#msform .action-button {
    width: 100px;
    background: skyblue;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
}

/*Previous Buttons*/
#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
}

/*Dropdown List Exp Date*/
select.list-dt {

    outline: 0;
    padding: 2px 5px 3px 5px;
    margin: 2px;



    background-color: #f5f8fa;
    border: 1px solid #e4e6ef;
    color: #5e6278;
    font-size: 1.1rem;
    font-weight: 500;
    border-radius: 0.475rem;
    padding: 0.6rem 1rem;
    width:100%;
    margin-top:-1px;


}



/*The background card*/
.card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative;
}

/*FieldSet headings*/
.fs-title {
    font-size: 16px;
    color: #2C3E50;
    margin-bottom: 10px;
    font-weight: bold;
    text-align: left;
}

/*progressbar*/
#progressbar {
    /* margin-bottom: 30px; */
    overflow: hidden;
    color: lightgrey;
    margin-top: -30px;
    /* border:2px solid red; */
}

#progressbar .active {
    color: #000000;
}

#progressbar li {
    list-style-type: none;
    font-size: 12px;
    width: 25%;
    float: left;
    position: relative;
}

/*Icons in the ProgressBar*/
#progressbar #account:before {
    font-family: FontAwesome;
    /* content: "\f023"; */
    content: "1";
}

#progressbar #personal:before {
    font-family: FontAwesome;
    /* content: "\f007"; */
    content: "2";

}

#progressbar #payment:before {
    font-family: FontAwesome;
    /* content: "\f09d"; */
    content:"3"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    /* content: "\f00c"; */
    content: "4";
}

/*ProgressBar before any progress*/
#progressbar li:before {
    width: 40px;
    height: 40px;
    line-height: 45px;
    display: block;
    font-size: 18px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px;
    display:flex;
    justify-content:center;
    align-items:center;


}

/*ProgressBar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1;
}

/*Color number of the step and the connector before it*/
#progressbar li.active:before, #progressbar li.active:after {
    background: skyblue;
}

/*Imaged Radio Buttons*/
.radio-group {
    position: relative;
    margin-bottom: 25px;
}

.radio {
    display:inline-block;
    width: 204;
    height: 104;
    border-radius: 0;
    background: lightblue;
    box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
    box-sizing: border-box;
    cursor:pointer;
    margin: 8px 2px;
}

.radio:hover {
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
}

.radio.selected {
    box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
}

/*Fit image in bootstrap div*/
.fit-image{
    width: 100%;
    object-fit: cover;
}

.bb{
    padding:0;
    background-color: #f5f8fa;
}
.text-dark{
    display:none;
}
.aa {
     background-color: #f5f8fa;
    border-color: #f5f8fa;
    color: #5e6278;
    transition: color .2s ease,background-color .2s ease;
    font-size: 1rem !important;
    font-weight: 400 !important;
    line-height: 1.5;
    background-clip: padding-box;
    border: 1px solid #e4e6ef;
    appearance: none;
    border-radius: 0.475rem;
    padding: 0.2rem 0.5rem !important;
}



/* button toggle  */

.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 23px;
}


.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}




.upper{
    /* border:2px solid blue; */
    background-color: #cfe2f3 ;
    padding:0.4rem 1.4rem;
    border-radius: 0.475rem;
    /* width:95%; */
}

.fee{
margin-top:15rem;
}

.image{

     padding: 0.5rem 0.5rem !important;
}
.images{

padding: 0.8rem 1rem !important;
}

/* .contents{

    min-height:140vh !important;
} */
.problem{
    background-color:red;
}
.adds{
    padding: 0.4rem 1rem !important;
}








@media screen and (max-width:575px) {
    .fee{
margin-top:1rem;
}
}

@media screen and (max-width:767px) {
    .right{
        margin-top:4rem;
    }
    .wd{
        margin-top:4rem;
    }
}

.damage-button{
    width: 140px !important;
}






/* Styles for the modal */
/* Styles for the modal */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
}

.modal-content {
    background-color: white;
    width: 50%;
    margin: 10% auto;
    padding: 20px;
    border-radius: 5px;
}

.close-btn {
    font-size: 25px;
    font-weight: bold;
    cursor: pointer;
}

#check{
    width:15px;
height:15px;
}

.sides{
    font-size:20px;
    margin-left:20px;
}
#modal-button{
    margin:auto;
    /* width:80px !important; */
    padding:10px 20px;
    border:none;
    color:white;
    border-radius:5px;
    background:skyblue;
    font-weight:bold;
}
   </style>


</head>

<body>
    <!-- MultiStep Form -->

    <div class=" container-fluid bb" >

        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-11 col-md-11 col-lg-11 mt-4 text-center">
                <div class="card  mb-3">
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form novalidate id="msform" method="POST" action="{{ route('accident-accessing-service.store') }}" enctype="multipart/form-data">
                                @csrf
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="account"><strong> Invoice Details </strong></li>
                                    <li id="personal"><strong> Detailed Assessment </strong></li>
                                    <li id="payment"><strong>Assessment Summary</strong></li>
                                    <li id="confirm"><strong> Vehicle Condition </strong></li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card ">
                                        <!-- <div class="upper">
                                        <div class="row">
                                            <div class="col-6 d-flex">
                                                <div class="row">
                                                    <div class="col-sm-5 mt-2"> <label class="fw-bold fs-6 mb-2" style="color: black ;" > Tax Invoice </label></div>
                                                    <div class="col-sm-7"> <input type="number" required  class="form-control form-control-solid mb-3 mb-lg-0" name="invoice_no" placeholder=" Enter Invoice No"/> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 d-flex">
                                                <div class="row">
                                                    <div class="col-sm-4 mt-2"> <label class="fw-bold fs-6 mb-2" style="color: black ;" > Date </label></div>
                                                    <div class="col-sm-8"> <input type="date" required  class="form-control form-control-solid mb-3 mb-lg-0" name="invoice_date" placeholder=" Enter Invoice No"/> </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div> -->

                                      <div class="row mt-5">
                                        <div class="col-md-6">
                                        <label class="fw-bold fs-6 mb-2" style="color: black ;" >To </label>
                                        <input type="text" required  class="form-control form-control-solid mb-3 mb-lg-0" name="to" placeholder=" Owner Name"/>
                                        </div>
                                        <div class="col-md-6">
                                        <label class="fw-bold fs-6 mb-2" style="color: black ;" >Tax Invoice </label>
                                        <input type="number" required  class="form-control form-control-solid mb-3 mb-lg-0"   name="tax_invoice" placeholder=" Enter Invoice Number"/>
                                        </div>
                                      </div>

                                    <div class="row mt-4">
                                    <div class="col-md-6">
                                         <label class="fw-bold fs-6 mb-2" style="color: black ;"> Date </label>
                                         <input type="date" required  class="form-control form-control-solid mb-3 mb-lg-0" name="invoice_date"/>
                                         {{-- <input type="text" required class="form-control form-control-solid mb-3 mb-lg-0" id="display_date" name="invoice_date" placeholder="dd-mm-yyyy"/> --}}
                                    </div>

                                        <div class="col-md-6">
                                        <label style="color: black ;" class="fw-bold fs-6 mb-2">Vechile </label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="vehicle" placeholder=" Enter Vechile Name"/>
                                        </div>
                                    </div>

                                      <div class="row mt-4">
                                        <div class="col-md-6">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2">Rego</label>
                                        <input type="text" id="myText" required  class="form-control form-control-solid mb-3 mb-lg-0" name="rego" placeholder="Enter Rego"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label style="color: black ; " class="fw-bold fs-6 mb-2">Assessment Fee</label>
                                            <input  type="number" id="Text3" required class=" form-control form-control-solid mb-3 mb-lg-0" name="assessment_fee"   placeholder="$00.00" name="TextBox_3" oninput="syncInputs()" >
                                        </div>
                                      </div>


                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <label style="color: black ;" class="fw-bold fs-6 mb-2">Claim No</label>
                                            <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="claim_no" placeholder=" Enter Claim No"/>
                                        </div>
                                      <div class="col-md-6">
                                       <label style="color: black ;" class="fw-bold fs-6 mb-2">Policy No</label>
                                       <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="policy_no" placeholder=" Enter Policy No"/>
                                      </div>
                                   </div>

                                      <!-- <div class="row">
                                        <div class="col-sm-7">
                                        <label style="color: black ; font-weight: 600;" class="mt-4"> Invoice Description </label>
                                        <p>
                                            Assessed the damage to vehicle Rego - make, model series body <br>
                                            Adjusted to repair quotation <br>
                                            Supplied images of the vehicle <br>
                                            Traveled to the vehicle location <br>
                                            Establised a fair and reasonable repair cost <br>
                                            Administration charges
                                         </p>
                                        </div>
                                      </div> -->

                                         <div class="row">
                                            <!-- <div class="col-sm-7">
                                            <label style="color: black ; font-weight: 600;"> Bank Details </label>
                                         <p>
                                            Commonwealth Bank <br>
                                            GBS CORPORATION Sidiros family trust<br>
                                            BSB 063-157 <br>
                                            A/C 1033-1695 <br>
                                            Direct Debit Please include your name and AAS Reference number <br>
                                             Cheque Payable to Gbs Corporation and reference number on the back of cheque
                                         </p>
                                            </div> -->
                                    <div class="row mt-4">
                                        <!-- <div class="col-md-6">
                                            <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Assessment Fee</label>
                                            <input  type="number" id="Text3" required class=" form-control form-control-solid mb-3 mb-lg-0" name="assessment_fee"   placeholder="$00.00" name="TextBox_3" oninput="syncInputs()" >
                                        </div> -->
                                    </div>


                                    <label style="color: black ; font-weight: 600;"> Invoice Total </label>
                                            <div class="col-sm-3 " >


                                            <!-- <div class="row mb-2">
                                                <div class="col-7 font-weight-bold mt-2" style="color:black;" >Assessment Fee</div>
                                                <div class="col-3"><input  class="adds" name="assessment_fee"  type="number" id="Text3" placeholder="$00.00" name="TextBox_3" oninput="syncInputs()" ></div>
                                                </div> -->
                                            <!-- <label style="color: black ; font-weight: 600;"> Invoice Total </label> -->


                                                    <div class="row ">
                                                        <div class="col-6 mt-2"> Sub Total</div>
                                                        <div class="col-3"> <input readonly class="adds" name="sub_total" type="number" id="Text1" placeholder="$00.00" name="TextBox1"  ></div>
                                                    </div>
                                                    <div class="row mt-2 ">
                                                        <div class="col-6 mt-2">GST</div>
                                                        <div class="col-3"><input readonly class="adds" name="gst" type="number" id="Text2" placeholder="$00.00" name="TextBox2" ></div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-6 mt-2 font-weight-bold"> Grand Total </div>
                                                        <div class="col-3"><input readonly class="adds" name="grand_total" type="number" id="txtresult" placeholder="$00.00" name="TextBox3"></div>
                                                    </div>
                                            </div>

                                         </div>




                                    </div>
                                    {{-- <input type="button" name="next" class="next action-button" value="Next Step" onclick="myFunctiontwo()"/> --}}
                                    <input type="button" name="next" class="next action-button next-step" value="Next Step"/>
                                </fieldset>




<!-- detail assessment  -->

                                <fieldset>
                                    <div class="form-card">
                                        <h4 class="fw-bolder " style="color:black;">  Detailed Assessment Report</h4>
                                <div class="row mt-4">

                                    <div class="col-md-6">
                                        <label style="color: black ;" class="fw-bold fs-6 mb-2"  >Owner </label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="owner_name" placeholder=" Enter Owner Name"/>
                                    </div>

                                    <div class="col-md-6">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Assessment Type</label>
                                            <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="assessment_type" placeholder=" Enter Assessment Type"/>
                                    </div>

                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Estimate No</label>
                                            <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="estimate_no" placeholder=" Enter Estimate No"/>
                                    </div>
                               </div>
                               </div>

                                      <h4 class="fw-bolder mt-5 d-flex" style="color:black;"> <p> Vehicle Details - Rego:VIC | UVU </p >  <p class="ms-2" id="demo"></p>   </h4>
                                      <div class="row mt-4">
                                        <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Make</label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="make" placeholder="Enter Make"/>
                                          </div>
                                          <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Engine Type</label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="engine_type" placeholder="Enter Engine Type"/>
                                          </div>

                                          <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Odometer</label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="odometer" placeholder="Enter Odometer "/>
                                          </div>
                                      </div>


                                      <div class="row mt-4">
                                        <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Model</label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="model" placeholder="Enter Model"/>
                                          </div>
                                          <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Engine Size</label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="engine_size" placeholder="Enter Engine Size"/>
                                          </div>

                                          <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Paint Group</label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="paint_group" placeholder="Enter Paint Group "/>
                                          </div>
                                      </div>
                                      <div class="row mt-4">
                                        <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Series</label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="series" placeholder="Enter Series"/>
                                          </div>
                                          <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Engine No</label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="engine_no" placeholder="Enter Engine Number"/>
                                          </div>

                                          <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Paint Code</label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="paint_code" placeholder="Enter Paint Code "/>
                                          </div>
                                      </div>


                                      <div class="row mt-4">
                                        <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Month / Year</label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="month_year" placeholder="Enter Month / Year"/>
                                          </div>
                                          <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Transmission</label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="transmission" placeholder="Enter Transmission Type"/>
                                          </div>

                                          <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Colour</label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="colour" placeholder="Enter  Colour "/>
                                          </div>
                                      </div>


                                      <div class="row mt-4">
                                        <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Body Type</label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="body_type" placeholder="Enter  Body Type"/>
                                          </div>
                                          <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Axles</label>
                                        <input type="number"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="axles" placeholder="Enter Axles Number"/>
                                          </div>

                                          <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >VIN</label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="vin" placeholder="Enter  VIN "/>
                                          </div>
                                      </div>
                                        <div class="row">
                                        <h4 class="fw-bolder mt-5 d-flex" style="color:black;">
                                            <p> Add Repairer </p>
                                            <p class="ms-2" id="demos"></p>
                                        </h4>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div id="plus_div_repairer">
                                                    <div class="row">
                                                        <div class="col-sm-4  nopadding">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <select class="form-control" id="repairers" name="repairers[]">
                                                                        @foreach ($data['repairers'] as $repairer)
                                                                            <option value="{{ $repairer->id }}">{{ $repairer->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="input-group-btn">
                                                                        <button class="btn btn-success" type="button" onclick="repairer_fields();">
                                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <div id="repairer_fields"></div>
                                            </div>
                                        </div>
                                    </div>


                                     <div class="row d-block">
                                        <h4 class="fw-bolder mt-2 d-flex" style="color:black;">
                                            <p> Add Assessor </p>
                                            <p class="ms-2" id="demo"></p>
                                        </h4>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div id="plus_div">
                                                    <div class="row">
                                                        <div class="col-sm-4  nopadding">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <select class="form-control" id="assessors" name="assessors[]">
                                                                        @foreach ($data['assessors'] as $assessor)
                                                                            <option value="{{ $assessor->id }}">{{ $assessor->assessor }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="input-group-btn">
                                                                        <button class="btn btn-success" type="button" onclick="assessor_fields();">
                                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <div id="assessor_fields"></div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>



<!-- detail assessment report/ summary  -->

                                <fieldset>
                                    <div class="form-card">
                                    <h4 class="fw-bolder " style="color:black;">  Detailed Assessment Report</h4>

                                       <div class="row d-flex justify-content-between">

                                        <div class="col-md-6 left text-left " style="font-size:11px;"  id="myDIV">


                                           <div class="row">
                                            <div class="col-3 font-weight-bold " style="color:black;">Repair</div>
                                            <div class="col-3 font-weight-bold" style="color:black;">Quoted</div>
                                            <div class="col-3 font-weight-bold" style="color:black;">Assessed</div>
                                            <div class="col-3 font-weight-bold" style="color:black;">Variance</div>
                                           </div>

                                            <div class="row mt-4">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;"  >R & R</div>
                                             <div class="col-3 "> <input type="number" name="R&R_quoted" id="one" placeholder="$00.00" required  class=" aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one', 'two', 'three')()" ; /> </div>
                                            <div class="col-3"> <input type="number"  name="R&R_assessed" id="two" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  oninput="sub_number.bind(null, 'one', 'two', 'three')()" /> </div>
                                            <div class="col-3"> <input type="number" readonly name="R&R_variance" id="three" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>


                                            <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;" >Repair</div>
                                             <div class="col-3"> <input type="number" id="one1" name="Repair_quoted" placeholder="$00.00" required  class="aa form-control form-control-solid mb-3 mb-lg-0"  oninput="sub_number.bind(null, 'one1', 'two1', 'three1')()" ; /> </div>
                                            <div class="col-3"> <input type="number" id="two1" name="Repair_assessed" placeholder="$00.00" required  class="aa form-control form-control-solid mb-3 mb-lg-0"  oninput="sub_number.bind(null, 'one1', 'two1', 'three1')()" ;/> </div>
                                            <div class="col-3"> <input type="number" readonly id="three1" name="Repair_variance" placeholder="$00.00" required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>

                                                <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Paint</div>
                                             <div class="col-3"> <input type="number" id="one2" name="Paint_quoted" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  oninput="sub_number.bind(null, 'one2', 'two2', 'three2')()" ; /> </div>
                                            <div class="col-3"> <input type="number" id="two2" name="Paint_assessed" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"    oninput="sub_number.bind(null, 'one2', 'two2', 'three2')()" ;/> </div>
                                            <div class="col-3"> <input type="number" readonly name="Paint_variance" id="three2" placeholder="$00.00"   required  class="aa form-control form-control-solid mb-3 mb-lg-0"   /> </div>
                                           </div>

                                                <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Mechanical</div>
                                             <div class="col-3"> <input type="number" id="one3" name="Mechanical_quoted" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one3', 'two3', 'three3')()" ; /> </div>
                                            <div class="col-3"> <input type="number" id="two3" name="Mechanical_assessed" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one3', 'two3', 'three3')()" ; /> </div>
                                            <div class="col-3"> <input type="number" readonly name="Mechanical_variance" id="three3" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>

                                              <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Misc Labour</div>
                                             <div class="col-3"> <input type="number" id="one4" name="Misc_quoted" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one4', 'two4', 'three4')()" ; /> </div>
                                            <div class="col-3"> <input type="number" id="two4" name="Misc_assessed" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one4', 'two4', 'three4')()" ;  /> </div>
                                            <div class="col-3"> <input type="number" readonly name="Misc_variance" id="three4" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Total Labour</div>
                                             <div class="col-3"> <input type="number" id="one5" name="Labour_quoted" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one5', 'two5', 'three5')()" ; /> </div>
                                            <div class="col-3"> <input type="number" id="two5" name="Labour_assessed" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one5', 'two5', 'three5')()" ;  /> </div>
                                            <div class="col-3"> <input type="number" readonly name="Labour_variance" id="three5" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>


                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Parts</div>
                                             <div class="col-3"> <input type="number" id="one6" name="Parts_quoted" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one6', 'two6', 'three6')()" ; /> </div>
                                            <div class="col-3"> <input type="number" id="two6" name="Parts_assessed" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one6', 'two6', 'three6')()" ;  /> </div>
                                            <div class="col-3"> <input type="number" readonly name="Parts_variance" id="three6" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">sublet</div>
                                             <div class="col-3"> <input type="number" id="one7" name="Sublet_quoted" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one7', 'two7', 'three7')()" ; /> </div>
                                            <div class="col-3"> <input type="number" id="two7" name="Sublet_assessed" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one7', 'two7', 'three7')()" ;  /> </div>
                                            <div class="col-3"> <input type="number" readonly name="Sublet_variance" id="three7" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Supplementary</div>
                                             <div class="col-3"> <input type="number" id="one8" name="Supplementary_quoted" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one8', 'two8', 'three8')()" ; /> </div>
                                            <div class="col-3"> <input type="number" id="two8" name="Supplementary_assessed" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one8', 'two8', 'three8')()" ;  /> </div>
                                            <div class="col-3"> <input type="number" readonly name="Supplementary_variance" id="three8" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Sub Total</div>
                                             <div class="col-3"> <input type="number" id="one9" name="SubTotal_quoted" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" /> </div>
                                            <div class="col-3"> <input type="number" id="two9" name="SubTotal_assessed" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"    /> </div>
                                            <div class="col-3"> <input type="number" readonly name="SubTotal_variance" id="three9" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">GST</div>
                                             <div class="col-3"> <input type="number" id="one10" name="gst_quoted" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one10', 'two10', 'three10')()" ; /> </div>
                                            <div class="col-3"> <input type="number" id="two10" name="gst_assessed" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  oninput="sub_number.bind(null, 'one10', 'two10', 'three10')()" ; /> </div>
                                            <div class="col-3"> <input type="number" readonly name="gst_variance" id="three10" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Total Estimate</div>
                                             <div class="col-3"> <input type="number" name="TotalEstimate_quoted" id="one11" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one11', 'two11', 'three11')()" ; /> </div>
                                            <div class="col-3"> <input type="number" name="TotalEstimate_assessed" id="two11" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one11', 'two11', 'three11')()" ; /> </div>
                                            <div class="col-3"> <input type="number" name="TotalEstimate_variance" readonly id="three11" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>
<br> <br>
                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Reported Items</div>
                                             <div class="col-3"> <input type="number" name="ReportedItems_quoted" id="one12" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one12', 'two12', 'three12')()" ; /> </div>
                                            <div class="col-3"> <input type="number" name="ReportedItems_assessed" id="two12" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one12', 'two12', 'three12')()" ;  /> </div>
                                            <div class="col-3"> <input type="number" name="ReportedItems_variance" readonly id="three12" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>
                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Towing</div>
                                             <div class="col-3"> <input type="number" name="Towing_quoted" id="one13" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one13', 'two13', 'three13')()" ; /> </div>
                                            <div class="col-3"> <input type="number" name="Towing_assessed" id="two13" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one13', 'two13', 'three13')()" ;  /> </div>
                                            <div class="col-3"> <input type="number" name="Towing_variance" readonly id="three13" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">External Sublet</div>
                                             <div class="col-3"> <input type="number" name="ExternalSublet_quoted" id="one14" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one14', 'two14', 'three14')()" ; /> </div>
                                            <div class="col-3"> <input type="number" name="ExternalSublet_assessed" id="two14" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one14', 'two14', 'three14')()" ;  /> </div>
                                            <div class="col-3"> <input type="number" name="ExternalSublet_variance" readonly id="three14" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Additional</div>
                                             <div class="col-3"> <input type="number" name="Additional_quoted" id="one15" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one15', 'two15', 'three15')()" ; /> </div>
                                            <div class="col-3"> <input type="number" name="Additional_assessed" id="two15" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one15', 'two15', 'three15')()" ;  /> </div>
                                            <div class="col-3"> <input type="number" name="Additional_variance" readonly id="three15" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Discounts</div>
                                             <div class="col-3"> <input type="number" name="Discounts_quoted" id="one16" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one16', 'two16', 'three16')()" ; /> </div>
                                            <div class="col-3"> <input type="number" name="Discounts_assessed" id="two16" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one16', 'two16', 'three16')()" ;  /> </div>
                                            <div class="col-3"> <input type="number" name="Discounts_variance" readonly id="three16" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Less ITC</div>
                                             <div class="col-3"> <input type="number" name="LessITC_quoted"  id="one17" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one17', 'two17', 'three17')()" ; /> </div>
                                            <div class="col-3"> <input type="number" name="LessITC_assessed"  id="two17" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one17', 'two17', 'three17')()" ;  /> </div>
                                            <div class="col-3"> <input type="number" name="LessITC_variance"  readonly id="three17" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Less Contribution</div>
                                             <div class="col-3"> <input type="number" name="LessContribution_quoted" id="one18" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one18', 'two18', 'three18')()" ; /> </div>
                                            <div class="col-3"> <input type="number" name="LessContribution_assessed" id="two18" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one18', 'two18', 'three18')()" ;  /> </div>
                                            <div class="col-3"> <input type="number" name="LessContribution_variance" readonly id="three18" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">PAV</div>
                                             <div class="col-3"> <input type="number" name="PAV_quoted" id="one19" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one19', 'two19', 'three19')()" ; /> </div>
                                            <div class="col-3"> <input type="number" name="PAV_assessed" id="two19" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one19', 'two19', 'three19')()" ;  /> </div>
                                            <div class="col-3"> <input type="number" name="PAV_variance" readonly id="three19" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                           </div>

                                          <br> <br>

                                           <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Book Values</div>
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Live Market Values</div>
                                           </div>

                                             <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Trade Low</div>
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;">Market One</div>
                                           </div>

                                              <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Trade </div>
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;">Market Two</div>
                                           </div>

                                              <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Retail</div>
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;">Market Three</div>
                                           </div>

                                              <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Value Avg KM's </div>
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;">Market Avg</div>
                                           </div>

                                        </div>






                                        <div class="col-md-5  right">
                                                    <div class="row font-weight-bold d-flex justify-content-around">
                                                    <h4 class="text-center d-flex" style="color:green;"> Total Loss - No
                                                        <div class="tog mx-2">
                                                        <label class="switch" >
                                                        <input type="checkbox" onclick="myFunction()" style=" border: none; background:none; ">
                                                        <span class="slider round"></span>
                                                        </label>
                                                        </div>
                                                                                    Yes</h4>
                                                    </div>

                                                    <div class="row mt-4">
                                                        <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Assessment Date</div>
                                                         <div class="col-6"> <input type="date" name="assessment_date" required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>
                                                           </div>
                                                          <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Cover Type</div>
                                            <!-- <div class="col-6  mt-2 " style="color:black;">Market Value</div>  -->
                                            <div class="col-6"> <input type="text"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="cover_type" /> </div>
                                           </div>
                                                    <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Sum Insured </div>
                                            <div class="col-6"> <input type="number"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="sum_insured" /> </div>
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Market Value </div>
                                            <div class="col-6"> <input type="number"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="market_value" /> </div>
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Salvage Value </div>
                                            <div class="col-6"> <input type="number"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="salvage_value" /> </div>
                                           </div>

                                             <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Settlement</div>
                                            <div class="col-6"> <input type="number" id="settle1" name="settlement" placeholder="$00.00" required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput=" syncInputs2()" /> </div>
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Less Excess </div>
                                            <div class="col-6"> <input type="number"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="less_excess" /> </div>
                                           </div>


                                               <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Settlement Sub Total </div>
                                            <div class="col-6"> <input type="number" id="settle2" placeholder="$00.00" required name="settlement_sub_total" class="aa form-control form-control-solid mb-3 mb-lg-0" /> </div>
                                           </div>

                                                <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Settlement GST </div>
                                            <div class="col-6"> <input type="number" id="settle3" placeholder="$00.00" required name="settlement_gst" class="aa form-control form-control-solid mb-3 mb-lg-0"/> </div>
                                           </div>

                                                <div class="row mt-2 rounded ">
                                            <div class="col-6 font-weight-bolder mt-1 py-2"  style="color:green;" > Settlement Total </div>
                                            <div class="col-6 mt-1 "> <input type="number" id="settle4" placeholder="$00.00" required name="settlement_total"  class="aa form-control form-control-solid mb-3 mb-lg-0 "  /> </div>
                                           </div>

                                           <br>

                                           <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Cash Settled </div>
                                            <div class="col-6"> <input type="number"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="cash_settled" /> </div>
                                           </div>
                                           <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Certificate Compliance </div>
                                            <div class="col-6"> <input type="number"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="certificate_compliance" /> </div>
                                           </div>
                                           <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Salvage Condition </div>
                                            <div class="col-6"> <input type="number"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="salvage_condition" /> </div>
                                           </div>


                                           <div class="row mt-5">
                                            <div class="col-3 font-weight-bold " style="color:black;">Supps</div>
                                            <div class="col-3 font-weight-bold" style="color:black;">Quoted</div>
                                            <div class="col-3 font-weight-bold" style="color:black;">Assessed</div>
                                            <div class="col-3 font-weight-bold" style="color:black;">Variance</div>
                                           </div>


                                                <div class="row mt-2">
                                            <div class="col-3  mt-2 " style="color:black;"> Supp 1</div>
                                            <div class="col-3"> <input type="number"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="Sup1_quoted"/> </div>
                                            <div class="col-3"> <input type="number"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="Sup1_assessed"/> </div>
                                            <div class="col-3"> <input type="number"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="Sup1_variance"/> </div>
                                           </div>
                                                <div class="row mt-2">
                                            <div class="col-3  mt-2 " style="color:black;">Supp 2</div>
                                            <div class="col-3"> <input type="number"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="Sup2_quoted"/> </div>
                                            <div class="col-3"> <input type="number"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="Sup2_assessed"/> </div>
                                            <div class="col-3"> <input type="number"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="Sup2_variance"/> </div>
                                           </div>
                                                <div class="row mt-2">
                                            <div class="col-3  mt-2 " style="color:black;">Supp 3</div>
                                            <div class="col-3"> <input type="number"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="Sup3_quoted"/> </div>
                                            <div class="col-3"> <input type="number"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="Sup3_assessed"/> </div>
                                            <div class="col-3"> <input type="number"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="Sup3_variance"/> </div>
                                           </div>
                                                <div class="row mt-2">
                                            <div class="col-3  mt-2 " style="color:black;"> Total</div>
                                            <div class="col-9"> <input type="number"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="total_supps"/> </div>

                                           </div>


                                        </div>
                                       </div>
                                       <div class="row mt-5">
                                       <h4 class="fw-bolder " style="color:black;">  Comments / Notes</h4>
                                       <textarea id="text_area" name="comments" rows="4" cols="50"></textarea>
                                       </div>

                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                    <input type="button" name="make_payment" class="next action-button"
                                        value="Next" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">

                                    <div class="row d-flex justify-content-between mt-5" style="font-size:11px;">
                                                <div class="col-md-5">
                                                <h4 class="fw-bolder " style="color:black;">  Vehicle Condition </h4>


                                        {{-- <div class="row mt-4">
                                             <div class="col-4 font-weight-bold mt-2 " style="color:black;"> Overall</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="overall"/> </div>
                                        </div> --}}
                                        <div class="row mt-4">
                                            <div class="col-4 font-weight-bold mt-2" style="color: black;">Overall</div>
                                            <div class="col-8">
                                                <select required class="form-control form-control-solid mb-3 mb-lg-0" name="overall">
                                                    <option value="">Select an option</option>
                                                    <option value="Fair">Fair</option>
                                                    <option value="Average">Average</option>
                                                    <option value="Above Average">Above Average</option>
                                                    <option value="As New">As New</option>
                                                </select>
                                            </div>
                                        </div>


                                        {{-- <div class="row mt-2">
                                             <div class="col-4 font-weight-bold mt-2 " style="color:black;"> Interior</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="interior"/> </div>
                                        </div> --}}
                                        <div class="row mt-4">
                                            <div class="col-4 font-weight-bold mt-2" style="color: black;">Interior</div>
                                            <div class="col-8">
                                                <select required class="form-control form-control-solid mb-3 mb-lg-0" name="interior">
                                                    <option value="">Select an option</option>
                                                    <option value="Fair">Fair</option>
                                                    <option value="Average">Average</option>
                                                    <option value="Above Average">Above Average</option>
                                                    <option value="As New">As New</option>
                                                </select>
                                            </div>
                                        </div>


                                        {{-- <div class="row mt-2">
                                             <div class="col-4 font-weight-bold mt-2 " style="color:black;"> Exterior</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="exterior"/> </div>
                                        </div> --}}
                                        <div class="row mt-4">
                                            <div class="col-4 font-weight-bold mt-2" style="color: black;">Exterior</div>
                                            <div class="col-8">
                                                <select required class="form-control form-control-solid mb-3 mb-lg-0" name="exterior">
                                                    <option value="">Select an option</option>
                                                    <option value="Fair">Fair</option>
                                                    <option value="Average">Average</option>
                                                    <option value="Above Average">Above Average</option>
                                                    <option value="As New">As New</option>
                                                </select>
                                            </div>
                                        </div>

                                        {{-- <div class="row mt-2">
                                             <div class="col-4 font-weight-bold mt-2 " style="color:black;"> Steering</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="steering"/> </div>
                                        </div> --}}
                                        <div class="row mt-4">
                                            <div class="col-4 font-weight-bold mt-2" style="color: black;">Steering</div>
                                            <div class="col-8">
                                                <select required class="form-control form-control-solid mb-3 mb-lg-0" name="steering">
                                                    <option value="">Select an option</option>
                                                    <option value="Fair">Fair</option>
                                                    <option value="Average">Average</option>
                                                    <option value="Above Average">Above Average</option>
                                                    <option value="As New">As New</option>
                                                </select>
                                            </div>
                                        </div>

                                        {{-- <div class="row mt-2">
                                             <div class="col-4 font-weight-bold mt-2 " style="color:black;"> Brakes</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="brakes"/> </div>
                                        </div> --}}
                                        <div class="row mt-4">
                                            <div class="col-4 font-weight-bold mt-2" style="color: black;">Brakes</div>
                                            <div class="col-8">
                                                <select required class="form-control form-control-solid mb-3 mb-lg-0" name="brakes">
                                                    <option value="">Select an option</option>
                                                    <option value="Fair">Fair</option>
                                                    <option value="Average">Average</option>
                                                    <option value="Above Average">Above Average</option>
                                                    <option value="As New">As New</option>
                                                </select>
                                            </div>
                                        </div>



                                        {{-- <div class="row mt-2">
                                             <div class="col-4 font-weight-bold mt-2 " style="color:black;"> Tyre Depth Unit Front</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="tyre_depth_unit_front"/> </div>
                                        </div> --}}
                                        <div class="row mt-4">
                                            <div class="col-4 font-weight-bold mt-2" style="color: black;">Tyre Depth Unit Front</div>
                                            <div class="col-8">
                                                <select required class="form-control form-control-solid mb-3 mb-lg-0" name="tyre_depth_unit_front">
                                                    <option value="">Select an option</option>
                                                    <option value="0">0</option>
                                                    <option value="50">50</option>
                                                    <option value="60">60</option>
                                                    <option value="70">70</option>
                                                    <option value="80">80</option>
                                                    <option value="90">90</option>
                                                    <option value="100">100</option>
                                                </select>
                                            </div>
                                        </div>

                                        {{-- <div class="row mt-2">
                                             <div class="col-4 font-weight-bold mt-2 " style="color:black;"> Tyre Depth Unit Rear</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="tyre_depth_unit_rear"/> </div>
                                        </div> --}}
                                        <div class="row mt-4">
                                            <div class="col-4 font-weight-bold mt-2" style="color: black;">Tyre Depth Unit Rear</div>
                                            <div class="col-8">
                                                <select required class="form-control form-control-solid mb-3 mb-lg-0" name="tyre_depth_unit_rear">
                                                    <option value="">Select an option</option>
                                                    <option value="0">0</option>
                                                    <option value="50">50</option>
                                                    <option value="60">60</option>
                                                    <option value="70">70</option>
                                                    <option value="80">80</option>
                                                    <option value="90">90</option>
                                                    <option value="100">100</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>


                                   <div class="col-md-5 wd">
                                        <h4 class="fw-bolder " style="color:black;">  Suspension  Condition </h4>
                                             <div class="row mt-4 ">
                                             <div class="col-4 font-weight-bold mt-2 " style="color:black;"> RH Front</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="rh_front"/> </div>
                                        </div>

                                        <div class="row mt-2">
                                             <div class="col-4 font-weight-bold mt-2 " style="color:black;"> LH Front</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="lh_front"/> </div>
                                        </div>

                                        <div class="row mt-2">
                                             <div class="col-4 font-weight-bold mt-2 " style="color:black;"> RH Rear</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="rh_rear"/> </div>
                                        </div>
                                        <div class="row mt-2">
                                             <div class="col-4 font-weight-bold mt-2 " style="color:black;"> LH Rear</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="lh_rear"/> </div>
                                        </div>
                                   </div>
                              </div>

                            <div class="row mt-5 ">
                                       {{-- <h4 class="fw-bolder mt-4" style="color:black;">  Damage Details </h4> --}}
                                       {{-- <div class="col-md-6"> --}}


                                       {{-- <p>Click on the "Choose File" button to upload  Images:</p> --}}

                                            {{-- <form action="/action_page.php"> --}}

                                            {{-- <input class="image" type="file" name="image" multiple accept="image/*"> --}}
                                            {{-- <input class="images" type="submit"> --}}
                                            {{-- </form> --}}

                                        {{-- <div class="damage-section">
                                            <input type="button" id="openModalBtn" class="action-button damage-button" data-toggle="modal" data-target="#exampleModal" value="Damage Button">

                                        </div> --}}

                                       {{-- </div> --}}
                                       <div class="col-md-6 wd mt-5">
                                                <div class="row">

                                                    {{-- <div class="col-4  font-weight-bold mt-2 " style="color:black;"> Damage Section</div>
                                                    <div class="col-4  font-weight-bold mt-2 " style="color:black;"> Damage Level</div> --}}
                                                    <div class="col-4  font-weight-bold mt-2 " style="color:black;">Comment</div>
                                                </div>


                                                <div class="row mt-4 ">
                                                    {{-- <div class="col-4  mt-2 " style="color:black;">Comment</div> --}}
                                                    {{-- <div class="col-4"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="FrontBumperBar_demage_level"/> </div> --}}

                                                    {{-- <div class="col-4"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="comment_damange_details"/> </div> --}}
                                                    <div class="col-10">
                                                        <textarea required class="form-control form-control-solid mb-3 mb-lg-0" name="comment_damange_details"></textarea>
                                                    </div>
                                                </div>



                                            {{-- <div class="row mt-4 ">
                                                <div class="col-4  mt-2 " style="color:black;">Front Bumper Bar</div>
                                                <div class="col-4"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="FrontBumperBar_demage_level"/> </div>
                                                <div class="col-4"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="FrontBumperBar_comments"/> </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-4  mt-2 " style="color:black;">Left Front Guard</div>
                                                <div class="col-4"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="LeftFrontGuard_demage_level"/> </div>
                                                <div class="col-4"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="LeftFrontGuard_comments"/> </div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-4  mt-2 " style="color:black;">Left Front Door</div>
                                                <div class="col-4"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="LeftFrontDoor_demage_level"/> </div>
                                                <div class="col-4"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="LeftFrontDoor_comments"/> </div>
                                            </div> --}}

                                            <div class="row">

                                                {{-- <div class="col-4  font-weight-bold mt-2 " style="color:black;"> Damage Section</div>
                                                <div class="col-4  font-weight-bold mt-2 " style="color:black;"> Damage Level</div> --}}
                                                <div class="col-4  font-weight-bold mt-2 " style="color:black;">Repair Duration Days</div>
                                            </div>

                                            {{-- <div class="row mt-4">
                                              <div class="col-5 font-weight-bold mt-2 " style="color:black;"> Repair Duration Days</div>
                                              <div class="col-7"> <input type="number"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="repair_duration_days"/> </div>
                                            </div> --}}

                                            <div class="row mt-4">
                                                <div class="col-5">
                                                    {{-- <textarea required class="form-control form-control-solid mb-3 mb-lg-0" name="comment_damange_details"></textarea> --}}
                                                    <div> <input type="number"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="repair_duration_days"/> </div>
                                                </div>
                                            </div>
                                    </div>
                                       </div>



                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                    <input type="submit" class="action-button"
                                        value="Confirm" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="modal" class="modal">
        <div class="modal-content">
            <div class="d-flex justify-content-end">
                 <span class="close-btn" id="closeModalBtn">&times;</span>
            </div>

            <div class="row justify-content-between mt-5">
                <div class="col-5">
                    <input type="checkbox" > <span class="sides font-weight-bold">Front</span>  <br>
                    <input type="text" required="" class=" form-control form-control-solid  mb-lg-0" name="front">
                    <img class="mt-3" src="{{ asset('images/front.png') }}" alt="Door Image" style="width:200px;"> <br>
                </div>
                <div class="col-5">
                    <input type="checkbox" > <span class="sides font-weight-bold">Back</span> <br>
                    <input type="text" required="" class=" form-control form-control-solid  mb-lg-0" name="back">
                    <img class="mt-3" src="{{ asset('images/back.png') }}" alt="Door Image" style="width:200px;"> <br>
                </div>
            </div>

            <div class="row justify-content-between mt-5 mb-5">
                <div class="col-5">
                    <input type="checkbox" > <span class="sides font-weight-bold">Left</span> <br>
                    <input type="text" required="" class=" form-control form-control-solid  mb-lg-0" name="left">
                    <img class="mt-3" src="{{ asset('images/left.png') }}" alt="Door Image" style="width:200px;">
                </div>
                <div class="col-5">
                    <input type="checkbox"> <span class="sides font-weight-bold">Right</span> <br>
                    <input type="text" required="" class=" form-control form-control-solid mt-2" name="right">
                    <img class="mt-3" src="{{ asset('images/right.png') }}" alt="Door Image" style="width:200px; ">
                </div>
            </div>
            <button id="modal-button" class="active-button" onclick="imageSave()">Save</button>
        </div>
    </div>


</script>

    <!-- <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->

    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height());
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>


<script>

//show and hide div
    function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

$(document).on('click', '.next-step', function () {
    var x = document.getElementById("myText").value;
    document.getElementById("demo").innerHTML = x;
});

//get text from input field
function myFunctiontwo() {
        var x = document.getElementById("myText").value;
        document.getElementById("demo").innerHTML = x;
    }


    // 2 digit decimal point
    // function formatDecimal(value) {
    //     return value.toFixed(2).replace('.', ',');
    // }

    // function syncInputs() {
    //     var subTotalInput = document.getElementById("Text1");
    //     var gstInput = document.getElementById("Text2");
    //     var grandTotalInput = document.getElementById("txtresult");

    //     var subTotal = parseFloat(subTotalInput.value.replace(',', '.'));
    //     var gst = parseFloat(gstInput.value.replace(',', '.'));

    //     // Calculate the grand total
    //     var grandTotal = subTotal + gst;

    //     // Update the input fields with formatted values
    //     subTotalInput.value = '$' + formatDecimal(subTotal);
    //     gstInput.value = '$' + formatDecimal(gst);
    //     grandTotalInput.value = '$' + formatDecimal(grandTotal);
    // }




// adding two numbers automatically
function add_number() {
            // Get the input field values
            var num1 = parseFloat(document.getElementById("Text1").value);
            var num2 = parseFloat(document.getElementById("Text2").value);

            // Perform the addition
            var result = num1 + num2;

            // Display the result in the third input field
            document.getElementById("txtresult").value = parseFloat(result).toFixed(2);
        }

/// 10 percentage of given number  thanks to GPT
function calculatePercentage() {
      var inputField = document.getElementById("Text1");
      var outputField = document.getElementById("Text2");

    //   var inputNumber = parseFloat(inputField.value);
    var inputNumber = parseFloat(inputField.value.replace(",", "."));
      var percentage = inputNumber * 0.1;

      outputField.value =parseFloat(Math.round(percentage)).toFixed(2);
        add_number();
    }

    // subtract two numbers automatically
    function sub_number(one, two, three) {
  var num1 = parseFloat(document.getElementById(one).value);
  var num2 = parseFloat(document.getElementById(two).value);
  var result = num2 - num1;
  document.getElementById(three).value = result;

  updateResult()
  calculatePercentagetwo()
  updateResulttwo()
  calculatePercentagethree()



}


    /// type in one input field and shows in seocnd input field
    function syncInputs() {
      var input1 = document.getElementById("Text3");
      var input2 = document.getElementById("Text1");

      input2.value =parseFloat(input1.value).toFixed(2);
      calculatePercentage()
    }



    //////// add in multiple inputs and display result in one input field automatically
    // for Quoted in assessment summary

    const a = document.getElementById('one');
    const b = document.getElementById('one1');
    const c = document.getElementById('one2');
    const d = document.getElementById('one3');
    const e = document.getElementById('one4');
    const f = document.getElementById('one5');
    const g = document.getElementById('one6');
    const h = document.getElementById('one7');
    const i = document.getElementById('one8');
    const result33 = document.getElementById('one9');

    // Add event listeners to the input fields


    // Function to update the result field
    function updateResult() {
      const value1 = Number(a.value) || 0;
      const value2 = Number(b.value) || 0;
      const value3 = Number(c.value) || 0;
      const value4 = Number(d.value) || 0;
      const value5 = Number(e.value) || 0;
      const value6 = Number(f.value) || 0;
      const value7 = Number(g.value) || 0;
      const value8 = Number(h.value) || 0;
      const value9 = Number(i.value) || 0;

          // Add event listeners to the input fields
    a.addEventListener('input', updateResult);
    b.addEventListener('input', updateResult);
    c.addEventListener('input', updateResult);
    d.addEventListener('input', updateResult);
    e.addEventListener('input', updateResult);
    f.addEventListener('input', updateResult);
    g.addEventListener('input', updateResult);
    h.addEventListener('input', updateResult);
    i.addEventListener('input', updateResult);
      // Perform the addition
      const sum = value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9;

      // Update the result field
      result33.value = sum;

    }





//// 10 % of given number    second funtion that use in assessment summary

    function calculatePercentagetwo() {
      var inputField = document.getElementById("one9");
      var outputField = document.getElementById("one10");

    //   var inputNumber = parseFloat(inputField.value);
    var inputNumber = parseFloat(inputField.value.replace(",", "."));
      var percentage = inputNumber * 0.1;

      outputField.value = Math.round(percentage);
        add_numbertwo();
    }


 // adding two numbers automatically and display result in third input field in assessment summary
function add_numbertwo() {
            // Get the input field values
            var num1 = parseFloat(document.getElementById("one9").value);
            var num2 = parseFloat(document.getElementById("one10").value);

            // Perform the addition
            var result22 = num1 + num2;

            // Display the result in the third input field
            document.getElementById("one11").value = result22;
        }





  //////// add in multiple inputs and display result in one input field automatically
    // for Assessed in assessment summary

    const a1 = document.getElementById('two');
    const b1 = document.getElementById('two1');
    const c1 = document.getElementById('two2');
    const d1 = document.getElementById('two3');
    const e1 = document.getElementById('two4');
    const f1 = document.getElementById('two5');
    const g1 = document.getElementById('two6');
    const h1 = document.getElementById('two7');
    const i1 = document.getElementById('two8');
    const result331 = document.getElementById('two9');

    // Add event listeners to the input fields


    // Function to update the result field
    function updateResulttwo() {
      const value1 = Number(a1.value) || 0;
      const value2 = Number(b1.value) || 0;
      const value3 = Number(c1.value) || 0;
      const value4 = Number(d1.value) || 0;
      const value5 = Number(e1.value) || 0;
      const value6 = Number(f1.value) || 0;
      const value7 = Number(g1.value) || 0;
      const value8 = Number(h1.value) || 0;
      const value9 = Number(i1.value) || 0;

          // Add event listeners to the input fields
    a1.addEventListener('input', updateResult);
    b1.addEventListener('input', updateResult);
    c1.addEventListener('input', updateResult);
    d1.addEventListener('input', updateResult);
    e1.addEventListener('input', updateResult);
    f1.addEventListener('input', updateResult);
    g1.addEventListener('input', updateResult);
    h1.addEventListener('input', updateResult);
    i1.addEventListener('input', updateResult);
      // Perform the addition
      const sum = value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9;

      // Update the result field
      result331.value = sum;

      const newVal = document.getElementById("one9")

      const newVal1 = document.getElementById("three9")
newVal1.value = sum - Number(newVal.value)


    }


//// 10 % of given number    third funtion that used in assess portion in assessment summary

function calculatePercentagethree() {
      var inputField = document.getElementById("two9");
      var outputField = document.getElementById("two10");

    //   var inputNumber = parseFloat(inputField.value);
    var inputNumber = parseFloat(inputField.value.replace(",", "."));
      var percentage = inputNumber * 0.1;

      outputField.value = Math.round(percentage);


      const newVall = document.getElementById("one10")

const newVal2 = document.getElementById("three10")
newVal2.value = outputField.value - Number(newVall.value)



        add_numberthree();

    }

    function add_numberthree() {
            // Get the input field values
            var num1 = parseFloat(document.getElementById("two9").value);
            var num2 = parseFloat(document.getElementById("two10").value);

            // Perform the addition
            var result222 = num1 + num2;

            // Display the result in the third input field
            document.getElementById("two11").value = result222;


            const newValll = document.getElementById("one11")

const newVal3 = document.getElementById("three11")
newVal3.value = result222 - Number(newValll.value)

        }


///// function for settlement
function syncInputs2() {
    var setl1 = document.getElementById("settle1");
      var setl2 = document.getElementById("settle2");

      setl2.value = setl1.value;
      calculatePercentagesetl()
    }


    function calculatePercentagesetl() {
      var inputFieldset = document.getElementById("settle2");
      var outputFieldset = document.getElementById("settle3");

    //   var inputNumber = parseFloat(inputField.value);
    var inputNumber = parseFloat(inputFieldset.value.replace(",", "."));
      var percentage = inputNumber * 0.1;

      outputFieldset.value = Math.round(percentage);
      settle()
    }
    function settle() {
            // Get the input field values
            var setl2 = parseFloat(document.getElementById("settle2").value);
            var setl3 = parseFloat(document.getElementById("settle3").value);

            // Perform the addition
            var resultsetl = setl2 + setl3;

            // Display the result in the third input field
            document.getElementById("settle4").value = resultsetl;
        }


        var room = 1;

function populateOptions(selectElement, data) {
  // Clear existing options
  selectElement.innerHTML = "";

  // Add new options based on the data
  for (var i = 0; i < data.length; i++) {
    var option = document.createElement("option");
    option.value = data[i].value;
    option.text = data[i].text;
    selectElement.appendChild(option);
  }
}

    // Repairer Start

    var room = 1;

function repairer_fields() {
    room++;
    var objTo = document.getElementById('repairer_fields');
    var divtest = document.createElement("div");
    var rdiv = 'removeclass' + room;
    divtest.innerHTML = `
        <div class="row d-block ${rdiv}">
            <div class="col-sm-4 nopadding">
                <div class="form-group">
                    <div class="input-group">
                        <select class="form-control" id="repairers_${room}" name="repairers[]">
                            <!-- Options will be added dynamically -->
                        </select>
                        <div class="input-group-btn">
                            <button class="btn btn-danger" type="button" onclick="remove_repairer_fields('${rdiv}');">
                                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>`;

    objTo.appendChild(divtest);

    // Populate the select element with options
    var repairersSelect = document.getElementById(`repairers_${room}`);
    populateOptions(repairersSelect, repairersData);
}

function remove_repairer_fields(rdiv) {
    var elem = document.getElementsByClassName(rdiv)[0];
    elem.parentNode.removeChild(elem);
}

var ass = 1;

function assessor_fields() {
    ass++;
    var objTo = document.getElementById('assessor_fields');
    var divtest = document.createElement("div");
    var rdiv = 'removeclasss' + ass;
    divtest.innerHTML = `
        <div class="row d-block ${rdiv}">
            <div class="col-sm-4 nopadding">
                <div class="form-group">
                    <div class="input-group">
                        <select class="form-control" id="assessors_${ass}" name="assessors[]">
                            <!-- Options will be added dynamically -->
                        </select>
                        <div class="input-group-btn">
                            <button class="btn btn-danger" type="button" onclick="remove_assessor_fields('${rdiv}');">
                                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
        </div>`;

    objTo.appendChild(divtest);

    // Populate the select element with options
    var assessorsSelect = document.getElementById(`assessors_${ass}`);
    populateOptions(assessorsSelect, assessorsData);
}

function remove_assessor_fields(rdiv) {
    var elem = document.getElementsByClassName(rdiv)[0];
    elem.parentNode.removeChild(elem);
}




// Assessor End

    ///multistep form
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
const modal = document.getElementById('modal');
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementById('closeModalBtn');

function openModal() {
    modal.style.display = 'block';
}

function closeModal() {
    modal.style.display = 'none';
}

openModalBtn.addEventListener('click', openModal);
closeModalBtn.addEventListener('click', closeModal);



// modal-button
function imageSave() {
    console.log("image saved")
}

</script>



</body>

</html>




@endsection


