<?php
require('../model/VehiculeManager.php');
require('../entities/Vehicule.php');

// get single vehicle

$vehicleManager = new VehicleManager();
$vehicle = $vehicleManager->getSingleVehicle($_GET['id']);
foreach ($vehicle as $key => $value) {
  $vehicle[$key]= new Vehicle($value);
}

// check the form and if it's ok add a new vehicle in db

if(isset($_POST) && count($_POST)>3){
  $newVehicle = new Vehicle($_POST);
  $vehicleManager->addVehicle($_POST);
  // header('Location: index.php');
}









include"../views/singleView.php";

?>
