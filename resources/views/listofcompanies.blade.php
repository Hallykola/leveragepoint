@extends('layouts.dashBoardframe')
@section('content')




<h1 style="margin-bottom: 50px">  Licence Applications</h1>
@livewire('tablewidget',
['tablename' =>'companies',
 'headings'=>['Form Number','Applicant Name','Address', 'Applied for',' Status '],
 'datacolumns'=>['form','applicantname','applicantadd','appliedfor','status'],
 'link'=>['form'=>['prefix'=>'/registercompany/', 'suffix'=>''],
],
 'style'=>[]
 ]
 )

 <div style="margin-bottom: 50px; margin-top:50px"></div>

 <livewire:licencelv/>




@endsection
