@extends('layouts.dashBoardframe')
@section('content')
<div class="row" style="background-color: #E5E5E5">
  <div class="col p-5">
    <div class="row">
      <div class="col">
        <h3 class="font-weight: 600; color: #383838;">Change of Ownership</h3>
      </div>
    </div>
    <div class="row pb-3" style="margin-left: 5px; margin-right: 5px;">
      <div class="col">
        <div class="row">
          <div class="col-1 circleRedFill">
          </div>
          <div class="col p-0">
            <hr class="lineRed">
          </div>
          <div class="col-1 circleRed">
          </div>
          <div class="col p-0">
            <hr class="lineWhite">
          </div>
          <div class="col-1 circleWhite">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <form action="/updatechangeownershipb" method="post" enctype="multipart/form-data" class="SupportForm p-5">
          @csrf
          <input type="hidden" name="form" value="{{$form}}">
          <div class="row py-3">
            <div style="width: 30px; font-size: 30px;">
              I,
            </div>
            <div class="col">
              <div class="form-group">
                <input id="applicantname" class="form-control SupportFormInput" type="text" name="applicantname" placeholder="Enter name of applicant" value= "{{$details->applicantname}}" >
              </div>
            </div>
          </div>
          <div>
            hereby in terms of the Act and these Regulations, make an application for the transfer of the private
            security service licence issued to me, being licence no:
          </div>
          <div class="form-group">
            <input id="licencenumber" class="form-control SupportFormInput" type="text" name="licencenumber" placeholder="Enter licence number" value= "{{$details->licencenumber}}" >
          </div>
          to:
          <div class="form-group">
            <input id="reasonsforsurrendering" class="form-control SupportFormInput" type="text" name="reasonsforsurrendering" placeholder="Enter name of transferee" value= "{{$details->reasonsforsurrendering}}" >
          </div>
          <div class="py-2">
            and confirm that I am aware of and understand the provisions of the Act and these Regulations, insofar, as they pertain to this application.
          </div>
          <div class="form-group py-2">
            <label for="prevlicencerejected" class="labels"> Has any application made for a licence by you ever been rejected, cancelled or surrendered?</label>
            <input id="prevlicencerejected" class="form-control SupportFormInput" type="text" name="prevlicencerejected" value="{{$details->prevlicencerejected}}" >
          </div>
          <div class="form-group py-2">
            <label for="prevlicencerejected" class="labels"> Has any application made for a licence by you ever been rejected, cancelled or surrendered?</label>
            <input id="prevlicencerejected" class="form-control SupportFormInput" type="text" name="prevlicencerejected" value="{{$details->prevlicencerejected}}" >
          </div>
          <div class="row py-2">
            <div class="col text-end">
              <button class="btn btn-primary">Proceed to Payment Page</button>
            </div>
          </div>

        @if(Auth::user()->usertype=="ADMIN")
@livewire('approverlv',['form' =>$details->form, 'type'=>'COFO'])
@endif
        </form>

      </div>
    </div>
  </div>
</div>
@endsection
