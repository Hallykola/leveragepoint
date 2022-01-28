@extends('layouts.dashBoardframe')

@section('content')
<div class="container">
{{$myapplication->application}}

<p>{{$myapplication->clearancecertificate}}</p>
<p>{{$myapplication->transferreid}}</p>
</div>

@endsection
