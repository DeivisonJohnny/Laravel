@extends('layouts.main')

@section('title', 'Produto')

@section('content')


@if($id != null) 
    <p>Aqui vai esta exibindo um produto de {{'->' .  $id }}</p>
@else
    <p>Não foi passado pelo a variavel id: {{'->' . $id }}</p>

@endif


@endsection