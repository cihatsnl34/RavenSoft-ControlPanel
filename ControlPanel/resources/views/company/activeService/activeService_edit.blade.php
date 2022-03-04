@extends('company/layouts.company')
@section('content')
<div class="">
    <div class="page-header-title">
        <h4 class="page-title">Active Service Edit</h4>
    </div>
</div>

<div class="page-content-wrapper ">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="m-t-0 m-b-30">Active Service Edit</h4>

                        <form class="form-horizontal" action="{{ route('company.activeService_update',['id'=>$PackegeBuyData->id]) }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="example-text-input">Package Name</label>
                                <div class="col-sm-10">
                                    <input value={{$PackegeBuyData->buyerName}} type="text" class="form-control" id="" name="buyerName"required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="example-textarea-input">E-mail</label>
                                <div class="col-sm-10">
                                    <input value={{$PackegeBuyData->email}} type="text" class="form-control" id="" name="email"required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="example-textarea-input">Phone</label>
                                <div class="col-sm-10">
                                    <input value={{$PackegeBuyData->phone}} type="text" class="form-control" id="" name="phone"required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="example-textarea-input">Package Name</label>
                                <div class="col-sm-10">
                                    <input value={{$PackegeBuyData->packageTitle}} type="text" class="form-control" id="" name="packageTitle"required>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Packet Duration</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="packetDuration">
                                        <option value={{$PackegeBuyData->packetDuration}}>{{$PackegeBuyData->packetDuration}}</option>
                                        <option value=1>1 Month</option>
                                        <option value=3>3 Month</option>
                                        <option value=6>6 Month</option>
                                        <option value=9>9 Month</option>
                                        <option value=12>1 Year</option>
                                        <option value=24>2 Year</option>
                                        <option value=36>3 Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="example-textarea-input">License Key</label>
                                <div class="col-sm-10">
                                    <input value={{$PackegeBuyData->licenseKey}} type="text" class="form-control" id="" name="licenseKey"required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="example-text-input">Price</label>
                                <div class="col-sm-10">
                                    <input value={{$PackegeBuyData->price}} type="number" class="form-control" id="" name="price" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="example-text-input">Order Date</label>
                                <div class="col-sm-10">
                                    <input value={{$PackegeBuyData->created_at}} type="date" class="form-control" id="" name="created_at" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <button type="submit" class="btn btn-primary waves-effect waves-light m-l-10">Edit</button>
                            </div>

                        </form>
                    </div> <!-- card-body -->
                </div> <!-- card -->
            </div> <!-- col -->
        </div> <!-- End row -->


      

     


    </div><!-- container -->

</div> <!-- Page content Wrapper -->
@endsection
