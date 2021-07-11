@extends('layouts.main')

@section('yield', 'Produto')

@section('content')
    @if ($id != null)
        <p>Exibindo o id: {{ $id }}</p>
    @endif
@endsection