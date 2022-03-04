<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>DGMOS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('assets')}}/images/dgmoss.png">

        <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{asset('assets')}}/css/icons.css" rel="stylesheet" type="text/css">
        <link href="{{asset('assets')}}/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><img src="{{asset('assets')}}/images/dgmoss.png" alt="" height="24"></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <ul class="list-inline menu-left mb-3">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left waves-light waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                        </ul>
                    </ul>
                    </div>
                </nav>
            </div>
            <!-- Top Bar End -->
            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="">
                        <div class="page-header-title">
                            <h4 class="page-title">Welcome</h4>
                        </div>
                    </div>
                    <div class="page-content-wrapper ">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-body"> 
                                            <form class="form-horizontal" action="{{route('company_select')}}" method="POST">
                                               @csrf
                                                <div class="form-group row mb-0">
                                                    <label class="col-sm-2 control-label">Select Company</label>
                                                    <div class="col-sm-10">
                                                        <select name="select" class="form-control">
                                                            @foreach($companyList as $rs)
                                                            
                                                            <option value=0>{{$rs->name}}</option>
                                                            @endforeach
                                                            
                                                            <option value=1>Company I Want To Register</option>
                                                            <option value=2>Login is Partner</option>
                                                            <option value=3>Register is Partner</option>
                                                        </select>
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light m-l-10">Select</button>
                                                    </div>
                                                      
                                                        
                                                      
                                                </div>
                                            </form>
                                        </div> <!-- card-body -->
                                    </div> <!-- card -->
                                </div> <!-- col -->
                            </div> <!-- End row -->
                        </div><!-- container -->
                    </div> <!-- Page content Wrapper -->
                </div> <!-- content -->
                <footer class="footer">
                    © 2022<span class="d-none d-md-inline-block">DGMOS<i class="mdi mdi-heart text-danger"></i> by RavenSoft.</span>
                </footer>
            </div>
            <!-- End Right content here -->
        </div>
        <!-- END wrapper -->
        <!-- jQuery  -->
        <script src="{{asset('assets')}}/js/jquery.min.js"></script>
        <script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets')}}/js/modernizr.min.js"></script>
        <script src="{{asset('assets')}}/js/detect.js"></script>
        <script src="{{asset('assets')}}/js/fastclick.js"></script>
        <script src="{{asset('assets')}}/js/jquery.slimscroll.js"></script>
        <script src="{{asset('assets')}}/js/jquery.blockUI.js"></script>
        <script src="{{asset('assets')}}/js/waves.js"></script>
        <script src="{{asset('assets')}}/js/wow.min.js"></script>
        <script src="{{asset('assets')}}/js/jquery.nicescroll.js"></script>
        <script src="{{asset('assets')}}/js/jquery.scrollTo.min.js"></script>
        <script src="{{asset('assets')}}/js/app.js"></script>
       
    </body>
</html>