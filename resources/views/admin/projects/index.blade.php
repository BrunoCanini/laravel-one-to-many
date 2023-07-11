@extends('layouts.admin')
@section('content')

@foreach ($projects as $project)
    <p>TITLE: {{$project->title}}</p>
    <p>CONTENT: {{$project->content}}</p>
    <p>DEAD LINE: {{$project->deadline}}</p>
    <a href="{{route('admin.projects.show', $project)}}">Deteils</a>
    <hr>
@endforeach

@endsection