<?php

namespace App\Services;

class MilesDistanceService
{
    protected $miles;

    public function __construct($miles)
    {
        $this->miles = $miles;
    }

    public function getDistanceInMiles()
    {
        return $this->miles;
    }
}
