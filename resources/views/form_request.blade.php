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
 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="style.css">
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
                            <form id="msform">

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
                                        <div class="upper">
                                        <div class="row">
                                            <div class="col-6 d-flex">
                                                <div class="row">
                                                    <div class="col-sm-5 mt-2"> <label class="fw-bold fs-6 mb-2" style="color: black ;" > Tax Invoice </label></div>
                                                    <div class="col-sm-7"> <input type="number" required  class="form-control form-control-solid mb-3 mb-lg-0" name="invoice" placeholder=" Enter Invoice No"/> </div>
                                                </div>                                           
                                            </div>
                                            <div class="col-sm-6 d-flex">
                                                <div class="row">
                                                    <div class="col-sm-4 mt-2"> <label class="fw-bold fs-6 mb-2" style="color: black ;" > Date </label></div>
                                                    <div class="col-sm-8"> <input type="date" required  class="form-control form-control-solid mb-3 mb-lg-0" name="date" placeholder=" Enter Invoice No"/> </div>
                                                </div>                                           
                                            </div>
                                        </div>
                                        </div>
                                       
                                      <div class="row mt-5">
                                        <div class="col-md-6">
                                        <label class="fw-bold fs-6 mb-2" style="color: black ;" >To </label>
                                        <input type="text" required  class="form-control form-control-solid mb-3 mb-lg-0" name="vechile" placeholder=" Owner Name"/>
                                        </div>
                                        <div class="col-md-6">
                                        <label class="fw-bold fs-6 mb-2" style="color: black ;" >Tax Invoice </label>
                                        <input type="text" required  class="form-control form-control-solid mb-3 mb-lg-0"   name="vechile" placeholder=" Enter Invoice"/>
                                        </div>
                                      </div>
                                      
                                      <div class="row mt-4">
                                        <div class="col-md-6">
                                        <label style="color: black ;" class="fw-bold fs-6 mb-2"  >Vechile </label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="vechile" placeholder=" Enter Vechile Name"/>
                                        </div>
                                        <div class="col-md-6">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Rego</label>
                                        <input type="number" id="myText" required  class="form-control form-control-solid mb-3 mb-lg-0" name="rego" placeholder="Enter Rego"/>
                                        </div>
                                      </div>
                                     
                                        
                                      <div class="row">
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
                                        <div class="col-sm-3 me-5 fee">
                                        <!-- <div class="two d-flex justify-content-between ">
                                                    <div class="price font-weight-bold" style="color:black;"><p>Assessment Fee</p></div>
                                                    <div class="amount font-weight-bold" style="color:black;" > <span >$450.00 </span>  </div>
                                                   
                                                </div> -->
                                               
                                        </div>
                                      </div>
                                                                            
                                         <div class="row ">
                                            <div class="col-sm-7">
                                            <label style="color: black ; font-weight: 600;"> Bank Details </label>
                                         <p>
                                            Commonwealth Bank <br>
                                            GBS CORPORATION Sidiros family trust<br>
                                            BSB 063-157 <br>
                                            A/C 1033-1695 <br>
                                            Direct Debit Please include your name and AAS Reference number <br>
                                             Cheque Payable to Gbs Corporation and reference number on the back of cheque
                                         </p>
                                            </div>
                                            <!-- <div class="col-sm-3 me-5">
                                            <label style="color: black ; font-weight: 600;"> Invoice Total </label>
                                                <div class="two d-flex justify-content-between">
                                                    <div class="price"><p>Sub Total</p></div>
                                                    <div class="amount font-weight-bold" > <span >$450.00 </span>  </div>
                                                </div>
                                                <div class="two d-flex justify-content-between">
                                                    <div class="price"><p>GST</p></div>
                                                    <div class="amount font-weight-bold" > <span >$45.00</span>  </div>
                                                </div>
                                                <div class="two d-flex justify-content-between">
                                                    <div class="price font-weight-bold"><p>Grand Total</p></div>
                                                    <div class="amount font-weight-bold" > <span >$495.00</span>  </div>
                                                </div>
                                            </div> -->


                                            <div class="col-sm-3" me-3>
                                            <div class="row mb-2">
                                                <div class="col-7 font-weight-bold mt-2" style="color:black;" >Assessment Fee</div>
                                                <div class="col-3"><input  class="adds"  type="number" id="Text3" placeholder="$00.00" name="TextBox_3" oninput="syncInputs()" ></div>
                                                </div>
                                            <label style="color: black ; font-weight: 600;"> Invoice Total </label>
                                                    <div class="row">
                                                        <div class="col-7 mt-2"> Sub Total</div>
                                                        <div class="col-3"> <input readonly class="adds" type="number" id="Text1" placeholder="$00.00" name="TextBox1"  ></div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-7 mt-2">GST</div>
                                                        <div class="col-3"><input readonly class="adds"  type="number" id="Text2" placeholder="$00.00" name="TextBox2" ></div>
                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col-7 mt-2 font-weight-bold"> Grand Total </div>
                                                        <div class="col-3"><input readonly class="adds"  type="number" id="txtresult" placeholder="$00.00" name="TextBox3"></div>
                                                    </div>
                                            </div>




                                         </div>
                                         
                                         
                                     
                                     
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next Step" onclick="myFunctiontwo()"/>
                                </fieldset>




