@extends('layouts.dashBoardframe')
@section('content')
<div class="container-fluid">
    <div class="row py-3">
        <div class="col">
            <h3 style="font-weight: 600;color: #383838;">Reports</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th class="PaymentThead" style="border-radius: 10px 0px 0px 0px;">Meeting ID</th>
                        <th 
                            class="PaymentThead text-start" 
                            style="border-radius: 0px 10px 0px 0px;"
                            colspan="2"
                            >Data Type
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="PaymentTbody">
                        <td>Licence Ammendment</td>
                        <td>License Ammendment Application</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="#">
                                        <img src="/assets/img/Report/vscode-icons_file-type-pdf2.png">
                                        <img src="/assets/img/Report/Group.png">
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <img src="/assets/img/Report/vscode-icons_file-type-excel2.png">
                                        <img src="/assets/img/Report/Group.png">
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <img src="/assets/img/Report/vscode-icons_file-type-word2.png">
                                        <img src="/assets/img/Report/Group.png">
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="PaymentTbody">
                        <td>Licence Renewal</td>
                        <td> License Renewal Application</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="#">
                                        <img src="/assets/img/Report/vscode-icons_file-type-pdf2.png">
                                        <img src="/assets/img/Report/Group.png">
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <img src="/assets/img/Report/vscode-icons_file-type-excel2.png">
                                        <img src="/assets/img/Report/Group.png">
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <img src="/assets/img/Report/vscode-icons_file-type-word2.png">
                                        <img src="/assets/img/Report/Group.png">
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="PaymentTbody">
                        <td>Change of licence ownership</td>
                        <td>Change of licence ownership Application</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="#">
                                        <img src="/assets/img/Report/vscode-icons_file-type-pdf2.png">
                                        <img src="/assets/img/Report/Group.png">
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <img src="/assets/img/Report/vscode-icons_file-type-excel2.png">
                                        <img src="/assets/img/Report/Group.png">
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <img src="/assets/img/Report/vscode-icons_file-type-word2.png">
                                        <img src="/assets/img/Report/Group.png">
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="PaymentTbody">
                        <td>HR Report</td>
                        <td>Employee Report for 2021</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="#">
                                        <img src="/assets/img/Report/vscode-icons_file-type-pdf2.png">
                                        <img src="/assets/img/Report/Group.png">
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <img src="/assets/img/Report/vscode-icons_file-type-excel2.png">
                                        <img src="/assets/img/Report/Group.png">
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <img src="/assets/img/Report/vscode-icons_file-type-word2.png">
                                        <img src="/assets/img/Report/Group.png">
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="PaymentTbody">
                        <td>Training Report</td>
                        <td>Training report for May 2021</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="#">
                                        <img src="/assets/img/Report/vscode-icons_file-type-pdf2.png">
                                        <img src="/assets/img/Report/Group.png">
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <img src="/assets/img/Report/vscode-icons_file-type-excel2.png">
                                        <img src="/assets/img/Report/Group.png">
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <img src="/assets/img/Report/vscode-icons_file-type-word2.png">
                                        <img src="/assets/img/Report/Group.png">
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
@endsection