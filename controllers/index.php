<?php
require('../model/VehiculeManager.php');
require('../entities/Vehicule.php');

// show all the vehicles
$vehicleManager = new VehicleManager();

$vehicles = $vehicleManager->getAllVehicles();
foreach ($vehicles as $key => $value) {
  $vehicles[$key]= new Vehicle($value);
}

// check the form and if it's ok add a new vehicle in db

if(isset($_POST) && count($_POST)>0){
  $newVehicle = new Vehicle($_POST);
  $vehicleManager->addVehicle($_POST);
  header('Location: index.php');
}

include"../views/indexView.php";


 ?>