<!-- detail assessment  -->

                                <fieldset>
                                    <div class="form-card">
                                        <h4 class="fw-bolder " style="color:black;">  Detailed Assessment Report</h4>
                                        <div class="row mt-4">
                                        <div class="col-md-6">
                                        <label style="color: black ;" class="fw-bold fs-6 mb-2"  >Owner </label>
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="vechile" placeholder=" Enter Owner Name"/>
                                        </div>
                                        <div class="col-md-6">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Assessment Type</label>
                                                <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="assessmetn" placeholder=" Enter Assessment Type"/>
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
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="paint" placeholder="Enter Paint Group "/>
                                          </div>
                                      </div>
                                      <div class="row mt-4">
                                        <div class="col-md-4">
                                        <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Series</label> 
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="model" placeholder="Enter Series"/>
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
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="month" placeholder="Enter Month / Year"/>
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
                                        <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="vins" placeholder="Enter  VIN "/>
                                          </div>
                                      </div>

<div class="div">
  
<div class="panel panel-default">
  
  <div class="panel-body">
  
  <div id="education_fields">
          
        </div>


<div class="col-sm-3  nopadding">
  <div class="form-group">
    <div class="input-group">
      <select class="form-control" id="educationDate" name="educationDate[]">
      
        <option value="">Date</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
      </select>
      <div class="input-group-btn">
        <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
      </div>
    </div>
  </div>
</div>
<div class="clear"></div>
  
  </div>
 
</div>
</div>
                                 
                                      
<!-- 

  <button class="mt-5 btn btn-primary" onclick="duplicateDiv()"> Add More Repairer </button>


  <h4 class="fw-bolder " style="color:black;">  Repairer Details </h4>

<div class="repair" id="original-div">

<div class="row mt-5"  >
   <div class="col-md-4">
     <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Repairer</label> 
    <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="repairer" placeholder="Enter Repairer"/>
   </div>
    <div class="col-md-4">
            <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Email</label> 
            <input type="email"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="repairer_email" placeholder="Enter Email"/>
     </div>

    <div class="col-md-4">
             <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Contact</label> 
             <input type="text"  required  class="form-control form-control-solid mb-3 mb-lg-0" name="vins" placeholder="Enter  Contact  "/>
         </div>                  
