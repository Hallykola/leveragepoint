@extends('layouts.dashBoardframe')
@section('content')

<h1 style="margin-bottom: 50px; margin-top:50px">  Licence Renewal Applications</h1>

@livewire('tablewidget',
['tablename' =>'renewlicenceone',
 'headings'=>['Application Number','Applicant Name','Address', 'Status','Application Date '],
 'datacolumns'=>['form','applicantname','applicantadd','status','created_at'],
 'link'=>['form'=>['prefix'=>'/renewlicence/', 'suffix'=>''],
],
 'style'=>[]
 ]
 )



@endsection
