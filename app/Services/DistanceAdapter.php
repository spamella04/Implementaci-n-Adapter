<?php

namespace App\Services;
//Esta clase adapta la interfaz de Adaptable (MilesDistanceService) 
//para que se ajuste a la interfaz esperada (DistanceService). Convierte millas a kilómetros.

class DistanceAdapter implements DistanceService
{
    protected $milesService;

    public function __construct(MilesDistanceService $milesService)
    {
        $this->milesService = $milesService;
    }

    public function getDistanceInKilometers(): float
    {
        $miles = $this->milesService->getDistanceInMiles();
        return $miles * 1.60934; // Conversión de millas a kilómetros
    }
}