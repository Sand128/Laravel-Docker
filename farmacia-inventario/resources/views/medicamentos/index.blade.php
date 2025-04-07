@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Medicamentos</h1>
    <a href="{{ route('medicamentos.create') }}" class="btn btn-primary mb-3">Crear nuevo</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicamentos as $medicamento)
            <tr>
                <td>{{ $medicamento->nombre }}</td>
                <td>{{ $medicamento->descripcion }}</td>
                <td>${{ $medicamento->precio }}</td>
                <td>{{ $medicamento->cantidad }}</td>
                <td>
                    <a href="{{ route('medicamentos.edit', $medicamento) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('medicamentos.destroy', $medicamento) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
