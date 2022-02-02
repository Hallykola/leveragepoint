@extends('layouts.dashBoardframe')
@section('content')

<h1 style="margin-bottom: 50px; margin-top:50px">  Licence Ammendment Applications</h1>

@livewire('tablewidget',
['tablename' =>'licence_ammendent_requests',
 'headings'=>['Form Number','Applicant Name','Applicant Phone','Applicant Email', 'Applicant Date'],
 'datacolumns'=>['form','applicantname','applicantphonenumber','applicantemailaddress','created_at'],
 'link'=>['form'=>['prefix'=>'/viewammendmentoflicence/', 'suffix'=>''],
],
 'style'=>[]
 ]
 )

@endsection
