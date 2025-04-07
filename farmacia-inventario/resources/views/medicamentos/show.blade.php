@extends('layouts.app')

@section('content')
    <h1>{{ $medicamento->nombre }}</h1>
    <p>Descripción: {{ $medicamento->descripcion }}</p>
    <p>Cantidad: {{ $medicamento->cantidad }}</p>
    <p>Precio: ${{ $medicamento->precio }}</p>
    <a href="{{ route('medicamentos.edit', $medicamento) }}">Editar</a>
@endsection
