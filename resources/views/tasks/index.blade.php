@extends('layouts.master')
@section('content')

@foreach($tasks as $task)
    <a class="item item-show" href="{{url('/')}}/tasks/{{$task->id}}">
        <div><b>{{$task->title}}</b>A visual novel from Astronauts: Sirius.<br /><i>{{$task->points}}</i><strong>for: </strong>PC</div>
    </a>
@endforeach

@endsection