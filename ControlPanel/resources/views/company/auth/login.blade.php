<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Company</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="Company Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="{{asset('assets')}}/images/dgmoss.png">

        <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{asset('assets')}}/css/icons.css" rel="stylesheet" type="text/css">
        <link href="{{asset('assets')}}/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card card-pages">
                <div class="card-body">
                    <div class="text-center m-t-0 m-b-15">
                            <a href="index.html" class="logo logo-admin"><img src="{{asset('assets')}}/images/dgmoss.png" alt="" height="34"></a>
                    </div>
                    <h4 class="text-muted text-center m-t-0"><b>Sign In</b></h4>
                    <!-- Session Status -->

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
 
                    <form class="form-horizontal m-t-20" action="{{ route('company.companylogin') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" id="email" name="email" type="email" placeholder="Your Email" required >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="password" placeholder="Password" required autocomplete="current-password" name="password" id="password">
                            </div>
                        </div>
                        <div class="form-group text-center m-t-40">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-12 text-center">
                                <a href="{{ route('company_register') }}" class="text-muted">Register</a>
                            </div>
                        </div>
                        
                    </form>
                </div>

            </div>
        </div>
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