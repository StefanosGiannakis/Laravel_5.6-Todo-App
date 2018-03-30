@extends('layout')


@section('content')
    <form action="{{ route('todo.save',['id'=>$todo->id]) }}" method="post" class="form-group">
    <input type="text" class="form-control" name="todo" value="{{$todo->todo}}" placeholder="Create a new Todo">
            {{ csrf_field() }}
    </form>
@stop