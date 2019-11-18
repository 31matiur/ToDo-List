@extends('layouts.app')

<title>Incomplete Jobs List</title>

@section('content')

  <h1>ToDos</h1>
  <div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="{{Request::is('todo/create') ? 'active' : ''}}"><a href="todo/create">Create new job</a></li>
    </ul>
  </div>
  <div class="well">

    @if(count($todos) > 0)
        @foreach($todos as $todo)
          <div class="well">
            <h3><a href="todo/{{$todo->id}}"><input id="ticked" type="checkbox">{{$todo->incompletejob}}</a></h3>
          </div>
          @endforeach
      @endif
    </div>
@endsection
