@extends('layouts.app')

@section('input')
{{-- Errors of validation --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('create') }}" method="post" class="form-group">
        <input type="text" class="form-control input-lg" name="todo" placeholder="Create a new Todo">
        {{ csrf_field() }}
</form>
@stop  

@section('content')

@foreach($todos as $todo)
    {{$todo->todo}}
    </br>
    {{date("h:m d-m-Y  ", strtotime( $todo->updated_at))}}
    <a href="{{route('todo.delete',['id'=>$todo->id])}}" class="btn btn-danger">x</a>
    |<a href="{{route('todo.update',['id'=>$todo->id])}}" class="btn btn-xs btn-warning">update</a>
    @if(!$todo->completed)
    |<a href="{{route('todo.completed',['id'=>$todo->id])}}" class="btn btn-xs btn-success">mark as completed</a>
    @else
    |<a href="{{route('todo.markAgain',['id'=>$todo->id])}}" class="btn btn-xs btn-info">mark as uncompleted</a>
    <span class="text-success">Completed ..!</span>
    @endif
    </br><hr>
    @endforeach
@stop
              