</div> -->
<!-- <div class="row mt-4 ">
         <div class="col-md-4">
             <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Phone:</label> 
             <input type="number"  required  class="form-control form-control-solid mb-3 mb-lg-0"  placeholder="Enter  Phone Number  "/>
         </div>
         <div class="col-md-4">
             <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Mobile</label> 
             <input type="number"  required  class="form-control form-control-solid mb-3 mb-lg-0"  placeholder="Enter  Mobile Number  "/>
         </div>
         <div class="col-md-4">
             <label style="color: black ; " class="fw-bold fs-6 mb-2"  >Repairer Address</label> 
             <input type="number"  required  class="form-control form-control-solid mb-3 mb-lg-0"  placeholder="Enter Repairer Address  "/>
         </div>
</div>

</div> -->


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
                                             <div class="col-3 "> <input type="text" id="one" placeholder="$00.00" required  class=" aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one', 'two', 'three')()" ; /> </div> 
                                            <div class="col-3"> <input type="text"  id="two" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  oninput="sub_number.bind(null, 'one', 'two', 'three')()" /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>


                                            <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;" >Repair</div>
                                             <div class="col-3"> <input type="text" id="one1" placeholder="$00.00" required  class="aa form-control form-control-solid mb-3 mb-lg-0"  oninput="sub_number.bind(null, 'one1', 'two1', 'three1')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two1" placeholder="$00.00" required  class="aa form-control form-control-solid mb-3 mb-lg-0"  oninput="sub_number.bind(null, 'one1', 'two1', 'three1')()" ;/> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three1" placeholder="$00.00" required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>

                                                <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Paint</div>
                                             <div class="col-3"> <input type="text" id="one2" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  oninput="sub_number.bind(null, 'one2', 'two2', 'three2')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two2" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"    oninput="sub_number.bind(null, 'one2', 'two2', 'three2')()" ;/> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three2" placeholder="$00.00"   required  class="aa form-control form-control-solid mb-3 mb-lg-0"   /> </div> 
                                           </div>

                                                <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Mechanical</div>
                                             <div class="col-3"> <input type="text" id="one3" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one3', 'two3', 'three3')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two3" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one3', 'two3', 'three3')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three3" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>

                                              <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Misc Labour</div>
                                             <div class="col-3"> <input type="text" id="one4" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one4', 'two4', 'three4')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two4" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one4', 'two4', 'three4')()" ;  /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three4" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Total Labour</div>
                                             <div class="col-3"> <input type="text" id="one5" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one5', 'two5', 'three5')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two5" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one5', 'two5', 'three5')()" ;  /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three5" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>


                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Parts</div>
                                             <div class="col-3"> <input type="text" id="one6" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one6', 'two6', 'three6')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two6" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one6', 'two6', 'three6')()" ;  /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three6" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">sublet</div>
                                             <div class="col-3"> <input type="text" id="one7" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one7', 'two7', 'three7')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two7" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one7', 'two7', 'three7')()" ;  /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three7" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Supplementary</div>
                                             <div class="col-3"> <input type="text" id="one8" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one8', 'two8', 'three8')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two8" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one8', 'two8', 'three8')()" ;  /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three8" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Sub Total</div>
                                             <div class="col-3"> <input type="text" id="one9" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" /> </div> 
                                            <div class="col-3"> <input type="text" id="two9" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"    /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three9" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">GST</div>
                                             <div class="col-3"> <input type="text" id="one10" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one10', 'two10', 'three10')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two10" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  oninput="sub_number.bind(null, 'one10', 'two10', 'three10')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three10" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Total Estimate</div>
                                             <div class="col-3"> <input type="text" id="one11" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one11', 'two11', 'three11')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two11" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one11', 'two11', 'three11')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three11" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>
