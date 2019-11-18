@extends('layouts.app')

@section('content')
  <h1>Create Job</h1>
  {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
    {{ Form::bsText('completejob') }}
  {!! Form::close() !!}
@endsection
