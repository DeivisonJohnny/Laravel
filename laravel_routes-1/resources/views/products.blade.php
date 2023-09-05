@extends('layouts.main')

@section('tittle', 'Produtos')

@section('content')
<h1>Tela de produtosss</h1>


@if($busca != '')
    <p>O usuario está buscando por -> {{$busca}}</p>

@endif


<div>

<p>O metodo request() faz com que seja possivel eu recuperar dados do query-string -> dados da URL do Site</p>

<p>Sintaxe padrão:</p>
<p>$variave = request('O_que_sera_passado_pela_url')</p>
</div>

@endsection
