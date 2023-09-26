<?php

namespace App\Helper\decorator;

use App\Helper\factory\Vehicle;

class SmartVehicleFeature
{
    private $vehicle;

    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function drive(): string
    {
        $drive = $this->vehicle->drive();
        return $drive . "... but smartly.";
    }
}
