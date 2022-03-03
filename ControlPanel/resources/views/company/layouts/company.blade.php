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

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/morris/morris.css">

    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets')}}/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets')}}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets')}}/plugins/datatables/fixedHeader.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets')}}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets')}}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets')}}/plugins/datatables/scroller.bootstrap4.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="fixed-left">
    <div id="wrapper">
        @include('company._header')
        @include('company._sidebar')
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                 @yield('content')
            </div>
        </div>
        @include('company._footer')

    </div>
    
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

    <!--Morris Chart-->
    <script src="{{asset('assets')}}/plugins/morris/morris.min.js"></script>
    <script src="{{asset('assets')}}/plugins/raphael/raphael.min.js"></script>

    <!-- KNOB JS -->
    <script src="{{asset('assets')}}/plugins/jquery-knob/excanvas.js"></script>
    <script src="{{asset('assets')}}/plugins/jquery-knob/jquery.knob.js"></script>

    <script src="{{asset('assets')}}/plugins/flot-chart/jquery.flot.min.js"></script>
    <script src="{{asset('assets')}}/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
    <script src="{{asset('assets')}}/plugins/flot-chart/jquery.flot.resize.js"></script>
    <script src="{{asset('assets')}}/plugins/flot-chart/jquery.flot.pie.js"></script>
    <script src="{{asset('assets')}}/plugins/flot-chart/jquery.flot.selection.js"></script>
    <script src="{{asset('assets')}}/plugins/flot-chart/jquery.flot.stack.js"></script>
    <script src="{{asset('assets')}}/plugins/flot-chart/jquery.flot.crosshair.js"></script>

    <script src="{{asset('assets')}}/pages/dashboard.js"></script>

    <script src="{{asset('assets')}}/js/app.js"></script>
<!-- Required datatable js-->
<script src="{{asset('assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="{{asset('assets')}}/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables/buttons.bootstrap4.min.js"></script>

<script src="{{asset('assets')}}/plugins/datatables/jszip.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables/pdfmake.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables/vfs_fonts.js"></script>
<script src="{{asset('assets')}}/plugins/datatables/buttons.html5.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables/buttons.print.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables/dataTables.scroller.min.js"></script>

<!-- Responsive examples -->
<script src="{{asset('assets')}}/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="{{asset('assets')}}/plugins/datatables/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="{{asset('assets')}}/pages/datatables.init.js"></script>


</body>

</html>