@extends('company/layouts.company')
@section('content')
<div class="">
    <div class="page-header-title">
        <h4 class="page-title">Packages Edit</h4>
    </div>
</div>

<div class="page-content-wrapper ">

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="m-t-0 m-b-30">Packages Edit</h4>

                        <form class="form-horizontal" action="{{ route('company.company_packets_update',['id'=>$PacketsData->id]) }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="example-text-input">Title</label>
                                <div class="col-sm-10">
                                    <input value={{$PacketsData->title}} type="text" class="form-control" id="" name="title"required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="example-textarea-input">Property</label>
                                <div class="col-sm-10">
                                    <textarea name="property" class="form-control" rows="5" id=""required><?=$PacketsData->property?></textarea>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="col-sm-2 control-label">Packet Duration</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="packetDuration">
                                        <option value=1>1 Ay</option>
                                        <option value=3>3 Ay</option>
                                        <option value=6>6 Ay</option>
                                        <option value=9>9 Ay</option>
                                        <option value=12>1 Y??l</option>
                                        <option value=24>2 Y??l</option>
                                        <option value=36>3 Y??l</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 control-label" for="example-text-input">Price</label>
                                <div class="col-sm-10">
                                    <input value={{$PacketsData->price}} type="number" class="form-control" id="" name="price" required>
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
