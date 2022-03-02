<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="">
            <div class="page-header-title">
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>

        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div>
                                    <input class="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#6cbafa" value="78" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                    <div class="float-right">
                                        <h2 class="text-primary mb-0">8952</h2>
                                        <p class="text-muted mb-0 mt-2">Total Sales</p>
                                    </div>
                                    <p class="mt-4 mb-0 text-muted"><b>78% </b>From Last 24 Hours <span class="float-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div>
                                    <input class="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#61d7c7" value="62" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                    <div class="float-right">
                                        <h2 class="text-info mb-0">6521</h2>
                                        <p class="text-muted mb-0 mt-2">New Orders</p>
                                    </div>
                                    <p class="mt-4 mb-0 text-muted"><b>62% </b>Orders Last 10 months<span class="float-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div>
                                    <input class="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#6cbafa" value="42" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                    <div class="float-right">
                                        <h2 class="text-primary mb-0">4526</h2>
                                        <p class="text-muted mb-0 mt-2">New Users</p>
                                    </div>
                                    <p class="mt-4 mb-0 text-muted"><b>42% </b>From Last 24 Hours <span class="float-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="card">
                            <div class="card-heading p-4">
                                <div>
                                    <input class="knob" data-width="80" data-height="80" data-linecap=round data-fgColor="#61d7c7" value="25" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                    <div class="float-right">
                                        <h2 class="text-info mb-0">5621</h2>
                                        <p class="text-muted mb-0 mt-2">Unique Visitors</p>
                                    </div>
                                    <p class="mt-4 mb-0 text-muted"><b>25% </b>From Last 1 Month <span class="float-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 m-b-30">Multiple Statistics</h4>
                                <div id="combine-chart-container" class="flot-chart" style="height: 360px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 m-b-30">Realtime Statistics</h4>
                                <div id="pie-chart-container" class="flot-chart" style="height: 360px"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-b-30 m-t-0">Messages</h4>
                                <div class="inbox-widget slimscroller" style="max-height:360px;">

                                    <div class="media inbox-item">
                                        <img class="mr-3 rounded-circle" src="{{asset('assets')}}/images/users/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Clinton Murphy</h5>
                                            <p class="text-muted">Nullam id tincidunt ante on auctor lacus vivamus laoreet pellentesque quam aliquam efficitur.</p>
                                            <p class="inbox-item-time">5 mins ago</p>
                                        </div>
                                    </div>

                                    <div class="media inbox-item mt-3">
                                        <img class="mr-3 rounded-circle" src="{{asset('assets')}}/images/users/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Frank Martinez</h5>
                                            <p class="text-muted">Nullam id tincidunt ante on auctor lacus vivamus laoreet pellentesque quam aliquam efficitur.</p>
                                            <p class="inbox-item-time">6 mins ago</p>
                                        </div>
                                    </div>

                                    <div class="media inbox-item mt-3">
                                        <img class="mr-3 rounded-circle" src="{{asset('assets')}}/images/users/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Patrick Dawson</h5>
                                            <p class="text-muted">Nullam id tincidunt ante on auctor lacus vivamus laoreet pellentesque quam aliquam efficitur.</p>
                                            <p class="inbox-item-time">6 mins ago</p>
                                        </div>
                                    </div>

                                    <div class="media inbox-item mt-3">
                                        <img class="mr-3 rounded-circle" src="{{asset('assets')}}/images/users/avatar-4.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Charles Young</h5>
                                            <p class="text-muted">Nullam id tincidunt ante on auctor lacus vivamus laoreet pellentesque quam aliquam efficitur.</p>
                                            <p class="inbox-item-time">8 mins ago</p>
                                        </div>
                                    </div>

                                    <div class="media inbox-item mt-3">
                                        <img class="mr-3 rounded-circle" src="{{asset('assets')}}/images/users/avatar-5.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <h5 class="mt-0">Joseph Yowell</h5>
                                            <p class="text-muted">Nullam id tincidunt ante on auctor lacus vivamus laoreet pellentesque quam aliquam efficitur.</p>
                                            <p class="inbox-item-time">12 mins ago</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-b-30 m-t-0">Sales Statistics</h4>
                                <h5>iMacs <span class="text-primary float-right"><b>78%</b></span></h5>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                </div>
                            </div>

                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-b-30 m-t-0">Monthly Sales</h4>
                                <h5>Macbooks <span class="text-info float-right"><b>85%</b></span></h5>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-b-30 m-t-0">Daily Sales</h4>
                                <h5>Mobiles <span class="text-purple float-right"><b>45%</b></span></h5>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar progress-bar-striped bg-purple" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>

                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-b-30 m-t-0">Monthly Earning</h4>

                            <div id="website-stats" style="height: 200px" class="flot-chart"></div>

                            <div class="row mt-4 pt-2">
                                <div class="col-lg-6">
                                        <div class="text-center pl-4 pr-4">
                                                <h4 class="mb-0 text-primary">This Month</h4>
                                                <p class="text-muted mt-2">It will be as simple as in fact it will be occidental.</p>
                                                <h4>$34,252 </h4>
                                            </div>
                                </div>

                                <div class="col-lg-6">
                                        <div class="text-center pl-4 pr-4">
                                                <h4 class="mb-0 text-primary">Last Month</h4>
                                                <p class="text-muted mt-2">It will be as simple as in fact it will be occidental.</p>
                                                <h4>$36,253</h4>
                                            </div>
                                </div>
                            </div> 
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

     </div><!-- container-fluid -->

    </div><!-- container-fluid -->

</div> <!-- Page content Wrapper -->

</div>
<!-- content -->