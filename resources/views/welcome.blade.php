@extends('layouts.main')

@section('title', 'FDVA Eventos')

@section('content')

@foreach($events as $event)
    <p>{{ $event->title }} -- {{ $event->description }}</p>
@endforeach

@endsection