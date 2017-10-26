<?php
require('../model/VehiculeManager.php');
require('../entities/Vehicule.php');

$vehiculeManager = new VehiculeManager();

$vehicules = $vehiculeManager->getAllVehicules();
foreach ($vehicules as $key => $value) {
  $vehicules[$key]= new Vehicule($value);
}



include"../views/indexVue.php";


 ?>