<br> <br>
                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Reported Items</div>
                                             <div class="col-3"> <input type="text" id="one12" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one12', 'two12', 'three12')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two12" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one12', 'two12', 'three12')()" ;  /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three12" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>
                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Towing</div>
                                             <div class="col-3"> <input type="text" id="one13" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one13', 'two13', 'three13')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two13" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one13', 'two13', 'three13')()" ;  /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three13" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">External Sublet</div>
                                             <div class="col-3"> <input type="text" id="one14" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one14', 'two14', 'three14')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two14" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one14', 'two14', 'three14')()" ;  /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three14" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Additional</div>
                                             <div class="col-3"> <input type="text" id="one15" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one15', 'two15', 'three15')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two15" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one15', 'two15', 'three15')()" ;  /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three15" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Discounts</div>
                                             <div class="col-3"> <input type="text" id="one16" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one16', 'two16', 'three16')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two16" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one16', 'two16', 'three16')()" ;  /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three16" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Less ITC</div>
                                             <div class="col-3"> <input type="text" id="one17" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one17', 'two17', 'three17')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two17" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one17', 'two17', 'three17')()" ;  /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three17" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">Less Contribution</div>
                                             <div class="col-3"> <input type="text" id="one18" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one18', 'two18', 'three18')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two18" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one18', 'two18', 'three18')()" ;  /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three18" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
                                           </div>

                                           <div class="row mt-2">
                                            <div class="col-3 font-weight-bold mt-2 " style="color:black;">PAV</div>
                                             <div class="col-3"> <input type="text" id="one19" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one19', 'two19', 'three19')()" ; /> </div> 
                                            <div class="col-3"> <input type="text" id="two19" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput="sub_number.bind(null, 'one19', 'two19', 'three19')()" ;  /> </div> 
                                            <div class="col-3"> <input type="text" readonly id="three19" placeholder="$00.00"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div> 
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
                                                         <div class="col-6"> <input type="date"  required  class="aa form-control form-control-solid mb-3 mb-lg-0"  /> </div>                                                  
                                                           </div>
                                                          <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Cover Type</div>
                                            <!-- <div class="col-6  mt-2 " style="color:black;">Market Value</div>  -->
                                            <div class="col-6"> <input type="text"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="vin" /> </div>
                                           </div>  
                                                    <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Sum Insured </div>
                                            <div class="col-6"> <input type="text"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="vin" /> </div>
                                           </div>   
                                           
                                           <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Market Value </div>
                                            <div class="col-6"> <input type="text"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="vin" /> </div>
                                           </div> 

                                           <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Salvage Value </div>
                                            <div class="col-6"> <input type="text"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="vin" /> </div>
                                           </div> 

                                             <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Settlement</div>
                                            <div class="col-6"> <input type="text" id="settle1" placeholder="$00.00" required  class="aa form-control form-control-solid mb-3 mb-lg-0" oninput=" syncInputs2()" /> </div>
                                           </div> 

                                           <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Less Excess </div>
                                            <div class="col-6"> <input type="text"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="vin" /> </div>
                                           </div>


                                               <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Settlement Sub Total </div>
                                            <div class="col-6"> <input type="text" id="settle2" placeholder="$00.00" required  class="aa form-control form-control-solid mb-3 mb-lg-0" /> </div>
                                           </div> 

                                                <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Settlement GST </div>
                                            <div class="col-6"> <input type="text" id="settle3" placeholder="$00.00" required  class="aa form-control form-control-solid mb-3 mb-lg-0"/> </div>
                                           </div> 

                                                <div class="row mt-2 rounded " style="color:black; background:#c7efb6;">
                                            <div class="col-6 font-weight-bold mt-1 py-2"  > Settlement Total </div>
                                            <div class="col-6 mt-1 "> <input type="text" id="settle4" placeholder="$00.00" required  class="aa form-control form-control-solid mb-3 mb-lg-0 "  /> </div>
                                           </div> 

                                           <br>

                                           <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Cash Settled </div>
                                            <div class="col-6"> <input type="text"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="vin" /> </div>
                                           </div>
                                           <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Certificate Compliance </div>
                                            <div class="col-6"> <input type="text"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="vin" /> </div>
                                           </div>
                                           <div class="row mt-2">
                                            <div class="col-6 font-weight-bold mt-2 " style="color:black;"> Salvage Condition </div>
                                            <div class="col-6"> <input type="text"  required  class="aa form-control form-control-solid mb-3 mb-lg-0" name="vin" /> </div>
                                           </div>


                                           <div class="row mt-5">
                                            <div class="col-3 font-weight-bold " style="color:black;">Supps</div>
                                            <div class="col-3 font-weight-bold" style="color:black;">Quoted</div>
                                            <div class="col-3 font-weight-bold" style="color:black;">Assessed</div>
                                            <div class="col-3 font-weight-bold" style="color:black;">Variance</div>
                                           </div>


                                                <div class="row mt-2">
                                            <div class="col-3  mt-2 " style="color:black;"> Supp 1</div> 
                                            <div class="col-3"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>
                                            <div class="col-3"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>
                                            <div class="col-3"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>
                                           </div> 
                                                <div class="row mt-2">
                                            <div class="col-3  mt-2 " style="color:black;">Supp 2</div> 
                                            <div class="col-3"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>
                                            <div class="col-3"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>
                                            <div class="col-3"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>
                                           </div> 
                                                <div class="row mt-2">
                                            <div class="col-3  mt-2 " style="color:black;">Supp 3</div> 
                                            <div class="col-3"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>
                                            <div class="col-3"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>
                                            <div class="col-3"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>
                                           </div> 
                                                <div class="row mt-2">
                                            <div class="col-3  mt-2 " style="color:black;"> Total</div> 
                                            <div class="col-9"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>
                                        
                                           </div> 


                                        </div>
                                       </div>
                                       <div class="row mt-5">
                                       <h4 class="fw-bolder " style="color:black;">  Comments / Notes</h4>
                                       <textarea id="text_area" name="text_area" rows="4" cols="50"></textarea>
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


                                                <div class="row mt-4">
                                            <div class="col-4 font-weight-bold mt-2 " style="color:black;"> Overall</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div> 
                                               </div>  
                                               <div class="row mt-2">
                                            <div class="col-4 font-weight-bold mt-2 " style="color:black;"> Interior</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div> 
                                               </div>  
                                               
                                               <div class="row mt-2">
                                            <div class="col-4 font-weight-bold mt-2 " style="color:black;"> Exterior</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div> 
                                               </div> 
                                               <div class="row mt-2">
                                            <div class="col-4 font-weight-bold mt-2 " style="color:black;"> Steering</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div> 
                                               </div> 
                                               <div class="row mt-2">
                                            <div class="col-4 font-weight-bold mt-2 " style="color:black;"> Brakes</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div> 
                                               </div> 
                                               <div class="row mt-2">
                                            <div class="col-4 font-weight-bold mt-2 " style="color:black;"> Tyre Depth Unit Front</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div> 
                                               </div> 
                                               <div class="row mt-2">
                                            <div class="col-4 font-weight-bold mt-2 " style="color:black;"> Tyre Depth Unit Rear</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div> 
                                               </div> 
                                            </div>


                                                <div class="col-md-5 wd">
                                                <h4 class="fw-bolder " style="color:black;">  Suspension  Condition </h4>
                                                <div class="row mt-4">
                                            <div class="col-4 font-weight-bold mt-2 " style="color:black;"> RH Front</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div> 
                                               </div>  
                                               <div class="row mt-2">
                                            <div class="col-4 font-weight-bold mt-2 " style="color:black;"> LH Front</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div> 
                                               </div>  
                                               
                                               <div class="row mt-2">
                                            <div class="col-4 font-weight-bold mt-2 " style="color:black;"> RH Rear</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div> 
                                               </div> 
                                               <div class="row mt-2">
                                            <div class="col-4 font-weight-bold mt-2 " style="color:black;"> LH Rear</div>
                                             <div class="col-8"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div> 
                                               </div> 
                                                </div>

                                      
                                       </div>
                                       <div class="row mt-5">
                                       <h4 class="fw-bolder mt-4" style="color:black;">  Damage Details </h4>
                                       <div class="col-md-6">


                                       <p>Click on the "Choose File" button to upload  Images:</p>

                                            <form action="/action_page.php">
                                            
                                            <input class="image" type="file" multiple accept="image/*">
                                            <input class="images" type="submit">
                                            </form>

                                       </div>
                                       <div class="col-md-6 wd"> 
                                                <div class="row">
                                                
                                                    <div class="col-4  font-weight-bold mt-2 " style="color:black;"> Damage Section</div>
                                                    <div class="col-4  font-weight-bold mt-2 " style="color:black;"> Damage Level</div>
                                                    <div class="col-4  font-weight-bold mt-2 " style="color:black;"> Comments</div>
                                                </div>  
                                                <div class="row mt-4">
                                                <div class="col-4  mt-2 " style="color:black;">Front Bumper Bar</div>
                                             <div class="col-4"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>
                                             <div class="col-4"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>  
                                                </div>  

                                                <div class="row mt-2">
                                                <div class="col-4  mt-2 " style="color:black;">Left Front Guard</div>
                                             <div class="col-4"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>
                                             <div class="col-4"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>  
                                                </div> 
                                                <div class="row mt-2">
                                                <div class="col-4  mt-2 " style="color:black;">Left Front Door</div>
                                             <div class="col-4"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>
                                             <div class="col-4"> <input type="text"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div>  
                                                </div> 

                                                <div class="row mt-4">
                                            <div class="col-5 font-weight-bold mt-2 " style="color:black;"> Repair Duration Days</div>
                                             <div class="col-7"> <input type="number"  required  class=" form-control form-control-solid mb-3 mb-lg-0" name="vin"/> </div> 
                                               </div> 

                                                
                                    </div>
                                       </div>

                                     
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                    <input type="button" name="make_payment" class="next action-button"
                                        value="Conform" />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

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

