<?php

namespace App\Services;

//Objetivo
//Define la interfaz que el cliente espera. Es la interfaz que el cliente usa para interactuar con el servicio.

interface DistanceService
{
    public function getDistanceInKilometers(): float;
}
