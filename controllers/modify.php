<?php
require('../model/VehiculeManager.php');
require('../entities/Vehicule.php');

$vehicleManager = new VehicleManager();

$vehicle = $vehicleManager->getSingleVehicle($_GET['id']);
// $vehicle->updateSingleVehicle($_POST);


foreach ($vehicle as $key => $value) {
  $vehicle[$key]= new Vehicle($value);
}


include("../views/modifyView.php");

 ?>