//get text from input field
function myFunctiontwo() {
        var x = document.getElementById("myText").value;
        document.getElementById("demo").innerHTML = x;
    }

// adding two numbers automatically
function add_number() {
            // Get the input field values
            var num1 = parseFloat(document.getElementById("Text1").value);
            var num2 = parseFloat(document.getElementById("Text2").value);

            // Perform the addition
            var result = num1 + num2;

            // Display the result in the third input field
            document.getElementById("txtresult").value = result;
        }
  
/// 10 percentage of given number  thanks to GPT
function calculatePercentage() {
      var inputField = document.getElementById("Text1");
      var outputField = document.getElementById("Text2");
      
    //   var inputNumber = parseFloat(inputField.value);
    var inputNumber = parseFloat(inputField.value.replace(",", "."));
      var percentage = inputNumber * 0.1;
      
      outputField.value = Math.round(percentage);
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

      input2.value = input1.value;
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
      add_number_three()
    }




    // var duplicationCount = 0;
    // function add_number_three() {
    //     if (duplicationCount >= 10) {
    //     return; // Stop duplication if the limit is reached
    //   }
        
    
    //   var originalDiv = document.getElementById('original-div');
    //   var clone = originalDiv.cloneNode(true); // Create a deep clone of the original div
    //   clone.id = ""; // Clear the ID of the clone to prevent duplicate IDs
    //   originalDiv.parentNode.appendChild(clone); // Append the clone to the parent of the original div

    //   duplicationCount++;
    //     }   


    //     /////// funtion to double a div 100 time
    //     function duplicateDiv() {
    //   var originalDiv = document.getElementById('original-div');
    //   var clone = originalDiv.cloneNode(true); // Create a deep clone of the original div
    //   clone.id = ""; // Clear the ID of the clone to prevent duplicate IDs
    //   originalDiv.parentNode.appendChild(clone); // Append the clone to the parent of the original div
    // }
    var room = 1;
function education_fields() {
 
    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"> <select class="form-control" id="educationDate" name="educationDate[]"><option value="">Date</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option></select><div class="input-group-btn"> <button class="btn btn-danger" type="button"onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus"aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';
    
    objTo.appendChild(divtest)
}
   function remove_education_fields(rid) {
	   $('.removeclass'+rid).remove();
   }

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
</body>

</html>




@endsection


