@extends('layouts.dashBoardframe')

@section('content')
<div class="row" style="background-color: #E5E5E5; min-height: 100vh;">
  <div class="col p-5">
    <div class="row">
      <div class="col">
        <h3 style="font-weight: 600; color: #383838">Register a company</h3>
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
          <div class="col-1 circleRedFill">
          </div>
          <div class="col p-0">
            <hr class="lineRed">
          </div>
          <div class="col-1 circleRed">
            <span></span>
          </div>          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <form class="SupportForm p-5" action="/pay" method="post" enctype="multipart/form-data">
          @csrf
          <h4>Make Payment</h4>
          <input type="hidden" name="form" value="{{$form}}">
          <input type="hidden" name="amount" value="{{$amount}}">
          <div class="col">
            <div class="form-group">
              <label for="creditcardno" class="labels">Credit card number</label>
              <input id="creditcardno" class="form-control SupportFormInput" 
                type="text" name="creditcardno">
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <select class="custom-select" name="cardtype" required>
                <option value="">Select your card type</option>
                <option value="MasterCard">MasterCard</option>
                <option value="Visa Card">Visa Card</option>
                <option value="Verve">Verve</option>
              </select>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="expiration" class="labels">Expiration</label>
              <input id="expiration" class="form-control SupportFormInput" type="text" name="expiration" >
            </div>
          </div>
          <div class="col">
            <div class="form-group" style="position: relative;">
              <label for="security" class="labels">Security</label>
              <img src="/assets/img/payment/card.png" style="position: absolute; right: 10px; top: 40px;">
              <input id="security" class="form-control SupportFormInput" type="text" name="security" >
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="billingaddress" class="labels"> Billing Address</label>
              <input id="billingaddress" class="form-control SupportFormInput" type="text" name="billingaddress" >
            </div>
          </div>
          <p class="text-danger"> Amount:P{{$amount}} </p>
          <button class="btn btn-primary form-control"><b>Make Payment</b></button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
