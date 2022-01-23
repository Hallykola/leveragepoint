@extends('layouts.frame')

@section('content')
<form action="/updateprofile" method="post" enctype="multipart/form-data">
@csrf
<input type="text" name="firstname" value="" placeholder="firstname">
    <input type="file" name="valididurl" id="">

    <input type="submit" value="submit">
</form>

@endsection
