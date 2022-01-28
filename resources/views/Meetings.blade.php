@extends('layouts.dashBoardframe')
@section('content')
<div class="container-fluid">
    <div class="row py-3">
        <div class="col">
            <h3 style="font-weight: 600;color: #383838;">Meetings</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th class="PaymentThead" style="border-radius: 10px 0px 0px 0px;">Meeting ID</th>
                        <th class="PaymentThead">Meeting Date</th>
                        <th class="PaymentThead">Purpose</th>
                        <th class="PaymentThead text-center" style="border-radius: 0px 10px 0px 0px;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="PaymentTbody">
                        <td>M000005</td>
                        <td>09-12-2021</td>
                        <td>Licence Renewal</td>
                        <td class="text-center"><span class="statusG">Completed</span></td>
                    </tr>
                    <tr class="PaymentTbody">
                        <td>M000005</td>
                        <td>09-12-2021</td>
                        <td> Licence Ammendment</td>
                        <td class="text-center"><span class="statusG">Completed</span></td>
                    </tr>
                    <tr class="PaymentTbody">
                        <td>M000005</td>
                        <td>09-12-2021</td>
                        <td>Licence Renewal</td>
                        <td class="text-center"><span class="statusR">Cancelled</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection