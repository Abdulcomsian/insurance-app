@extends('layouts.master', ["page_title"=>"Payment Transactions"])
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">

                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table  id="datatable" class="table  align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                            <!--begin::Table head-->
                            <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                <th>S.No</th>
                                <th>Id</th>
                                <th>Customer Name</th>
                                <th>Package Name</th>
                                <th>Billing Name</th>
                                <th>Billing Email</th>
                                <th>Amount</th>
                                <th>Card First 6</th>
                                <th>Card Last 4</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                            <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="text-gray-600 fw-bold">
                            <!--begin::Table row-->
                                @if(isset($transactions))
                                    @foreach($transactions as $item)
                                        <tr>
                                            <!--begin::User=-->
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->cart_id ?: '-'}}</td>
                                            <td>{{$item->user_name ?: '-'}}</td>
                                            <td>{{$item->package_name ?: '-'}}</td>
                                            <td>{{$item->billing_fname.' '.$item->billing_sname }}</td>
                                            <td>{{$item->billing_email ?: '-'}}</td>
                                            <td>{{$item->amount ?: '-'}}</td>
                                            <td>{{$item->card_first6 ?: '-'}}</td>
                                            <td>{{$item->card_last4 ?: '-'}}</td>
                                            <td>{{$item->created_at ?: '-'}}</td>
                                            <td>
                                                <div class="badge badge-light fw-bolder">{{$item->status ?: '-'}}</div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td>No Record Found</td>
                                    </tr>
                                @endif
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
