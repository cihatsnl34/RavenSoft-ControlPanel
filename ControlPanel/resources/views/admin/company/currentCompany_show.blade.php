@extends('admin/layouts.admin')
@section('content')



        <div class="">
            <div class="page-header-title">
                <h4 class="page-title">Company List</h4>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Country</th>
                                        <th>Province</th>  
                                        <th>District</th>
                                        <th>Adress</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody> 
                                    @foreach ($companyList as $rs)
                                    <tr>
                                        <td>{{$rs->name}}</td>
                                        <td>{{$rs->email}}</td>
                                        <td>{{$rs->phone}}</td>
                                        <td>{{$rs->country}}</td>
                                        <td>{{$rs->province}}</td>   
                                        <td>{{$rs->district}}</td> 
                                        <td>{{$rs->adress}}</td>   
                                        <td>
                                          </td>
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