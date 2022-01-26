<nav class="nav flex-column sideNav">
    <div class="row p-3">
        <div class="col text-center sideNavTittle pt-3">
            <span>
                <h4>
                    <img src="/assets/img/sideNav/iconoir_app-notification.png" alt="">
                    <b>Leverage Point</b>
                </h4>
            </span>
        </div>
    </div>
    <div class="row">
        {{-- Dashboard --}}
        <div class="col-10 sideNavItem py-2">
            @if($pageTittle == 'Dashboard')
                <div class="container rounded active"> 
                    <img src="/assets/img/sideNav/activeDashboard.png" alt="">
                    <a class="ps-3" href="{{ route('dashboard')}}" style="color: inherit !important">Dashboard</a>
                </div>
            @else 
                <div class="container rounded"> 
                    <img src="/assets/img/sideNav/dashboard.png" alt="">
                    <a class="ps-3" href="{{ route('dashboard')}}" style="color: inherit !important">Dashboard</a>
                </div>
            @endif
        </div>
        {{-- Profile --}}
        <div class="col-10 sideNavItem py-2">
            @if($pageTittle == 'Profile')
                <div class="container rounded active">
                    <img src="/assets/img/sideNav/bx_bx-user-circle2.png" alt="">
                    <a class="ps-3" href="{{ route('profile')}}" style="color: inherit !important">Profile</a>
                </div>
            @else
                <div class="container rounded">
                    <img src="/assets/img/sideNav/bx_bx-user-circle.png" alt="">
                    <a class="ps-3" href="{{ route('profile')}}" style="color: inherit !important">Profile</a>
                </div>
            @endif
        </div>
        <div class="col-10 sideNavItem py-2">
            <div class="container rounded
            @if($pageTittle == 'Requests')
                active 
            @endif">
                <img src="/assets/img/sideNav/bi_send-check-fill.png" alt="">
                <a class="ps-3" href="{{ route('dashboard')}}" style="color: inherit !important">Requests</a>
            </div>
        </div>
        <div class="col-10 sideNavItem py-2">
            <div class="container rounded
            @if($pageTittle == 'Support')
                active 
            @endif">
                <img src="/assets/img/sideNav/ri_customer-service-2-fill.png" alt="">
                <a class="ps-3" href="{{ route('dashboard')}}" style="color: inherit !important">Support</a>
            </div>
        </div>
        <div class="col-10 sideNavItem py-2">
            <div class="container rounded
            @if($pageTittle == 'HRM')
                active 
            @endif">
                <img src="/assets/img/sideNav/Vector.png" alt="">
                <a class="ps-3" href="{{ route('dashboard')}}" style="color: inherit !important">HRM</a>
            </div>
        </div>
        <div class="col-10 sideNavItem py-2">
            <div class="container rounded
            @if($pageTittle == 'Training')
                active 
            @endif">
                <img src="/assets/img/sideNav/Vector2.png" alt="">
                <a class="ps-3" href="{{ route('dashboard')}}" style="color: inherit !important">Training</a>
            </div>
        </div>
        <div class="col-10 sideNavItem py-2">
            <div class="container rounded
            @if($pageTittle == 'Licences')
                active 
            @endif">
                <img src="/assets/img/sideNav/ph_medal-light.png" alt="">
                <a class="ps-3" href="{{ route('dashboard')}}" style="color: inherit !important">Licences</a>
            </div>
        </div>
        <div class="col-10 sideNavItem py-2">
            <div class="container rounded
            @if($pageTittle == 'Meetings')
                active 
            @endif">
                <img src="/assets/img/sideNav/Meeting.png" alt="">
                <a class="ps-3" href="{{ route('dashboard')}}" style="color: inherit !important">Meetings</a>
            </div>
        </div>
        {{-- payents --}}
        <div class="col-10 sideNavItem py-2">
            @if($pageTittle == 'Payments')
                <div class="container rounded active">
                    <img src="/assets/img/sideNav/activePay.png" alt="">
                    <a class="ps-3" href="{{ route('payments')}}" style="color: inherit !important">Payments</a>
                </div>
            @else
                <div class="container rounded">
                    <img src="/assets/img/sideNav/Pay.png" alt="">
                    <a class="ps-3" href="{{ route('payments')}}" style="color: inherit !important">Payments</a>
                </div>
            @endif
        </div>
        {{-- reports --}}
        <div class="col-10 sideNavItem pt-2 pb-5">
            @if($pageTittle == 'Reports')
                <div class="container rounded active">
                    <img src="/assets/img/sideNav/Group.png" alt="">
                    <a class="ps-3" href="{{ route('dashboard')}}" style="color: inherit !important">Reports</a>
                </div>
            @else
                <div class="container rounded">
                    <img src="/assets/img/sideNav/Group.png" alt="">
                    <a class="ps-3" href="{{ route('dashboard')}}" style="color: inherit !important">Reports</a>
                </div>
            @endif
        </div>
        {{-- logout --}}
        <div class="col-10 sideNavItem py-2">
            <div class="container logout">
                <img src="/assets/img/sideNav/Vector3.png" alt="">
                <a class="ps-3" href="/logout" style="color: inherit !important">Logout</a>
            </div>
        </div>
    </div>
</nav>