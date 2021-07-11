<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/script.js"></script>
    </head>
    <body>
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
    </body>
</html>