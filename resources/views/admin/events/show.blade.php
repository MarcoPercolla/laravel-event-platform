@extends('layouts.admin')
@section('content')
    <div class="container bg-white text-black rounded p-5">
        <div class="row">
            <h2>{{ $event->name }}</h2>
            <p>{{ $event->available_tickets }}</p>
            <p>{{ $event->date }}</p>
            <p>creato da:{{ $event->user->name }}</p>
            @foreach ($event->tags as $tag)
            <p class= {{$tag->color}}>{{ $tag->name }}</p>
            @endforeach
        </div>

    </div>
@endsection