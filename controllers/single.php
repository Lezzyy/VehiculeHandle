<?php
require('../model/VehiculeManager.php');
require('../entities/Vehicule.php');

// check the form and if it's ok add a new vehicle in db
$vehicleManager = new VehicleManager();
$vehicle = $vehicleManager->getSingleVehicle($_GET['id']);
foreach ($vehicle as $key => $value) {
  $vehicle[$key]= new Vehicle($value);
}

if(isset($_POST) && count($_POST)>3){
  $newVehicle = new Vehicle($_POST);
  $vehicleManager->addVehicle($_POST);
  // header('Location: index.php');
}
var_dump($_POST);







include"../views/singleView.php";

?>
