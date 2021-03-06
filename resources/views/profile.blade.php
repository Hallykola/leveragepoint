@extends('layouts.dashBoardframe')

@section('content')
<div class="row" style="background-color: #E5E5E5">
  <div class="col px-5">
    <div class="container my-5" style="background-color: #FFFFFF;border-radius: 10px;">
      <div class="pt-4">
        <!-- Tabs navs -->
        <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#ex2-tabs-1"
             role="tab" aria-controls="ex2-tabs-1" aria-selected="true"
             style="border-radius: 10px 0px 0px 10px;"
             >
             Basic Information
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#ex2-tabs-2"
              role="tab" aria-controls="ex2-tabs-2" aria-selected="false">
              Security settings
            </a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#ex2-tabs-3"
              role="tab" aria-controls="ex2-tabs-3" aria-selected="false"
              style="border-radius: 0px 10px 10px 0px;"
              >
              Uploaded documents
            </a>
          </li>
        </ul>
        <!-- Tabs navs -->

        <!-- Tabs content -->
        <div class="tab-content" id="ex2-content">
          <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
            <div>
              <form action="/updateprofile" method="post" enctype="multipart/form-data">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                @csrf
                <div class="row p-3">
                  <div class="col-3">
                    <div class="row pt-5">
                      <div class="col py-2">
                        <img
                        @if($profiledetails->profilephoto=="")
                         src="/assets/img/profile/profilephoto.png"
                        @else
                        src="{{$profiledetails->profilephoto}}"
                        @endif
                          class="img-thumbnail" alt="not available" width="100%">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <input id="profilephoto" type="file" name="profilephoto">
                      </div>
                    </div>
                  </div>
                  <div class="col-9">
                    <div class="container pt-5 pb-3">
                      <div class="row">
                        <div class="col-6 py-2">
                          <div class="form-group">
                            <label for="firstname" class="labels">First Name</label>
                            <input id="firstname" class="form-control SupportFormInput" type="text" name="firstname" value="{{$profiledetails->firstname}}">
                          </div>
                        </div>
                        <div class="col-6 py-2">
                          <div class="form-group">
                            <label for="lastname" class="labels">Last Name</label>
                            <input id="lastname" class="form-control SupportFormInput" type="text" name="lastname" value="{{$profiledetails->lastname}}">
                          </div>
                        </div>
                        <div class="col-12 py-2">
                          <div class="form-group">
                            <label for="emailaddress" class="labels">Email address</label>
                            <input id="emailaddress" class="form-control SupportFormInput" type="text" name="emailaddress" value="{{$profiledetails->emailaddress}}">
                          </div>
                        </div>
                        <div class="col-6 py-2">
                          <div class="form-group">
                            <label for="address1" class="labels">Address 1</label>
                            <input id="address1" class="form-control SupportFormInput" type="text" name="address1" value="{{$profiledetails->address1}}">
                          </div>
                        </div>
                        <div class="col-6 py-2">
                          <div class="form-group">
                            <label for="address2" class="labels">Address 2</label>
                            <input id="address2" class="form-control SupportFormInput" type="text" name="address2" value="{{$profiledetails->address2}}">
                          </div>
                        </div>
                        <div class="col-6 py-2">
                          <div class="form-group">
                            <label for="gender" class="labels">Gender</label>
                            <select id="gender" class="form-select SupportFormInput" name="gender">
                              <option value="{{$profiledetails->gender}}">{{$profiledetails->gender}} --selected</option>
                              <option value="MALE">MALE</option>
                              <option value="FEMALE">FEMALE</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-6 py-2">
                          <div class="form-group">
                            <label for="mobileNumber" class="labels">Mobile number</label>
                            <input id="mobileNumber" class="form-control SupportFormInput" type="tel" name="mobilenumber" value="{{$profiledetails->mobilenumber}}">
                          </div>
                        </div>
                        <div class="col-6 py-2">
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary form-control">
                              <div class="row">
                                <div class="col-8 d-flex">
                                  <span id="saveChanges" class="m-0">Save Changes</span>
                                </div>
                                <div class="col-4">
                                  <img src="/assets/img/profile/save.png">
                                </div>
                              </div>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
            <div class="container">
              <div class="row">
                <div class="col py-5">
                  <form method="post" action="#">
                    @csrf
                    <div class="form-group py-3">
                      <label for="password" class="label">Current Password</label>
                      <input id="password" class="form-control SupportFormInput" type="password" name="password">
                    </div>
                    <div class="form-group py-3">
                      <label for="newpassword" class="label">New  Password</label>
                      <input id="newpassword" class="form-control SupportFormInput" type="password" name="newpassword">
                    </div>
                    <div class="form-group py-3">
                      <label for="confirmpassword" class="label">Confirm Password</label>
                      <input id="confirmpassword" class="form-control SupportFormInput" type="password" name="confirmpassword">
                    </div>
                    <div class="form-group py-5">
                      <button type="submit" class="btn btn-primary">Set Password</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="ex2-tabs-3" role="tabpanel" aria-labelledby="ex2-tab-3">
            <div class="container">
              <div class="row">
                <div class="col py-5">
                  <form method="post" action="#">
                    @csrf
                    <div class="form-group py-3">
                      <label for="tax" class="label">Tax clearance:</label>
                      <ul>
                        <li class="documents py-1 px-2 my-2 d-flex">
                          <span>Tax clearance.pdf </span>
                          <span> <i class="fas fa-trash-alt"></i></span>
                        </li>
                      </ul>
                      <input id="tax" class="pt-2" type="file" name="tax">
                    </div>
                    <div class="form-group py-3">
                      <label for="Identification" class="label">Valid means of Identification:</label>
                      <ul>
                        <li class="documents py-1 px-2 my-2 d-flex">
                          <span>Drivers license.jpg</span>
                          <span> <i class="fas fa-trash-alt"></i></span>
                        </li>
                        <li class="documents py-1 px-2 my-2 d-flex">
                          <span>passport.pdf</span>
                          <span> <i class="fas fa-trash-alt"></i></span>
                        </li>
                      </ul>
                      <input id="Identification" class="pt-2" type="file" name="Identification">
                    </div>
                    <div class="form-group py-3">
                      <label for="Certificate" class="label">Health Certificate:</label>
                      <ul>
                        <li class="documents py-1 px-2 my-2 d-flex">
                          <span>Health cert.pdf</span>
                          <span> <i class="fas fa-trash-alt"></i></span>
                        </li>
                      </ul>
                      <input id="Certificate" class="pt-2" type="file" name="Certificate">
                    </div>
                    <div class="form-group py-5" style="width: 300px;">
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary form-control">
                          <div class="row">
                            <div class="col-8 d-flex">
                              <span id="saveChanges" class="m-0">Save Changes</span>
                            </div>
                            <div class="col-4">
                              <img src="/assets/img/profile/save.png">
                            </div>
                          </div>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Tabs content -->

      </div>
    </div>
  </div>
</div>
@endsection
