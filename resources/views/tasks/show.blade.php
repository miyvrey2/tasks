@extends('layouts.master')
@section('content')

<div class="tasks_show">
    <header>
        <h1>{{$task->title}}</h1> <span class="points_top">{{$task->points}}</span>
    </header>
    <div class="body">
        {{$task->body}}
    </div>
</div>

@endsection