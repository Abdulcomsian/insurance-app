@extends('layouts.master', ["page_title"=>"Payment Transactions"])
@section('css')
@endsection
@section('content')<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center">
{{--                <i class="fa fa-search-plus pull-left icon"></i>--}}
                <h2>Transaction #{{$transaction->cart_id}}</h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Package Information</div>
                        <div class="panel-body">
                            <strong>Name: </strong> {{$transaction->package_name}}<br>
                            <strong>Sanctions: </strong> {{$transaction->package_sanctions}}<br>
                            <strong>Price: </strong> {{$transaction->package_price}}<br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="panel panel-default height">
                        <div class="panel-heading">User Information</div>
                        <div class="panel-body">
                            <strong>Id: </strong>{{$transaction->user_id}}<br>
                            <strong>Name: </strong>{{$transaction->username}}<br>
                            <strong>Email: </strong> {{$transaction->email}}<br>
                            <strong>Reg Date: </strong> {{$transaction->reg_date}}<br>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 pull-left">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Billing Details</div>
                        <div class="panel-body">
                            <strong>Name: </strong> {{$transaction->billing_fname.' '.$transaction->billing_sname}}:<br>
                            <strong>Email: </strong>{{$transaction->billing_email ?: '-'}}<br>
                            <strong>Address 1: </strong>{{$transaction->billing_address_1 ?: '-'}}<br>
                            <strong>Address 2: </strong>{{$transaction->billing_address_2 ?: '-'}}<br>
                            <strong>City: </strong>{{$transaction->billing_city ?: '-'}}<br>
                            <strong>Country: </strong>@isset($transaction->billing_country) {{\App\Utils\TransactionCountries::List[strtolower($transaction->billing_country)]}} @endisset<br>
                            <strong>Region: </strong>{{$transaction->billing_region ?: '-'}}<br>
                            <strong>Zip Code: </strong>{{$transaction->billing_zip ?: '-'}}<br>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="panel panel-default height">
                        <div class="panel-heading">Payment Information</div>
                        <div class="panel-body">
                            <strong>Order#: </strong ><span style="word-wrap: break-word">{{$transaction->order_id ?: '-'}} </span> <br>
                            <strong>Status: </strong> <span class=" badge @if($transaction->status == "Paid")badge-success @else badge-danger @endif">{{$transaction->status ?: '-'}}</span> <br>
                            <strong>Amount: </strong> {{$transaction->amount ?: '-'}} <br>
                            <strong>Description: </strong> {{$transaction->description ?: '-'}} <br>
                            <strong>Card First6: </strong> {{$transaction->card_first6 ?: '-'}} <br>
                            <strong>Card Last4: </strong> {{$transaction->card_last4 ?: '-'}} <br>
                            <strong>Card Type: </strong> {{$transaction->card_type ?: '-'}} <br>
                            <strong>Date: </strong> {{$transaction->created_at ?: '-'}} <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
