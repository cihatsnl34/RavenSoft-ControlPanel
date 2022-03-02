@extends('admin/layouts.admin')
@section('content')



        <div class="">
            <div class="page-header-title">
                <h4 class="page-title">Package List</h4>
            </div>
        </div>

        <div class="page-content-wrapper ">

            <div class="container-fluid">
            
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Property</th>
                                        <th>Packet Duration</th>
                                        <th>License Key</th>
                                        <th>Price</th>  
                                    </tr>
                                    </thead>
                                    <tbody> 
                                    @foreach ($packetList as $rs)
                                    <tr>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->property}}</td>
                                        <td>N{{$rs->packetDuration}}</td>
                                        <td>{{$rs->licenseKey}}</td>
                                        <td>{{$rs->price}}</td>     
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div> <!-- End Row -->

            </div><!-- container-fluid -->

         
@endsection