@extends('layouts.dashBoardframe')
@section('content')

<livewire:licencelv/>

@livewire('tablewidget',
['tablename' =>'companies',
 'headings'=>['Form Number','Applicant Name','Address', 'Applied for',' Status '],
 'datacolumns'=>['form','applicantname','applicantadd','appliedfor','status'],
 'link'=>['form'=>['prefix'=>'/registercompany/', 'suffix'=>''],
],
 'style'=>[]
 ]
 )




@endsection
