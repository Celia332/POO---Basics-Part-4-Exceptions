<?php

require_once 'Bicycle.php';
require_once 'cars.php';
require_once 'camion.php';
require_once 'Vehicle.php';



//Camion 

$homerTruck = new Truck('red',4 ,45,45);

var_dump($homerTruck);

echo $homerTruck->forward();
echo '<br> Vitesse du camion : ' . $homerTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $homerTruck->brake();
echo '<br> Vitesse du camion : ' . $homerTruck->getCurrentSpeed(). ' km/h' . '<br>';
echo $homerTruck->brake();
echo $homerTruck->actualChargeFull();




//Bike

$bike = new Bicycle('blue', 40);
$myBike = new Bicycle('green', 50);



// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();



//Cars

$car = new Car('orange', 5, 'gasolina');
echo $car->forward();

$margeCar = new Car('orange', 30, 'diesel');




try {
 $car->start();

}
catch (Exception $e){

    $car->setHasParkBrake();
} finally {
    echo 'Ma voiture roule comme un donut';
}









