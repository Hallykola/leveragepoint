
@extends('layouts.dashBoardframe')

@section('content')
<div class="row" style="background-color: #E5E5E5">
  <div class="col p-5">
    <div class="row pb-3">
      <div class="col">
        <h3 style="font-weight: 600; color: #383838">Change of Ownership</h3>
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
          <div class="col-1 circleWhite">
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
        <form action="/newchangeownership" method="post" enctype="multipart/form-data" class="SupportForm p-5">
            @csrf
            <input type="hidden" name="form" value="{{$form}}">
            <div class="container">
              <h4 style="font-weight: 500;color: #565555">Enter contact detail of the Applicant</h4>
              <!-- <div class="form-group py-3">
                  <label for="appno label">Application Number:</label>
                  <input type="text" class="form-control SupportFormInput" id="appno" name="applicationnumber" value="{{rand(100,500).time()}}" readonly>
                </div> -->
              <div class="form-group py-3">
                  <input type="text" class="form-control SupportFormInput" name="applicantphone" value="{{$details->applicantphone}}" placeholder="Enter phone number of applicant">
              </div>
              <div class="form-group py-3">
                <input type="text" class="form-control SupportFormInput"  name="applicantaddress" value="{{$details->applicantaddress}}" placeholder="Enter email address of applicant">
              </div>
              <div class="form-group py-3">
                <input type="text" class="form-control SupportFormInput"  name="applicantfax" value="{{$details->applicantfax}}" placeholder="Enter fax for applicant">
              </div>
              <div class="row py-3">
                <div class="col-4">
                  Upload Copy of Transferee Identity Card
                </div>
                <div class="col">
                  <input type="file" name="transfereeid" id="">
                  <p>{{$details->transfereeid}}</p>
                </div>
              </div>
              <div class="row py-3">
                <div class="col-4">
                  Upload Copy Tax Clearance certificate
                </div>
                <div class="col">
                  <input type="file" name="clearancecertificate" id="">
                  <p>{{$details->clearancecertificate}}</p>
                </div>
              </div>
              <div class="row py-3">
                <div class="col-4">
                  Upload other supporting documents
                </div>
                <div class="col">
                  <input type="file" name="otherdocuments" id="">
                  <p>{{$details->otherdocuments}}</p>

                </div>
              </div>
              <div class="row">
                <div class="col">
                  <b style="color: #EE6243;">You are required to make a payment of P500 before your application can be submitted.</b>
                </div>
              </div>
              <div class="row py-3">
                <div class="col-12 text-end">
                  <input class="btn btn-primary" type="submit" name="change"/>
                </div>
              </div>

            </div>
        </form>
      </div>
    </div>
  </div>
 
</div>
@endsection
