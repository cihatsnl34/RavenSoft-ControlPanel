@extends('partner/layouts.partner')
@section('content')



        <div class="">
            <div class="page-header-title">
                <h4 class="page-title">My Packages List</h4>
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
                                        <th>Package Name</th>
                                        <th>Packet Duration</th>  
                                        <th>License Key</th>
                                        <th>Price</th>
                                        <th>Order date</th>
                                    </tr>
                                    </thead>
                                    <tbody> 
                                    @foreach ($packagesBuyList as $rs)
                                    <tr>
                                        <td>{{$rs->packageTitle}}</td>
                                        <td>{{$rs->packetDuration}} Month</td>   
                                        <td>{{$rs->licenseKey}}</td> 
                                        <td>{{$rs->price}}</td>   
                                        <td>{{$rs->created_at}}</td>   
                                       
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