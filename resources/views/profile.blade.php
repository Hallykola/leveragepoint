@extends('layouts.dashBoardframe')

@section('content')

<!-- Tabs navs -->
<ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation" style="border: 1px">
    <a
      class="nav-link active"
      id="ex2-tab-1"
      data-mdb-toggle="tab"
      href="#ex2-tabs-1"
      role="tab"
      aria-controls="ex2-tabs-1"
      aria-selected="true"
      >Link</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex2-tab-2"
      data-mdb-toggle="tab"
      href="#ex2-tabs-2"
      role="tab"
      aria-controls="ex2-tabs-2"
      aria-selected="false"
      >Very very very very long link</a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex2-tab-3"
      data-mdb-toggle="tab"
      href="#ex2-tabs-3"
      role="tab"
      aria-controls="ex2-tabs-3"
      aria-selected="false"
      >Another link</a
    >
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content" id="ex2-content">
  <div
    class="tab-pane fade show active"
    id="ex2-tabs-1"
    role="tabpanel"
    aria-labelledby="ex2-tab-1"
  >
  <div class="container card m-4 p-5 ">

<form action="/updateprofile" method="post" enctype="multipart/form-data">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  @csrf
  <div class="row mb-4">
    <div class="col">
      <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" class="form-control" id="firstName" aria-describedby="emailHelp" value="{{$profiledetails->firstname}}" name="firstname">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" id="lastName" aria-describedby="emailHelp" value="{{$profiledetails->lastname}}" name="lastname">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-group">
    <label for="inputEmail">Email address</label>
    <input type="email" name="emailaddress" class="form-control" id="inputEmail" aria-describedby="emailHelp" value="{{$profiledetails->emailaddress}}">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <!-- Text input -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-group">
    <label for="firstName">Address 1</label>
    <input type="text" name="address1" class="form-control" id="address1" aria-describedby="emailHelp" value="{{$profiledetails->address1}}" >
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
    </div>
    <div class="col">
    <div class="form-group">
    <label for="lastName">Address 2</label>
    <input type="text" name="address2" class="form-control" id="address2" aria-describedby="emailHelp" value="{{$profiledetails->address2}}" >
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
    </div>
  </div>

  <!-- Number input -->
  <div class="row mb-4">

    <div class="col">
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Gender</label>
  <select class="custom-select my-1 mr-sm-2" name= "gender" id="inlineFormCustomSelectPref">
    <option @if($profiledetails->gender=="Male")
        {{"selected"}}
    @endif
     value="Male">Male</option>
    <option
    @if($profiledetails->gender=="Female")
        {{"selected"}}
    @endif
    value="Female">Female</option>

  </select>

    </div>
    <div class="col">
    <div class="form-group">
    <label for="mobileNumber">Mobile Number</label>
    <input type="text" class="form-control" id="mobileNumber" aria-describedby="emailHelp" value="{{$profiledetails->mobilenumber}}" name="mobilenumber">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
    </div>


  </div>

  <!-- <input type="text" name="firstname" value="" placeholder="firstname">
    <input type="file" name="valididurl" id="">

    <input type="submit" value="submit"> -->
  <!-- Submit button -->
  <span class="glyphicon glyphicon-floppy-disk"></span>
  <button type="submit" class="btn btn-primary btn-block mb-4">Submit </button>
</form>

</div>
  </div>
  <div
    class="tab-pane fade"
    id="ex2-tabs-2"
    role="tabpanel"
    aria-labelledby="ex2-tab-2"
  >
    Tab 2 content
  </div>
  <div
    class="tab-pane fade"
    id="ex2-tabs-3"
    role="tabpanel"
    aria-labelledby="ex2-tab-3"
  >
    Tab 3 content
  </div>
</div>
<!-- Tabs content -->

/////




@endsection
@section('css')
<style>
    active{
        border: 2px solid blue;
         width:fit-content;
          padding:0px 10px  0px 10px;
    border-radius: 5px 0px 0px 5px ;
    }
</style>
@endsection
