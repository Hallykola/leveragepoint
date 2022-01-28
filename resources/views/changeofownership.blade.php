
@extends('layouts.dashBoardframe')

@section('content')
<div class="container">

<h1>Enter contact detail of the Applicant</h1>
<form action="/newchangeownership" method="post" enctype="multipart/form-data">
 @csrf

 <div class="form-group">
     <label for="appno">Application Number</label>
    <input type="text" class="form-control" id="appno" name="applicationnumber" value="{{rand(100,500).time()}}">
  </div>
<div class="form-group">
    <input type="text" class="form-control" name="applicantphone" placeholder="Enter phone munber of applicant">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="applicantaddress" placeholder="Enter email address of applicant">
  </div>
  <div class="form-group">
    <input type="text" class="form-control"  name="applicantfax" placeholder="Enter fax for applicant">
  </div>

  <input type="file" name="transfereeid" id="">
  <input type="file" name="clearancecertificate" id="">
  <input type="file" name="otherdocuments" id="">
  <input type="submit" name="change"/>
</form>
</div>
@endsection
