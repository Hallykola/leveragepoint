@extends('layouts.dashBoardframe')
@section('content')

<h1 style="margin-bottom: 50px; margin-top:50px">   Applications to Surrender Licence</h1>


@livewire('tablewidget',
['tablename' =>'surrenderlicences',
 'headings'=>['Form Number','Licence Number','Email','Name', 'Phone','Status','Application Date'],
 'datacolumns'=>['form','licencenumber','applicantemail','applicantname','applicantphone','status','created_at'],
 'link'=>['form'=>['prefix'=>'/surrenderlicence/', 'suffix'=>''],
],
 'style'=>[]
 ]
 )

@endsection
