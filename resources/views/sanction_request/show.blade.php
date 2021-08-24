@extends('layouts.master', ["page_title"=>"Sanction Request"])
@section('css')
@endsection
@section('content')
<div class="viewPayment">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="text-center">
                <h2>Sanction Request Details</h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="card panel panel-default height">
                        <div class="panel-heading">Comments</div>
                        <div class="panel-body">
                            <p><strong>{{$sanction_request->user_name}} </strong><br>{{$sanction_request->comments ?: 'No Comments'}}<br></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="card panel panel-default height">
                        <div class="panel-heading">Which type Of Sanction</div>
                        <div class="panel-body">
                            <p><strong>Company Name: </strong>{{$sanction_request->company_name ?: '-'}}<br></p>
                            <p><strong>Customer Name: </strong>{{$sanction_request->user_name ?: '-'}}<br></p>
                            @if($sanction_request->sanctions_type == \App\Utils\SanctionsType::Searchcompany)
                                <p><strong>Sanction Search Type: </strong>{{$sanction_request->sanctions_type ?: '-'}} <br></p>
                            @else
                                <p><strong>Sanction Search Type: </strong>{{$sanction_request->sanctions_type ?: '-'}} <br></p>
                                @php
                                $b_o_d = DB::table('board_of_director')->whereIn('id',json_decode($sanction_request->board_of_directors))
                                    ->select('name','designation')
                                    ->get();
                                @endphp
                                <p style="margin-left: 15px;">
                                    @foreach($b_o_d as $item)
                                        {{$item->name .' - '. $item->designation}}
                                        <br>
                                    @endforeach
                                </p>
                            @endif

                            @if($sanction_request->status == \App\Utils\SanctionRequestStatus::Completed)
                                <p><strong>Status: </strong><span class="badge badge-success">{{$sanction_request->status ?: '-'}}</span> <br></p>
                            @else
                                <p><strong>Status: </strong><span class="badge badge-danger">{{$sanction_request->status ?: '-'}}</span> <br></p>
                            @endif
                            <p><strong>Date: </strong>{{$sanction_request->created_at ?: '-'}} <br></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <form action="{{route('sanc-save-attachment')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="sanc_id" value="{{$sanction_request->id}}">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 pull-left">
                    <div class="card panel panel-default height">
                        <div class="panel-heading">Attachment</div>
                        <button type="button" class="addAttachmentBtn">Add Attachment</button>
                        <div class="panel-body">
                            <table class="attachmentTable">
                                <thead>
                                    <th>Attachment Document</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 pull-left">
                    <div class="card panel panel-default height">
                        <div class="panel-heading">Additional Comment By Admin</div>
                        <div class="panel-body">
                            <textarea name="comment" id="" cols="30" rows="10" placeholder="Admin Comments"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 pull-left">
                    <div class="card panel panel-default height formSantionButton">
                        <button>Save</button>
                        <button>Send Email</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection
@section('script')
<script type="text/javascript">
    $(".addAttachmentBtn").click(function(){  
         $(".attachmentTable tbody").append("<tr> <td> <input type='file' name='images[]' id='' required='required'></td><td><button>View</button></td> </tr>") 
        });
</script>
@endsection
