@extends('layouts.admin')
@section('content')

<h1>CREA NUOVO PRODOTTO</h1>

<form action="{{route('admin.projects.store')}}" method="POST" class="needs-validation">
    @csrf

    <label for="title">title</label>
    <input class="form-control" type="text" name="title" id="title" value="">

    <label for="content">content</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>

    <label for="deadline">dead line</label>
    <input class="form-control" type="text" name="deadline" id="deadline" value="">

    <input type="submit" class="form-control btn btn-primary my-4" value="Create" style="width: 10rem;">

</form>

@endsection