@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Vehículo</h1>
    <form action="{{ route('vehiculos.update', $vehiculo) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="tipo_vehiculo">Tipo de Vehículo</label>
            <input type="text" name="tipo_vehiculo" class="form-control" value="{{ $vehiculo->tipo_vehiculo }}" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoría</label>
            <input type="text" name="categoria" class="form-control" value="{{ $vehiculo->categoria }}" required>
        </div>
        <button class="btn btn-primary mt-2">Actualizar</button>
    </form>
</div>
@endsection
