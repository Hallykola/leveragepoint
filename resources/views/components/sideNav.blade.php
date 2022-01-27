<nav class="nav flex-column sideNav">
    <div class="row p-3">
        <div class="col text-center sideNavTittle pt-3">
            <span>
                <h6>
                    <img src="/assets/img/sideNav/iconoir_app-notification.png" alt="">
                    <b>Leverage Point</b>
                </h6>
            </span>
        </div>
    </div>
    <div class="row">
        {{-- Dashboard --}}
        <div class="col-12 sideNavItem">
            @if($pageTittle == 'Dashboard')
                <div class="container-fluid active">
                    <a class="sideNavLink" href="{{ route('dashboard') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/dashboard.png" width="30px">
                        </div>
                        <div class="text-center py-1">Dashboard</div>
                    </a>
                </div>
            @else 
                <div class="container-fluid">
                    <a class="sideNavLink" href="{{ route('dashboard') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/activeDashboard.png" width="30px">
                        </div>
                        <div class="text-center py-1" style="color: #67849A">Dashboard</div>
                    </a>
                </div>
            @endif
        </div>
        {{-- Profile --}}
        <div class="col-12 sideNavItem">
            @if($pageTittle == 'Profile')
                <div class="container-fluid active">
                    <a class="sideNavLink" href="{{ route('profile') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/bx_bx-user-circle.png" width="30px">
                        </div>
                        <div class="text-center py-1">Profile</div>
                    </a>
                </div>
            @else
                <div class="container-fluid">
                    <a class="sideNavLink" href="{{ route('profile') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/bx_bx-user-circle2.png" width="30px">
                        </div>
                        <div class="text-center py-1" style="color: #67849A">Profile</div>
                    </a>
                </div>
            @endif
        </div>
        {{-- Request --}}
        <div class="col-12 sideNavItem">
            @if($pageTittle == 'Requests')
                <div class="container-fluid active">
                    <a class="sideNavLink" href="{{ route('dashboard') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/bi_send-check-fill1.png" width="30px">
                        </div>
                        <div class="text-center py-1">Requests</div>
                    </a>
                </div>
            @else
                <div class="container-fluid">
                    <a class="sideNavLink" href="{{ route('dashboard') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/bi_send-check-fill.png" width="30px">
                        </div>
                        <div class="text-center py-1" style="color: #67849A">Requests</div>
                    </a>
                </div>
            @endif
        </div>
        {{-- Support --}}
        <div class="col-12 sideNavItem">
            @if($pageTittle == 'Support')
                <div class="container-fluid active">
                    <a class="sideNavLink" href="{{ route('support') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/ri_customer-service-2-fill.png" width="30px">
                        </div>
                        <div class="text-center py-1">Support</div>
                    </a>
                </div>
            @else
                <div class="container-fluid">
                    <a class="sideNavLink" href="{{ route('support') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/rcustomer-service.png" width="30px">
                        </div>
                        <div class="text-center py-1" style="color: #67849A">Support</div>
                    </a>
                </div>
            @endif
        </div>
        {{-- HRM --}}
        <div class="col-12 sideNavItem">
            @if($pageTittle == 'HRM')
                <div class="container-fluid active">
                    <a class="sideNavLink" href="{{ route('dashboard') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/Vector.png" width="30px">
                        </div>
                        <div class="text-center py-1">HRM</div>
                    </a>
                </div>
            @else
                <div class="container-fluid">
                    <a class="sideNavLink" href="{{ route('dashboard') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/hrm.png" width="30px">
                        </div>
                        <div class="text-center py-1" style="color: #67849A">HRM</div>
                    </a>
                </div>
            @endif
        </div>
        {{-- Traning --}}
        <div class="col-12 sideNavItem">
            @if($pageTittle == 'Training')
                <div class="container-fluid active">
                    <a class="sideNavLink" href="{{ route('dashboard') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/Vector2.png" width="30px">
                        </div>
                        <div class="text-center py-1">Training</div>
                    </a>
                </div>
            @else
                <div class="container-fluid">
                    <a class="sideNavLink" href="{{ route('dashboard') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/training.png" width="30px">
                        </div>
                        <div class="text-center py-1" style="color: #67849A">Training</div>
                    </a>
                </div>
            @endif
        </div>
        {{-- Licences --}}
        <div class="col-12 sideNavItem">
            @if($pageTittle == 'Licences')
                <div class="container-fluid active">
                    <a class="sideNavLink" href="{{ route('licences') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/ph_medal-light.png" width="30px">
                        </div>
                        <div class="text-center py-1">Licences</div>
                    </a>
                </div>
            @else
                <div class="container-fluid">
                    <a class="sideNavLink" href="{{ route('licences') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/licences.png" width="30px">
                        </div>
                        <div class="text-center py-1" style="color: #67849A">Licences</div>
                    </a>
                </div>
            @endif
        </div>
        {{-- Meetings --}}
        <div class="col-12 sideNavItem">
            @if($pageTittle == 'Meetings')
                <div class="container-fluid active">
                    <a class="sideNavLink" href="{{ route('meetings') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/Meeting.png" width="30px">
                        </div>
                        <div class="text-center py-1">Meetings</div>
                    </a>
                </div>
            @else
                <div class="container-fluid">
                    <a class="sideNavLink" href="{{ route('meetings') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/Meeting2.png" width="30px">
                        </div>
                        <div class="text-center py-1" style="color: #67849A">Meetings</div>
                    </a>
                </div>
            @endif
        </div>
        {{-- payents --}}
        <div class="col-12 sideNavItem">
            @if($pageTittle == 'Payments')
                <div class="container-fluid active">
                    <a class="sideNavLink" href="{{ route('payments') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/activePay.png" width="30px">
                        </div>
                        <div class="text-center py-1">Payments</div>
                    </a>
                </div>
            @else
                <div class="container-fluid">
                    <a class="sideNavLink" href="{{ route('payments') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/Pay.png" width="30px">
                        </div>
                        <div class="text-center py-1" style="color: #67849A">Payments</div>
                    </a>
                </div>
            @endif
        </div>
        {{-- reports --}}
        <div class="col-12 sideNavItem pt-2 pb-5">
            @if($pageTittle == 'Reports')
                <div class="container-fluid active">
                    <a class="sideNavLink" href="{{ route('reports') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/Group.png" width="30px">
                        </div>
                        <div class="text-center py-1">Reports</div>
                    </a>
                </div>
            @else
                <div class="container-fluid">
                    <a class="sideNavLink" href="{{ route('reports') }}" style="color: inherit !important">
                        <div class="text-center pt-1">
                            <img src="/assets/img/sideNav/reports.png" width="30px">
                        </div>
                        <div class="text-center py-1" style="color: #67849A">Reports</div>
                    </a>
                </div>
            @endif
        </div>
        {{-- logout --}}
        <div class="col-12 sideNavItem text-center">
            <div class="container logout">
                <img src="/assets/img/sideNav/Vector3.png" alt="">
                <a class="ps-3" href="/logout" style="color: inherit !important">Logout</a>
            </div>
        </div>
    </div>
</nav>