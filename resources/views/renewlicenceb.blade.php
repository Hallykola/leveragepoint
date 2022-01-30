@extends('layouts.dashBoardframe')
@section('content')
<div class="row" style="background-color: #E5E5E5; min-height: 100vh;">
  <div class="col p-5">
    <div class="row">
      <div class="col">
        <h3 style="font-weight: 600; color: #383838">Renewal of Licence</h3>
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
            <span></span>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <form class="SupportForm p-5" action="/updaterenewlicenceformb" method="post" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="form" value="{{$details->form}}">
          <div class="row">
            <div class="col-4">
              <p>Is this your first application?</p>
            </div>

            <div class="col-8">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"
                  @if($details->firstapplication == 'Yes')
                  {{'checked="checked"'}}
                  @endif
                  name="firstapplication" id="inlineCheckbox1" value="Yes"
                >
                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio"
                  @if($details->firstapplication == 'No')
                  {{'checked="checked"'}}
                  @endif
                  name="firstapplication" id="inlineCheckbox2" value="No"
                >
                <label class="form-check-label"   for="inlineCheckbox2">No</label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-4">
                <label for="licencenumber" class="labels">If yes, enter licence number </label>
              </div>
              <div class="col">
                <input id="licencenumber" class="form-control SupportFormInput"
                  type="text" name="licencenumber" value="{{$details->licencenumber}}"
                >
              </div>
            </div>
          </div>
          <div class="col py-3">
            <div class="form-group">
              <label for="prevlicencerejected" class="labels"> Has any application made for a licence by you ever been rejected, cancelled or surrendered?</label>
              <input id="prevlicencerejected" class="form-control SupportFormInput" style="height: 100px;"
                type="text" name="prevlicencerejected" value="{{$details->prevlicencerejected}}"
              >
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="personsemployed" class="labels">Number of Persons presently in your employ </label>
              <input id="personsemployed" class="form-control SupportFormInput"
                type="text" name="personsemployed" value="{{$details->personsemployed}}"
              >
            </div>
          </div>
          <div class="row py-3">
            <div class="col-4">
              Upload Copy of Transferee Identity Card
            </div>
            <div class="col">
              <input type="file" name="valididurl" id="">
            </div>
          </div>
          <div class="row py-3">
            <div class="col-4">
              Upload Copy Tax Clearance certificate
            </div>
            <div class="col">
              <input type="file" name="taxclearanceurl" id="">
            </div>
          </div>
          <div class="row py-3">
            <div class="col-4">
              Upload other supporting documents
            </div>
            <div class="col">
              <input type="file" name="otherdocumentsurl" id="">
            </div>
          </div>
          <div class="row pb-3">
            <div class="col">
              <p style="font-weight: 500; color: #EE6243;">You are required to make a payment of P500 before your application can be submitted.</p>
            </div>
          </div>
          <div class="row">
            <div class="col text-start">
              <a class="btn btn-outline-primary" data-mdb-ripple-color="dark"
                href="/renewlicence/{{$id}}">
                <i class="fas fa-step-backward"></i> Previous</a>
            </div>
            <div class="col text-end">
              <button class="btn btn-primary" type="submit">NEXT
                <i class="fas fa-step-forward"></i>
              </button>
            </div>
          </div>
        </form>


        @if(Auth::user()->usertype=="ADMIN")
@livewire('approverlv',['form' =>$details->form, 'type'=>'RENEW'])
@endif
      </div>
    </div>
  </div>

</div>
@endsection
