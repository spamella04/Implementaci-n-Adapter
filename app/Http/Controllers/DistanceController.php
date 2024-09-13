<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DistanceAdapter;
use App\Services\MilesDistanceService;

class DistanceController extends Controller
{
    public function showForm()
    {
        return view('distance');
    }

    public function convertDistance(Request $request)
    {
        // Validar la entrada
        $validated = $request->validate([
            'miles' => 'required|numeric',
        ]);

        // Instanciar el servicio de millas
        $milesService = new MilesDistanceService($validated['miles']);
        
        // Instanciar el adaptador con el servicio de millas
        $adapter = new DistanceAdapter($milesService);
        
        // Obtener la distancia en kilómetros
        $distanceInKilometers = $adapter->getDistanceInKilometers();

        // Pasar la variable 'distance' a la vista
        return view('distance', ['distance' => $distanceInKilometers]);
    }
}
