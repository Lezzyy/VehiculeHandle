<?php
require('../model/VehiculeManager.php');
require('../entities/Vehicule.php');

$vehicleManager = new VehicleManager();

if(isset($_POST) && count($_POST)>3){
  $newVehicle = new Vehicle($_POST);
  $vehicleManager->addVehicle($_POST);
}


$vehicles = $vehicleManager->getAllVehicles();
foreach ($vehicles as $key => $value) {
  $vehicles[$key]= new Vehicle($value);
}



include"../views/indexView.php";


 ?>
