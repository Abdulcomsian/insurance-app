@extends('layouts.master', ["page_title"=>"Payment Transactions"])
@section('css')
@endsection
@section('content')
<div class="viewPayment">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center">
{{--                <i class="fa fa-search-plus pull-left icon"></i>--}}
                <h2>Transaction #{{$transaction->cart_id}}</h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="card panel panel-default height">
                        <div class="panel-heading">Package Information</div>
                        <div class="panel-body">
                            <p><strong>Package: </strong> {{$transaction->package_name}}<br></p>
                            <p><strong>Sanctions: </strong> {{$transaction->package_sanctions}}<br></p>
                            <p><strong>Price: </strong> {{$transaction->package_price}}<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="card panel panel-default height">
                        <div class="panel-heading">User Information</div>
                        <div class="panel-body">
                            <p><strong>Customer Id: </strong>{{$transaction->user_id}}<br></p>
                            <p><strong>Name: </strong>{{$transaction->username}}<br></p>
                            <p><strong>Email: </strong> {{$transaction->email}}<br></p>
                            <p><strong>Reg Date: </strong> {{$transaction->reg_date}}<br></p>
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
                            <p><strong>Status: </strong> <span class=" badge @if($transaction->status == "Paid")badge-success @else badge-danger @endif">{{$transaction->status ?: '-'}}</span> <br></p>
                            <p><strong>Amount: </strong> {{$transaction->amount ?: '-'}} <br></p>
                            <p><strong>Description: </strong> {{$transaction->description ?: '-'}} <br></p>
                            <p><strong>Card: </strong> {{$transaction->card_first6 ?: '-'}} <span>****</span> {{$transaction->card_last4 ?: '-'}}<br></p>
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
