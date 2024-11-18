@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('vehiculos.create') }}" class="btn btn-primary">Crear Vehículo</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo de Vehículo</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehiculo)
            <tr>
                <td>{{ $vehiculo->id }}</td>
                <td>{{ $vehiculo->tipo_vehiculo }}</td>
                <td>{{ $vehiculo->categoria }}</td>
                <td>
                    <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('vehiculos.destroy', $vehiculo) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('¿Eliminar este vehículo?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
