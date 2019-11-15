@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Complete Jobs List</title>
  </head>
  <body>
    <h1>ToDos</h1>
    <div class="well">

      @if(count($todos) > 0)
          @foreach($todos as $todo)
            <div class="well">

              <h3><a href="todo/{{$todo->id}}">&#10004;<del>{{$todo->completejob}}</del></a></h3>
            </div>
            @endforeach
        @endif
      </div>
  </body>
</html>
@endsection
