@extends('layouts.admin')
@section('content')

<h1>PROJECT: {{$project->title}}</h1>
<p>CONTENT: {{$project->content}}</p>
<p>DEAD LINE: {{$project->deadline}}</p>

@endsection