@extends('layouts.dashBoardframe')

@section('content')
<h1 class="display-5">Change of Ownership</h1>
<div class="container">
<form action="/updatechangeownershipb" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <input type="hidden" name="form" value="{{$form}}">
  <span > I,</span>

       <div class="form-group">
                            <input id="applicantname" class="form-control SupportFormInput" type="text" name="applicantname" placeholder="Enter name of applicant" value= "{{$details->applicantname}}" >
       </div>
       hereby in terms of the Act and these Regulations, make an application for the transfer of the private
       security service licence issued to me, being licence no:
       <div class="form-group">
                            <input id="licencenumber" class="form-control SupportFormInput" type="text" name="licencenumber" placeholder="Enter licence number" value= "{{$details->licencenumber}}" >
       </div>
       to:
       <div class="form-group">
                            <input id="reasonsforsurrendering" class="form-control SupportFormInput" type="text" name="reasonsforsurrendering" placeholder="Enter name of transferee" value= "{{$details->reasonsforsurrendering}}" >
       </div>
       and confirm that I am aware of and understand the provisions of the Act and these Regulations, insofar, as they pertain to this application.
       <div class="form-group">
                            <label for="prevlicencerejected" class="labels"> Has any application made for a licence by you ever been rejected, cancelled or surrendered?</label>
                            <input id="prevlicencerejected" class="form-control SupportFormInput" type="text" name="prevlicencerejected" value="{{$details->prevlicencerejected}}" >
                          </div>

                          <div class="form-group">
                            <label for="prevlicencerejected" class="labels"> Has any application made for a licence by you ever been rejected, cancelled or surrendered?</label>
                            <input id="prevlicencerejected" class="form-control SupportFormInput" type="text" name="prevlicencerejected" value="{{$details->prevlicencerejected}}" >
                          </div>

       <button>Proceed to Payment Page</button>
</form>
    </div>
@endsection
