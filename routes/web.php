<?php

use App\Http\Controllers\VehiculoController;

Route::get('/', function () {
    return redirect('/vehiculos');
});

Route::resource('vehiculos', VehiculoController::class);
