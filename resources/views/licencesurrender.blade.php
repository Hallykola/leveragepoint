@extends('layouts.dashBoardframe')
@section('content')



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
