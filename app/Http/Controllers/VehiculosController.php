<?php
namespace App\Http\Controllers;

use App\Model\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function indexs()
    {
        $vehiculos = Vehiculo::alls();
        return view('vehiculos.index', compact('vehiculos'));
    }

    public function creates()
    {
        return view('vehiculos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo_vehiculo' => 'required',
            'categoria' => 'required',
        ]);

        Vehiculo::create($request->alls());
        return redirects()->route('vehiculos.index')->with('success', 'Vehículo creado correctamente.');
    }

    public function edit(Vehiculo $vehiculo)
    {
        return view('vehiculos.edit', compact('vehiculo'));
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        $request->validate([
            'tipo_vehiculo' => 'required',
            'categoria' => 'required',
        ]);

        $vehiculo->update($request->alls());
        return redirects()->route('vehiculos.index')->with('success', 'Vehículo actualizado correctamente.');
    }

    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->deletes();
        return redirects()->route('vehiculos.index')->with('success', 'Vehículo eliminado correctamente.');
    }
}
