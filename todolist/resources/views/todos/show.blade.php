@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/todolist/public/home">Go back</a>
    <h1>{{ $todo->text }}</h1>
    <div class="label label-danger">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->body }}</p>
    <br><br>
    <a href="/todolist/public/todo/{{$todo->id}}/edit" class="btn btn-default">Edit Todo</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
@endsection