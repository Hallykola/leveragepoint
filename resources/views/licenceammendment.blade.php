@extends('layouts.dashBoardframe')
@section('content')


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
