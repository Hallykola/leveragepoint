<div class="row pt-3 pb-3 shadow" style="background-color: #FFFFFF;">
    <div class="col-8 d-inline-flex pt-2 pe-0">
        <div class="row" style="width: 100%;">
            <div class="col-11" style="position: relative">
                <input type="text" class="searchBar" placeholder="search...">
                <span class="ps-2 searchIcon" onclick="alert('search')">
                    <img src="/assets/img/sideNav/bx_bx-search-alt.png">
                </span>
            </div>
            <div class="col-1 pt-2 text-end" style="position: relative">
                <img src="/assets/img/topBar/carbon_notification-new.png">
                @if (auth()->user()->unreadNotifications->count() > 0 )
                    <span style="position: absolute;font-size: 10px; color: red">
                        {{auth()->user()->unreadNotifications->count()}}
                    </span>                    
                @endif
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="row pt-2" style="position: relative;">
            <div class="col-9 text-center pt-2 border-start">
                <div class="dropdown">
                    <a class="btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <li><a class="dropdown-item" href="/logout">logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-3">
            <img
            @if( Auth::user()->profile->profilephoto=="")
                         src="/assets/img/profile/profilephoto.png"
                        @else
                        src="{{ Auth::user()->profile->profilephoto}}"
                        @endif
                 width="56px" style = " border-radius:50%">
            </div>
        </div>
    </div>
</div>
