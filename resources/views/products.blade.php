@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <h1>Conteúdo de produtos</h1>
    
    <p>
        <a href="/">Voltar</a>
    </p>
    
    @if($search != '')
        <p>Exibindo resultados para: {{ $search }}</p>
    @endif
@endsection