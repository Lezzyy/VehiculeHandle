<?php
require('../model/VehiculeManager.php');
require('../entities/Vehicule.php');

$vehiculeManager = new VehiculeManager();

if(isset($_POST) && count($_POST)>0){
  $newVehicule = new Vehicule($_POST);
  $vehiculeManager->addVehicule($_POST);
}






include"../views/singleView.php";

?>
