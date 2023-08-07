<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accident Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



    <style>
                @font-face {
        font-family: "Helvetica";
        src: url("Helvetica.ttf");
        }


        .font-0{
            font-family: "Helvetica", sans-serif;
            font-size:12px;
        }
        .font{
            font-family: "Helvetica", sans-serif;
            font-size:12px;
            font-weight:bold;
        }
        .font-1{
            font-family: "Helvetica", sans-serif;
            font-size:10px
        }

        .font-2{
            font-family: "Helvetica", sans-serif;
            font-size:19px;
            font-weight:bold;
        }



            #detail-assessment-1 {
            border-collapse: collapse;
        }

        #detail-assessment-2 {
            margin-bottom: 10px !important;
        }

        #detail-assessment-3 {
            margin-bottom: 10px !important;
        }

        .text-right {
            text-align: right;
        }

        .bg-gray-clr {
            /* background: #dfe7f5; */
            background: #edf7f7;
            height:20px !important;
        }

        .table-header-bg-clr {
            background: #0449c2;
        }

        .selected-bg-gray {
            /* background: rgb(179, 173, 173) */
            background: #bdc9c8
        }
    </style>
</head>

<body>
<div class="row">
        <div class="col-md-12">
            <table class="table" border="0" id="detail-assessment-1" width="100%">
                <tbody>
                    <tr>
                        <td width="33.33%">
                            <!-- <center>
                                <img
                                    src="data:image/png;base64,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" />
                            </center> -->
                            <img class="img " style="width:85%; height: 80px;" src="images/logo.png" alt="" >
                        </td>
                        <td width="33.33%" ; style="margin-top: 100px !important">
                            <!-- <center>
                                <h2 class="font-2" > Accident Assessing <br> Services</h2>
                                <h5 class="font-2">
                                    ABN: 20982234703
                                </h5>

                            </center> -->
                        </td>
                        <td width="33.33%">
                            <p class="text-right font-1" style="margin-top:5px;">
                                ABN: 78 668 644 246 <br>
                                Mob: 040 9971 411 <br>
                                Email: asvla@bigpond.net.au <br>
                                Po Box: 6 Baxter CT Thomastown VIC 3074
                                <!-- Po Box 2177 <br>
                                Templestowe Lower Vic 3107 <br>
                                0411 493 593 <br>
                                info@accidentassessingservices.com.au<br>
                                https://www.accidentassessingservices.com -->
                            </p>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table" border="0" id="detail-assessment-1" width="100%">
                <tbody>

                    <!-- <tr class="bg-gray-clr font  ">
                        <td width="150px">
                            <p style=" color:#2587be;" class=" ps-2">Tax Invoice:
                                {{$accident_service_report['tax_invoice'] ?? $accident_service_report['id'] }}</p>
                        </td>

                        <td colspan="5" class="font pe-2" style=" color:#2587be;text-align:right ">
                            Date: {{$accident_service_report['invoice_date'] ?? '--' }}
                        </td>
                    </tr> -->

                    <tr class="bg-gray-clr font">
    <td class="align-middle ps-2 " style="color: #2587be;" >
        Tax Invoice:
            {{$accident_service_report['tax_invoice'] ?? $accident_service_report['id'] }}

    </td>
    <!-- <td></td> -->
    <td colspan="5" class="font pe-2 align-middle" style="color: #2587be; text-align: right;">
        Date: {{$accident_service_report['invoice_date'] ?? '--' }}
    </td>
