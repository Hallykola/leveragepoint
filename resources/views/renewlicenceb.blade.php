@extends('layouts.dashBoardframe')
@section('content')
<div class="container">
<form action="/updaterenewlicenceformb" method="post" enctype="multipart/form-data">
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
  name="firstapplication" id="inlineCheckbox1" value="Yes">
  <label class="form-check-label" for="inlineCheckbox1">Yes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"
  @if($details->firstapplication == 'No')
  {{'checked="checked"'}}
  @endif
   name="firstapplication" id="inlineCheckbox2" value="No">
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
        <input id="licencenumber" class="form-control SupportFormInput" type="text" name="licencenumber" value="{{$details->licencenumber}}" >
     </div>
        </div>
</div>

        <div class="col">
        <div class="form-group">
                            <label for="prevlicencerejected" class="labels"> Has any application made for a licence by you ever been rejected, cancelled or surrendered?</label>
                            <input id="prevlicencerejected" class="form-control SupportFormInput" type="text" name="prevlicencerejected" value="{{$details->prevlicencerejected}}" >
                          </div>
        </div>

        <div class="col">
        <div class="form-group">
                            <label for="personsemployed" class="labels">Number of Persons presently in your employ </label>
                            <input id="personsemployed" class="form-control SupportFormInput" type="text" name="personsemployed" value="{{$details->personsemployed}}" >
                          </div>
        </div>
<input type="file" name="valididurl" id="">
<input type="file" name="taxclearanceurl" id="">
<input type="file" name="otherdocumentsurl" id="">
<a href="/registercompany/{{$id}}">BACK</a>
<!-- <a href="/registercompany/{{$id}}">NEXT</a> -->
</div>
<button type="submit">NEXT</button>
</form>
</div>
@endsection
