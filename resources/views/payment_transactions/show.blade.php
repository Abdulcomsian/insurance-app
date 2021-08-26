@extends('layouts.master', ["page_title"=>"Payment Transactions"])
@section('css')
    <style>
        .btn-right{
            position: absolute !important;
            float: right !important;
            right: 36px !important;
            margin-top: -12px;
        }

    </style>
@endsection
@section('content')
<div class="viewPayment">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center" style="display: flex">
                <div>
                    <h2>Transaction #{{$transaction->invoice_id}}</h2>
                </div>
                <div>
                    @if($transaction->status == "Paid")
                        <form action="{{route('payment_transactions.cancel')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{encrypt($transaction->id)}}">
                        <input type="hidden" name="user_id" value="{{encrypt($transaction->user_id)}}">
                        <input type="hidden" name="package_sanctions" value="{{encrypt($transaction->package_sanctions)}}">
                        <button class="btn-primary btn btn-right"> Cancel Payment</button>
                    </form>
                    @else
                        <button class="btn-danger btn btn-right">Cancelled Date {{$transaction->cancelled_at}}</button>
                    @endif

                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="card panel panel-default height">
                        <div class="panel-heading">Package Information</div>
                        <div class="panel-body">
                            <p><strong>Package: </strong> {{$transaction->package_name ?: '-'}}<br></p>
                            <p><strong>Sanctions: </strong> {{$transaction->package_sanctions ?: '-'}}<br></p>
                            <p><strong>Price: </strong> {{$transaction->package_amount ? $transaction->package_amount . ' AED' : '-'}}<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="card panel panel-default height">
                        <div class="panel-heading">User Information</div>
                        <div class="panel-body">
                            <p><strong>Company Name: </strong>{{$transaction->company_name ?: '-' }}<br></p>
                            <p><strong>Full Name: </strong>{{$transaction->username ?: '-' }}<br></p>
                            <p><strong>Email: </strong> {{$transaction->email ?: '-' }}<br></p>
                            <p><strong>Address: </strong> {{$transaction->address ?: '-' }}<br></p>
                            <p><strong>Reg Date: </strong> {{$transaction->reg_date ?: '-' }}<br></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 pull-left">
                    <div class="card panel panel-default height">
                        <div class="panel-heading">Billing Details</div>
                        <div class="panel-body">
                            <p><strong>Name: </strong> {{$transaction->billing_fname.' '.$transaction->billing_sname}}:<br></p>
                            <p><strong>Email: </strong>{{$transaction->billing_email ?: '-'}}<br></p>
                            <p><strong>Address 1: </strong>{{$transaction->billing_address_1 ?: '-'}}<br></p>
                            <p><strong>Address 2: </strong>{{$transaction->billing_address_2 ?: '-'}}<br></p>
                            <p><strong>City: </strong>{{$transaction->billing_city ?: '-'}}<br></p>
                            <p><strong>Country: </strong>@isset($transaction->billing_country) {{\Illuminate\Support\Facades\DB::table('countries')->where('country_code',$transaction->billing_country)->first()->country_name}} @endisset<br></p>
                            <p><strong>Region: </strong>{{$transaction->billing_region ?: '-'}}<br></p>
                            <p><strong>Zip Code: </strong>{{$transaction->billing_zip ?: '-'}}<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="card panel panel-default height">
                        <div class="panel-heading">Payment Information</div>
                        <div class="panel-body">
                            <p><strong>Order#: </strong ><span style="word-wrap: break-word">{{$transaction->order_id ?: '-'}} </span> <br></p>
                            <p><strong>Ref#: </strong ><span style="word-wrap: break-word">{{$transaction->trx_reference ?: '-'}} </span> <br></p>
                            <p><strong>Status: </strong> <span class=" badge @if($transaction->status == "Paid") badge-success @else badge-danger @endif">{{$transaction->status ?: '-'}}</span> <br></p>
                            <p><strong>Package Amount: </strong> {{$transaction->package_amount ? $transaction->package_amount .' AED'  : '-'}} <br></p>
                            <p><strong>Vat Amount: </strong> {{$transaction->vat_amount ? $transaction->vat_amount . ' AED': '-'}} <br></p>
                            <p><strong>Total Amount: </strong> {{$transaction->total_amount ? $transaction->total_amount. ' AED': '-'}} <br></p>
                            <p><strong>Description: </strong> {{$transaction->description ?: '-'}} <br></p>
                            <p><strong>Card: </strong> {{$transaction->card_first6 ? $transaction->card_first6 .'******'. $transaction->card_last4 : '-'}}<br></p>
                            <p><strong>Card Type: </strong> {{$transaction->card_type ?: '-'}} <br></p>
                            <p><strong>Date: </strong> {{$transaction->created_at ?: '-'}} <br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
