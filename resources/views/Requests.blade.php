@extends('layouts.dashBoardframe')
@section('content')
<div class="row" style="background-color: #E5E5E5">
    <div class="col p-5">
        <div class="row py-3">
            <div class="col">
                <h3 style="font-weight: 600; color: #383838">Request</h3>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-4 text-center">
                <div class="row">
                    <div class="col-9 offset-1">
                        <a href="{{ route('requests') }}" class="card py-4">
                            <div>
                                <img src="/assets/img/Request/register.png" alt="">
                            </div>
                            <div class="reqCardText pt-3">
                                Register a Licence
                            </div>
                        </a>                        
                    </div>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="row">
                    <div class="col-9 offset-1">
                        <a href="{{ route('requests')}}" class="card py-4">
                            <div>
                                <img src="/assets/img/Request/clarity_form-line.png" alt="">
                            </div>
                            <div class="reqCardText pt-3">
                                Renewal of Licence
                            </div>
                        </a>                        
                    </div>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="row">
                    <div class="col-9 offset-1">
                        <a href="{{ route('requests') }}" class="card py-4">
                            <div>
                                <img src="/assets/img/Request/amend.png" alt="">
                            </div>
                            <div class="reqCardText pt-3">
                                Ammendment  of Licence
                            </div>
                        </a>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-5 pt-3">
            <div class="col-4 text-center">
                <div class="row">
                    <div class="col-9 offset-1">
                        <a href="{{ route('showcoform') }}" class="card py-4">
                            <div>
                                <img src="/assets/img/Request/carbon_change-catalog.png" alt="">
                            </div>
                            <div class="reqCardText pt-3">
                                Change of Ownership
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="row">
                    <div class="col-9 offset-1">
                        <a href="{{ route('showslform') }}" class="card py-4">
                            <div>
                                <img src="/assets/img/Request/Vector.png" alt="">
                            </div>
                            <div class="reqCardText pt-3">
                                Surrender Licence
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection