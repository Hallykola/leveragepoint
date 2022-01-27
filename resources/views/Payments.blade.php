@extends('layouts.dashBoardframe')
@section('content')
<div class="container-fluid">
    <div class="row py-3">
        <div class="col">
            <h3 style="font-weight: 600;color: #383838;">Payments</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th class="PaymentThead" style="border-radius: 10px 0px 0px 0px;">Payment Date</th>
                        <th class="PaymentThead">Payment Type</th>
                        <th class="PaymentThead">Amount</th>
                        <th class="PaymentThead">Currency</th>
                        <th class="PaymentThead text-center" style="border-radius: 0px 10px 0px 0px;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="PaymentTbody">
                        <td>02-01-2022</td>
                        <td>Licence Renewal</td>
                        <td>500.00</td>
                        <td>BWP</td>
                        <td class="text-end"><span class="statusG">Accepted</span></td>
                    </tr>
                    <tr class="PaymentTbody">
                        <td>02-01-2022</td>
                        <td>Licence Renewal</td>
                        <td>500.00</td>
                        <td>BWP</td>
                        <td class="text-end"><span class="statusG">Accepted</span></td>
                    </tr>
                    <tr class="PaymentTbody">
                        <td>02-01-2022</td>
                        <td>Licence Renewal</td>
                        <td>500.00</td>
                        <td>BWP</td>
                        <td class="text-end"><span class="statusR">Declined</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection