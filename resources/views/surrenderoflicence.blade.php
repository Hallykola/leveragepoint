@extends('layouts.dashBoardframe')

@section('content')
<h1 class="display-5">Surrender of Licence</h1>
<div class="container">
<form action="/updatesurrenderlicence" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <input type="hidden" name="form" value="{{$id}}">
  <span > I,</span>

       <div class="form-group">
                            <input id="applicantname" class="form-control SupportFormInput" type="text" name="applicantname" placeholder="Enter name of applicant" value= "{{$details->applicantname}}" >
       </div>
       with licence no:
       <div class="form-group">
                            <input id="licencenumber" class="form-control SupportFormInput" type="text" name="licencenumber" placeholder="Enter licence number" value= "{{$details->licencenumber}}" >
       </div>
       do hereby, make an application for the surrender of the private security services licence issued to me in terms of the provisions of
       the act and these Regulations, in the following manner
       <div class="form-group">
                            <input id="reasonsforsurrendering" class="form-control SupportFormInput" type="text" name="reasonsforsurrendering"  value= "{{$details->reasonsforsurrendering}}" >
       </div>
       <h6>Enter the contact details of the applicant</h6>
       <div class="form-group">
                            <input id="applicantphone" placeholder="Enter phone number of the applicant" class="form-control SupportFormInput" type="text" name="applicantphone" value= "{{$details->applicantphone}}"  >
       </div>
       <div class="form-group">
                            <input id="applicantemail" placeholder="Enter email address of the applicant" class="form-control SupportFormInput" type="text" name="applicantemail"  value= "{{$details->applicantemail}}" >
       </div>
       <div class="form-group">
                            <input id="applicantfax" placeholder="Enter fax of the applicant" class="form-control SupportFormInput" type="text" name="applicantfax" value= "{{$details->applicantfax}}"  >
       </div>
       <button>Proceed to Payment Page</button>
</form>
    </div>
@endsection
