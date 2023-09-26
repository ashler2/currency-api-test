<?php

namespace App\Helper\factory;

use App\Helper\decorator\SmartVehicleFeature;

class VehicleFactory implements FactoryInterface
{
    /**
     * @throws \Exception
     */
    public static function create(string $type): Car|Bicycle|SmartVehicleFeature
    {
        return match ($type) {
            VehicleTypeEnum::CAR->value         => new Car(),
            VehicleTypeEnum::BICYCLE->value     => new Bicycle(),
            VehicleTypeEnum::SMART_CAR->value   => new SmartVehicleFeature(new Car()),
            default                             => throw new \Exception("Invalid vehicle type"),
        };
    }
}
