@extends('layouts.dashBoardframe')
@section('content')

<div class="container card m-5 p-5">


<form action="/setuserrolescript" method="post">
@csrf
<div class="col form-control">
<label for="email">Enter user email:</label>

<input id="email" type="email" name="email">

</div>
<div class="col form-control">
<label for="role">Choose Role to assign:</label>

<select name="role" id="role">
  <option value="USER">USER</option>
  <option value="ADMIN">ADMIN</option>

</select>

</div>
<button> SET ROLE</button>

</form>
</div>
@endsection
