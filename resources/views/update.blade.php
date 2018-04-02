@extends('layouts.app')


@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('todo.save',['id'=>$todo->id]) }}" method="post" class="form-group">
    <input type="text" class="form-control" name="todo" value="{{$todo->todo}}" placeholder="Create a new Todo">
            {{ csrf_field() }}
    </form>
@stop