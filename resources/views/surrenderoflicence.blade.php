@extends('layouts.dashBoardframe')
@section('content')
<div class="row" style="background-color: #E5E5E5">
    <div class="col p-5">
        <div class="row">
            <div class="col">
                <h3 style="font-weight: 600; color: #383838;">Surrender of Licence</h3>
            </div>
        </div>
        <div class="row pb-3" style="margin-left: 5px; margin-right: 5px;">
            <div class="col">
                <div class="row">
                  <div class="col-1 circleRed">
                  </div>
                  <div class="col p-0">
                    <hr class="lineWhite">
                  </div>
                  <div class="col p-0">
                    <hr class="lineWhite">
                  </div>
                  <div class="col-1 circleWhite">
                    <span></span>
                  </div>          
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="/updatesurrenderlicence" method="post" enctype="multipart/form-data" class="SupportForm p-5">
                    @csrf
                    <input type="hidden" name="form" value="{{$id}}">
                    <div class="row">
                        <div style="width: 30px; font-size: 30px;">
                            I,
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input id="applicantname" class="form-control SupportFormInput" type="text" name="applicantname" placeholder="Enter name of applicant" value= "{{$details->applicantname}}" >
                            </div>                            
                        </div>
                    </div>
                    <div class="row py-3">
                        <div style="width: fit-content; font-size: 30px;">
                            with licence no:
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <input id="licencenumber" class="form-control SupportFormInput" type="text" name="licencenumber" placeholder="Enter licence number" value= "{{$details->licencenumber}}" >
                            </div>
                        </div>
                    </div>
                    <div class="py-3">
                        do hereby surrender the private security services licence issued to me.
                    </div>
                    <div>Reason for surrendering</div>
                    <div class="form-group pb-3">
                        <textarea id="extra" class="form-control SupportFormText" type="text" name="extra"  value= "{{$details->extra}}"></textarea>
                    </div>
                    <h6 class="py-1">Enter the contact details of the applicant</h6>
                    <div class="form-group py-2">
                        <input id="applicantphonenumber" placeholder="Enter phone number of the applicant" class="form-control SupportFormInput" type="text" name="applicantphonenumber" value= "{{$details->applicantphonenumber}}"  >
                    </div>
                    <div class="form-group py-2">
                        <input id="applicantemailaddress" placeholder="Enter email address of the applicant" class="form-control SupportFormInput" type="text" name="applicantemailaddress"  value= "{{$details->applicantemailaddress}}" >
                    </div>
                    <div class="form-group py-2">
                        <input id="applicantfax" placeholder="Enter fax of the applicant" class="form-control SupportFormInput" type="text" name="applicantfax" value= "{{$details->applicantfax}}"  >
                    </div>
                    <div class="row py-3">
                        <div class="col text-end">
                            <button class="btn btn-primary">Proceed to Payment Page</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if(Auth::user()->usertype=="ADMIN")
                    @livewire('approverlv',['form' =>$details->form, 'type'=>'SURRENDER'])
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
