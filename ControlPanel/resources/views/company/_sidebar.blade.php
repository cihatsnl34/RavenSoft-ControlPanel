<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">

        <div class="user-details">
           
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{session('username')}}</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)" class="dropdown-item"> Profile</a></li>
                        <li><a href="javascript:void(0)" class="dropdown-item"><span class="badge badge-success float-right">5</span> Settings </a></li>
                        <li><a href="javascript:void(0)" class="dropdown-item"> Lock screen</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a href="javascript:void(0)" class="dropdown-item"> Logout</a></li>
                    </ul>
                </div>

                <p class="text-muted m-0"><i class="far fa-dot-circle text-primary"></i> Online</p>
            </div>
        </div>
        <!--- Divider -->

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{route('company.companylogin')}}" class="waves-effect"><i class="ti-home"></i><span>Home</span></a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> Packages </span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('company.company_packets')}}"> Packages</a></li>
                        <li><a href="{{route('company.company_packets_add')}}">Packages Add</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- end sidebarinner -->
</div>