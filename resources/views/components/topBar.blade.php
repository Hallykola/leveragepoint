<div class="row pt-3 pb-3 shadow" style="background-color: #FFFFFF;">
    <div class="col-8 d-inline-flex pt-2 pe-0">
        <div class="row" style="width: 100%;">
            <div class="col-11" style="position: relative">
                <input type="text" class="searchBar" placeholder="search...">
                <span class="ps-2 searchIcon" onclick="alert('search')">
                    <img src="/assets/img/sideNav/bx_bx-search-alt.png">
                </span>
            </div>
            <div class="col-1 pt-2 text-end">
                <img src="/assets/img/topBar/carbon_notification-new.png">
                {{auth()->user()->unreadNotifications->count()}}
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
                <img src="/assets/img/topBar/unsplash_8qFarlWZY-U.png" width="56px">
            </div>
        </div>
    </div>
</div>
