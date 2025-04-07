@extends('layouts.app')

@section('content')
    <h1>Nuevo Medicamento</h1>
    <form action="{{ route('medicamentos.store') }}" method="POST">
        @include('medicamentos.form')
    </form>
@endsection
