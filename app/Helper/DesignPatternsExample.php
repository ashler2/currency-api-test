<?php
use App\Helper\factory\VehicleFactory;
use App\Helper\factory\VehicleTypeEnum;

// A Factory is used to create each type of vehicle
$car = VehicleFactory::create(VehicleTypeEnum::CAR);
$bicycle = VehicleFactory::create(VehicleTypeEnum::BICYCLE);

echo $car->drive();
echo "<br>";
echo $bicycle->drive();

