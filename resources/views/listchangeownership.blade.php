@extends('layouts.dashBoardframe')
@section('content')



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
