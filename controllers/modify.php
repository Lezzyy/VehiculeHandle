<?php
require('../model/VehiculeManager.php');
require('../entities/Vehicule.php');

$vehicleManager = new VehicleManager();

$vehicle = $vehicleManager->getSingleVehicle($_GET['id']);


foreach ($vehicle as $key => $value) {
  $vehicle[$key]= new Vehicle($value);
}

// if(!empty($_POST)){
//   $vehicle->updateSingleVehicle($_POST, $_GET);
// } else {
//   echo "veuillez remplir les champs";
// }

include("../views/modifyView.php");

 ?>
