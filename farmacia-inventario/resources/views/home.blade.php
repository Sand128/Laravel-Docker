<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bienvenido al sistema de gestión</h1>
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('medicamentos.index') }}" class="btn btn-primary btn-block">Ver Medicamentos</a>
            </div>
            <div class="col-md-6">
                <a href="{{ route('personal.index') }}" class="btn btn-primary btn-block">Ver Personal</a>
            </div>
        </div>
    </div>
@endsection
