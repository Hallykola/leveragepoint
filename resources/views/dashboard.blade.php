@extends('layouts.dashBoardframe')
@section('content')
<div class="row border-end pt-3">
    <div class="col-8">
        <div class="row">
            <div class="col">
                <div class="container pt-3 welcomeTab">
                    <h4 class="py-3">Good Morning {{ Auth::user()->name}},</h4>
                    <p class="py-3">You have {{auth()->user()->unreadNotifications->count()}} unread notifications.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col pt-2">
                <h5 style="font-weight: 600;">Recent Activities</h5>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="TheadBlue" style="border-radius: 10px 0px 0px 0px;">Process</th>
                            <th class="TheadBlue">Date</th>
                            <th class="TheadBlue" style="border-radius: 0px 10px 0px 0px;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>License Renewal</td>
                            <td>20-10-2021</td>
                            <td><span class="statusG">Ongoing</span></td>
                        </tr>
                        <tr>
                            <td>Ammendment</td>
                            <td>02-09-2021</td>
                            <td><span class="statusG">Completed</span></td>
                        </tr>
                        <tr>
                            <td>Change of ownership</td>
                            <td>06-07-2021</td>
                            <td><span class="statusR">Declined</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <table  class="table">
                    <thead>
                        <tr>
                            <th class="TheadRed" style="border-radius: 10px 10px 0px 0px">Track Progress</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border">
                                <div class="dropdown" style="background-color: #F7F7F7">
                                    <span style="width: 150px;font-size: 20px;">License Renewal</span>
                                    <a class="btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <li><a class="dropdown-item" href="#">Item</a></li>
                                    </ul>
                                </div>
                                <div class="row p-0">
                                    <div class="col p-0">
                                        <div class="container">
                                            <div class="row py-3">
                                                <div class="col-2">
                                                    <img class="checkTick" src="/assets/img/dashbord/vector4.svg">
                                                </div>
                                                <div class="col-10 pt-1 checkText">
                                                    Awaiting approval
                                                </div>
                                            </div>
                                            <div class="rod"></div>
                                            <div class="row py-3">
                                                <div class="col-2">
                                                    <img class="checkTick" src="/assets/img/dashbord/vector4.svg">
                                                </div>
                                                <div class="col-10 pt-1 checkText">
                                                    Preliminary investigation completed on the 29th December, 2021.
                                                </div>
                                            </div>
                                            <div class="row py-3">
                                                <div class="col-2">
                                                    <img class="checkTick" src="/assets/img/dashbord/vector4.svg">
                                                </div>
                                                <div class="col-10 pt-1 checkText">
                                                    License renewal initiated on the 20th December, 2021.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-7">
                <table  class="table table-borderless">
                    <thead>
                        <tr>
                            <th class="TheadRed" style="border-radius: 10px 10px 0px 0px">Quick Links</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border" style="padding: 0.8rem 10px 0.8rem 10px;">
                                <div class="row p-0">
                                    <div class="col quickLinks">
                                        <a href="/listlicences">
                                            <div class="row">
                                                <div class="col-10">
                                                    View Licences
                                                </div>
                                                <div class="col-1">
                                                    <img src="/assets/img/dashbord/Vector.svg">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border" style="padding: 0.8rem 10px 0.8rem 10px;">
                                <div class="row p-0">
                                    <div class="col quickLinks">
                                        <a href="/listrenewlicence">
                                            <div class="row">
                                                <div class="col-10">
                                                    Renew Licence
                                                </div>
                                                <div class="col-1">
                                                    <img src="/assets/img/dashbord/Vector.svg">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border" style="padding: 0.8rem 10px 0.8rem 10px;">
                                <div class="row p-0">
                                    <div class="col quickLinks">
                                        <a href="/listchangeofownership">
                                            <div class="row">
                                                <div class="col-10">
                                                    Change of ownership
                                                </div>
                                                <div class="col-1">
                                                    <img src="/assets/img/dashbord/Vector.svg">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border" style="padding: 0.8rem 10px 0.8rem 10px;">
                                <div class="row p-0">
                                    <div class="col quickLinks">
                                        <a href="listsurrenderlicence">
                                            <div class="row">
                                                <div class="col-10">
                                                    Surrender licence
                                                </div>
                                                <div class="col-1">
                                                    <img src="/assets/img/dashbord/Vector.svg">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border" style="padding: 0.8rem 10px 0.8rem 10px;">
                                <div class="row p-0">
                                    <div class="col quickLinks">
                                        <a href="listammendmentoflicence">
                                            <div class="row">
                                                <div class="col-10">
                                                    Ammendment of licence
                                                </div>
                                                <div class="col-1">
                                                    <img src="/assets/img/dashbord/Vector.svg">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-4 border-start">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="TheadBlue" style="border-radius: 10px 10px 0px 0px;">Employee </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 0.8rem 10px 0.8rem 10px;">
                                <div>
                                    <img src="/assets/img/dashbord/circle1.png" width="100%">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="TheadBlue" style="border-radius: 10px 10px 0px 0px;">Training Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="padding: 0.8rem 10px 0.8rem 10px;">
                                <div>
                                    <img src="/assets/img/dashbord/circle2.png" width="100%">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row" style="height: 300px; overflow-y: scroll;">
            <div class="col">
                <table class="table table-borderless border">
                    <thead>
                        <tr>
                            <th class="TheadRed" style="border-radius: 10px 10px 0px 0px;">
                                <div class="row">
                                    <div class="col-7">
                                        Notification Panel
                                    </div>
                                    <div class="col-5">
                                        <a href="{{ route('dashboard')}}">
                                            <div class="row">
                                                <div class="col-9" style="color: #FFFFFF">
                                                    View All
                                                </div>
                                                <div class="col-3">
                                                    <img src="/assets/img/dashbord/Vector2.svg">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (auth()->user()->unreadNotifications as $item)
                            <tr>
                                <td>
                                    <div class="row py-2" style="height: 70px;">
                                        <div class="col-9 notifications">
                                            <div class="notiText py-2">You have  an  invite from the admin.</div>
                                            <div class="row">
                                                <div class="col-8 notiRed">
                                                    {{ explode(' ',$item->created_at)[0] }}
                                                </div>
                                                <div class="col-4 notiRed">
                                                    {{ explode(' ',$item->created_at)[1] }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3" style="background-color: #F8F8F8;padding-top: 10px;">
                                            <img src="/assets/img/dashbord/Remind Image.svg">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
