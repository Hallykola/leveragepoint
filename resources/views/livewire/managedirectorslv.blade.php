<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
<p>Directors</p>


@foreach($directors as $director)
<form wire:submit.prevent="createDirector">

<div class="form-row">
    <div class="col">
      <label for="validationCustom03">City</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div>
    <div class="col">
      <label for="validationCustom04">State</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col">
      <label for="validationCustom05">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>
@endforeach
<div>
    <p>{{$value}}</p>
    <input wire:model="value" type="text" name="vee" id="">
<button wire:click="$createDirector" type="button">Add</button>
</form>
</div>

</div>