</tr>


                    <tr class="font-0" style="margin-top: 40px !important;">
                        <td class="ps-2">To :</td>
                        <td>{{ $accident_service_report['to'] ?? '--' }}</td>
                        <td colspan="3"></td>
                        <td></td>
                    </tr>
                    <tr  class="font-0">
                        <td class="ps-2">On behalf of:</td>
                        <td width="200px">National Motor Claims
                            PO Box 2000
                            Greenvale Vic 3059
                        </td>
                        <td colspan="3"></td>
                        <td></td>
                    </tr>

                    <tr class="bg-gray-clr mt-2">
                        <!-- <td>
                            <h4 style="color:black; text-align:left;font-weight:bold"
                                class="text-right font align-middle">
                                Invoice Details:
                            </h4>
                        </td> -->
                        <td style="color:black; text-align:left;"
                                class="text-right font align-middle ps-2">
                                Invoice Details:
                        </td>
                        <td></td>
                        <td colspan="3"
                            style=" color:#2587be; text-align:left;font-weight:bold; text-align:right">
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b class="font ps-2">Vehicle:</b></td>
                        @if(isset($accident_service_report['vehicle']))
                        <td class="font-0">{{ $accident_service_report['vehicle'] ?? '--'}}
                            @else
                        abc
                        @endif
                        </td>
                        <td><b class="font">Claim No:</b></td>
                        <td class="font-0">TR2032</td>
                    </tr>
                    <tr>
                        <td><b class="font ps-2">Rego:</b></td>
                        @if(isset($accident_service_report['rego']))
                        <td class="font-0">{{ $accident_service_report['rego'] ?? '--' }}
                            @else
                            abc
                            @endif
                        </td>
                        <td><b class="font">Policy No:</b></td>
                        <td class="font-0">P-23</td>
                    </tr>
                    <tr class="bg-gray-clr mt-2">
                        <!-- <td>
                            <h4 style=" color:black; text-align:left;"
                                class="font align-middle ps-2">Invoice Description:</h4>
                        </td> -->
                        <td class="font align-middle ps-2" style=" color:black; text-align:left;">
                                Invoice Description
                        </td>
                        <td></td>
                        <td colspan="3"
                            style=" color:#2587be; text-align:left;font-weight:bold; text-align:right">
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="font-0 ps-2" width="300px" style="border-bottom-style: hidden;">
                            Assessed the damage to vehicle Rego - make, model series body
                            Adjusted to repair quotation
                            Supplied images of the vehi cle
                            Traveled to the vehicle location
                            Establised a fair and reasonable repair cost
                            Administration charges
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><b class="font">Assessment Fee</b></td>
                        <td><b class="font">${{ $accident_service_report['assessment_fee'] ?? '--' }}</b></td>

                    </tr>

                    <tr class="bg-gray-clr mt-2">
                        <td  class="font ps-2 align-middle" style=" color:black; text-align:left;" >
                            Banking Details
                        </td>
                        <td></td>
                        <td colspan="3" class="font" style="  color:black; text-align:left;font-weight:bold;">
                            Invoice Total
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="font-0 ps-2" style="border-bottom-style: hidden;">
                            Commonwealth Bank
                            GBS CORPORATION Sidiros family trust
                            BSB 063-157
                            A/C 1033-169 5
                            Direct Debit Ple ase include your name and AAS Reference
                            number
                            Cheque Payable to Gbs Corporation and reference number on the
                            back of cheque
                        </td>
                        <td class="font-0"  style="border-bottom-style: hidden;"></td>
                        <td  class="font-0" style="border-bottom-style: hidden;">Sub Total</td>

                        <td class="font-0 " style="border-bottom-style: hidden;">${{ $accident_service_report['sub_total'] ?? '--' }}</td>
                        <td style="border-bottom-style: hidden;"></td>
                    </tr>
                    <tr>
                        <td style="border-bottom-style: hidden;"></td>
                        <td style="border-bottom-style: hidden;"></td>
                        <td class="font-0" style="border-bottom-style: hidden;">GST</td>
                        <td class="font-0" style="border-bottom-style: hidden;">${{ $accident_service_report['gst'] ?? '--' }}</td>
                        <td style="border-bottom-style: hidden;"></td>
                    </tr>
                    <tr>
                        <td style="border-bottom-style: hidden;"></td>
                        <td style="border-bottom-style: hidden;"></td>
                        <td class="font" style="border-bottom-style: hidden;"><b>Grand Total</b></td>
                        <td class="font" style="border-bottom-style: hidden;"><b>${{ $accident_service_report['grand_total'] ?? '--' }}</b></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
        <!-- <img
            src="" /> -->
            <!-- <img src="{{ asset('image/cover.jpg') }}" alt="Image"> -->
            <img src="images/cover.jpg" alt="">

    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table" border="0" id="detail-assessment-1" width="100%">
                <tbody>
                    <tr>
                        <td width="33.33%">
                            <!-- <center>
                                <img
                                    src="data:image/png;base64,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" />
                            </center> -->
                            <img class="img " style="width:85%; height: 80px; margin-top:2px;" src="images/logo.png" alt="" >

                        </td>
                        <td width="33.33%" ; style="margin-top: 100px !important">
                            <!-- <center>
                                <h2 class="font-2" > Accident Assessing <br> Services</h2>
                                <h5 class="font-2">
                                    ABN: 20982234703
                                </h5>

                            </center> -->
                        </td>
                        <td width="33.33%">
                            <p class="text-right font-1" style="margin-top:5px;">
                                ABN: 78 668 644 246 <br>
                                Mob: 040 9971 411 <br>
                                Email: asvla@bigpond.net.au <br>
                                Po Box: 6 Baxter CT Thomastown VIC 3074
                                <!-- Po Box 2177 <br>
                                Templestowe Lower Vic 3107 <br>
                                0411 493 593 <br>
                                info@accidentassessingservices.com.au<br>
                                https://www.accidentassessingservices.com -->
                            </p>
                        </td>
                    </tr>
                    <tr class="table-header-bg-clr">
                        <td style=" color:white; text-align:left;"
                                class="text-right font ps-2 align-middle" colspan="2">
                            Detailed Assessment Report Ref No: 2483
                        </td>
                        <td class="font pe-2" style="color:white; text-align:right">
                            Date: {{ $accident_service_report['invoice_date'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table" border="0" id="detail-assessment-2" width="100%">
                <tbody>
                    <tr class="bg-gray-clr">
                        <td colspan="2" class="bg-gray-clr font ps-2"  style=" color:black; text-align:left;">
                            Owner:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['owner_name'] ?? '--' }}</td>
                        <td colspan="2" class="bg-gray-clr font" style=" color:black; text-align:left;">
                            Claim No:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">TR2032</td>
                    </tr>
                    <tr class="mt-2">
                        <td colspan="2" class="font ps-2" style=" color:black; text-align:left;">
                            On Behalf Of:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">National Motor Claims</td>
                    </tr>
                    <tr class="bg-gray-clr mt-2">
                        <td colspan="2" class="bg-gray-clr font ps-2" style=" color:black; text-align:left;">
                            Assessment Type:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['assessment_type'] ?? '--' }}</td>
                        <td colspan="2" class="bg-gray-clr font" style=" color:black; text-align:left;">
                            Estimate No:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">3668</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <br>
    {{-- Vehicle Details Start --}}
    <div class="row">
        <div class="col-md-12">
            <table class="table" border="0" id="detail-assessment-2" width="100%">
                <tbody>
                    <tr class="table-header-bg-clr" style="margin-top: 5px">
                        <td class="font ps-2" style=" color:white; text-align:left;" colspan="9">
                                Vehicle Details - Rego: {{ $accident_service_report['rego'] ?? '--'}}
                        </td>
                    </tr>
                    <tr class="bg-gray-clr">
                        <td colspan="2" class="bg-gray-clr font ps-2" style=" color:black; text-align:left;">
                            Make:
                        </td>
                        <td class="font-0"  style=" color:black; text-align:left;">{{ $accident_service_report['make'] ?? '--'}}</td>
                        <td colspan="2" class="bg-gray-clr font" style=" color:black; text-align:left;" >
                            Engine Type:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['engine_type'] ?? '--' }}</td>
                        <td colspan="2" class="font" style="color:black; text-align:left;">
                            Odometer:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['odometer'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class=" font ps-2" style=" color:black; text-align:left;">
                            Model:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['model'] ?? '--' }}</td>
                        <td colspan="2" class=" font " style=" color:black; text-align:left;">
                            Engine Size:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['engine_size'] ?? '--' }}</td>
                        <td colspan="2" class="font" style=" color:black; text-align:left;">
                            Paint Group:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['paint_group'] ?? '--' }}</td>
                    </tr>
                    <tr class="bg-gray-clr">
                        <td colspan="2" class="bg-gray-clr font ps-2" style=" color:black; text-align:left;">
                            Series:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['series'] ?? '--' }}</td>
                        <td colspan="2" class="bg-gray-clr font" style=" color:black; text-align:left;">
                            Engine No:
                        </td>
                        <td class="font-0" style="color:black; text-align:left;">{{ $accident_service_report['engine_no'] ?? '--' }}</td>
                        <td colspan="2" class="font" style="color:black; text-align:left">
                            Paint Code:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['paint_code'] ?? '--' }}</td>
                    </tr>
                    <tr >
                        <td colspan="2" class=" font ps-2" style=" color:black; text-align:left;">
                            Month/Year:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['month_year'] ?? '--' }}</td>
                        <td colspan="2" class=" font" style=" color:black; text-align:left;">
                            Transmission:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['transmission'] ?? '--' }}</td>
                        <td colspan="2" class="font" style=" color:black; text-align:left;">
                            Colour:
                        </td>
                        <td class="font-0" style="color:black; text-align:left;">{{ $accident_service_report['colour'] ?? '--' }}</td>
                    </tr>
                    <tr class="bg-gray-clr">
                        <td colspan="2" class="bg-gray-clr font ps-2"  style=" color:black; text-align:left;">
                            Body Type:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['body_type'] ?? '--' }}</td>
                        <td colspan="2" class="bg-gray-clr font" style=" color:black; text-align:left;">
                            Axles:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['axles'] ?? '--' }}</td>
                        <td colspan="2" class="font" style=" color:black; text-align:left;">
                            Vin:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['vin'] ?? '--' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- Vehicle Details End --}}
    <br />
    {{-- Repairer Details Start --}}
    <div class="row">
        <div class="col-md-12">
            <table class="table" border="0" id="detail-assessment-3" width="100%">
                <tbody>
                    <tr class="table-header-bg-clr" style="margin-top: 5px">
                        <td colspan="9" style=" color:white; text-align:left;font-weight:bold"
                                class="text-right font ps-2">
                            Repairer Details
                        </td>
                    </tr>
                    {{-- @dd($accident_service_report->serviceRepairers) --}}
                    @forelse ($accident_service_report->serviceRepairers as $service_repairer)
                    {{-- @dd($service_repairer) --}}
                        <tr>
                            <td colspan="1" class="bg-gray-clr font ps-2" style=" color:black; text-align:left;">
                                Repairer:
                            </td>
                            <td style=" color:black; text-align:left;" class="bg-gray-clr font-0">{{$service_repairer['repairers']['name'] ?? '--'}}</td>
                            <td colspan="1" class="bg-gray-clr font" style=" color:black; text-align:left;">
                                Email:
                            </td>
                            <td class="bg-gray-clr font-0" style=" color:black; text-align:left;">
                                {{$service_repairer['repairers']['email'] ?? '--'}}</td>
                            <td colspan="1">
                            </td>
                            <td style=" color:black; text-align:left;"></td>
                        </tr>
                        <tr>
                            <td colspan=" 1" class="font ps-2" style=" color:black; text-align:left;">
                                Contact:
                            </td>
                            <td class="font-0" style=" color:black; text-align:left;">{{$service_repairer['repairers']['contact'] ?? '--'}}</td>
                            <td colspan="1" class="font" style=" color:black; text-align:left;">
                                Phone:
                            </td>
                            <td class="font-0" style=" color:black; text-align:left;">{{$service_repairer['repairers']['phone'] ?? '--'}}</td>
                            <td colspan="1" class="font" style=" color:black; text-align:left;">
                                Mobile:
                            </td>
                            <td class="font-0" style=" color:black; text-align:left;">{{$service_repairer['repairers']['mobile'] ?? '--'}}</td>
                        </tr>
                        <tr class="bg-gray-clr">>
                            <td colspan="1" class="font ps-2" style=" color:black; text-align:left;">
                                Repairer Address:
                            </td>
                            <td class="font-0" style=" color:black; text-align:left;">{{$service_repairer['repairers']['address'] ?? '--'}}</td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    {{-- Repairer Details End --}}
    <br>
    {{-- Assessment Details Start --}}
    <div class="row mb-5">
        <div class="col-md-12">
            <table class="table" border="0" id="detail-assessment-3" width="100%">
                <tbody>
                    <tr class="table-header-bg-clr" style="margin-top: 5px">
                        <td colspan="12" style=" color:white; text-align:left;"
                                class="text-right font ps-2">
                            Assessment Summary
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="selected-bg-gray font ps-2" style=" color:black; text-align:left;">
                            Repairer:
                        </td>
                        <td colspan="2" class="selected-bg-gray font"
                            style=" color:black; text-align:left;font-weight:bold">Quoted:</td>
                        <td colspan="2" class="selected-bg-gray font">
                            <p style=" color:black; text-align:left;font-weight:bold">Assessed:</p>
                        </td>
                        <td class="selected-bg-gray font"
                            style=" color:black; text-align:left;font-weight:bold">Variance</td>
                        <td></td>
                        <td colspan="4" class="selected-bg-gray font"
                            style=" color:black; text-align:left;font-weight:bold; color: green">Total
                            Loss - NO</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="bg-gray-clr font ps-2" style="font-weight: bold">R & R</td>
                        <td colspan="2" class="bg-gray-clr font-0">
                            @if(isset($accident_service_report->assessmentReports[0]))
                            {{ (int)$accident_service_report->assessmentReports[0]->quoted ?? '--' }}
                            @else
                            abc
                            @endif
                        </td>
                        <td colspan="2" class="bg-gray-clr font-0">
                            @if(isset($accident_service_report->assessmentReports[0]))
                            {{ (int)$accident_service_report->assessmentReports[0]->assessed ?? '--' }}
                            @else
                            abc
                            @endif
                        </td>
                        <td class="bg-gray-clr font-0">
                            @if(isset($accident_service_report->assessmentReports[0]))
                            {{ (int)$accident_service_report->assessmentReports[0]->variance ?? '--' }}
                            @else
                            abc
                            @endif
                        </td>
                        <td></td>
                        <td colspan="3" style="font-weight: bold" class="bg-gray-clr font">Assessment
                             Date</td>
                        <td class="bg-gray-clr font-0"> {{ $accident_service_report['assessment_date'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="font ps-2" colspan="2" style="font-weight: bold">Repair</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[1]->quoted ?? '--' }}</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[1]->assessed ?? '--' }}</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[1]->variance ?? '--' }}</td>
                        <td class="font"  colspan="3" style="font-weight: bold">Cover Type</td>
                        <td class="font-0"  >{{ $accident_service_report['cover_type'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="bg-gray-clr font ps-2" colspan="2" style="font-weight: bold">Paint</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[2]->quoted ?? '--' }}</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[2]->assessed ?? '--' }}</td>
                        <td class="font-0" >{{ $accident_service_report->assessmentReports[2]->variance ?? '--' }}</td>
                        <td></td>
                        <td colspan="3" class="bg-gray-clr font" style="font-weight: bold">Sum Insured</td>
                        <td class="bg-gray-clr font-0">{{ $accident_service_report['sum_insured'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="font ps-2"  colspan="2" style="font-weight: bold">Mechanical</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[3]->quoted ?? '--' }}</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[3]->assessed ?? '--' }}</td>
                        <td class="font-0"  colspan="">{{ $accident_service_report->assessmentReports[3]->variance ?? '--' }}</td>
                        <td></td>
                        <td class="font"  colspan="3" style="font-weight: bold">Market Value</td>
                        <td class="font-0" >{{ $accident_service_report['market_value'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="bg-gray-clr font ps-2" colspan="2" style="font-weight: bold">Misc Labour</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[4]->quoted ?? '--' }}</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[4]->assessed ?? '--' }}</td>
                        <td class="font-0"  colspan="">{{ $accident_service_report->assessmentReports[4]->variance ?? '--' }}</td>
                        <td></td>
                        <td class="bg-gray-clr font" colspan="3" style="font-weight: bold">Salvage Value</td>
                        <td class="bg-gray-clr font-0">{{ $accident_service_report['salvage_value'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="font ps-2"  colspan="2" style="font-weight: bold">Total Labour</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[5]->quoted ?? '--' }}</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[5]->assessed ?? '--' }}</td>
                        <td class="font-0"  colspan="">{{ $accident_service_report->assessmentReports[5]->variance ?? '--' }}</td>
                        <td></td>
                        <td class="font"  colspan="3" style="font-weight: bold">Settlement</td>
                        <td class="font-0" >${{ $accident_service_report['settlement'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="bg-gray-clr font ps-2" colspan="2" style="font-weight: bold">Parts</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[6]->quoted ?? '--' }}</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[6]->assessed ?? '--' }}</td>
                        <td class="font-0"  colspan="">{{ $accident_service_report->assessmentReports[6]->variance ?? '--' }}</td>
                        <td></td>
                        <td class="bg-gray-clr font" style="font-weight: bold" colspan="3">Less Excess</td>
                        <td class="bg-gray-clr font-0">${{ $accident_service_report['less_excess'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="font ps-2"  colspan="2" style="font-weight: bold">Sublet</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[7]->quoted ?? '--' }}</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[7]->assessed ?? '--' }}</td>
                        <td class="font-0"  colspan="">{{ $accident_service_report->assessmentReports[7]->variance ?? '--' }}</td>
                        <td></td>
                        <td class="font"  style="font-weight: bold" colspan="3">Settlement
                            Sub Total
                        </td>
                        <td class="font-0" >${{ $accident_service_report['settlement_sub_total'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="bg-gray-clr font ps-2" colspan="2" style="font-weight: bold">Supplementary</td>
                        <td class="bg-gray-clr font-0" colspan="2">{{ $accident_service_report->assessmentReports[8]->quoted ?? '--' }}</td>
                        <td class="bg-gray-clr font-0" colspan="2">{{ $accident_service_report->assessmentReports[8]->assessed ?? '--' }}</td>
                        <td class="bg-gray-clr font-0" colspan="">{{ $accident_service_report->assessmentReports[8]->variance ?? '--' }}</td>
                        <td></td>
                        <td class="font"  style="font-weight: bold" colspan="3">Settlement
                             GST
                        </td>
                        <td class="font-0" >${{ $accident_service_report['settlement_gst'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="font ps-2"  colspan="2" style="font-weight: bold">Sub Total</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[9]->quoted ?? '--' }}</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[9]->assessed ?? '--' }}</td>
                        <td class="font-0"  colspan="">{{ $accident_service_report->assessmentReports[9]->variance ?? '--' }}</td>
                        <td></td>
                        <td class="font bg-gray-clr"  colspan="3" style="font-weight: bold; background: rgb(98, 221, 98)">Settlement
                             Total
                        </td>
                        <td class="font-0 bg-gray-clr"  style="background: rgb(98, 221, 98)">${{ $accident_service_report['settlement_total'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="bg-gray-clr font ps-2" colspan="2" style="font-weight: bold">GST</td>
                        <td colspan="2" class="bg-gray-clr font-0">{{ $accident_service_report->assessmentReports[10]->quoted ?? '--' }}</td>
                        <td colspan="2" class="bg-gray-clr font-0">{{ $accident_service_report->assessmentReports[10]->assessed ?? '--' }}</td>
                        <td class="bg-gray-clr font-0">{{ $accident_service_report->assessmentReports[10]->variance ?? '--' }}</td>
                        <td colspan="2"></td>
                        <td colspan="4" style="font-weight: bold; height: 3%"></td>
                    </tr>
                    <tr>
                        <td class="font ps-2"  colspan="2" style="font-weight: bold">Total Estimate</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[11]->quoted ?? '--' }}</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[11]->assessed ?? '--' }}</td>
                        <td class="font-0" >{{ $accident_service_report->assessmentReports[11]->variance ?? '--' }}</td>
                        <td colspan=""></td>
                        <td class="font"  colspan="3" style="font-weight: bold">Cash Settled</td>
                        <td class="font-0" >${{ $accident_service_report['cash_settled'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="bg-gray-clr" colspan="7" style="font-weight: bold; height: 3%"></td>
                        <td></td>
                        <td class="bg-gray-clr font" colspan="3" style="font-weight: bold">Certificate
                             Compliance
                        </td>
                        <td class="bg-gray-clr font-0">{{ $accident_service_report['certificate_compliance'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="font ps-2"  colspan="2" style="font-weight: bold">Reported Items</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[12]->quoted ?? '--' }}</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[12]->assessed ?? '--' }}</td>
                        <td class="font-0" >{{ $accident_service_report->assessmentReports[12]->variance ?? '--' }}</td>
                        <td></td>
                        <td class="font"  colspan="3" style="font-weight: bold">Salvage
                             Condition
                        </td>
                        <td class="font-0" >{{ $accident_service_report['salvage_condition'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="bg-gray-clr font ps-2" colspan="2" style="font-weight: bold; height: 3%">Towing</td>
                        <td class="bg-gray-clr font-0" colspan="2">{{ $accident_service_report->assessmentReports[13]->quoted ?? '--' }}</td>
                        <td class="bg-gray-clr font-0" colspan="2">{{ $accident_service_report->assessmentReports[13]->assessed ?? '--' }}</td>
                        <td class="bg-gray-clr font-0"> {{ $accident_service_report->assessmentReports[13]->variance ?? '--' }}</td>
                        <td></td>
                        <td style="font-weight: bold" colspan="3"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="font ps-2"  style="font-weight: bold" colspan="2">External Sublet</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[14]->quoted ?? '--' }}</td>
                        <td class="font-0"  colspan="2" style="">{{ $accident_service_report->assessmentReports[14]->assessed ?? '--' }}</td>
                        <td class="font-0" >{{ $accident_service_report->assessmentReports[14]->variance ?? '--' }}</td>
                        <td></td>
                        <td class="selected-bg-gray font" style="font-weight: bold">Supps</td>
                        <td class="selected-bg-gray font" style="font-weight: bold">Quoted</td>
                        <td class="selected-bg-gray font" style="font-weight: bold">Assessed</td>
                        <td class="selected-bg-gray font" style="font-weight: bold">Variance</td>
                    </tr>
                    <tr>
                        <td class="bg-gray-clr font ps-2" colspan="2" style="font-weight: bold; height: 3%">Additional</td>
                        <td class="bg-gray-clr font-0" colspan="2">{{ $accident_service_report->assessmentReports[15]->quoted ?? '--' }}</td>
                        <td class="bg-gray-clr font-0" colspan="2">{{ $accident_service_report->assessmentReports[15]->assessed ?? '--' }}</td>
                        <td class="bg-gray-clr font-0">{{ $accident_service_report->assessmentReports[15]->variance ?? '--' }}</td>
                        <td></td>
                        <td class="bg-gray-clr font-0">Supp 1</td>
                        <td class="bg-gray-clr font-0">{{ $accident_service_report->suppValues[0]->quoted ?? '--' }}</td>
                        <td class="bg-gray-clr font-0">{{ $accident_service_report->suppValues[0]->assessed ?? '--' }}</td>
                        <td class="bg-gray-clr font-0">{{ $accident_service_report->suppValues[0]->variance ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="font ps-2"  colspan="2" style="font-weight: bold">Discounts</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[16]->quoted ?? '--' }}</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[16]->assessed ?? '--' }}</td>
                        <td class="font-0" >{{ $accident_service_report->assessmentReports[16]->variance ?? '--' }}</td>
                        <td></td>
                        <td class="font-0" >Supp 2</td>
                        <td class="font-0" >{{ $accident_service_report->suppValues[1]->quoted ?? '--' }}</td>
                        <td class="font-0" >{{ $accident_service_report->suppValues[1]->assessed ?? '--' }}</td>
                        <td class="font-0" >{{ $accident_service_report->suppValues[1]->variance ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="bg-gray-clr font ps-2" colspan="2" style="font-weight: bold; height: 3%">Less ITC</td>
                        <td class="bg-gray-clr font-0" colspan="2">{{ $accident_service_report->assessmentReports[17]->quoted ?? '--' }}</td>
                        <td class="bg-gray-clr font-0" colspan="2">{{ $accident_service_report->assessmentReports[17]->assessed ?? '--' }}</td>
                        <td class="bg-gray-clr font-0">{{ $accident_service_report->assessmentReports[17]->variance ?? '--' }}</td>
                        <td></td>
                        <td class="bg-gray-clr font-0">Supp 3</td>
                        <td class="bg-gray-clr font-0">{{ $accident_service_report->suppValues[2]->quoted ?? '--' }}</td>
                        <td class="bg-gray-clr font-0">{{ $accident_service_report->suppValues[2]->assessed ?? '--' }}</td>
                        <td class="bg-gray-clr font-0">{{ $accident_service_report->suppValues[2]->variance ?? '--' }}</td>
                    </tr>
                    <tr>
                        <td class="font ps-2" colspan="2" style="font-weight: bold; height: 3%">Less Contribution</td>
                        <td class="font-0" colspan="2">{{ $accident_service_report->assessmentReports[18]->quoted ?? '--' }}</td>
                        <td class="font-0" colspan="2">{{ $accident_service_report->assessmentReports[18]->assessed ?? '--' }}</td>
                        <td class="font-0" >{{ $accident_service_report->assessmentReports[18]->variance ?? '--' }}</td>
                        <td></td>
                        <td class="font-0" >Total</td>
                        <td class="font-0">{{ $accident_service_report->total_supps ?? '--' }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr style="background: rgb(179, 173, 173);">
                        <td colspan="2" class="font ps-2" style=" color:black; text-align:left;">
                            Repairer:
                        </td>
                        <td class="font" colspan="2" style=" color:black; text-align:left;font-weight:bold">
                            Quoted:</td>
                        <td class="font" colspan="2" style=" color:black; text-align:left;">
                            Assessed:
                        </td>
                        <td class="font" style=" color:black; text-align:left;font-weight:bold">Variance</td>
                    </tr>
                    <tr class="bg-gray-clr">
                        <td class="font ps-2" colspan="2" style="font-weight: bold; height: 3%">PAV</td>
                        <td class="font-0" colspan="2">{{ $accident_service_report->assessmentReports[19]->quoted ?? '--' }}</td>
                        <td class="font-0" colspan="2">{{ $accident_service_report->assessmentReports[19]->assessed ?? '--' }}</td>
                        <td class="font-0">{{ $accident_service_report->assessmentReports[19]->variance ?? '--' }}</td>
                    </tr>
                    <tr style="background: rgb(179, 173, 173)">
                        <td colspan="3" class="font ps-2 " style=" color:black; text-align:left;">
                            Book Values
                        </td>
                        <td class="font" colspan="4" style=" color:black; text-align:left;font-weight:bold">Live
                            Market Values</td>
                    </tr>
                    <tr class="bg-gray-clr font">
                        <td colspan="3" class="ps-2" style=" color:black; text-align:left;">
                            Trade Low
                        </td>
                        <td colspan="4" style=" color:black; text-align:left;font-weight:bold">
                            Market One</td>
                    </tr>
                    <tr class="font">
                        <td colspan="3" class="ps-2" style=" color:black; text-align:left;">
                            Trade
                        </td>
                        <td colspan="4" style=" color:black; text-align:left;font-weight:bold">
                            Market Two</td>
                    </tr>
                    <tr class="bg-gray-clr font">
                        <td colspan="3" class="ps-2" style=" color:black; text-align:left;">
                            Retail
                        </td>
                        <td colspan="4" style=" color:black; text-align:left;font-weight:bold">
                            Market Three</td>
                    </tr>
                    <tr>
                        <td class="font ps-2" colspan="3" style=" color:black; text-align:left;">
                            Value Avg KM's

                        </td>
                        <td class="font" colspan="4" style=" color:black; text-align:left;font-weight:bold">
                            Market Avg</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    {{-- Assessment Details End --}}
    <br>
    {{-- Comments/Notes Start --}}
    <div class="row mb-5">
        <div class="col-md-12">
            <table class="table" border="0" id="detail-assessment-4" width="100%">
                <tbody>
                    <tr class="table-header-bg-clr" style="margin-top: 5px">
                        <td width="100%"  style=" color:white; text-align:left;"
                                class="text-right font ps-2">
                            Comments / Notes
                        </td>
                    </tr>
                    <tr>
                        <td class="font-0 ps-2" width="100%">
                            <p>{{ $accident_service_report['comments'] ?? '--' }}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- Comments/Motes End --}}
    <br><br>
    {{-- Vehicle Conditions Start --}}
    <div class="row mb-5">
        <div class="col-md-12">
            <table class="table" border="0" id="detail-assessment-4" width="100%">
                <tbody width="100%">
                    <tr class="table-header-bg-clr" style="margin-top: 5px">
                        <td width="30%" style=" color:white; text-align:left;"
                                class="text-right font ps-2">
                            Vehicle Condition
                        </td>
                        <td width="30%">
                            <p style=" color:white; text-align:left;font-weight:bold"
                                class="text-right"></p>
                        </td>
                        <td width="30%"  style=" color:white; text-align:left;"
                                class="text-right font">
                            Suspension Condition
                        </td>
                    </tr>
                    <tr>
                        <td class="bg-gray-clr "><span class="font ps-2" style="font-weight:bold">Overall:</span > <span class="font-0"> {{ $accident_service_report['overall'] ?? '--' }}</span> </td>
                        <td class="bg-gray-clr "><span class="font" style="font-weight:bold">Brakes: </span> <span class="font-0"> {{ $accident_service_report['brakes'] ?? '--'}} </span></td>
                        <td class="bg-gray-clr "><span class="font" style="font-weight:bold">RH Front: </span> <span class="font-0"> {{ $accident_service_report['rh_front'] ?? '--' }} </span></td>
                    </tr>
                    <tr>
                        <td ><span class="font ps-2" style="font-weight:bold">Interior:</span> <span class="font-0"> {{ $accident_service_report['interior'] ?? '--' }} </span></td>
                        <td ><span class="font" style="font-weight:bold">Tyre Depth Unit Front: </span> <span class="font-0">
                        {{ $accident_service_report['tyre_depth_unit_front'] ??'--' }}</td>
                        </span>
                        <td ><span class="font" style="font-weight:bold">LH Front: </span> <span class="font-0">{{ $accident_service_report['lh_front'] ?? '--' }}  </span></td>
                    </tr>
                    <tr>
                        <td class="bg-gray-clr" ><span class="font ps-2" style="font-weight:bold">Exterior:</span> <span class="font-0">  {{ $accident_service_report['exterior'] ?? '--' }} </span></td>
                        <td class="bg-gray-clr" ><span class="font" style="font-weight:bold">Tyre Depth Unit Rear: </span> <span class="font-0">{{ $accident_service_report['tyre_depth_unit_rear'] ?? '--' }}</span></td>
                        <td class="bg-gray-clr "><span class="font" style="font-weight:bold">RH Rear: </span> <span class="font-0"> {{ $accident_service_report['rh_rear'] ?? '--' }} </span></td>
                    </tr>
                    <tr>
                        <td><span  class="font ps-2" style="font-weight:bold">Steering:</span>  <span  class="font-0">{{ $accident_service_report['steering'] ?? '--' }}</span> </td>
                        <td><span  class="font ps-2" style="font-weight:bold">Vehicle & Suspension Condition:</span>  <span  class="font-0">{{ $accident_service_report['vehicle_and_suspension_condition'] ?? '--' }}</span> </td>
                        {{-- <td><span  class="font" style="font-weight:bold">Tyre Depth Unit Rear: </span> <span  class="font-0">  RH 0.00 LH 0.00 </span></td> --}}
                        <td><span class="font" style="font-weight:bold">LH Rear: </span> <span class="font-0" > {{ $accident_service_report['lh_rear'] ?? '--' }} </span></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    {{-- Vehicle Conditions end --}}
    <br>
    {{-- Demage Details Start --}}
    <div class="row mb-5">
        <div class="col-md-12">
            <table class="table" border="0" id="detail-assessment-4" width="100%">
                <tbody>
                    <tr class="table-header-bg-clr" style="margin-top: 5px">
                        <td width="100%" style=" color:white; text-align:left;"
                                class="text-right font ps-2">
                            Damage Details
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row" style="display:flex">
        <div class="col-md-4">
            <img
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAS8AAACTCAYAAADfoZ9iAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAIg4SURBVHhe7f13eFVHsu+Nn//u88z73vDee3/3njnnnvGce86M7YnHM45EGwO2cQBsMDlHBSSBJITIIggkRJQQQRJB5JxzMMHknHNOJhiMIzZ46lefWrvF0tYm2RLCnl3PU3utvVav1b06fLuqurr7HyRMYQpTmH6CFAavMIUpTD9JCoNXmMIUpp8khcErTGEK00+SShS8Ll64ICuXLZXpUybL1MmTJX/sWJk1fbpMmThR5s+dKytXrpS1a9bKurVr5aPVH8mypUtk3pw5snL5clmp59s2bZQzp07J999/H3hjmMIUpjB5VCzgderEcZmYmyPZCTEyNLKVLJg3T3bs3Cm7d++W7769JZ9cvixffPGFnX/7zTfy9dcef/XVVyHPCQN/fvNzuXr1mj13+OgxOXzosGzduE7WjRshx3dvD8QepjCF6e+RfjB4LV24QHq3aSmDy/2HfPSvv5WL//f3cv6pp+XACy/JrvnL5MqNG3Lx3Hm5ceMzAyCOAJgDqe++/VZuf/et3PnuOzvCXHNARlie+fTTT+148dIluX7luhzNzZeTfygvx379tFx4o7zs69pa9s6fKndu3wmkLExhCtPfAz0SeH3z9deS3a+P9C37H7IRwPr1M3K2XDU5m9JfTi9eLF+phPXdLQWkb2+b1HTsyBHZvHmLqYdzVU2cNm2a5OblyaiRIyUra7gMGTJEBg0ebMw517hHGMLyzKpVq2Tr1q1y/PhxufH5l/L1t9+ZJPbFJ1fk6sLFcrZzD7nwUhW59nZ5OTOqt3xx9XIgtWEKU5h+zvRQ4IXNaUBqX+n73B/k9FO/k5NP/VYONGotF7duVolHVTwFk72HjsjMefMlc2imtE9IlNaRUXbs3KOn9E7tL2kZg2Sg3uue0lsi2sVIFBwTK1GxcRKtx8jANe4RZpCG7a/P9NJneUdcfII0j4iUDsnJkpmdrarpfDmkcd7+7rbcvv2tXN6wVk6/+6GcfP6PcnV4T7n11ZeB1IcpTGH6OdIDwes7VesavVNNPvr1b+Tyr5811XB97YZy5cqnsnHbDsnLGSsdEztLSkqqDB6UJSNH5Elu/iSZOG2WTJkx246OJ8/wjnkTpkjG0Czp3S9duvfpZ8w517jnwrrwsHtX7rgJMnxkjsVFnMSdmztetm3fKSePHpSjL1WVo//6jNz88FX54tyJwFeEKUxh+rnRA8GrVo3qsvCp38hFVRPPPvWMbImKkY83bZKEjvESFR0vsXEdZfKUGTJVgWXqVI8d4DwMT5g2M+T1B7GLa9LE6RITq2lp1166du4iu7Ztk2MfNpZLv/6tXG9cWb7/7tvAl4QpTGH6OdF9wWvWtGlS7X/+L7n469/L5V/9Vva8857s3bNPYlTNi47rIJEx7SV1wKCQ4PI4uV/GYEtLTEwH42NbdsjB/3jFbHJfzswOfE2YwhSmnxPdF7zerFJFZvzq3+SKSl67/+2PcvXgERmZmy/tYuIMvCLaxcnYiZ6aV1qMaomqGalpceA1deYs+XTzVjmmoHujTqXA14QpTGH6OdE9wevatWvy1H//Hyq9PC2nn/qtHE4dLLdu35aswcMlWgEC8GoTHVPErlUaTBpIS3RAfRw/YaJ8/c13clLT+YlKjN8c2x34qjCFKUw/F7oneI3Ly5Oa/+sfTera+7sycuPzG/K9gtfEidNU8vLAq210bIGBvTSZAQLURqfKzlk0x0Yhrx87KKdVdbw1NSPwVWEKU5h+LnRP8GrepLFk//NTckklr61Dh9io4/d3bsuGjzdJTKwHXlGx7SVrVG5IQAnmSdNmFnDBtelFw9n1EGHvx6TBS4+Xpm07d8l3d75XviPHYjvJZx3rBr7qyaFWzZvJqOGlY48bNniwdO/cRT799Frgys+fzpw+LfPnzNY8Hy5DMjKkX+8+ktK9u+VDr+497JjcsaMkJyVJcqdO0iU5Wbp16Syd9FpSYmIBd0xIME5MiNejMtcC17mfnKTv6JQknfV53tFZ39U5qZN01WPPbt2kb88U6d2jhwzo10+GDRok4/PGyNKFCy19YXo0uid4vfjcc7LqX38ju/5UTr6+clVuKxj87W9/kxs3bkhkVFQBeA0alh0SUOApytOnzTZmVHDc2EmSm5svuTnjJGf0OBk9amwh5hr38vImyPjxk+0Z97yNLAa93/GAIZmWFuxdkREx5p0P/U3TfOPiGTlfsYL9f1Jo2qRJUq9OHWkfFycfrVola1atlIXz58vyZctkxfIVsnzpUvl4/XrtKD6W9evWydYtW2TPnj1y5MhhOXb8uJw9c1rOnz/v8blzcurUKbt+8MB+2bN7l2zetEk2bvhYdmzfZu9Y89FHsmXTRtmg71owd66MHDFCunbpImNz8wIp+nnSRytXSjcFkDatWkpEZISkp6dL3pixWp+myew5c2SZ5vdHmjfk0bbt22Xnzp3GIzR/WrduJV26dZWjR46Yg/RpBZczZ87I2bNn5ZzmOXnP0THXCXPixAl7Zt++fbJr105zsLby2Kj5r/GsWr1ali9fLkuWLJVZs2fJsGHDJbZdB4nVupsYnyRpffvLKk1XmB5MIcELe9cz/7//JYefLSN7165X4Lpjjqrff/83lb7uSOeu3Qy84D79MwpAxPll4Ys1LHuU9O03QPr07i+DBg5VQMqXaXpv2dIVsmrVOlm37mMtzM2yaeMWY865xj3CTNewPJORMUR69e4naf0HSVZ2jqmpfh8wjqQBqQvw6tmjr/wtMJGbNN9WifHkyoXy1aEddq20qW9KiixYsMDme9KgAB7Or1y5Ijc/vymfffaZdRBMibp77v3nPsAMM4OB/xz5f/dZ7xnOucY5Yfj/5ZdfWgNj+lVmZqZMVBC9efOm3Prmm0Dqfjp0R+vhwf37ZdniRQbIS1R6WbtmjWzZvFn27t0rI7KzJSKirdaJdlqHMgyAXH6SL9evXw/k1Wd2Th75p67RUYcirsO0g/uxC+fIPRM8Be7TT2/IkcPHtJPaIAvmL5YJ+VNk6NBM6de3r4xVoN2v37JZO561q1fJkUOHAm8LExQSvMbl5krVSpXk1tdfyo3rNzzQUtYSsALIyRtbAF5duvUyqWjCxGkyaPBQGTJsmMybv0B2794j17Wi+AuyCCu4hDwPusY7rl65Jjt27JKZs+dYPIMGZ0n+xKmmenbukWLgRQ82SdPBMxBHVMfP+Ibvbtm10iRW0xigDYnpTcz3pLemEjOvkwbEkW91bN+vHPz/Xvy9SpouHOfekWdvG9NwaLzf3PrGGjJARqOlMT3pdOrkSVuRhEn/m1SKOXbsmIGxA2kPmD4zkLr0ySfWIfCdBXUpUI+8vPDy8xsFberVkcNHZfeuPfLxhk0qia1ViWyFzJ2zQKZOmyH5k6ZIztjxMmpkjgzPGiGZykMzs2Xw0OEyQOvhgEFDJX3gkEJHZpLAw7KytRMfIcO1I8/OHi3jtVOfNHmaTNc6O3/+Qlm5YrWsW7NOtm3Zbi5Ip0+fky9ufmG2ZTrdr776xsqI7+L7qCvM8UWiPrh/XyBn/n4pJHhFtG4jfVNTraDJOD9R6CtWf2RqmgFYdHst1FFWuIjMPOOvMMVFdyufx8eOnNDeNUeyho8ylw0HXtu27SoSL9/wt+9Ld+I2UmAV7RCYu0njAqgAMNSJhYsWmxQ0dpyq0qNzVJXItPmeGQMGS79+GZKaCqdL375pJsmG5n56f4CGG2DPpKcNMql10OAh2nCyTV0aN368TJ8xQ1asWGG9OCBKo9ivDeHLgKr9pFJcdLTUrfOh5d/atWutrgG6TOx3wEzD9tc/iCNhaPio4uRx7959bGZGUlJnk9TJr0EDM60ut2kTJdlZo2XAgCGSqPfHK9jgSD01YL6YOXOuTFVmhNtpAJyH+k84mPLBnAFTlmPHTjQTidXfYQqGQ7JlQPpgK98unXtIYmKy9OjRW0aNyJHFixebdM438L3eQgU3rP4gre/Z+fe7ukpI8KpYvrzp5YAEGeUnKsOpM2dtpBHAiIyKlaVLVljmBoNGSRKSBb3ToqXLA2lpL1FRMdabBqeDb+BbSpNGZmWpmhhpKuOChYu0B8+SpE6dJLlzsrTv0EFV8S7So1eK9O7TRxtTf0ntnyb9+g80ddmO6YOsgnNM16Of/dfSFLT6qRrNEU7tl6YdUT9VvXtLtx7dLc6EhERJ7tJZuvfooZLAFNm1a5esWLY8kNInly6cPyc1a9S0b+mh6jc2rDEqFWEXpEMAuBxRB2BU4ukzZ0rHpCSTevPGjJNpCkaYMACkqVM8YGIUvU2baAW2NNMksM/Gtk8wEMI84WZ0TFZ2ZpKHZcoHkwbvBzSnBWy4xnp/6lRNgzvXe6Rtmv4fN36yDMvMku4pvazslmoZAdJIlCw3NXXqVE1vbxmcMVClty2BL//7oZDg9U//9EszTlL4weAFAQQUAj3V4sVLHitoBRNxAwjR0ZHaWw4ImRa+geulCWCVKr5q4IN9D3cO/NISO3eTkWPGFzQQ13MHV/7iYPdejkgSqekDJbJde5MGmCO6+qM18um1J3f0ccO69dKzW4oNAnXr1Udi4xMlOirO6uHevfsKARdE53bq5Bmzu2aqysa3328qWteUPlYubl4u3Doy2iQnf7gfwgwouTJHS/gh7kWUG4Nj3TSdCxYuNAA7cOCA2fNG5+TJjOlzZO7suXJdJbO/FyoCXidVHP8v//m/WGVArQhlD8GWMk5F35SUu8bx0iRAqXvPHjJv3ryQ4IXKgGSoNwNXHi/Nm6UNQVXxJYuWmqqAlIi0OEqBK1RFfVyc3K2nSQSAwIkTJ2X50idvlAt1O6NfP8nJGWdSUvaoPIluH29g0KtXqtlkg8sclWrH9p2qFnaVCROnh/x2P49T1bBFmwjp2bd/wTU6FOJAbfSH/SGMK48DL8o+bdDQkOEehkkXS0chsTOKiSSGJI/qS/7MnjNP69kiuXWr9G28JU1FwGu56ti/+tWvrEJgELVGH0SAxc4dO2Xjxk0hweJxE2lgGPrQoUMh00NlBoRLK61vVK4sffqmyqWLn5i02i4uXuISk0pMynpYHqw9udkuFcCmz5hp9pWbnxW2cZYmoSZ2SeoikydPlynTZ0t6xhCJZCZFu3YyPHtEQZm6cuVI3Vy1ao10USntYf0EAS2TusZNKHQ9MbmrjMwdV+jaD2Gka+zDSHLEw3udtP1DeNL0mTJpygxJ7Z8hgwcPk/PnL1jng600N2esqpyqFmt+bdI28XOmIuA1ecIE+ctf/2IVgZEop2ohiflHb0B8DIalqYo5Ij3YPBzQ8p+K7VQJ0si33AlSLR4HrV+zRj6oVUvGjRsvWzZts0EFKnJK6t1evrQYqQIJkPTg/sKI5zpN75NA82YrWKUN8Hz8VKLo0qOXNXzWfMNPK7jeUeaU95zZ8yUhvtM9fQKDOX/KdGkZEWmqaPA94hySNaLI9UflfM1nb1CpvbSKiLY8Lw6JDjtZfv4USU7uJkuXLrWl02fOnGPLRWEzI+8WL1gi+/fuCeTSz4uKgFfWkCFSrkJ5qwwOvDjHOJiWllYACJAzknK/tMirtHcsLY4A1qSkTgX2OAdepZHOFk2bSlKnJDlx/IT58KCmUYnxgwtVIR8nI/m1T+xk4BUVHWXOltOmTgukvPQoZ8QIGThosExVySlv7ERJSEjWPKPxx8ny5SusPIOJaytWrJS4Dh3NhSbU94bi7r1TDViCpS7sY3QwrFjiv/5DGCnLDSoBXhwBxfvZ4B6GAWhn6E8fMFD6paXL+XMXzO2DkerJk2fY/WkqVc+dPcdU8J8TFQGv1N69pJZKCq7BA07YvvA27tatm0lbjrh+4cIFwRWhNJk0kBZHe/bsNcdWXAWQxvgWHAIfN3hRWSqULy/Dh2fL97e/s2F5mwUQUFFKW22Eabw0ppiYGFtym2W7T50ovUUcs4cOlZF5nqo2fHSeASv5Fa3gird6KOCCqAfR0dGFDO4PYmfrQuoKBSQAV0pqWpHrj8qAF2YCvgPw4ptYgPPHgpefiYMVXpK7drV8whaIBIZbhpuGN3/hEjl+5Fggx376VAS8OiUkSMNGjQy08AGishw7esQ8svFBYqTDX4FwEAQ4/BLZ4yIPWL+1dDoibZNVFZiQj6Q40Ox2XCOdjxu8JuXnKyi0MzUH8MQw7sCrONSRH8tUeCd5RSt44QNFWS6aPz/wBY+XUnv1kty8MZY2RtacqoWNcOeOHYXqXTDhOoAtzI2mBn9rMPPtrN5LWWTnjA0ZZlBmtjlAh7r3KEyakrv3tG9BRbXOokNCiXRek6ZMk/Yd4mz6EW4iTLNj5WF3f/bMebJ08TLbj+KnTkXAK7JtW4mNjbGK4lStj1avlalTZphnMI50/krEnDtPnbx3xSopIs5+/fvbULkjJK209IE2pD5KKyVzzPiGkpK8kK62bt4s0ydPVnUnW7JUcnDezzXee9dAf9eu3bJli2fvcmojoOGvdA9iKjqMxAbwMWKVNnCIpA8aZqNZ2G74ZvyE/L5IBapFEBMWB98oBVRWCSFdjB4jIeZPmGijVUwdYhLzqOxsmTJhgs3B/Pqrr+zbipuYKD1mTL7Vs959+nsDGzFx0rFTJzl2/KSV9f3KDxtnYseO0l87LPLgXpP+HQNwjP4BKqFAhPtZo/KsnLj/Y6UkVFCA0klfAHNJjDbz3YMzh0urNpE2vQ6/x7Vr10nGQNTwGWYLo/xnz5wrRw8fCeTeT5OKgFezJo0LvOsdeC1auNQ+Gsbz+PSZc4HQYg0TpC8t8AJo6XUd4TnO1AwrSC0sdi7iG5z9rrjosxs3pPb770vHxATzkCcfsBnhNY+7yZXLn8hbb71leYkhdeGiJd4EXGXAC2mHnp8K/CBmxIv1/TskJZvtxDWCYO7TV983cozk5OYXPJujgGCT4f2cM87C2eCBghdAYWmLTTDwZ9Tx8MEDttpBnTp1zKsbmyJTbzZs3CiLFy2ybywu6qGqzoABA83LPT4+qQDkk5M7m3f5w3Q6lC2j31GRsZI9PMcasR9wOHf/ASPmw5KXjAS6MME8euwEC1Mcvl50NJQ7DHhZefnmBRcX821Ikry/bZtom2nxtdY//DbT+g8wNdJ1YLNUCps/d8FPVgorAl51ateSXr16FwIvm+fFB2uPNmHSdJk9e25BhdqyZYtNMA7lD1bShP8WcbMSAIRjIh7XE1R0piCnaEE636/iBq/ckaPkr8//1UCLhs1cOscnjh21JU+w0yyYv8Dy8uq1T2XC+CkyKmuUjB6j4JE3TkYrcxyZOzYkIzmOzMnzmP+Edf+Vs0ffPedejjKbkeQo2Nn7NZ5crgWu5+X5WUFMG27emAkySiWMsXkTZeWqNcI6aFcuXzGfrxPHjslrr1cyO6f/+/jej9etC+TEj6OhAweap/zo0bkGrIDJLAWLTRu2mNTwsOYIypjyxQkYn6d+aRk2z9DNNWSe4XCVUJmnmJc/UVq1jZDkbt0VmGbLVAU6cz/Qzq6A9T/1iHAcvSWaPEnWuWDc/a/8AElvaOYIr9NSUG7dNiogfSfJ5BBhfyxj90OyQ6Ju27addmr9rP7TRtGesAUj4dKm8eafOWOmnD55MpCTPx0qAl7V333H9lCkIqBqaa0oEDVd5jAx1VUq/KsAkFCe+CVNSAR41uOsB93Rhoe3+JRARaKSzZg50yo2Nq+HbQgPQxmqKr/40ktmD/Q3bBi1sV7t2naPpYS+v31Hvr7+pXx65TM5cvpkocEGKpWbVMwRJq3kPfa6YAawYaRN7EAACf9DheUdvN8/cdmtpsD/azeuy+d6flolxssKUJ/euGaS1x1VhbElMt/x9UqVLH+Dv7G4wKtR3XomrX6q9efY8dMK8jfk9u3bcuu7rzQdP8zRknKm/vIt+PiRD8SBFEdngzS+Zs0ak5jZG5Q6wtzS/IkTtfNT4B812pbFYX5p24g21pkzeocBHKkOyZXpQ0wpol3MmKHvUHZLN4Vi5jI6yRuJCGkXqTdXJWPXroqLMdwjMdoosoJk2wgFsN79C6bO4ZnfuXN36d6jj12nzfTo3luWL1kSyMGfBhUBr7eqVrVCpPCd5JWfP9kKwGVOqvZqVG6IBgqA+F0VHhexphJxUymhTy5dsfl89ISkE/DiW/gGGjOVubhowZw58vTTT9tkZ2b+06DJAyTR5s2bWSOAsBGdPrBbjo3LlxM9e8lhhvpZoUPJSQuOSR8Gc3pI2AEQ4OOY/6xGwVpRB7USsg5VcBgXzgEd/nk0Yn9cFrcm42/6c+ubW7I7IUWOD8uWo4uWybULVyyNx44es/xlTqADLaQwRiQXLVhg3/BjqUWLZlaO32gaLh89KEcUKHaPHyvnVC29+cWXls5HJeomddcP4uQn74IB8EchyuWrr76RTxVYcUU4fIhVKHab3x724OXLVqqqvVzmzV1oWsqMGd5cSQaNkHBHq2TL4gUAFsDF5O+mTVtK61aR0js1zdRTAAe7JfWWwQTHqIGhbHL3Y96F5GUDMcrtAtPA0tMGWl1A0Pjss5vaKW1TwJ1lJgQksblz5tqSQgf275dLly7ZGnGHDh6QXarZbNuyWbYr71A+qddvBdp/aVIR8KpUsaKtPEDv5cCLnsYPXiwFgtQD0VCiVPLCXeFxEzYmGheVE2JZEXo4P3jlBBbc41totMVJK5YuMT+uN6pUkZYtW6h43lfTEyXttYIePnFSvvn6KzmkPdu5//sHufrUM3KFHZgWz5Mr1z+TT1XyufLpDbmux6vXb2jDuK7f8Zl8+fXnhcDGNTg/A0hIQ/SgDJiECuOB1N0pXjxzQ+O6rvFQeVlH6pryFaS/6zfl8stvyBVN49Wnfi8HKr0ll/fslDvsWZA1XJo2a2oDI71797LR6KnaIRQX1Xq/pnz95dfy6edfyuWtW+Sq5tG1f31WTvz7f8hxlVIubd8m32hD+Y7NhSk/lWTvRd533w6sLuGVtcsP6isgxPmjgpd7RyjWnyLXHsQsKEDdvXLlmnnG79y9SzZu2iyrVq+xqT5zFESmobpOmWL7MeSOGauS4EhzuaEj6adSf3r6AEkfMMD84bJVSiTMuHyW3JkiEyZN0XoYLbFxsYILDOdt27aVxk2amjRpnYXWMa+OeJ2mXyqHaS+EgWnjnuTurRPnjsyjxA7KApg7tm2VfVoXv/ry8a1OUgS8ypUpYyI0lZ4Kz9xFlgjxgxf2FJYkgfhIwMvv//W4iErarl209a7Qxg1bLJ1+8KLxUUB8i5MWS4K+0jQcO3JEZk6dKp27dZMvb34hh9snyfmnfisnn3paPlE+8etnZWuvfnJ2ZI6cz8qWS4Oz5FLGUDmfNlg+SU2VfRPGyFeff2HfhRTH0S/x+Pn48WMmfRHOf91JgJzzPBWVinbl4CG50DtDLvYZJGcztAIPHiYXhw2X89ooTuTmyPGXK9q+nBc1neyIvuffn5PzRw7IDa3QfNe1q1cDX1q81L5djMycO12O5eTIvt7pcvzXv5dzmgbScZq0/Pp3cvj1t+TAkKFy6dxp+SIgUQHINCwGQyhXyhhgALxoXHf/ew3U1WfXULnH8+QTKiXPcB92z5YkUSbE8UOZzo20AjgAIVPjUIk3aafGaq2sEsvKMKjIH2/YYKPufCf5QP0g/5x0yhF2IOX+u7zhGsz94LBe3t1dUw1mMVMkNlYA3rxxoxw9crhEHGSLgNfLL76oqD+toCFQqKw35AeFvPETrNeHSDR2AcI9bnI2LzITWrd2g9ke/OBFT0Pa3PdQ8CVJDerWlUPHjljluPD0X1Wa+a1JNJ/8+rdy+VdPq/T1G7nyr3rUhnn51wpqv37Gjlf1//7BA+U7lXb4ruBG+CjMM8QPU5losN9+dl2OPv0HuajpuPKvKmFpnKSDI3EDsFeeetZ2RUfyYc/L0zPnqurm5W1JUnxkS9vl6VwgfqTUyxo/6eT/RQWwTzWdR2o3lW9v37Jv5JsAH76RRkwjdFIDHatrYO4aeUr5c0Tt5j4NnuedWsk1wnIf4OcacQAU/rx1546h4GsPYuIEdEPdc1xSRL1yUqgjFyffd5c9P0rylnpE3jiAckzee/nsrfbL0QvrVgD2+NNrV+XI4cOyXSW0o4eLZ0XYIuD14vPPy2QVV90CaBRo+7hEM0YWgNe4fENyiIS2advaEvi4iTgZLCDzIJbS9aeTESPSRkWhAjJczPLBJUWsId+2TWtVt27JNwoWNEg26wWoAIpz1iif9f4H8VltuNfPafoCkgHp5ft+SCXmGXpkjpQPFfHO3+7Ip21jFKx+Y8Dk4vXAi93Q9b+mDdBw1w4Ny5Zbmo7PND0lRUis3SNjAuAVAK1A2vzM9VNv1lJwv7fd0jU+JAsnnTlww6xBY+Q+HRlhqTdILdR1J60iqVJPCO/Akfrjb6AO5PjPdddYOXr3vHD+Rsw7SAfvpIxh4sRHEbsx8ZIWgBNphnSWFBH3j+nIXT7zHtdpeN/qvvczyzfyxlNFvTyA3f8LFy7Ktq1bZc2qVXrthy3jUwS8nv/LcwZeZCQN6Pr1G9K8eWtb4ZFhXYyHY/Mnmq0FIqGtWrUqAJDHSWQC4OTiduCFAybglZCUbMZz0kgPQgW5fZ/K/2Opf98+AXvhd/LFiVPWIAsaoIKXAYSClL9ROj7QsLFWhrujZFQGmAb3qETlopLwLr6dI+r/lR0bVfIrHL8BlfIZJEQ/eCmf7tlX88vrhUuKdm7fJvmDMk0qRV0MDV4Krip9ndbO6GHSwvejHgEUjl1D5QhIkcf+a9R1wlleBa4XJ/Fev/0RkGPAhVFjAMyBG/cBNQZiKEPqAABBHYcdkPK8C8+38P5HSbsn3ZdMuZIG0ubS7IGaJ6XdBTlP5eT/ufPnbJXbbZs2Bt7wcFQEvP763HM2tQDwImOOHjsuGUMybeiV+ViA17j8SQWOoSQO8CIzHzcRpx+81q752AOv6bNsoT8c9YYNHWY9Kd9Cb8owfElRv969Vb2eqkBxW67vP+ypiSpNXDXAetbAyy95IQEh4Vz59R/k5LxlKrF5IEPhU7hUdirrozYmwjvVk8rBf5bB/va2Avh7DU0FA5w8dZU0PGPAcU3TSFodn0ruZuup8z0lRaxLv3reArmk6uxZzQvSQjpg0vmJ8sVf/14OJiXJrVvfyp2HSIt9bxA74hygouEEXw8OW9zkjwPgcB0M5eRUM5gy55o/fPDzMN9BvfardU7yo01417wNWDhy34EJHTnXv7t1y8rYOAB+cHEAmz+tMN9FOvhuB+SUA3XVnbND1u4dOwJvuD+FBK/58+dbQwcpt+mLWL6DqRKsR8SqkOMnTikALzKoZasWFvZxE4XmB042MwC8+jrv6dyxkj9hghkyCUuBlaTRPrF9e1uTnor3xdWrcvS3f5HzAZA6rw3w8P/9o5x/5gU5+adycva51+Tsy1Xk/Bs15WD2SEsXPmHmv6BEgXIN8Z689UsRD2IqqKsoVAoIgyn+ZleP7JUrTZrJ+QpvyIXnK8uFP1SU80+/Isf+/Q9y8f/+Xs6ZvetpS/ehEaMVMFRCKcH1/4cMGCB79h+Ss9XqaH79VS7824ty3tKhkpYeL1SoLvtycvS7vrX03/nbjwdSGhL56hpraRBxU2/9jdvPD0v+Z4LBx3/Pz9yjblE/MKyvWblKpZ4tclzVV9ozbYWBkOIk4qVO41aEmo7UifbGaCXtEtXZqfvYGw/s2yeXHuDBEEJt/Is57TkUX79hY4H/CVNUmrVpK1kjRhWAFxkAgNBoHjfRMNlfz0legBf7P7ZqE2Xz/cxrevJU2bxpc0HvU5LgxQYbvB9J5fPrKjlpr/blLQWe776W7+7ckutfXFfJ75bcUbUS9fWbb7+TL7/T/6oussekk7pcBXO9JOl+NPZ6YfLHX4nZiPfOrdvytaoZbCKMFPqdAu23mparn99Qye9bk86+/vZr+ULTfeHGdUujs22UBLVu1ty+/5bmw6Ubn1q+FLBe+1ali08uX5Wvv/nSrv0N6TTwPY5DUXAYx+6ea7z+/HmcRHyU0eOO15GrXxw/v6n17FOkwKLSniP/9UdhR5z7d3biCHMNQHPXATbsfh2TOkpChw6Bp0NTEfB64a9/MWmFgqX3Xqmo7HeSY4JpRLsYk2Yg7AdIXiUJCvciegfAi0oArVyxxryW0zIGW5oZbWR2wJrV6+SrL7+ybyoptZGJzNXefttEefKNXia4IKks9Gww508S09uRRj8BWOQZ+XxZK1ZxE/NDEzsmFuSHS4NjiCMNjDImDGHJX5du0kjHiRriByLKwYVx4enAHPOf+Nx7/c/Cj4NKE7yI92E6JJc+8tflpysv8pF3wOSxJyB4HSf/XV46Jr/R6BxwAVYwo8PO0dsBGD6TzFtetWypxR+KioDXS88/b46dND4SuHDxEvP0deDFeWKnzuZjBJEgJC9Q+3ETgEncpBVasXyVdOvWq9A8M1wn8H7GP4hwVNKSIHxbatSsaYXiN6DCNCTSik7vVDukoieJ6YScz5RLPxWOI/fPnTsb+NLio7G5ueaPRJyoxlR6Fy8cilyaHJNW0s3zNBgqPg2BBsZ1rzF5I4E0DNd4+A9zn/IhjCufe8Vd3OS+tzSIb3wY8KLsyReAiXLy8kzVzUOHbAs6plixTBbb6eE+RRtzec+5Z9fzJDq+lbynjBxQwVxzaiPMNaYdvv/BBzI2JzeQkqJUBLzKvvyyze1CnKNQF2ji/OAFM6HYSV4Y9pF+SqMQyBQM9nwwxNrlwU6qTPKdP3+xrW3EtIaSIqSI6jVqGAhQuK7B0AHQsKgEAL07f9LY2Tgdu0bPke84r+Vc3JTQvr1NNSJ+ytD13OSZi5uj6+399wjLczQo6h51lUoP+HAfx0wmfONZXq3ae/JKmQry/AuvFPArr5SX6u+9b17o7AXJaiTeu704H0d9Jq7HBZTBRLyUcyhyQEM+0CGQz+AB+3/S1suVe1Wef/5lefnlcpaPMOdcK1e+orXJ3Lw860R4ljbB0YEYHQ5tgfuoiNyn7ABEgA0HbObtMrODVXXvRUXAi+lBqI0gIZHNnTuvQG3kCI+fxF5/HngxkkdiSwe87ljcNDyIeWazZ8230UaXZgz48+Ytsm8pzmVcggm18a1q1ayRERdpo6D8TE/nCvBJIxpuqDTDVLaSAK/uXbxty4gDMCL+e6UhFNO70yhgpAO+AXsti2m+pJ3wK2XLKGiV1YZF4/L4lVcqBP3XMIRTTkiIt3pNg6VBUVYlSdQVvqM0iHj5zmDiOmXgOgLygSlJr732WkE+eWB1Nz8de9fKWhjyv3LlyrY1GwZ51wG5snPlTBxIZ0hphIOdJM3qzZmDBwVSVpSKgBcTs5lDRWUgAuZYAQQss8GyuKws2SYq2gz2RA5SMj2I88dNpA8nVaQ/aOWKj2zWftfuvW2xvrETphh4sSkBYcm8kiSWzybzGTFkYvMtjZOjsZ5TUJ997Y0wPUlEem6yhVhg0MAmjgdGPrnH/wt8VzFTRlp/WbVileWNB14B9SIQr50HjvcinvGk3c9sM9qXX9HGo4BlDDC9gnRQQd584x2VjGtJzQ8+1GNtlcaqS8WKlb3whHtZuUw5KV/xVRttp/HQgEsKwPgmZxcqDSJeACWYuE7bR5KlLmOWIV+8vHT5WkHKln3V8rRGzQ+9PK1ZW958610pUxYgI2yANXzduvUKfNmcFAZAEQdlT5wcYe6ZMzkdpsY/c9q991QoAl7v16huxjIqAy9jwifrb7PJJ+t5szzv8BGjrYfiPuDFUselUQjEz0RoRE/ix8+LSeSDhw637axi4hJs6/QxYyZY2Jufl6wvWlUFfrdyKwbOT48ckcub18m5JUvkjKreVyZOlTP7j8sXX4ZewqY0+fScOXJp8hS5NHOWXFm5VK7t3SRfB3pK3CyKa0qHn1gme9zYcWaPvLhxs5yav0AurV0lF7ZskKuH98rXn1yVW1qZ/aOwjiGOAAzAh4r44ksqbQUkAI6VXn9D6tVtaCs5sKpC26hYc6FpG+Vtvc/Chazu8LYCmV+SqKAAxkbGvBeJwMUXTP70+Plh7wEe/nuOXZiSJN5PufuJa4AH6UIaat+hveaJB/6Wry+V0zr+tjRs0NTyNELzkfxkRdqCY2SMNGrYTN58892C/KQDwaTC2vrkJ+BEucGAGZoTbRhGneQ6KiXq4769ewOpK0pFwKtJo4aS2s9bvIwGPzo3z5bscPYueFzAz4uPPaoNFHGbsI+biJ8RCT6U83XrPCdVZ/NCfQTMWJaEhQpDicnFSS+/9KJtPX/t+qdy+fQpOTxyopwbM0Yu5uTJpdG5cjZvtOzftE7T8mSpjkgZ+3Jz5EzOKDmXO1ou5ebKqXE5snfdWvlUJbIrWuGOHip+8Nq7Z4/06d3H6trxOQpco/PkQl6e5dep7BGybmy+daKAG0dn9+Lond8wWxkrv5qaaL29B161atWViLbtDKTcSrFRsd4SMRxZqRXmHuEAsfIVKnmNTaWFiq++agZopBDsaqHKizpPGmjopItGz7dwznWYa7B3zUs39RCmoQIWSCC8n/f5uSTJqdx+Ik7SxD32M/Dy1AOgMmUqSv16jQpA3/IODiy7U7D8DnkcFWfgBsg58Hr5lVekVu3apiURx4O+D1Aj7+9ll4OKgFe7yMgC3ykydNz4u4uluWV03fQgEoA42LlL5xLP7FBEnGwr5tnn7hSa2+jSigGfTQgAr+DCKm6qXKmSjbqQFlO1tEcxoHKSgx6vX/1Uzp7xepgngRHN6Qlv00BJpzKSFo2LtchI91damS9dvBj4yh9PvBvPenZ2ZsciNyJFvpGO69eZNuIZzf0qJAz5/wMIEZFRJhXQ0GhkNJrWbb2NLqyBBRb+i4qK1HOVwjS8W/6a+4SLjI6TFi3aSqVKVQMNtrx069bDpBNPfSxav4mfhu4AibAcaTvuGmDm/nNOGP7zzUgWNFAaqisHpA/qDUxD5xr3CIfUwpFneYd7F+/mSHz+OF18XHNhAAPSzTVUMz9xD6ZDePvtdwxwXJ42btxc2kR627YBXHQG7VTaioiK0HyNsgUPyU/XKXAfoGNqodcpeHnKjBfioNxIx70I4Cf9lz65bFPIQq1KUQS8enbrKg0aNCh4OZKXAy/HrCqBekSBMgcrpVfKfRNSUkSc3bt3L0hL8MRsGPBieWEa5f1QvDio7Csv23pKzk5Cj+0KwTEVyFWsJ5VdRSd/YRoUjaC4qEeXLtYoicfP1Dnid/HC9yPKHA3gxRfLFKh9qCy2UimghZTVrr106dJT5s5dJDt37rJOl0X2VqxYYyujRihoFYCcAhoLBZYv95o2NJU2ylawjhHACAVekD+tj8K8z5/HD2LnEkIHDPuBCybf+E8eOonPlaVfCnRqMP85+olr1N3Zc+Z4wBUwzgNckSptWX6SVwpSbC24ePEyE15Yhv3AvkOybOkqSU3NMMkM8ILJ0xbN2xSokFXfeMPAmHT485RzvhHG5EKeOzWS46rlywMh71IR8GL3G0YW+Gg+LhR45QaWxCFChrr7pvYtkhGPg4gTI63bFuve4DXewn5z64ctK/ywVO2tNy0vSAsMeFEQTgT2M72582lx5/S2TIRnlcsvbmovWkz8+edfyKULFwvi8jOViPS5NHKk7Ek3FYnv2L17V+ALi4fS+vY1c4OTCJAkXJwwcVJewUfHjshflix/OWCUx3aFBMDa7dGxcSpNxdhWYCeOn5Lx4ybIrNlzzA0IAGMjmZ07dsu69RulY3JnCw+AYcfBTkZjK1NGJYVhmQYaDmiKi/imB0kfD0v+vPGzP9+C85K4OXfkpcdzSO7erbvmJ8b5cvJu9felTdsoL0+VY9snyLx5C+XI4WMyauRoGyQbPGSYbNq41db9O3zouCxRUItToAO8kMJQy99/v46VEaCINwP5SVyOANpuKohUqfKGLJi/yExBSJ64sLCqK2kLpiLg1btnT1ufC2TnI0eMLLqzM0vi4JPBBzOXjx1yCPu4iTiJm6WXScv6dRtDghfL3BKWXVRKkqq/+67Z4FwPR+PEexhJll3IcetAUqRzYANfZ/vyKs5nlqezZmoDG5kno0aMLhYekZ0jOaPHyoaPN5ma4vyiiJse8623qkn9+vUNdJkhUK5iBbN3AKakie9YumxZ4AuLhzonJRWkhffTs5IWGBAj/zjCpMGdcx2pgzyDucdoM+AF2LRsFVGw12OUqoezZ8+2RkD+Y79hLfrkzsna+OZbeEbMNm3cbINPce1VogjYbSIiY0x9xFjN7BHSGEpS+TFE/vM9pUF8B/np/x7SQ37SkTRo0MiABnWxZVtVC32SKRLr0aPH5N333rMRWtoW6jbLSPPMa5UqmybEoogxKvU6CQwA80Z3X1FAa1dQtyDSQRlU0mdff/1N2ySE9DnDPu8KRUXAq2Xz5mawd+BFz+MHLnObUPBydiacAUt730aWRMamRQMNBV6sH863sAFBSRLg1bhJk0IVg9FYluUBGGzYWUVxRnFwwCP9hAPkmLHAiFlsO88YWpxM5YmLi7fVQnA2JE6YwYXnX3je7IbPv/CCTdUhfW5uK2FI44RiXPYZWrZ4kUpAowwgySvqEvWMtNEDhyLSQQMDvHgGqZAjuxsBMoyCATpOtRk0eKgBJItR8p3MlWM/A2aPzJk91/Y6GDkiz1yB8BJfunyFjZbxPCpSnQ8b6HvLqupY1lQXZ5crLsJIX9JmjHsR5erK15FTRwGU8hUqFkiyzs4VHRtvg197du9TqXWAdQzde6TYDJZhQ0eYfyUbeUydOs2cWdGGJiugufqH/YtBFOoXZYZU5VycyFc6zBYtWkrjRs0krf8gwxVGJwGwOVofQ1ER8KpZ/T2rSK6HY7NKP3jBuWPHW0WjQhEJjmj+jHhcRJxkJMgMeLEMtIGXIrdLK+A1eHCWheWbSpKqv/uetGjZxtbSd/mBfs9S1Oj69Dg4srJ0tVN1KTh6KrYnc71UMPgUD7c30GTXHCqoF7fnaoI0wugaIEbFIm3+EbAhCgDFTZGtW1vd4fuxm7A57/3Ay5HLV45UbMCX0ay6dRoWjIKxke5Hq9ZYA2MkkkbFTtEMPuECAVhNnjzDc6tRkGMHoSNHjtrUMp6nDLB9IdEhsZFnqLMegBVPJ01d9KtNj5P4hmBJkv9cR/p/4fkXDbzq12/iswnGWjmRV8xaYTelmTNnWx7T2c2bt9jmEWdljpTx4yfZlmp79x4y+xgqZ6RKxM1btdH8ZIbDC8KqEphJiJf62KJFc6t7TAmiY6L+Ydxv0qChde6hqAh4va4qDYsROvAaOHhIIeCC2Q+QisPHsl42Fa+4CvVRiPQBtMyDArzYzSWU5MVmpoR9LODVvI3MU53dVQwqPYVOQQC0o0fnmM6PqoRIjGRm28epWO3AqyQYER6gGjhokInoxA2wYrtE0h6fny/de/Yw6QxJg/TDqHZJKpEVN7HRadNGjaziIkFRmZ3a+LBEp4Ua8vJLZWxUC7XGwCc2QXv1C9YYmjVrppLWAqsX+/btt8UiD2sDXb5stTVCNrBgC7slS5fJmDETC8DLU3MqmaSAtIaKR52nvAAxJBenZlGWpBvgpaHdj3kP4Ty13E2Bcuz9d2Hc6B/1FsbJ2VP7i87gcP9DHR37/xMP/x2Rfq4z1xRXEUZvW6kabsCl0mif/un27eQ3Uvyc2fMVtGab7ZKpQAcPHJWFC5drns63bdVeeKGMbNu2SwakDzaVk/cg2ZYtV87ylPX1SQPfQl1EY6lStYq1E9JFHaxXv57Z4O9FRcCLNexnzZ5lvQIIGAq8RuXkBdwA7sjSpUttbpg/Ix4XET9xM9xO/Fu27DCwCgVegBvfVJLpdOCV1j/D0gZxdL02BeKY/HPgQUXef+Cw7N9/yLbVKhk+YqopDRA1jYpIGvxpohLRcKhQXtq/lz279ih4dbT/xU2rV6yQRg0bmHpAXpAGGidlBJN37jwU0QBoCKh3jDAaSGtDYSSMdANK2LKwy6xZ87HtzMM379ixU1YsW2V7L2ZlZds7Ro0cZSDnB6/XK1e1ewC+N5jgTVp3aXJpdCoseQdAATgOqPzs7gFMhHfsQM//nLvngC3UuQNR925MPe7dHPnv3sd/wrqBIcqaa4Ai3+BJ495II7YswMt8ugK+cSNH51o7A7xSUvra0lOYaZBKKbuNGzfb9Dy2eevdO9WkVraAY4duM/brO1gPEAkfaZZOhHQRN+0S9Z6d96mXpINRe8KeOnHv+chFwOu5P//ZJAHENgqLnskPXHD2qFz7eCJhKkVOTs49K1hJEvHTKyItEP+O7bs88ApSGwEvKhjfU5IrqTrwwv+FURJ/JadXZZSLwQWYBsvRbYCKFMG1kmQXH8ePPvqo0D1URdLsb5zkV0bGUAWv5MAXFj9dOH/BVqDt3rmz9OnZUzK15x2Tm6uVe6amcY0BbjCoOUYFpDG9pODlJFfAp2/fAXL82ElTgWbM1HowcZrtUYjkRUPDVeLA/iN2nXjIf7Ygw37D86g6Bl6vv2HgxeAKDd9JQvcCGMrYAQVhOLpwd8N4zD3H3n3PnYF7/Pc/zzU3Qu06GRgQwm5Eg0fldkvLcM11TIAVTHjeT5u5y950HOLhPvHmjRmrKqPn7EseAF5ITbR5bIi4pkybOtP2pNy754BJzMRHh0hZoVWwmjAuVMePnS4AL94BeJmNUsuMcIArOEM6SANlQ/rp0KmPe/fukcMHvY1+QlER8Prds8+Y+wOVgw8Llrxw/mR6kLObgNRssMr54ybiJG4AlPOdO3aZLaOIzWtQlq0qQcMsyc0yDbxatNUGEGu9CIZL7AGI1di5GLkyr2VtEE8aM+pIGpOTO8nMWbPMuN2jR28DhKSkkgOvB9FlbXgbtTOdPnmyjMjMlIz+/aR/nz6SntpPwS5FGtWvL5Vfe12aNW1ZoDbGxydpI9tjvfm0adOtDsyfv8RUIuyLANrGDVtl6pSZMlPP2R178aIlZgNz4IX9zKmN2ARpC08S0T6p846D/3vCh7eOP2mHg4HXAa2T0DhHkwG8XnyxbIHaCLPRNJ0erikzVN0mT5cuWW42RYCTOoMJCeBCqmJ+9KpV67TzG2K+dkhejAQzAEKejs/PL0iXn0g7YMsRFx0Gd+5FRcDr//zzP9voHZnBB4VSG7MUvJzxEhWTfR45f9xEnCA4RkTOd+3c44FXwLseduD11VeeePz11yU3wuPAy4aVtbD8TO/DPYboPWnh5SeK33jj7QLJJTjtHTuVHng9DG3asEFq1KgtkYHRRubZsQIwW/hVqVLVRq8wJmPTwpES4zK2GUah36r2toET0hiGfQdeqKHPv/CylRWrG9DwkVYABXzhsM+xUOe8efMkf3y+jGXTV+1IOZ8yZYq+f6YZsxdox7p40SIDzkULF2p9nKYS3nQD0Llz59jzAADvQhreqN/CrtXb9f1I6kiPSOUw7RIAQcJBAkLqweaE5OUkLqQt0odw4eyJpB2QoPP2S120cT/xnx3gXYfWuHFjy0vAC4M98QFur71WxSRyBkGQVnEAZrQRu+KwYdny5ptv2UoUhw6y4zq2Vo+p/7wXAKPdkg4HpKQV6RJ1ceKEiTJMQXKP5sH9qCh4/Z//YwZdPgRxdVhmViHgglkGmntkwHStIN6OOaUDXlRQpBvO9+7ZK5MmTi9i82Lfyc9vejP4v9SCLCm6L3ip+N29Sw95r9p78m61ak8Uv/3GGwpgZX+y4AVVff3NAlcJNl7BP5HGxihv7dr1FEjmm4EeR0oaXNawETYKjZRBQ9rw8Uaz8dj3qwSXNSRL1q9da9OYeqhKmzdqlOSPGSNLFi6wTXhLcgu9YGJqDPExyMFWcawdxybASKXnzp6RMwpcRw8fNrV//969smfXLtmpatuG9etlrQLiiiVLZImq2DMUVEdqe0aCHZieLnk5OTJu3Hjr/BcuWmhbkWXpvTcqV5Zqmm81a9SwVZMdeAEsLED48ivlbVAE1ZH2RV6Sp/n5U6SjSukAFPaxeXMXGmhRr5BkE/QZ4s1UYErt1UtGZCm2KFiOGD5c05Irk/T8UagoeP3L/zG0p6GDhqGcVIdljxAQEyTng+g9glH8cRBxorYCYKA4Ojh2jGDwosICtoSnFyopepDktXv7/XuS0qIrly/Ls8/+8ScNXm1btZZWrdsUqDlR2uiWLVshK1eskvXrPlZVMlEb2Cxp0LCJpKsKlJLSWxvYGpUkRivIHZKkTl2sjOCYdrFy7OjRwJv/fgmQaRMRKVHaGUQrYw75eMMmc5HYuGGzqpVtzEDfuHEzGTZ0uMR3SDQ3IfaNQACKT+zktQV9NjIqWtauWh14c/FQSMnLbeWP0W90TuHpQdi8BmcONz2ZUQJ0V/xmSoMAI5agRW1FnN+394D1BsHgxWjTlSveVlfBOnZx0v3Ai2tPOnjRS/5UwQtpqHKVKtJSGxtpBoSQoObOXWCGZhxVcQlhOL5BwwZWx5lEv3vXPvPvIjygx3A+gwZh8iS+hnUbFhoMQeJyAykM9ODYzFJQ2HMx0m/dus3sie3bd9T89OpP26goSU4sfnebQuBFYv/Lf/4v5rcCoUuznpcfvOAhQ7MKjG0YzNHnS4sYLgdAAdJDB4+Y6BoMXhhi8fuBwuBVlH4O4AV17thR6jZuanYawMjUlagYm7nAiDR2IuxCGJgZYWSkOjYQjvAYlNsndDQbTJg8yh871pYLcoMhVj+io2wwBAM9WhqjhOQpqmKWCjauHgFe5Gnzli1lg3YexU2FwIvpM//pP/0nM5whpTD8OS7fW8uLaUGsZT924hTp3qu3gQUqGE6X9GqlRejgjOYBSkzAxSkuf9I0Sy87fANeeXkTbCgcKsnJ2WHwKn2qW7u2Z2huE1lIDcYOxlA9wOaOSFrcJ1w0gKeNcvWK5YE3hclRjy6dpWXLVmYTtA5B883lKZIqAOWO/noTEakqZ1SE2QpLggqB182bNw288AcBvPC3GD9hku2B2Ltfuq2oSqG3bBNh9i7AC3cAXCtKi4ibERDA6+zZizatI1LT2CEpWfr0H2Dz11jPC0dNvunbUgIvevYnGrx+dx/wSuoUCPnkE4btJg0bSo0a73tOliox0MgKbGEB5rvsenScpxbp+cb16wNvCVMw4YPHYoSMwjLVx5+n5KU/bwExOoimTZua5FZSVAi8rl65Ir/4xS/M38OBV1R0pCXUMTaF5orCjO5h93KTMEuLGLImDaTl8idXzd+nVdtAmm1KjB61Eh886A1CsNlqSdEHNWua8RIDJRNZ/Ryjhbpvz72XtC1NotP693/7rfaqKn3Qexakm2ViYqVrly6BkD8dmjZ5slSr+pY0atRE2kRESNsolbaMowLsnUdGREvPrt1sxC5M96fFCxZI3VofSpPmzb08jQzKy2g9qrTVtHkLiWjdVnZt3x54smSoEHixWuZ//a//zYAAYk5elIrSoClI2koL2kRDrdCAl7lSDB1mIFdahNMhDnEA7o3rN7yeQXtT0to6wjM0MkyLMR/wKkkP+6ULF8iLzz8vNWu+L7U+qFOIO3fsFHI1yCeF4tq1k8qVX5fatT+8m+5atbS3rWdrzf9Uae6smdKyaRN57+135J133rZv+lBVyxaNm0jflBQ5ddIzJ4Tp4WnF0iUSp4BV54NaUuO997TO1JIP3n9fGtStK906JZc4aDkqBF6nT52S//7f/0cBeGHgBEmRtpx4mDlitGRmjzTwwlGVJWmcgb80iEEF5p4BpCziZ/47w7ILJEXUSAANHzCoJMErTGEK0+OjIuD1P//H/zTwApwwxLeJaGMgkNi5m4yfPM2M9/h5OcmrR0pP8+gtLSJuVlPFTvflF1+ZN/0UTeM4TWt8UrKpjQDYxx9vtDTfCYNXmML0s6BC4HX0yGH53//7f9vcIsCAKQmRqstirHeuB3D2yNEGBEwfYi5cSbofPIhIAxNnGd7++qtvzGvauUrkT5lhUz6weeF/wjeVZlrDFKYwFR8VAq/DBw+akyrzo5C+GMlLSx9QsPu0Y5bEwaMdwMDnAyArLWLUky3b8fi/9c0tW0Ei2M+LuW07tu+0bwqDV5jC9POgkOAFKKESMhF06vQZhYALzhnDKhLeCpilteGsI4CTNLjlXEKBF7x923az0bG0SpjCFKafPhUCr4MH9suvfvUrk7xo6GyuMZ31kHxgALMMNOCF1zIqW2mCF3GTBrdfIrPdg5fEYUWBzZu32VzNkpzbGKYwhenx0T3BCzWMNcanzbi7vIxjNuAAKFgMzm31VVpE3OwgxBxHzv02L7gAvDZtsW8q6R2EwhSmMD0eCqk2YrCnobOiaijJa/xENla9Y0vhlNb69Y6ImzSwJx/n7GQSDF6sM8QWV2bUD9u8whSmnwUVAa9/+uU/2eRV1MaP168vAl4Y7ydNm2HqGguXwaWtNrJtEit/sub6iBGjZYpPbQTIpk2fbUt54FYRVhvDFKafBxUCL1wl/vEff2lL4bB8LH5eoSSvqTNnG2gwKZu1vEpb8mJNLyZnkyZWCpg0vbCqy4RyVtZE6vr6668DT4YpTGH6KVMh8HJOqqiNAEEoyQueoSoahGc7vmClKXkBXgwsME0JYgOB0ODF3o53wjavMIXpZ0JFwOv/+2//X4FqFQxe5nYwZaYsWLjE7rsdQEqbcFRlRVeIPSdRa0OBFyAbnh4UpjD9PKgQeJ0/d84mZgMGoSQvAy/lFcu9fRLd0jmlTf60sIvJ/SSvsJ9XmML086BC4MW6Tv/PL/4fG2kECIJHGx14bVQgYDFCpK4nBbwAXJaCZmXVKb4ZAZM1vdOmz7FNMQkXBq8whennQYXA69q1a7YYISONNHT8vILBK2f0ODl18qx54CPJPCnghdMsAMaytDljxxdKs+cq4e1FWZIrqYYpTGF6fFQIvGj8gBe7594FL/8eiDNl6JAslXC+MzXtSSMAlY02h2VlF8zHBLyck6oHXk+Gwb5ls6aS1jc18O/xErvCxLZrZ2aCMD1ZdEs7V1Z0nT5liuSOGiVZQ4faBrtp/fpJv759jQcOSJeBAzNkyODBxkO1PLMyh8nwrCwZNXKUeQHk5OQa5+XlydgxY+wIu+uEG5E9Qvr37y8dExOke7eukjlsmAwZNEjS9RrxpaWmyoD+aZKRPkBGDh8u4/U98+fMlj27dj4Ra9MVAi8yDvDCw56GztzGaTPuGr+nTZ9esFkk69w/aQSgIg2OmzilEHjBrCrxpEhec2fOkO6du9hO34dVUrxw4aKtiXbmzBmTflHH3TbowXwv4tuCw/7te8/GhxkAHzdcYM5qHOzpx+4vy5Z4Ay9hKl366ssvZMrEidJfgSk+voO0jWgjUZER5v6D3Zm6Qd2+y3d3u+bo5iJ77A/nZ+8+Yf3P4g6VlTXcdsJm+hwCjHsP99HCqDv4frIJLhvj5uTkSMeOiTJ00GBZWYqb7xQCL9D0P/+//9kyi8bA7rz+idnTps2wbc4YjWQiNMeChqLhHzfdbbC3LS3sHoxkNXfBoiLgxaoShC9tD/ss7SnXrFlr/mhMJKfCkC6Xf+48FN+PQoW/F5NfbrbBZLaNC4/APja6dPGCHNi7R06dPGFlsEQ7kBEjRpivIi4/rErsLSBwq6BtUV4eu//349tWr+Ciz4R6h7t29x51BOJIOqgnDiQdA2SAK+5SKT17yqJFi+S6At4XX3wpFy9elBPHjsnJE/qNeq2kqBB4Qf/0z/9sq5OScPZhQ9py4DVaGxx74KGCDc8aYTsQs1rDJ59cUUnsU0NsJzF4jeRuZrgMeRRyz/nfBZOhrJp67dp1lRKvyLYt220jzEGDhiqAHdNKsEUmTZlZAFy4d7hdwEsTvOaoCp6Wnm5pIY/5DjeyG8z+fAvJ2tEUcKj7yi6/Ql2nrDjS8978/PNACsNU3HTrm29k1/ZttjUY5W3LlZsEdFO+1IbOMk6nz9+Qj7cekzlLtsr4GWtkeP4K6Z89T7oPmSnx6VMkNnWyRPSZJG16TpAGnfKkdWI/6ZCYaLt4devZS7p0T5GuPVOke0pvj/W6u8d/jo753zu1v/TtP0D6DciQPqoWpqpaiKll+PAR2qmO0/YyXRbMXywfrV6rAsw2OXToiHayN8xc5NWpwiDo6hSgi+DjgI4j3/q51i80gMsqwe3escMEn+KgIuD1zwpebHlGglAtJk+ZWgBeWfqBgBM+VW4fN9aHj49Psg9nojZ2MgAOFQVnV0ROpAs+AuDgI/wNKRQThrA8w7PY4FBl2R+OtCFKz5+/RLKHj7bNLW1LptgEWzV17pwFivY3bY6jA6/Jk2eonr7HMri0wAuptkLZspZ+ei3yhfPTp0/rd94o+E5URyRIluBmU09Ud/YYZE88RlKXLl3q8RI9X7LCY/3P3pncR6ynDJCa2ZyENf5pOJQHqj5xETdb4XONsjpz5qw2qpuBlIapuGjB/PnamM8FGvENa9y0nyMnr8rgiRulbd858n7n6fJWx6lSo/NMqdVtttTtOU8a9logjfsskqZ9F0uz/kulWdpyad5/mTTuu0jeTZokzaM62lZjrl2iZThNI5jZJNqdhwqXMTRLevbtL1NVEEntlyGtW0XKiOwc2+uUneZZ6CAtbZB06dJTkpK62jnal7/TdcQ57Yt65gHcbfu/c+cumTFjrm1L2KxxExk2eFDgiR9HRcDrH//xH23EjoiREBx42YdPnWYJGzhoiHTv0UfVSA8ccnLzZdiwbOmXliY9UlIkPiFeOiUnS2r//pI1PFvGjh8vEydPVmloij4zXaZOmybTZ8w0nyw/c417hCHsxElTJG/MOAPNvqn9pGOnJAXKeOmhvUxa+iBbrz5X456q6SAtXTr3MEADvEaNzCtI36SJ020NeypOac1tzM7MtEUTp+v38T3Ds7MlW9WFzKwszc/Bkq69H5yRMdD+Dxk61MKMGDHSjix13S6mne3mFB0dbbv8sLmIbTCi16KiIiUhIdGeHTFylL07KzNLK99Qe+eAjAxJHzDAjlzjnTDxU0Z7FCzDVDy0dOEiGZs3Rrr37CGdu3S2RT0xZ3y885TEpc2WD7rPkvo9ZktzBafWCkpN+nncKIi960ulkYZppABWO2WOvNF5im2Gw34S9wKsh2We79M/QyWvgfZ/XL4KJSoAdFagmjZtdkHnz0CdsV5DEMhSQaV7jx4ya/ZskyYVtQpAzBM+bhl29FLpr127aOnavYfW3/4KhiMN9IqLioDXL3/5S1tkEOkHCWGCAggfhqPnUu3ZEQtjY2NlWPaoQhnhmHAO4fMmTLENO0D3PmkZtu+j28jjfkwYwvIMz/IONrt17yWOUHGzlheN+dInlzVjA2ComT8hf6ocOHDQMrW0wOu1ChVl3rxFJiFOULHcfUuo77gf50+eJiPHjJeOXbpLbHyipKSmWd7Qw/6QdxJ+UGa2DFOgu6CSbZh+OG3dtEVmaDkwuj1K6yxT1pBy12w/L837zJcaXaZLwz4LVYJaIk0VlOACcFJuGIIbpS6VBrCC13vdpkv19pm2gxd7SoQqz0flbr36yIAhmQX/qU/svEXb9YcLZupNZtYoSes/UL74vLC/J+cIP2wIzUKhkSolxnRIkOycsaoxLZb9ii/FQUVtXv/0S1M56ClQLcbnT7TE5oybYCNjqCfsz5avDTD4g+7FTnTl2L13qmU+m3r4gYxzrnGPMH5x1/+O+zE7Y6PG4kSLypSfP8HAa9zYSXLk8FH7ptIAL2xdTZo1k/HjJpnoPOkhviWY/Xnorv0Q8AvFvCeufXvZpmpqmB6dTqhaPkU7kBnT55hkQhmvWLla1cUvJWXUCqmjoNVMVb5mqUs8sFIwaqgA1iDAjRWkHAcDmYGXPtMgbZlUS54kH8amWluhjYQqy0flxOSuJhy4/2yyw/uTuvZ4YP1ixRbaHFoY5gfMMhDg5Rj7VlLnLvZOOlv8RPG7/GjVavNu+DH0D7OmT5dPPrkU+Cvy29/8xsRcdFUSNGbseAOAjIFDVW+/qWraOEnu0u0HNxyeG6nvQKJiV2sHXAnJXawH4N4Pffc01avbxcUb4AJU9HykHdXy9Olz9k1ux2xsEAvmehPMS5reqPy6zJ07T5I7dTMVNlTaS5sHZAyRPM37Ty5eDKQ6TA8i7JgztK5OgwP1LF1VsJ0HzsioufsVtKZKvS4zpWnKQgOhRgpCDR+R7TnlD3uqypgwQZpFJlibcarej2E0GN5Fm3PXaHu9U9OldZsoyRs7odCqxKEYABs/aarEx3c004wDMEf8ZzCve0oviY6JsT1Vh2aOsPcuWbrcXIN+KP3Df/zpjzJn7lwzCi9fulTatGppw/gnTpww347Ro3MNAJAarl27YSiL0e6HAoyfkd6GZI2QzGwP+Yvjnd379JNBCloYwMcHJC8MkJcvXzXD9dYtm6Vb587St29fWbq05H1Udu3YIW+88YYW1DLp1q2XVfJQ6S5tnqQSQ8fEznJI1eswPZi240ak+UadZas9BogmT54us1Yfk0aD1kr15MkBiWm5J0UFgdLDsgOvmiq9vRU/rmAPVTr/UOX4KIwUj4rotjR0nKdaltm+krvLZN/1+/HYsRNt4O6UCgmhAAxb14ABAwr2U00bOMTybu7CxXL08OFAyEejf0js0EGqVK1iIyLoqdi0cJ7so42bI0ZmJIYli5ep6nXc1LLsETkhP+BJYMCwfXy8jU7OmOkZ8bGDIfmwZDUjooAy3/o4VMjINm3NCZBBjkztcQDTUOkubaYBduveW9auWfdE7+xd2nT5k09k2uTJtoow6j/2y/SMwbJlyw7JW3RIaqcukFqdVU3sr+CjwFV3wAr5MGNFSGB6GAa4UDXfTsyXGrGZBeaWrFG5IcvxUTg3f1KhUUvHSFMpvVKlTdsoyVUgC74fiqnX2SokJCYm2ah5MKFCYnNmCfnIgNkIe9uEKTNl7ry5smPrlkDIh6d/oKJWVbXm3XffNeACJZ3BbeXKldK0WVNp2aqFp2YtWGIuEpM1wlAf8CQwvUlEVKS5CzDgENG2nTRu3FxWrV5j3+R92x05plLYl8U48nEveuH5v5oaHhEZ9Uh2wsfN5JsZ7hX8cS4MU1FaMHe+TFTpivxC5UKyHzR4sNy4fkP652+W93vOkgY950tzBZsmvRaZXaueSl1101X68gHSozCqZv3e8+Xt+PHyQcwAAy4a/sOCyr0YqQcDOnaoUBoPg0DYnzv3SHkkjQg/svH5+YEcK0qM+DPiHo0RP6aDJCQmm+RHfqL9PQqZwR7DWaMGDeTpp582iQv/IvNUV3WyTdvWtrEsU1bGjJlgkgy9dKiEPwlMRnfslGwZ9MXNz6VVqwjbMXv+goX2TQxGjB83ztYuK2maOnGiFlKkbQ7SrWdKyPQ+KQx4UYnaxXYwW2eY7tLxo0dljDZ0VH5X9zF1TJ46Va5e/0Kih6yQap0mmUG+aZ/F0lSBq0nKQmmsRwzy9YMA6VG5dtcZUr3TBKkX3dNsVG2jYx8JUO7FaCmMWt/rXSmp/U2tBMhC3Q/FyV272bLs9yInGOGniCCEVhTdPl6Gj85TNXzGI01ZKzTayITQP/z+d6abYuxmQ1nACyRlyDctfaDpqg8y4pU290lN1/Rnmwf+4EFDpa2qbvibDFf1rbi8ex3d/OyG7Ny21TyHDx86aHMH8S6Garz3rixbusIbNlepxj9S+KRyUpdusmHjRvnsxnW5dvWqLFm02KayMOWD46c/wsD6U6RF8xfIVG3c+DihGuHv1C8tXfNosyzffE6ihm6QyOzN0mrgaqnTdaa5QTRiBBHu453DoUDpYbiRvuN9Bca3O0yQplFJBl4wTqWhyu9RmLYMQIW6B4/TzgwpL7l7z5D3YS9PPFAfOnSEREZFm5P1/chpPx99tEbbZYy0w9m9XXtJTxuoHcRMWbl8ZSDk/amIq8SbVavYUso0QKQtJokirWBDiu0QX2hk4knl4VmjJSG+k1y9dsM8zgFhvuXzYlQTv/n6a+mo+YHTLqIwBeKYgsGeVrZsGRvlTElJlfyJd2cqPIgBOdcbcv5DQC/4mYd9R6pWoImTJpkJYfmSxTJq5MhC6jbnjNj+3JcW+vbbb2XmdM8fj3yhgeJ1jjM2MxNmf3RamqeukOSc3ZIwYqd0yNomjVTyqtVnodTLWCENMlZKI1UXsVc1Tg0NTA/D9XotlBqJ4+WdpEnSJirGgAv3huBy+yHcu1+6AVioe47x+2qmnT9qqr9OcsQ2Rr6YX9vIMSZFIVFRRx5Erj7t2LFTevboa+Ydnqfd9urdT+bPmxcIeW8qAl5IC+np6QED/h1J7Jho6pbZjxQl7yViPkmcP2GqSlvRcuzICQMtvoFvYY5VcREqYXLnZK+gfMAF37r1rYzOzpbu3bvLxfOXJEorXaaK6C59SK7kI7scTZ05xzY04XyCis0YgHFEHT95qjErZIzNnyS5+ROtAuWOD8HuOkcNl6fhx06YYkPY+fqO/CnT7L0YmL04VYrQeFm0kbRw3fmeJasaMWxYpnz66TVbMocZDQ68gvnnSquWL5e5c+aaCwT5hdrUp0+azdhgruKeo9ekVvdZ0ip9hXTK2SNJuXskUY9tB62V2j1n/yCXiHvxBz1mm7H+rXZZZu+KUrW+S4/ehbQfV36uDO9eY1EFOj/v6Gfud0vpI4Myh8sk/U5XD7lOvckZO0Gyc/IkLWOwNG7RQmJUteuH5qX/B2dmy/CROTJKVelxYyfKmDH5MmniNDm4n5k5D7cZz/dafahD3+sJk8iZCrhv7wFZvXq9bNq8zRxc9+zcEQgdmoqAV8P69Qy8eBkJcbsDMW8uMbmzfvjdTHtSma3OGBXd8PFma3juG4oTvJjuU65iBenZq7cMGjjUVMMJ+VNkplaC3dqbRLZubbt4A/q2xImK0ww9YzNkSJmhaERslj5BMoxP0ErZratNKemR0tNGRtPS0mw6T0aAOQ/JTPsJTP1xYSnD1H79bIoGIApju2T0GDucF2+0GU1xkWDuGr0e044wQjPfEVtPo/qNtdHiNT5Dxik4ZqnkgVf1rOkzAjnx86JhgwZJRKRKONhjFCzIK/ISp2fq0M7DV6RG9zmqxo2RWl2myYddZ0hNlYreU4CpxrXus0OC0MOwmybk5/eSJku1hHypE51qdYby6ts3zeYKwkg++A7iiI1kOHJEngwdki2DB2VaObLqA/uajho12lygsEcxN3nqVO3UJkywmSiMwDM/lvrKvGFs3tRbbJ/MT0YLQ/Pyr1TxYzsvQIt33L7zvXzz7W25rFrRpetX5PC503Lzxk3TZjZv3BAIHZqKgFcbbXRUcMCLpZ6ZOEyCZ8+eLe0Tk0KCxZPG6N+A1/Jl3lr7rODAt7BcR3ER9sF/+ZdfSf36DaxCGRhFxJj4GxkRLa1atbIKQKHbxOmly2XtmvWyY/su2a891M4du1WyuWBuG0w4JxzMOT52rD6A6gnjXGsOtvoNDDd7/G2A3X9UOS8czHNIndgqKUM3UZ44iBM+eeq0pWPPnoOyZdM2rbyrZfHiZbbSBBUWuyHfxYAHkizfiWjfTnlS/oRATjzZxGj6pYsX5fixozYRnrXTsOV9Sf589aXcvOmtfEDdoHPDP/DQgUOyZvU62b17T4E7DaPtR09flVq9FihwjZV34sfJOwnKenxXgeudAHjV672gECAhhTlJzM773/WmtzCqUtbvu1jq9lZ1M2W+fKiSVm2V6hxXx96VPEM6dM3QTjLT5u4i7dBJsggBE/PXrd2g5bdV9u7ZZ2aKq1c+1bJnuSpPYi4Ooi5Rx4qLnNR1S/P92MbVciKxk5wo+7rsS8mQ61YmN2xRgvtREfDqlJBgRnoKlIpPJSaiGTNnmn/Go4w8lAajj48ePc4anX+jEBouFbY46aT2TJ2TkuTNqlWlQvkK5oz6epWqUrPm+9ZjAyao3zjoWUXShkR6OAI8pImj68msQPWcHo6891//IUzv5b2nsNrHe0mXLfdNmgLs4iZdhFswf5E0a9pM3nu3urz99jtSv049SYhrX6oL0N2LWJPs1Injcmj/Pjl2jFVNzhsY8Y3UZT+7DoEOgvpN/fCO3jkjiGc/+UJ2Hb4qa7adk4XrT0nWrIMSk7XenE8Br2pxOfJm7Gh5o32uVInRY8woqdl5igLOzAL+UFXIer3nGzfos1CBarE07rdEmipwNWWliAGrpPXAj6Tt4HUSNWyjxAzfKu1HbJf4kTslYfRuSVRGJY3K2iZXr3nt8L5sZVh0iaSHJf8z1AU/8Z88+qHk3nvnDmuN3ZYvWQpowSI5U6ueXP3V7+XaU8/Ilad+I4d79JcvvtQO+Pa32uEvDDwdmoqAV4aqKlW1ESKtUOkpTMjZvJjGg3MbIPGwRuDHydh98B1B8jp+zPNXolLyLfSqJUl3tIA/Vl0dNQPpCUmJQqfXIm7SwH9/BaFx0YjcdYgjjYt0u2uPQt67b5uUxbmfuc4gA+8nTkfc4xrpJN38R1oDADBeP0l0VQF5766dsktVucMHD9gUk5s3vfWjHCjzHZyTt3QeMP+vfvqZHDh2UTbsPGOgNHbBERk8db/0mbBXkvN2S+QoVflH7JDIrO0Sl71dOo7aJR0VRBoM2CSJeo/zxJzd0kHP47K3SbvhWxR0tkhsdgB49DrA48DHHR377xXinD0hrxHf4GlFp938EPLXAz/zbpj8oePCydQtQwW7usl9/3N0dH6J3wbFNL9dntNJuHznmrWDi5dkX98UOfZ0WTn71O/k/FNPy8UAn3vqt7K7TAW53LiFfDQ6V8aPzQukPDQVAa/pkyfLfzz3HwZafvCiQgzLHuE5yakEltK3v4zKVf3ZZzh8HBwKMJnCMDJnrHTv1VciouNUrWkvubnjtafw1qjywOvOYxkha1y/vhWW9eAKEq6giZ8KQWG7axBHCpj8dZXEEQ0Qycx/7WGI8MTlRkHdNcqTyhkcD+dULtJNGIgwpOmqqlj+sKVBLJOM8fbggf3yySeXLV2elORJSnfZW+WT/Dx98YYs23RKJq46IZkLj0rHcXskdsweaatgFK2STDsFpw4jd0mSAkQnBaNklXCSFCg6GDDtkg6MIGYr67HRwM3SetgWA5ROAeN8AQjpOe/wQM2790jMcwHmffEjdxg7gItXXrQ+9KRnVy4PukYdAlxgytnlnTuno2UdOf5T/sQFU4dQtTlSN7y15+4+CxjBgJd/xN3VL+/87vv4fyVvglz519/I1aeelSu/elYu//pZPX8mwL9VAHtWpbBnZXvqg/d3KAJebPn/i1/8oqCSk1DI9Wa4UcTEeN6xqGZxgWVZWCIHlfJey9UUJxMHcRFnn75pBQZwZ5OZqPdAfSfm8g18i5uUXVJ0+tRpSeqUZL0VvRLgxdERheekHs79xDVUPP91Cj742oOIsEhOlJd7zl0LBVwQYYPT5IDT9aCPm25q2bHRw5GjxwpUOtLvzmlM8IGTV2TVljMyYclRGTpln6QoSLXL3KoS0XZpryDUadx+SVCQAiiSxu4rABw4AeZ/7t6C/530f5I+l6SglQjrs/UyNkv70SqB6X3Ywmo4wvPfgC9w/ZFZ39NBwQrJDUmOcyS4WFUhI4d8rCrlBjl81AMNJ8U4gAZA3Lm7xxFAcfnDOeXnBxg/mMBcp84CUuSxO6de0NkSlndRh34sXV+2wkAKsLqi0lZhfkalMY7PypF+6YEn7k1FwIs1nf7xH39pjYxEO/DiyIeSYXv27LXJzqhm3vCtx3j+Mt2AOUtpg4aaFzIgY24BQaCGBOWuc4SDpSoc8bhu64Lpu/BJ6ZrSx9YGIi7ixMHNvHSj4mwGAMO1X33lNUQyHKKA+ZZbJaz+DB040EZ1qCyukqB6OWnGEVIClYkwfgIsnK3LEWGpXH7iP2udMyqE4d1PvBPg4ejSQAXkvcHEfcrZnxaO/OcdPAs/rlVWUU9x+D158qQ1HCcZOMmK7zhy6rLMXnlMhsw4IB0UUKKzkVQUpBQEOivodNVjMhKVAhLSUMLwHXYP9a+Dhk0Y5Uk4Dnzi9X/86ACQKSfrdcJ30vA8gzTWMGOjdFSAMuCy5/QZvceR/x01HSYlqcqI1AT4wA6I/OehrkWbvWtLwXU4JmuzXY/P3WWAVJpEHXD14cfSt7e/lXON26j09dsg4FL+12dU8lIJ7F+flaM9+z5wjm0R8Fq7erU8/8ILAZuXH7y8HalhGhmV6/TpM7J02XIZOixTYhiCj21ny16gthmoxLLKZ5xEsWR0bLwkJnW2VRp79ko1R7TeffrbsG+fvunmR8O1Hil9pXPXnhY2huf1Wd7BOe90745u185bFHHYcFmmaM7I2fXrN0zSIY2k3YEXR/7TC5UksbwtQ9OeqIzK/ZmBFyI5+QeIAgykkZ7NqZCOSCMSkOs4uAdQ+Y3uXOcaC0ayWqU3ydwDGY9vW9m4/8RBXJz7if+kCaAlPcTrAcVnNguBykpaCRcMniVBWzZt1Pp0ytLk8gBHWdKxdM1uGTJdgWKENvDMbdJxxA5JNPAISE4AiJ6bCgjIIEkFwMuACFagMUALSFl+5h0YyR3wAEIckYTi9NgoY0Mh8AnFZusiTcqk51HYfYN73tnNuNZ90iED8dIk2jt1119XfyhRn7757Jqc++BDufyrp+WTXz8T4KdVhXxazqtUxv/j/QbJxfMXAk+FpiLglTd6tNT84H3Tg4mIRENUapd414ioWCwzQ1jCIQ0wj4/h3G7denuSmbJT51DtYM5DsbvnD8ezuCAgWeGpjifvkkVLbaFE4iRumEpPmvxpdIXuwMt9S0lRUny8AQpxYR9ABAc4nL8MIESDJM+4T7pppA5wYRou4VnDnnXr8VFjiWz8cTguXrzY9hbge6lUACOzCPDVmT1njoWZNm2auWds2rTJ3uPADyIOp0IyjYNOinTgokE44gZwOSeN5CHfU1K0bNEi23mGtACkqCyUrUsT189pJT5y/IzMW31QIs04vk0S8xSI/OCDBKUNH3sVoJak91HnkvW/SVMPAC8DDo7KbQasltbpqyRi0FppO2ybtBri2bv87MAl+F0/moPe23faYasTpUWUPXWluOoAfl3f3/5OPrtxVU6NnyTnIxPlTN3mcqZRaznXJlaOtImWU926y9XDh+TQwQOBp0JTEfDqktxJgSPSKg8JdtKLH7wcIcnQgGgYrqe03vKa9uhffiXf3vpWPrl0Rfbs3icbN2w2nxSWgZ2hqiIeufirsA4QzDnXZsycrWEWWVh2Adq754A2pE9tlxXUQeYrnj17zhqtJ8reNuki2C5TFLxuy2UFkpKkam++afEQHwAAcDmmEfr/O2DjCGAg3ZBmnCEjIiPkpZdflho135f3P6gldevUleo1akr5ihWlbt16eu0D23aKho5za9ly5aRBgwZSq1YtadCwkTz//PPmf1ar9ofWEXVM6mhgx/spRwALcCLuYHYGWn/a+KYvvij+3h8TRaVKlaRho0a2/BJ1zsVLPQrOM3jAtL0Sq5JJAQiFABDsU7EqSTFaGJelathwb+Sw/Sh4ZxGA8LMDMCcFNR+8VSIzt94zfElzj0kHHzt4UU8cUy9pZ/5rD8PB73EMpnzz7Xdy9tJV+VLb7XdI/bduy63vbmtcbMmn2pOqlrh8HDj0iODVsnlz89Z24OUAIJTYCHAFZyzXADIaCY2Y5+FQRkWu816Yc675w7hz9x7UIRphsBpDGoKvkVaehzjyLUwuLinCTQI/L9JB4wMc/I0OaYvr/muwu0ZjBSRoxHXr1jXVvX79JvL++3XsWLnyW/LmG+8okDW0a3js48QHOAF0DRo2UFD7UBo2aCply74q1asDeg3lg1q1bb028hiQB7iC0+CYNAZfo5NAUruheV/cNGRghgJsbf2++rbpi8sLgD9UWrbtOyORgzeYLQo7l8eMCG6XBOWk0TslScGp05i9Eq8A5tmg9L6CF6odKmCcHp1q+DCA1Chjs0p620sNvDJmeXuRPi6i3Vh5azuj3QFcrg3626Jj2rlrw9zjSHvjnjv3P8c1nrmXJOe0ArAAyft+VAS8mNs4Zuw4i4QPIULI9dx+cpJZqOsAjX+k7ccS7+SjguNyaQzODP7zDZBLY0nuT4ivUb369aywnNrlb3hOJfNf8zOdBcDPOmTV3n5bylUob0BUq1ZdO5YpU1Fq1vxQ6nyIhFVXmjRpZtM5iBOgq1OnjgJVHalXt6G8Xa26vPZaFTuvWfMDadykiVUY0hUKQGGuO8nHz4AdFaokVpOIbNvWpEx22MF2R3zkE2oj56QJPn32guTP2yMRAz6WpBE7pJOCVgcFpXbDtphdCqBqr6DUesh6qd9nsa1/VS9lrtTpOUd5ntRTbpW6ROKHb1Zww2jvgV77EdsK1MVQwAE3HIiaWnrgNUDB63FIXnScxIPgAXDAtGHKH7MEy2NhuuCIKYNr1BdwgbDuWdpicBv1E/dom7B3jubk7erFe3gf5goHenvvs6tVEfB6/dVXLZEOHXkBRKKIxE9EHAo4SBTAwf3iIhoQHxecMS6NwWkgvCt0vsVLU8mNmrEzMAs6khbyiV4DqYUCpmHyH5WMa6h7NEqOMKDiBzzeU716dZXA6qs0VVsBqr5KV69IvXoNTG1EmmJeIiomUssrZcuYBFZT1UmeQV184YUX7TlUyb6pqZYmKqKLy6UBJm1UGMCVc6RAwpJWKjB5d/lK8avcTVRdZF4n28c7sAS4iHfr7qMyY9VhSZ+ijRjAGaGqooIWI3ztlZGkkKCap38kDZJGyuvVm8jzZV+XF1+uIC+/Ul5efrmcvPRSef1fUf768mvyUoVq8tfXP5TXW6ZKza4zJGLIx55Upu+B7wVgTQdtMb+wn6vk5QGIZ7+m7lLe8+cvkMTEZHnn3RraMb6seVnW8vMVzddXXiln51x7/vmX5c233pG4uHjJnzjR6hKg4+y4DpB4LzgBJnAMZtopWgF4QVpce+X/wvusLlEEvF5+8UUz9hIhL+BFEIkhYVxzRERE7r/mKJQd6seQS08wOfDy3+PcD55OarRrTGcvAUJtrFmzRiBe/+gfzrEekAIa5KcrHD8TzkmrbOqJ3bH2hx9KjZo1bWoOqiFSFmDUpGkT28WJvGei7ZtvvmWqYfUaNUwNI8wf//QnadGiuS0uCVCRF6FsF8QLaAKwlK9XkbwpSzzjwjDdpripQb160r5DnNm2iBfApCyvXL0hUcN3SEcFqU5j90mSHjtzzN0rHXJUylJuM2ijNE8eKS+VoUEBVh6/8oqCV9AxmF8oW1XKNeop9VU6S1BgbK/SHEBIfMHgUdo2r/Rph0oMvFzZAjrkPwM82E5feaVMQV758zDU+d1rZeTd996z1ZepR94oeOEZJY7910IR7RUi3Ecrltt5KCoCXn/5859t2WIHSv4X0TCDI3SNNZi45oCvOChU3BDxUOH9RDiAgHvuGzgS7s7t4pMGg6lChQqyceNGi4cCdD2LOwc8kGoAEydq+5kCd+cACtIQtiDcIhg1ZIoW/5GO3PPuneyMTRiYUV+AgPfx7YQj/wjr3u+YdCHp8A7S7dLs0g3Tkx7YvzfwlcVHyYmJJj2SNtJKvhDf/gPHpV7GRmk9bKuqgluMWw3ZLM0GbjAgaZi+Tj5oFievlClrjcaTCCqoFPCe1PqwvjRo2FQBvoUx5x98UFder/KWNTTjgATxat2OUrvrdAMu7GFM/wkGj2YKXsRfapLX1ENWTiVBtA/qGeWOrfX1ypU1bzRPyyBlVTBTxVvVqkudOg00H5tJk2bkaUuV9htLjfc/lNcqVfGBF2VRVsqULWej3dRP3u3aLMdgVklC7ih/d+d7+ZZRSFaa+N5z4eE+4Lf6UcDrT3/4vTUSp6JRsSAHEhapj0Jdgzzw8oCvOIhKHSoerpEGP7m4uQfTEDnyDibwlhT9uUw1adFntoyce1jGLT4qE1cel2kfnZJZ607LvPWnZf7aU7JAj/P0OHHpARm7YJ9MmH9Q8ucdkrEafuveo6YGVtZK5BiJyh2Dz/3/73Xdzqu+IQl9cmSmpmfmmlMyddVJTd8hyVu4X/KXH5PxS47LmEXHZIRy1oIjMnTeYRk4+5Ckzzwo/WcclL6Td8oa7VGLm7p27VJgV+FIXaOMOC5duVlWrtkuq9bukDXrdsvqtTtl1tzVMnrsfKlZu6Gpytbzv1RO3n2nprfyRUQ7202atded4zTnXMOpuVnzVlLp9TcCjU25zGtSvlEvaZK6SNXGXWY/CwaPiMzt0mZo6YIXeVISRBunbbCKCCPWrhOAa9So7eVpZIxt0uH2WoU55xr3GimoVXxVQc9JYtopsFSUW5nEAS/tj8Es12Fev35TPrl5Uw6uWSNnhw+XM33T5byqqifbRMq2Fq2tg6bTPLj/3iOORcCLZaDp3VH5HGBxhEIBFQl09/3kAUjpSF5e3HclRvcNfFNJgtcfnqtoS5qwuiYOk0kjPR8jfI2Shm+X+ExtHMypG7rZHC07jdwpHbM2S5fs7eaHNH/DWfOTY8MTp/4Zc+7/fw/GhcLOXVg9MnIZE99Tmqets1E6bEfxw7fpcYelLz5LVaLAOepZKO48erOtqlqchDd9SkqKlRPlE2xPDSZ6ceoAa569/MorBl7ly71mjYdliJw/oVsmORTj8MzSPgx8WEPTBlfhnUZSNTJT2jM9R/MB+5cfqGI1v1oM3vxo4EVYZecL5ne9sMECRkGVnb3NsbPB+Z1h++TvNamUPKLRAzicA/Y0bqRpbIXOVklY1EBMFIzY3mvQzJkRCOvspoBXxYqVbcMa51tJBxAqL2H2OyDfCcvoNh2J2cS0fHinZ9C/O5UL4MIW7amTnsT1jabh0N5dcunUSbl88Zxc++SsXL5y1r7n0KHD9/WyDwleqCBEBFgQOQ0fCgUgJCoUqHDtXsD2qMQ7KLhQ7+Ia8fiJa86u5J17Dqx804MayY+hZ//4grzbeXpBozfjMqNaVNi8vdIhwDGjtfLmet7ggEdStgKZVuY+k/fL/DWHZO6qA7Jw3WHlQ/fm9SGuwWsPyYKPDgT4oMxffUh6j98psZlbbBoLE31jaKSkjVE6jTdmlDYWTWNHBVaPtwXYO+8zal2xghcbvmz8+GOrO6jGziYYiihD7Kc0Vnrzl14OqIllKkhjlaRaq7Tlpogx+yIqOlISVB1N7Zcmvfv0kThtZDQwm5WhTGNs3TZKG1cTa2yoSZUadZEGKXMNvBiBDAaqpgM3GQD5wcWxAxlTPVVy8+YobrUjU37aZW6yqT7MVXTXOQY/63+f/3+PMbsL2Uqp685k4NVnz9BNPrl26M7d/1CENEebyhszTvMBg3x5KV/hNduwhvxyDuLMmImIipBk9jrt10/69E3VvNTOIjpK7zFFz8vT4E6Bd86eM6dQWlx6/P/dooSfahu9EjBr0Fb5Ju9bvzL/zFAgFhK8du7YYRWKl7qGD1HZ3Lkjl4HBxLPFDV68M5hCVXw3WGCZo8+SDs69tJYceD3z7B+kSsJE8/TGy5vh+zitwPGMlgFYObskMVcbgZ5TSeMyN0vk0I3WaO6u5YTtRXt/JCIMxffhBAWkItdViuuo705Utjj0P8z7AbBEbTgAZaLG1Qkw0/ThG0V4Vl2IzVNwU47OUdAdt186jD8gaRPWFCt49VNQ2bZ9u42+Ih0gVSEFMNLIf8rPlTVHJAvKE6kLewyNAzcQ1EEajgGTSgmDB2eavZZ3wKijBw8ekhUr1thKsYR1jEpU/b0PzG72crnXpWrieC2rbVYGwSOPDTM2eRKUliv3g0HH/QfcbGoP5Q/zDO/yHe/FwffdfyR0V/eD+YcSbQKpjbZdv34DD2yUGzfypFiAy2a6aJ5mZWYZHpCXCDVIU4xKM6MjIbGjqZEmhWkZ8Cz+iA7AWLmXNvcwaSVNhCM830ubBW/ceSjDfUib1wbtFRHveBkIDQpCvDh45INI6RGCiWeLC7wQffmIUBQqDgeypAGwcvY70l6i4PXM7+TVDhOs4lGJI9JXy5uthkrlpmlSpfkAqdIiQ6rH5Er8wI8lYfBG27SBdaGitWfugC+RgZ5W2DH7pGP2TpPIHplR/1Sic0wDQNpiEjOqYrzGGz9kkyQNU9BS9TVRz6P6rZA32wyVCpGDC7hmr1nSLkfBT9MycNziYgWv7Vu32JLVlIsDmitXrsmrr1UyZiliyguiHAE2jPnY8Riix1nX1JqAJMUcWlYVZSYHkkGHDh1k3Ph82bVrl7Ro0UJGjcyRQweP2JrrbDdvYBetAKYSWLnyFT0Aa9hD80c7BC0DgMhAJABetdM2Fvr/ODk2c9s9tZsfSuQpHQYb6+CCA9BgN4wMSKgAV3yHjraq7s6du4SlzgdkDJJ+qWnaOWw1v0GWksa8NGDwUIlSCYznmIPcqnWkGfoBsLeqvW0g6drivdgJG2ANR1RG59LDtwOy61avDqT+LhUBr+f+/Gdbr941cgALIINIRDBQeddCG+b9z/4Y4oPu9R6/ZOjILyHyrANc3lGiauPTv5OqHfJNeuqgXKvnLCkbMVjKRA6RVxy3GSRth24waaizNpKEkQCY5zhp9qhRCjRj90ncuL0q+fwAziu8UgLz/xyjusaN3y5tRm+QmPG7JGqMSmTjd0vN/nOlbORQqdQ8I8AD7RiZ/pHEDdkiw0ZPL3abV60PPtAyum09OpX1ay0bjOmVK79pa/hTdyDKi/JkTid2mZcUvJAQnI2L46yZc2zElPX6aTTYbPLzp8jcuYvk7Xeqm5sJKszRI8dtfXfUS6QFjPh1VYIzyeP9SIkauNI6HqQpP1g1UsmL8vGDyuPi9sN3yCdXi0cIcER+YjxnZyjnFoEkihRFZxAZHWMuD9jQkpO7GRghubJXA/s04JpToWJFm+GBNEa+O4kWIz72L9754ksvFcz1paNyqi9t1qnAnFPWCCjUB08aP2buWpgKSCeS99KFRVdVLQJeL/z1L7aVuZO2eCkAAJEIXghaOuI8FIBAvKM4RkruJcFxLThu75oXnrT5JUcaQkm6SgBeNeLHSMygdQpI26VqbI5UbTdSqkaPKDi+FZtrSwKz9G/7rC0SqWHbs3qBghnLAtfvu0jq9lss9dKWSt20JQHmPJiD73n/eXejHvOU50qTnvOVOZ9n59EDNS5tmDEaL8utIGE07b9UPuw+U97Q9FWLGiGV4Ujl6JE2CodfVWrG8GIHr/feedtW4KAHZxWLuXPnS/v2CVKvXiOb6wgYUfeQuChPHG0Br4oVK5l64ibv9+uXISeOn7R3Yb9hA4rhWaNk+rTZxizdNHnKFHt+3ryFcmD/EYmLSzDworG2aRPtNbQKNaRhylwbOGEAg5UoOit4wK0Hb1FVW6VW7RDiGJUMsC1cGGCbDO6TeO/HAGOyquQcrWMpsDUW5Q7KR04+2ppuDyLaDG0atQ6p88033/UGPRR8yJeROXmmHrIJTH7+ZFsMYfSosTJx4jSZPHmGjBgxwpaFZ/csdvlBrWSBUgMw7RjoPOgQKC/KN1TbDUV8I8CFbRNABGsAPYDs8iefBELdpSLghZMq04NchLwQpHbniPD+xHDNgUUwce9e6t6jEODFu4LJxe2/Rzr84UmvOwfEQr2nuAjw+rBDtrRJX6FgtNk2ZaikktZrbQYXHD/oOt3r1bUnjx2GurhNJaVdUkuvV9T7ryq/1naoVGk1SKq2GKiqpsdVW949L8QtNZzvXiV9vnzUMFX9VA2MypRykcOkvJ6XC1xrnfGRSREYkd38PkCsUmuNgzS2GigV4daDpGXGKmmbuVlSevUpdvDCAPvX556zJcfxS6NsmNlRuUoVeb3y62ZToeyQymhs7Tu0t8bwbo33bf9CMxSr1LVu7UZrWEz2Hzs2XxvbRH3PHPn44w2yceMmBcV5BmBz5sxXoEuTZcuWS07e2AJJgZ2CzE5T7g15L3m6SsI7VdrZZgsYuvmTH6raiD3MlthR8AnFSEneyhYPZoCO99pR/3dUILsXR2XvkI272QSnsOrF/4dh/zMwUg7tGWBo3LixSV5MOXOSbKTmx7btOw3smQqUkzNGpa2pMm/uQtm0cbMCy3rtBBZZni5YuNgAEFslHYZTOVHpPdWxjO1kda8Rz2AifTgsA15MPwI7GD0dnxd6Oegi4PVqhQrm6s+LHAEGENc8oCosvXA/eGI0ROY54PsxFAxQjogz+P3OPkZ4l173LOkpSQK8arXqLU36LpX2qjay0QKg4GdWxwQwMO4i/dBYWqnEVak1AOd4iJRXACsHRzyAg8K82naIPc/7Xm09RF5tNViBiHMFRY2/SvRwbTDeelWMhqEmwUhflfV+xVYZUoFwUVkSreptxzGquihwFDd4QVEREaZasOY/Kj3lhkry2uuVrAJTlpQfZeyG82vVqRfw4/LsVmfPXDB3CVSVceMnmrMlqsqq1attscYtW7apWjnfGpdrTCtWrCxYzBLwqlYN1bKcVIufIEkK5DCDGSxESFk1GLDZAM0kpQAn6v1ELTvKD2ahw/YqPcdquJgsj6Mzt0nUsK0SOXSLRMF6HqXXIlQVZ1ONSO7psc3gDXp/o8RoR9FeyyRxxFaNe5t0y9shPfM2ydrN+ywPQjF5BvuvYc8C9LE3uTBoIPx3jsDcx4aI5MXIK8Z58pNViS+cu2Rza3G3QfKaP3+J2RORgMjbjRu22rZrAwYMMpWcLdQWLVxqzzvw8gz3ZYQt95wJ4EFE+8Qhm84McwJlPzB9QOBuUSoCXm9UqWybjroGz9GBF+SMa36ikpFJwRT87A8lel6XHj8RZzAgcc0BKc/4Ja9Q7yhOAryatIiXD7rPlXitzDFZm6RVxmqp12uu1FXm3I1C2eifSl1MTameMFaqRAyTqpFZUkUlpcp6fC0iUyWwYVJJj/CrbeFhdqwUuF5wbte9a1XaDJU3FbSqKGhVacVRueUQM8hX1euv6/ubKagCYAzjO+M0/xuqyllHVSdUT9RZhv5pROzxWBLgtWLpEnnuL8/ZFCinJrKGGbYYr5O8Yw2N8zeqvqmNoazUa9C4wAk1sWOynDh5RhtLtPTrn6EgNdemuKDSYOzFZsNUqyWLV8jsWfOlQ/sOtmLK+vUfm5OlqY5RsQEbTXlT7eMyt0g7lYgjh2zSzsUDnlbp66VX/i7pO26z9Bu7XoZM2SrDZ+yQUbN2yZgF+yRn+jYZmbdYRo9dKOMmLZVJ05bLzDkfybxFH8vy1dtky9YDsmPnYdmz76gcOHhSjp84J+cvfCLXtG7yfYAL3+hnBzocaUMw7YD6jNQEEDl/LqQT2Bm5nartsX+Nf8/WxHvJG4AH8ELNc2o4u1fv2rnbjPIA/eyZ87QD2CkLFy6x+ACXlSvXysIFS2X27Hn6jDc3lRFdABDwQgV96633rLNBMnMDZvdjyhoGX7BxIXl1iI0NqS46KgJe1d99V9j4lBdCHPlYR0QQDEiECQVSXA8Fao9KvNulx0+hwMtvkwtOV6h3FCcBXm0j2ss7yZNtWZYERhMVHNyQOpIOPj4co7WnZbUCVkQwdYRRRgU2G27nv6oVnbC9FPDOIA6+7v1P0ucBI0ASlYTzzmP2mSTRJe/uwnusGhqND5KmBTb/oxHbJFbT6U2V2aWq0g4ZOmm9qhPtSgS8Jo0fbwZapC4MvzQoGpir7H7wcl7cdes3KpCakAhprEgE2GfodDnHBsMsEdwmWLKcDVmzs0ZLWlq6J41tVWnHD17vfWCe4bXqt5LhuXMlf/IyWbN+txw+ctr2daSeOSAAPAAKGhhMg+bIdcI40HFg45j/XL97zw8u3nN8K8fC9z3mOvmCFIPw4M5hN4pOp+1MIw4M+O9xYTUSyeavz//VOgQkV1RGgKdbt15y9twF26eVebFsMrxm9XrZsGGzqXQY6bEb5oweJ1lZI2XY0GE2JQ31HfBzgyiMCOO1zx6wfDNx8l2MUDLKiV19omp4/fulSu+ePSUpIUHatW0r0cqJHTrIxHHj7uugChUBr3p16hQBLzLOERlAIvxEGDI4mIKf/aEUPEjgiDiDr1MZ3DWOwWBWkgR4UXhvRgzQ3nuTreQZPHoEAyBINR0AEv2PERe7CcDVcsA6adR3mTTOWCtNB603bjLQOxbiwR97190xcK2hSkz1Bq2QegOXSN2MxVJ/yBpbKiZB1b/O+Z6RmPjd0Y2skQ6WTk4IpLlT3l7zLs8cPV7atYsuEfAaPWKENGrU0HpzGqSrQ5QT9YxGSflR38pXqKQNrYK8X6uuAQ/gxeR1GsKaNWtM2mJOHYs0onLSyJDCUBEZecRus2TpMrs2dfqMAv+kiKgYM1gDXk2bNTWpBUBwI9Ok4+dIANHzLzxvkhc+c05q4sgCoCy3BMBMmzpT8vImyEer16rKuNMM9EhZGO/z8ydZZ0EZoF7yvFMb62o5tVfJKSEuTuJj46SPAtTI4cNl7qxZsl07EFZh+bFUBLxYjJDK6m/wfmDy/hce4eMaFSy4oB3Qcd+971GIZ3hHKJAKdZ0eBnHaXeNYGuD1YaP2Ur3zTIkegeOp5wbhwAI2aUw5hqOqazEqgcUNWy9dMqZKUrcB0qv3QOmY3F269ugjPXv3l05detiR/4nJ3aRz917SO3WAdOzc3a5zDeY8uWsv7Xz6SUrvNH1HD0lK7i1xXbKldqdJ0ih1mUQM3WQjm04ahC1Nyu1hJC6z4WyTvqMWayOPk2ithCUBXtDhgwetgjdv1FgStMdFBaFcYQDNK+cbCl4V5LnnnpPXX69qRmXr4RV4aFxsjosKxLQqQGz48Gwz0OP7NX7cJH1nrrzz7ntSqVJlOahSA3slAFyezStKKlR81VQcdjknXuKEUWPdOYDGCBxSHQ0YdRTpxCSISZNkfH6+jBk33ga75s6bZ64Z06ZPl0mTJpsNOTcvV0aOHCVZmZkyZPBgGaQqWapKNn369JYUbdhwzx7dZfDAgSrNDLX76Wlp0rdXL0np0UO6de4iXTt3Vqkk3tSpuJgYiY1uJ3Ht2klMVJT06NpVumuYbsnJkpzY0SQZ8rVHt26S3r+/jB+fbyCPlIRAgaT7pz//SZ555lmpWvXtAr85QH3+oqVmx8IeGaGSEEuLjx6dK7NU9Z7OxjhTp5mUi20Soz/SVHK3nhKlz8donrZt01oO6PtLmoqAF5lCD+Rv8H7pif+IgRSsI3ct2IeK64AXYd37HoV4xonFwc/TMyJm+69T2f1hOQZLYiVJDrys91F15MOm0VKrUYJ80DhZ6sWpNNZ3kjTpmCkNO2ZLg4RMaZI0WhrHZ0mLFtHSqnkzaauNp0XTJsYRes61Ni1aGLdq1kzaRURI68B5VJs2Fo7zGG2A7pznWjRtquGa23Ocw21btpRmChAf1m2jHC2NW3aX1h0GSsv2/aVpm67yl7JvS51GmuaG7aReoyirzO3i4q2BR2nPWVLgFUxTtKG30bQnKZDFayPt0aWL7co0T4Fi5rSpUq5MGZuK4np5DMyHDykg9eptCzLiFgGA5OaOs2H9tPSBsmTJUlU7X5U5s+fL8uWrVWJTQFbwQv3soGBQ4913pNqbb0ilihWlQ6DBd4yPt1UvOrbvYFLDCAWdeSY1bJGTCmKXLl6UK6ouIkGgWn6j9ZFpTw9SdUqLSNteVaVnqXQ6MD1dsjOHCftgXld1N1Y7Ac9VwgP0bim9zQaZ2DFRmmsdZNklAItBDwz1bO+HlMsEbAZGADfnKtFWAbV1yxaBWEuWioAXyB0MXsHSExIOoOAnriHl+InwgAkA5J59FAoVt6Ng6Q/yS2IcATgAzX+tJMmBVyiO1h5t+5bNgZBPFtHg/v3fni6SZhvRMwnl8YHXgyhLpZI333xHIiKiPa/udu0lPT1D2MkK+xZaAyrjiy+9otLaq7J2zTqTEnbs2Kn390tch46eh71ym4h2Mkulo793WrZ4sdSt28BUaFPH28UqUGXLqZPk6R5Tz2fMnCVlylaQunXqm9Q5derUAteJaFXjmaQdHRsvbdpGSN+UlMCbS5aKgBfb/b/22mvW0B0HSz+ABuqZn7gXfA0ibLB697DEM4CXn7gGh7KD+cGTeJ2E6J4JDl/c5MCLhkGjL8R6bdvmLYGQTxYFg1dw2p8k8GLRx5defFEbSeuCUUcArEeP3rbJCw6vjFgy/QhmaH/btl2yePFyie2Q6DVObWTYduLjEux9YRL5oHp1ads2yozuSLTkD+r15k1bbFAFFxRcWjDQY+xnbursWXOsvjgpGGm9ZfNWxWLPehgqAl5sfYb9wDV+mPNg2xGjK37iGv4locivuj0K8cy9wIu4gt/pB0nS7KQ29x1/K2GRPgxej4fmz5ktf/zTnwvW7jJJShtdVFQ7c4VAdWSKG8ZknFbZho/GaECHahOpEkZkrOzYuj3wxjCdPXNaqlZ5w7N9aV5aPSDPoqJs9gK2PYz4qOA5uXmmOiJxuTpDfrZo3loWK8g9LioCXnNnzZRfPfWUNv7b5siG7gsoBIMXYBBsX+K/G+b2U3GD18PE7cALaZBv4FvcvZKiMHg9PhqoGsJfX3hBgSjCQIt0mxoZACgMzzZXL84bVeQa91mwsGXLNvf02v57JuxhlStXsUGMArcHzTfLP83HgjwN5LHrNLCXNWveXAb27x940+OhIuDFMOYvfvELsxfhQ4MPC7P+g509Yf/IHsR5MFBxHkrFexjimVDg5eJ17+ToTx/EOdIZaecb+JaSVhHuB14U9I4tWwMhnywCvH7778+Y6B8KvFi3aeXSJYHQTw7NmDpV/vD730uTJt7ieQySuIblGppjWw1UJa5GDZrK9MmTA28IUzCtVGm1XNmy0rpVpOWp86kLla9tA4b+GtVrSXZmZuANj4+KgBejJv/tv/43sx3Q+J0jHr44SDN+gAgGL+hxgFcoldVvb+M/kqN/Cy2Ot4JGQ4ubfvPvv9GeKFYbuxa0Nng/YwTduXVbIOSTR//yL09JO1XBYoLTrlJXu7hYM+o+ibRrxw55/bXXpEy5irbGepuoaOUoVSdj7LytShGc123QUBrVaygnjh0LPBmmexF5VLN6dVucsHnLVqqesxx0pIIVees4St6v9aG8parmRyWwRPjDUBHwgl5ScRx/G0CHRu8kFxzb/AAGUAW7QaDSBS8mh0sDbhT+cA8iwgZPRXLvQip0xDXSgGrr/39AgctJjjge3rxZGARLgtL7pcpf/uM/5NWKFQpxReVYLXwknCeV+vfpIy88/9ciaX+1YkWJaNnSlm1+kmn1ipXSTlXIt994Qyq9+qqUV+mhyuuvS60aNczfacP69YGQYXpY2rt7l3RKSJAa77wjlStVkvLlylmeVn/7bYlo01oWzpsbCFk6FBK8OiUmShktfADHv1EqTnqwAw+mIwSPJAJuSEEcIT+4+MM9iAjLM0hQjngngOreDQWHY2SU0RBGSFy6+YaSXAonTGEK0+OnkOCF890vf/lLW5AMtY05Zx4IeEv2uhnfzrfLD0qcE8YPXh7AhF7z617EM8HvJr5gtdQBGgDJkbRhnGdtdNLMESfbL74oud2ywxSmMD1+CgleEJ72zH3yGv4XBYZvJBpsSExOBRiQsgAOPyGRAXp+kAkGogcRoARQOXJgFhwXgOZAyk2YRTokjRyRxL5SDlOYwvTzonuCF9MJsB2wpg8gAiAhUWFLAhicERxQw6YE2Dhw4hyjul/SCgVe/If9zzriP884IkywRAdwYdcCpEgLTLow1AOqqL2k43HYu8IUpjA9XroneEHfqZRT98Patg8bM8qRegAEpC9n/3JSGKolYOIACWnNPzWHc7+hHUKqw1MXRkLyE2HdNd6BmuqM/jBxEScqopOyAFKzb2k64b27d+tzhacshSlMYfp50H3ByxHzyZ555mnbegopCwkIyQanUL/KBoC4kUbABVBxkhJH/wRviPC4ZCDN4UjqJ9RO3gHxrBsEgAE1QIo4sXERD2CJlEW403pt/ty5T/wIWZjCFKYfTg8FXtBXClRdkjvJn//4R1tZk6kCAIaTtgAUgAyVDTVzyJAhti4Yi/Uz65yVEZnkyT1ADI94pDHcL9yCdDCghZRFWJ5hWkJ2drYtJ5uVNdwAiiU4AFDi9IDSW7Ru2bJlNr3p1MkTgVSHKUxh+rnSQ4OXn3JGjrSlSX73u9/ZXDIkL6eqAWZIUWymwCqKrJNtKzaWLSPPv/CCra7IeuSszsnEWcICeP3697dr3CMMYb1nnrdNGlieg+2vzFM+EA+M9DYmb4yMVoALS1phCtPfD/0g8HKEJ26vHj1s3fvy5ctL5y6dbTIsm4YiTSFhATRIS9i1AB/WAWKN8kGDB9vSvUhL7FLCOde4x3IbhOUZJDXegTTGO3k3k0PZyXdAv35h58OfIDEYFKYwPQqFmtr3o8DLT7x8ycIFktC+vbxZtYr86U9/lGeeecbbhaR2bYmNjZGUXim2pAbe+yxwxqJx7ujOuYfKycajSGLvf/CBgmMVqV2zpsTHxdn6S6iwYfrpEn6EYQrToxALPgZTsYFXKMLVYblKUBj8WZa2VfPmUvv99+WdatWkqqqTlSu9ZtMOALt3335b6tSqJc0aNzYAHKzqKCtXnj93LvC2MP1cKAxeYXpUeuzgFaYwhaIneY5nmJ5MClVnwuAVpjCF6SdIIv9/khTTbSmbtnoAAAAASUVORK5CYII=" />
            {{-- <img width="100%" src="{{ public_path('assset/image/demage_details.PNG') }}" alt="No Image"> --}}
        </div>
        <div class="col-md-8">
            <table>
                <tbody>
                    <tr class="font" style="background: rgb(179, 173, 173); font-weight: bold">
                        <td class="ps-2">Damage Section</td>
                        <td>Damage Level</td>
                        <td>Comments</td>
                    </tr>
                    <tr class="bg-gray-clr font-0">
                        <td class="ps-2">Front Bumper Bar</td>
                        <td>{{ $accident_service_report->demageValues[0]->demage_level ?? '--'}}</td>
                        <td>{{ $accident_service_report->demageValues[0]->comment ?? '--'}}</td>
                    </tr>
                    <tr class="font-0">
                        <td class="ps-2">Left Front Guard</td>
                        <td>{{ $accident_service_report->demageValues[1]->demage_level ?? '--'}}</td>
                        <td>{{ $accident_service_report->demageValues[1]->comment ?? '--'}}</td>
                    </tr>
                    <tr class="bg-gray-clr font-0">
                        <td class="ps-2">Left Front Door</td>
                        <td>{{ $accident_service_report->demageValues[2]->demage_level ?? '--'}}</td>
                        <td>{{ $accident_service_report->demageValues[2]->comment ?? '--'}}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr class="font">
                        <td><span style="font-weight: bold " class="ps-2">Repair Duration Days:</span> </td>
                        <td>{{ $accident_service_report->repair_duration_days }}</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- Demage Details End --}}
    <br>




    {{-- Assessor Details Start --}}
    <div class="row mb-5">
        <div class="col-md-12">
            <table class="table" border="0" id="detail-assessment-4" width="100%">
                <tbody>
                    <tr class="table-header-bg-clr" style="margin-top: 5px">
                        <td colspan="12" width="100%"  style=" color:white; text-align:left;"
                                class="text-right font ps-2">
                            Assessor Details
                        </td>
                    </tr>
                    @forelse ($accident_service_report->serviceAssessors as $service_assessor)
                        {{-- @dd($service_assessor->assessor) --}}
                        <tr>
                            <td class="bg-gray-clr"><span class="font ps-2" style="font-weight:bold">Assessor:
                                </span> <span class="font-0"> {{ $service_assessor->assessor->assessor ?? '--' }} </span></td>
                            <td class="bg-gray-clr "><span class="font" style="font-weight:bold">Email:
                                </span> <span class="font-0"> {{ $service_assessor->assessor->email ?? '--' }} </span></td>
                            <td class="bg-gray-clr "><span class="font" style="font-weight:bold">Inspection Date: </span>
                                 <span class="font-0">  {{ $service_assessor->assessor->inspection_date ?? '--' }} </span></td>
                        </tr>
                        <tr>
                            <td ><span class="font ps-2" style="font-weight:bold">Phone:</span> <span class="font-0"> {{ $service_assessor->assessor->phone_number ?? '--' }} </span></td>
                            <td><span class="font" style="font-weight:bold">Mobile: </span>  <span class="font-0">  {{ $service_assessor->assessor->mobile_number ?? '--' }} </span> </td>
                            <td ><span class="font" style="font-weight:bold">Assessment Date: </span> <span class="font-0"> {{ $service_assessor->assessor->assessment_date ?? '--' }} </span></td>
                        </tr>
                        <tr>
                            <td class="bg-gray-clr"><span class="font ps-2" style="font-weight:bold">Inspection Address:</span> <span class="font-0">  {{ $service_assessor->assessor->address ?? '--' }} </span>
                            </td>
                        </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    {{-- Assessor Details End --}}
</body>

</html>
