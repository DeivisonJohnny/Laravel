@extends('layouts.main')

@section('tiitle', 'HDC Events')

@section('content')
        <!-- <img src="/img/casavitoria.png" alt=""> -->
        <h1>Alguma coisa</h1>
        @if(10 > 100) 
            <p>A condição true</p>
        @else
            <p>{{ $nome }}</p>
        @endif

        @for($i = 0; $i < count($arr); $i++ ) 
            <p>{{$arr[$i]}}</p>
        @endfor

        @php
            echo "Aqui vai código php";
            //var_dump(phpinfo());
        @endphp

        {{-- Comentarios em Blade --}}

        {{--Aqui vai uma estrutura de repetição ForEach--}}

        <p>Abaixo foi usada uma estrutura de repetição:</p>

        @foreach($nomes as $nomes) 
        <p>{{ $loop -> index }}</p> {{-- Este código mostra o indice do array--}}
        <p>{{ $nomes }}</p>
        @endforeach

@endsection