@extends('layouts.dashBoardframe')

@section('content')

<div class="container">

<h1>Make Payment</h1>

<form action="/pay" method="post" enctype="multipart/form-data">
@csrf
<input type="hidden" name="form" value="{{$form}}">
<input type="hidden" name="amount" value="{{$amount}}">
<div class="col">
        <div class="form-group">
                            <label for="creditcardno" class="labels"> Credit card number</label>
                            <input id="creditcardno" class="form-control SupportFormInput" type="text" name="creditcardno"  >
                          </div>
        </div>
        <div class="col">
        <div class="form-group">
            <select class="custom-select" name="cardtype" >
            <option value="">Select your card type</option>
            <option value="MasterCard">MasterCard</option>
            <option value="Visa Card">Visa Card</option>
            <option value="Verve">Verve</option>
            </select>
  </div>
        </div><div class="col">
        <div class="form-group">
                            <label for="expiration" class="labels">Expiration</label>
                            <input id="expiration" class="form-control SupportFormInput" type="text" name="expiration"  >
                          </div>
        </div><div class="col">
        <div class="form-group">
                            <label for="security" class="labels">Security</label>
                            <input id="security" class="form-control SupportFormInput" type="text" name="security"  >
                          </div>
        </div><div class="col">
        <div class="form-group">
                            <label for="billingaddress" class="labels"> Billing Address</label>
                            <input id="billingaddress" class="form-control SupportFormInput" type="text" name="billingaddress"  >
                          </div>
        </div>
        <p class="text-danger"> Amount:P{{$amount}} </p>
        <button>Make Payment</button>
</div>

@endsection
