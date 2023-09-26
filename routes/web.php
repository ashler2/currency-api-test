<?php

use App\Helper\factory\VehicleTypeEnum;
use Illuminate\Support\Facades\Route;
use App\Helper\factory\VehicleFactory;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/design-pattern/factory', function () {
    $car = VehicleFactory::create(VehicleTypeEnum::CAR->value);
    $bicycle = VehicleFactory::create(VehicleTypeEnum::BICYCLE->value);
    echo $car->drive();
    echo "<br>";
    echo $bicycle->drive();
});

/**
 * Combined with a decorator...
 */
Route::get('/design-pattern/decorator', function () {

    $car = VehicleFactory::create(VehicleTypeEnum::CAR->value);
    $bicycle = VehicleFactory::create(VehicleTypeEnum::BICYCLE->value);
    $smartVehicle = VehicleFactory::create(VehicleTypeEnum::SMART_CAR->value);

    echo $smartVehicle->drive();

});

