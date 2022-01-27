@extends('layouts.dashBoardframe')
@section('content')
<div class="container-fluid">
    <div class="row py-3">
        <div class="col">
            <h3 style="font-weight: 600;color: #383838;">Licences</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th class="PaymentThead" style="border-radius: 10px 0px 0px 0px;">Licence Number</th>
                        <th class="PaymentThead">Licence Date</th>
                        <th class="PaymentThead">Applicant</th>
                        <th class="PaymentThead">Fee Paid</th>
                        <th class="PaymentThead">Receipt Number</th>
                        <th class="PaymentThead" style="border-radius: 0px 10px 0px 0px;">Form ID</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="LicenceTbody">
                        <td>L000006</td>
                        <td> 07-16-2021</td>
                        <td>Leverage Point</td>
                        <td>500 BWP</td>
                        <td>Gov/2021/34567</td>
                        <td>Form C1</td>
                    </tr>
                    <tr class="LicenceTbody">
                        <td>L000006</td>
                        <td> 07-16-2021</td>
                        <td>Leverage Point</td>
                        <td>500 BWP</td>
                        <td>Gov/2021/34567</td>
                        <td>Form C1</td>
                    </tr>
                    <tr class="LicenceTbody">
                        <td>L000006</td>
                        <td> 07-16-2021</td>
                        <td>Leverage Point</td>
                        <td>500 BWP</td>
                        <td>Gov/2021/34567</td>
                        <td>Form C1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection