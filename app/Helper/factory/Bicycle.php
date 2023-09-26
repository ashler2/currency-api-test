<?php

namespace App\Helper\factory;

class Bicycle extends Vehicle
{
    public function drive(): string
    {
        return "Riding a bicycle";
    }
}
