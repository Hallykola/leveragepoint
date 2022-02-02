@extends('layouts.dashBoardframe')
@section('content')

<h1 style="margin-bottom: 50px; margin-top:50px">  Licence Change of Ownership Applications</h1>


@livewire('tablewidget',
['tablename' =>'change_ownership_requests',
 'headings'=>['Form Number','Applicant Name','Applicant Phone', 'Applicant Fax','Status','Application Date'],
 'datacolumns'=>['form','applicantname','applicantphone','applicantfax','status','created_at'],
 'link'=>['form'=>['prefix'=>'/viewchangeownership/', 'suffix'=>''],
],
 'style'=>[]
 ]
 )

@endsection
