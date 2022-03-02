@extends('admin/layouts.admin')
@section('content')
<div class="">
    <div class="page-header-title">
        <h4 class="page-title">Packages Add</h4>
    </div>
</div>

<div class="page-content-wrapper ">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="m-t-0 m-b-30">Packages Add</h4>

                        <form class="form-horizontal" action="{{ route('admin.admin_packets_add') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="example-text-input">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="" id="" name="title"required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="example-textarea-input">Property</label>
                                <div class="col-sm-10">
                                    <textarea name="property" class="form-control" rows="5" id=""required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="example-text-input">Packet Duration</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" value="" id="" name="packetDuration"required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="example-text-input">License Key</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="" id="" name="licenseKey"required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="example-text-input">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" value="" id="" name="price" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <button type="submit" class="btn btn-primary waves-effect waves-light m-l-10">Sign in</button>
                            </div>

                        </form>
                    </div> <!-- card-body -->
                </div> <!-- card -->
            </div> <!-- col -->
        </div> <!-- End row -->


      

     


    </div><!-- container -->

</div> <!-- Page content Wrapper -->
@endsection
