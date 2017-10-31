<?php
require('../model/VehiculeManager.php');
require('../entities/Vehicule.php');

// get the vehicle selected

$vehicleManager = new VehicleManager();

$vehicle = $vehicleManager->getSingleVehicle($_GET['id']);
$newVehicle ="test";


foreach ($vehicle as $key => $value) {
  $vehicle[$key]= new Vehicle($value);
}


if(isset($_POST) && count($_POST)>0){
$newVehicle = new Vehicle($_POST);
$vehicleManager->updateSingleVehicle($newVehicle);
header('Location: index.php');
}

include("../views/modifyView.php");

 ?>
