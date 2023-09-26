<?php

namespace App\Helper\factory;

class Car extends Vehicle
{
    public function drive(): string
    {
        return "Driving a car";
    }
}
