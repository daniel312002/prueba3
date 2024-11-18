@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Vehículo</h1>
    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tipo_vehiculo">Tipo de Vehículo</label>
            <input type="text" name="tipo_vehiculo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoría</label>
            <input type="text" name="categoria" class="form-control" required>
        </div>
        <button class="btn btn-primary mt-2">Guardar</button>
    </form>
</div>
@endsection
