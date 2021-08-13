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
                            <p><strong>Abdul Basit </strong><br> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br></p>
                            <p><strong>Areeb </strong><br> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br></p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-6">
                    <div class="card panel panel-default height">
                        <div class="panel-heading">Which type Of Sanction</div>
                        <div class="panel-body">
                            <p><strong>Id: </strong><br></p>
                            <p><strong>Name: </strong><br></p>
                            <p><strong>Email: </strong> <br></p>
                            <p><strong>Reg Date: </strong> <br></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <form action="">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 pull-left">
                    <div class="card panel panel-default height">
                        <div class="panel-heading">Attachment</div>
                        <button class="addAttachmentBtn">Add Attachment</button>
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
                            <textarea name="" id="" cols="30" rows="10" placeholder="Admin Comments"></textarea>
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
