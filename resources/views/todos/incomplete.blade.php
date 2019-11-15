@extends('layouts.app')

<title>Incomplete Jobs List</title>

@section('content')

  <h1>ToDos</h1>
  <div class="well">

    @if(count($todos) > 0)
        @foreach($todos as $todo)
          <div class="well">
            <h3><a href="todo/{{$todo->id}}"><input id="ticked" type="checkbox">{{$todo->incompletejob}}</a></h3>
          </div>
          @endforeach
      @endif
      <button href="Create" type="button" class="btn btn-dark">Create new Todo</button>
    </div>

    <script type="text/javascript">

      document.getElementById('ticked')onclick = function () {

      }

    </script>
@endsection
