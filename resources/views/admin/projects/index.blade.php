@extends('layouts.admin')
@section('content')

@foreach ($projects as $project)
    <p>TITLE: {{$project->title}}</p>
    <p>CONTENT: {{$project->content}}</p>
    <p>DEAD LINE: {{$project->deadline}}</p>
    <hr>
@endforeach

@endsection