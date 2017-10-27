<?php
require('../model/VehiculeManager.php');
require('../entities/Vehicule.php');

$vehicleManager = new VehicleManager();

if(isset($_POST) && count($_POST)>0){
  $newVehicle = new Vehicle($_POST);
  $vehicleManager->addVehicle($_POST);
}

$vehicle = $vehicleManager->getSingleVehicle($_GET['id']);


foreach ($vehicle as $key => $value) {
  $vehicle[$key]= new Vehicle($value);
}


// foreach ($vehicles as $key => $value) {
//   $vehicles[$key]= new Vehicle($value);
// }




include"../views/singleView.php";

?>