@extends('layouts.app')

@section('content')
    <h1>Editar Medicamento</h1>
    <form action="{{ route('medicamentos.update', $medicamento) }}" method="POST">
        @method('PUT')
        @include('medicamentos.form')
    </form>
@endsection
