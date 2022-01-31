@extends('layouts.dashBoardframe')
@section('content')

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
