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
                <<!-- div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="card panel panel-default height">
                        <div class="panel-heading">Comments</div>
                        <div class="panel-body">
                            <p><strong>{{$sanction_request->user_name}} </strong><br>{{$sanction_request->comments ?: 'No Comments'}}<br></p>
                        </div>
                    </div>
                </div> -->
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="card panel panel-default height">
                        <div class="panel-heading">Sanction Search Request Number: {{$sanction_request->id}}</div>
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
                            <br>
                            <div class="panel-heading">Comments</div>
                            <p><strong>{{$sanction_request->user_name}} </strong><br>{{$sanction_request->comments ?: 'No Comments'}}<br></p>
                            @if($sanction_request->status=="Pending")
                            <form style="float:right" id="cancel-request-form" action="{{route('cancel-request')}}" method="post">
                                @csrf
                                <input type="hidden" name="sanc_id" value="{{$sanction_request->id}}">
                                <input type="hidden" name="user_id" value="{{encrypt($sanction_request->user_id)}}">
                                <input type="hidden" name="sanctions" value="{{encrypt(count($b_o_d) + 1)}}">
                                 <button type="submit" value="cancel-request-form" class="btn btn-danger deleterequest">Cancel Request</button>
                             </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            @if($sanction_request->status!="Canceled")
            <form action="{{route('sanc-save-attachment')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="sanc_id" id="sanc_id" value="{{$sanction_request->id}}">
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

                                            @foreach($sanc_save_attachment as $attach)
                                            <tr>
                                                <td>@if($attach->file){{$attach->file}}@else{{"No Attachement"}}@endif</td>
                                                @if($attach->file)
                                                <td>
                                                    <a href="{{asset('images/').'/'.$attach->file}}" target="_blank"><span class="fa fa-eye"></span></a>
                                                    &nbsp;&nbsp;
                                                    <a href="{{route('delete-attachements',$attach->id)}}"><span class="fa fa-trash-o"></span></a>
                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach

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
                            <textarea name="comment" id="" cols="30" rows="10" placeholder="Admin Comments" required="required">{{$sanction_request->admin_comments}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 pull-left">
                    <div class="card panel panel-default height formSantionButton">
                        <button>Save as Draft</button>
                        <button type="submit" formaction="{{route('sanc-send-attachment')}}" id="sendattach">Send Result</button>
                    </div>
                </div>
            </div>
            </form>
            @endif
        </div>
    </div>
</div>
</div>

@endsection
@section('script')
<script type="text/javascript">
    $(".addAttachmentBtn").click(function(){
         $(".attachmentTable tbody").append("<tr> <td> <input type='file' accept='.doc,.docx,.jpg,.jpeg,.png,.pdf' name='images[]' id='' required='required'></td><td><a class='deleteattach' type='button'><span class='fa fa-trash-o '></span></a></td> </tr>")
        });
    $(document).on('click',".deleteattach",function(){
        $(this).parent().parent().remove();
    });
    //delete request code
    $(document).on("click",".deleterequest",function(event) {
            event.preventDefault();
            let form_id = $(this).attr('value');
            let form = '#'+form_id;

            swal({
                title: "Are you sure you want to cancel this request?",
                // text: "You will not be able to recover this record!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, cancel it!',
                closeOnConfirm: false,
                //closeOnCancel: false
            },
            function(){
                swal("Deleted!", "Your imaginary file has been deleted!", "success");
                console.log(form);
                $(form).submit();

            });
        });
</script>
@endsection

