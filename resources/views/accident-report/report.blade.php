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
                            <img class="img " style="width:85%; height: 80px;" src="images/logo.jpeg" alt="" >
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
                                ABN: 76 668 644 246 <br>
                                Mobile: 0422 383 314 <br>
                                Email: allstatesvla@gmail.com <br>
                                6 Baxter Count Thomastown VIC 3074
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
                 <td class="align-middle ps-2 " style="color: #2587be;">
                   Tax Invoice:
                {{$accident_service_report['tax_invoice'] ?? $accident_service_report['id'] }}
            </td>
    <!-- <td></td> -->
    <td colspan="5" class="font pe-2 align-middle" style="color: #2587be; text-align: right;">
        Date:{{ date('d-m-Y', strtotime($accident_service_report['invoice_date'] ?? '--' )) }}
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
                        {{-- <td width="200px">National Motor Claims
                            PO Box 2000
                            Greenvale Vic 3059
                        </td> --}}
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
                        {{-- @if(isset($accident_service_report['vehicle'])) --}}
                        <td class="font-0">{{ $accident_service_report['vehicle'] ?? '--'}}
                            {{-- @else
                              --
                            @endif --}}
                        </td>

                        <td><b class="font">Claim No:</b></td>
                        {{-- @if(isset($accident_service_report['claim_no'])) --}}
                        <td class="font-0">{{ $accident_service_report['claim_no'] ?? '--' }}
                            {{-- @else
                            --
                            @endif --}}
                        </td>
                    </tr>
                    <tr>
                        <td><b class="font ps-2">Rego:</b></td>
                        {{-- @if(isset($accident_service_report['rego'])) --}}
                        <td class="font-0">{{ $accident_service_report['rego'] ?? '--' }}
                            {{-- @else
                            --
                            @endif --}}
                        </td>

                        <td><b class="font">Policy No:</b></td>
                        {{-- @if(isset($accident_service_report['policy_no'])) --}}
                        <td class="font-0">{{ $accident_service_report['policy_no'] ?? '--'  }}
                            {{-- @else
                            --
                            @endif --}}
                        </td>
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
                        <td  class="font ps-2 align-middle" style=" color:black; text-align:left;">
                            Banking Details
                        </td>

                        @if(isset($accident_service_report['banking_details']))
                        <td class="font-0">{{ $accident_service_report['banking_details'] ?? '--'  }}
                            @else
                            abc
                            @endif
                        </td>
                        <td></td>
                        <td colspan="3" class="font" style="color:black; text-align:left;font-weight:bold;">
                            Invoice Total
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="font-0 ps-2" style="border-bottom-style: hidden;">
                            {{-- ${{ $accident_service_report['banking_details'] ?? '--' }} --}}

                            BSB: 062692 <br>
                            Account number: 78350330 <br>
                            Account Name: All States vehicle loss assessing


                            {{-- Commonwealth Bank
                            GBS CORPORATION Sidiros family trust
                            BSB 063-157
                            A/C 1033-169 5
                            Direct Debit Ple ase include your name and AAS Reference
                            number
                            Cheque Payable to Gbs Corporation and reference number on the
                            back of cheque --}}
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
                            <img class="img " style="width:85%; height: 80px; margin-top:2px;" src="images/logo.jpeg" alt="" >

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
                                ABN: 76 668 644 246 <br>
                                Mobile: 0422 383 314 <br>
                                Email: allstatesvla@gmail.com <br>
                                6 Baxter Count Thomastown VIC 3074
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
                            Date: {{ date('d-m-Y', strtotime($accident_service_report['invoice_date'])) }}</td>
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
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['claim_no'] ?? '--' }}</td>
                    </tr>
                    <tr class="mt-2">
                        <td colspan="2" class="font ps-2" style=" color:black; text-align:left;">
                            On Behalf Of:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['on_behalf_of'] ?? '--' }}</td>
                    </tr>
                    <tr class="bg-gray-clr mt-2">
                        <td colspan="2" class="bg-gray-clr font ps-2" style=" color:black; text-align:left;">
                            Assessment Type:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['assessment_type'] ?? '--' }}</td>
                        <td colspan="2" class="bg-gray-clr font" style=" color:black; text-align:left;">
                            Estimate No:
                        </td>
                        <td class="font-0" style=" color:black; text-align:left;">{{ $accident_service_report['estimate_no'] ?? '--' }}</td>
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
                        <td class="font ps-2" type="text" style=" color:white; text-align:left;" colspan="9">
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

                            <td colspan="1" class="font ps-2" style=" color:black; text-align:left;">
                                Repairer Address:
                            </td>
                            <td class="font-0" style=" color:black; text-align:left;">{{$service_repairer['repairers']['address'] ?? '--'}}</td>

                            <td colspan="1"></td>
                            <td style=" color:black; text-align:left;"></td>
                        </tr>
                        <tr>
                            <td colspan="1" class="font ps-2" style=" color:black; text-align:left;">
                                Contact:
                            </td>
                            <td class="font-0" style=" color:black; text-align:left;">{{$service_repairer['repairers']['contact'] ?? '--'}}</td>


                            <td colspan="1" class="font ps-2" style=" color:black; text-align:left;">
                                Email:
                            </td>
                            <td class="font" style=" color:black; text-align:left;">{{$service_repairer['repairers']['email'] ?? '--'}}</td>

                            <td colspan="1" class="font ps-2" style=" color:black; text-align:left;">
                                ABN:
                            </td>
                            <td class="font-0" style=" color:black; text-align:left;">{{$service_repairer['repairers']['mobile'] ?? '--'}}</td>

                            {{-- <td colspan="1" class="font" style=" color:black; text-align:left;">
                                Phone:
                            </td>
                            <td class="font-0" style=" color:black; text-align:left;">{{$service_repairer['repairers']['phone'] ?? '--'}}</td> --}}

                            {{-- <td colspan="1" class="font" style=" color:black; text-align:left;">
                                Mobile:
                            </td>
                            <td class="font-0" style=" color:black; text-align:left;">{{$service_repairer['repairers']['mobile'] ?? '--'}}</td> --}}
                        </tr>

                        {{-- <tr class="bg-gray-clr">>

                            <td colspan="1" class="font" style=" color:black; text-align:left;">
                                ABN:
                            </td>
                            <td class="font-0" style=" color:black; text-align:left;">{{$service_repairer['repairers']['mobile'] ?? '--'}}</td>

                        </tr> --}}
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
                        {{-- <td class="font ps-2"  colspan="2" style="font-weight: bold">Total Labour</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[5]->quoted ?? '--' }}</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[5]->assessed ?? '--' }}</td>
                        <td class="font-0"  colspan="">{{ $accident_service_report->assessmentReports[5]->variance ?? '--' }}</td> --}}

                        <td class="font ps-2"  colspan="2" style="font-weight: bold">Total Labour</td>
                        {{-- <td class="font-0"  colspan="2">{{ number_format($accident_service_report->assessmentReports[5]->quoted ?? 0, 2) }}</td> --}}
                        {{-- <td class="font-0"  colspan="2">{{ number_format($accident_service_report->assessmentReports[5]->assessed ?? 0, 2) }}</td> --}}
                        {{-- <td class="font-0"  colspan="">{{ number_format($accident_service_report->assessmentReports[5]->variance ?? 0, 2) }}</td> --}}

                        <td class="font-0" colspan="2">
                            @if(isset($accident_service_report->assessmentReports[5]->quoted))
                                {{ number_format($accident_service_report->assessmentReports[5]->quoted, 2) }}
                            @else
                                --
                            @endif
                        </td>

                        <td class="font-0" colspan="2">
                            @if(isset($accident_service_report->assessmentReports[5]->quoted))
                                {{ number_format($accident_service_report->assessmentReports[5]->assessed, 2) }}
                            @else
                                --
                            @endif
                        </td>

                        <td class="font-0" colspan="2">
                            @if(isset($accident_service_report->assessmentReports[5]->quoted))
                                {{ number_format($accident_service_report->assessmentReports[5]->variance, 2) }}
                            @else
                                --
                            @endif
                        </td>
                        <td class="font"  colspan="3" style="font-weight: bold">Settlement</td>
                        <td class="font-0" >${{ $accident_service_report['settlement'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        {{-- <td class="bg-gray-clr font ps-2" colspan="2" style="font-weight: bold">Parts</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[6]->quoted ?? '--' }}</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[6]->assessed ?? '--' }}</td>
                        <td class="font-0"  colspan="">{{ $accident_service_report->assessmentReports[6]->variance ?? '--' }}</td> --}}
                        <td class="bg-gray-clr font ps-2" colspan="2" style="font-weight: bold">Parts</td>
                        {{-- <td class="font-0"  colspan="2">{{ number_format($accident_service_report->assessmentReports[6]->quoted ?? 0, 2) }}</td>
                        <td class="font-0"  colspan="2">{{ number_format($accident_service_report->assessmentReports[6]->assessed ?? 0, 2) }}</td>
                        <td class="font-0"  colspan="">{{ number_format($accident_service_report->assessmentReports[6]->variance ?? 0, 2) }}</td> --}}

                        <td class="font-0" colspan="2">
                            @if(isset($accident_service_report->assessmentReports[6]->quoted))
                                {{ number_format($accident_service_report->assessmentReports[6]->quoted, 2) }}
                            @else
                                --
                            @endif
                        </td>

                        <td class="font-0" colspan="2">
                            @if(isset($accident_service_report->assessmentReports[6]->quoted))
                                {{ number_format($accident_service_report->assessmentReports[6]->assessed, 2) }}
                            @else
                                --
                            @endif
                        </td>

                        <td class="font-0" colspan="2">
                            @if(isset($accident_service_report->assessmentReports[6]->quoted))
                                {{ number_format($accident_service_report->assessmentReports[6]->variance, 2) }}
                            @else
                                --
                            @endif
                        </td>
                        <td class="bg-gray-clr font" style="font-weight: bold" colspan="3">Stamp Duty & Transfer Fee</td>
                        <td class="bg-gray-clr font-0">${{ $accident_service_report['less_excess'] ?? '--' }}</td>
                    </tr>
                    <tr>
                        {{-- <td class="font ps-2"  colspan="2" style="font-weight: bold">Sublet</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[7]->quoted ?? '--' }}</td>
                        <td class="font-0"  colspan="2">{{ $accident_service_report->assessmentReports[7]->assessed ?? '--' }}</td>
                        <td class="font-0"  colspan="">{{ $accident_service_report->assessmentReports[7]->variance ?? '--' }}</td> --}}
                        <td class="font ps-2"  colspan="2" style="font-weight: bold">Sublet</td>
                        {{-- <td class="font-0"  colspan="2">{{ number_format($accident_service_report->assessmentReports[7]->quoted ?? 0, 2) }}</td>
                        <td class="font-0"  colspan="2">{{ number_format($accident_service_report->assessmentReports[7]->assessed ?? 0, 2) }}</td>
                        <td class="font-0"  colspan="">{{ number_format($accident_service_report->assessmentReports[7]->variance ?? 0, 2) }}</td> --}}
                        <td class="font-0" colspan="2">
                            @if(isset($accident_service_report->assessmentReports[7]->quoted))
                                {{ number_format($accident_service_report->assessmentReports[7]->quoted, 2) }}
                            @else
                                --
                            @endif
                        </td>

                        <td class="font-0" colspan="2">
                            @if(isset($accident_service_report->assessmentReports[7]->quoted))
                                {{ number_format($accident_service_report->assessmentReports[7]->assessed, 2) }}
                            @else
                                --
                            @endif
                        </td>

                        <td class="font-0" colspan="2">
                            @if(isset($accident_service_report->assessmentReports[7]->quoted))
                                {{ number_format($accident_service_report->assessmentReports[7]->variance, 2) }}
                            @else
                                --
                            @endif
                        </td>
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
                        <td colspan="3" class="font ps-2 " style=" color:black; text-align:left;">Book Values</td>
                        <td class="font" colspan="4" style=" color:black; text-align:left;font-weight:bold">Live Market Values</td>
                    </tr>


                  <tr class="bg-gray-clr font">
                        {{-- <td colspan="3" class="ps-2" style=" color:black; text-align:left;">
                            Trade Low
                        </td>
                        <td colspan="4" style=" color:black; text-align:left;font-weight:bold">
                            Market One</td> --}}

                            <td colspan="2" class="bg-gray-clr font ps-2" style=" color:black; text-align:left;">
                                Trade Low:
                            </td>
                            <td class="font-0"  style=" color:black; text-align:left;">${{ $accident_service_report['tradone'] ?? '--'}}</td>

                            <td colspan="2" class="bg-gray-clr font" style=" color:black; text-align:left;" >
                                Market One:
                            </td>
                            <td class="font-0" style=" color:black; text-align:left;">${{ $accident_service_report['market_one'] ?? '--' }}</td>
                    </tr>



                    {{-- <tr class="font">
                        <td colspan="3" class="ps-2" style=" color:black; text-align:left;">
                            Trade
                        </td>
                        <td colspan="4" style=" color:black; text-align:left;font-weight:bold">
                            Market Two</td>
                    </tr> --}}

                    <tr class="bg-gray-clr font">

                            <td colspan="2" class="bg-gray-clr font ps-2" style=" color:black; text-align:left;">
                                Trade:
                            </td>
                            <td class="font-0"  style=" color:black; text-align:left;">${{ $accident_service_report['tradetwo'] ?? '--'}}</td>

                            <td colspan="2" class="bg-gray-clr font" style=" color:black; text-align:left;" >
                                Market Two:
                            </td>
                            <td class="font-0" style=" color:black; text-align:left;">${{ $accident_service_report['market_two'] ?? '--' }}</td>
                    </tr>






                    {{-- <tr class="bg-gray-clr font">
                        <td colspan="3" class="ps-2" style=" color:black; text-align:left;">
                            Retail Value
                        </td>
                        <td colspan="4" style=" color:black; text-align:left;font-weight:bold">
                            Market Three</td>
                    </tr> --}}

                    <tr class="bg-gray-clr font">

                            <td colspan="2" class="bg-gray-clr font ps-2" style=" color:black; text-align:left;">
                                Retail Value:
                            </td>
                            <td class="font-0"  style=" color:black; text-align:left;">${{ $accident_service_report['retail_value'] ?? '--'}}</td>

                            <td colspan="2" class="bg-gray-clr font" style=" color:black; text-align:left;" >
                                Market Three:
                            </td>
                            <td class="font-0" style=" color:black; text-align:left;">${{ $accident_service_report['market_three'] ?? '--' }}</td>
                    </tr>




                    {{-- <tr>
                        <td class="font ps-2" colspan="3" style=" color:black; text-align:left;">
                            Avg KM's

                        </td>
                        <td class="font" colspan="4" style=" color:black; text-align:left;font-weight:bold">
                            Market Avg</td>
                    </tr> --}}

                    <tr class="bg-gray-clr font">

                            <td colspan="2" class="bg-gray-clr font ps-2" style=" color:black; text-align:left;">
                                Avg KM's:
                            </td>
                            <td class="font-0"  style=" color:black; text-align:left;">${{ $accident_service_report['avg_kms'] ?? '--'}}</td>

                            <td colspan="2" class="bg-gray-clr font" style=" color:black; text-align:left;" >
                                Market Avg:
                            </td>
                            <td class="font-0" style=" color:black; text-align:left;">${{ $accident_service_report['market_avg'] ?? '--' }}</td>
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
    <br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br>
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
            {{-- <img src="{{ public_path('asset/image/damag_pic2.jpg') }}" alt=""> --}}
            <img class="img" style="width:30%; height: 130px;" src="{{  public_path('images/damag_pic3.jpeg') }}" alt=" ">
        </div>
        <div class="col-md-8">
            <table>
                <tbody>
                    <tr class="font" style="background: rgb(179, 173, 173); font-weight: bold">
                        {{-- <td class="ps-2">Damage Section</td>
                        <td>Damage Level</td> --}}
                        <td>Comment</td>
                    </tr>

                    <tr class="bg-gray-clr font-0">
                        <td class="ps-2">Comment:</td>
                        {{-- <td>{{ $accident_service_report->demageValues[0]->comment ?? '--'}} --}}
                            @if(isset($accident_service_report['comment_damange_details']))
                            <td class="font-0">{{ $accident_service_report['comment_damange_details'] ?? '--' }}
                                @else
                                abc
                                @endif
                            </td>
                    </tr>



                    {{-- <tr class="bg-gray-clr font-0">
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
                    </tr> --}}


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
                                 <span class="font-0">  {{ date('d-m-Y', strtotime($service_assessor->assessor->inspection_date ?? '--' )) }} </span></td>

                        </tr>
                        <tr>
                            <td ><span class="font ps-2" style="font-weight:bold">Phone:</span> <span class="font-0"> {{ $service_assessor->assessor->phone_number ?? '--' }} </span></td>
                            <td><span class="font" style="font-weight:bold">Mobile: </span>  <span class="font-0">  {{ $service_assessor->assessor->mobile_number ?? '--' }} </span> </td>
                            <td ><span class="font" style="font-weight:bold">Assessment Date: </span> <span class="font-0"> {{ date('d-m-Y', strtotime($service_assessor->assessor->assessment_date ?? '--')) }} </span></td>
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
