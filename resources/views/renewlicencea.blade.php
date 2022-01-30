@extends('layouts.dashBoardframe')
@section('content')
<div class="container">
<form action="/updaterenewlicenceform" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <input type="hidden" name="form" value="{{$id}}">
                            <label for="applicantname" class="labels">Name of Applicant</label>
                            <input id="applicantname" class="form-control SupportFormInput" type="text" name="applicantname" value="{{$details->applicantname}}">
                          </div>
                          <div class="form-group">
                            <label for="applicantadd" class="labels">Address of Applicant</label>
                            <input id="applicantadd" class="form-control SupportFormInput" type="text" name="applicantadd" value="{{$details->applicantadd}}">
                          </div>
                          <div class="form-group">
                            <label for="appliedfor" class="labels">Private Security Applied for</label>
                            <input id="appliedfor" class="form-control SupportFormInput" type="text" name="appliedfor" value="{{$details->appliedfor}}" >
                          </div>
                          <h5>Directors</h5>
                          <div class="row">
                          <div class="col">
        <div class="form-group">
                            <label for="director1name" class="labels">Director name</label>
                            <input id="director1name" class="form-control SupportFormInput" type="text" name="director1name" value="{{$details->director1name}}" >
                          </div>
        </div> <div class="col">
        <div class="form-group">
                            <label for="director1address" class="labels">Director Address</label>
                            <input id="director1address" class="form-control SupportFormInput" type="text" name="director1address" value="{{$details->director1address}}"  >
                          </div>
        </div> <div class="col">
        <div class="form-group">
                            <label for="director1nationality" class="labels">Director nationality</label>
                            <input id="director1nationality" class="form-control SupportFormInput" type="text" name="director1nationality" value="{{$details->director1nationality}}" >
                          </div>
        </div>
    </div>
    <div class="row">
    <div class="col">
        <div class="form-group">
                            <label for="director2name" class="labels">Director name</label>
                            <input id="director2name" class="form-control SupportFormInput" type="text" name="director2name" value="{{$details->director2name}}" >
                          </div>
        </div> <div class="col">
        <div class="form-group">
                            <label for="director2address" class="labels">Director Address</label>
                            <input id="director2address" class="form-control SupportFormInput" type="text" name="director2address" value="{{$details->director2address}}"  >
                          </div>
        </div> <div class="col">
        <div class="form-group">
                            <label for="director2nationality" class="labels">Director nationality</label>
                            <input id="director2nationality" class="form-control SupportFormInput" type="text" name="director2nationality" value="{{$details->director2nationality}}"  >
                          </div>
        </div>
    </div>


    <h4>Shareholders</h4>
    <div class="row">
    <div class="col">
        <div class="form-group">
                            <label for="shareholder1name" class="labels">Shareholder Name</label>
                            <input id="shareholder1name" class="form-control SupportFormInput" type="text" name="shareholder1name"  >
                          </div>
        </div> <div class="col">
        <div class="form-group">
                            <label for="shareholder1address" class="labels">Shareholder Address</label>
                            <input id="shareholder1address" class="form-control SupportFormInput" type="text" name="shareholder1address"  >
                          </div>
        </div> <div class="col">
        <div class="form-group">
                            <label for="shareholder1nationality" class="labels">Shareholder Nationality</label>
                            <input id="shareholder1nationality" class="form-control SupportFormInput" type="text" name="shareholder1nationality"  >
                          </div>
        </div>
    </div>
    <div class="row">
    <div class="col">
        <div class="form-group">
                            <label for="shareholder2name" class="labels">Shareholder Name</label>
                            <input id="shareholder2name" class="form-control SupportFormInput" type="text" name="shareholder2name"  >
                          </div>
        </div> <div class="col">
        <div class="form-group">
                            <label for="shareholder2address" class="labels">Shareholder Address</label>
                            <input id="shareholder2address" class="form-control SupportFormInput" type="text" name="shareholder2address"  >
                          </div>
        </div> <div class="col">
        <div class="form-group">
                            <label for="shareholder2nationality" class="labels">Shareholder Nationality</label>
                            <input id="shareholder2nationality" class="form-control SupportFormInput" type="text" name="shareholder2nationality"  >
                          </div>
        </div>
    </div>
 <button type="submit">NEXT</button>
</form>
</div>
</div>
@endsection
