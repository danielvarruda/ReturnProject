@extends('layouts.main')

@section('title', 'FDVA Eventos')

@section('content')

<h1>Olá, {{ $name }}</h1>

<img src="/img/banner.jpeg">

<p>Idade: {{ $age }}</p>

<p>Domino as linguagens:</p>
<ul>
    @foreach ($languages as $language)
        <li>{{ $language }}</li>
    @endforeach
</ul>

<p>Empresas que Trabalhei/Trabalho</p>
<ul>
    @for ($i = 0; $i < count($companies); $i++)
        <li>{{ $companies[$i] }}</li>
    @endfor
</ul>

@endsection