<?php
require('../model/VehiculeManager.php');
require('../entities/Vehicule.php');

$vehicleManager = new VehicleManager();

$vehicle = $vehicleManager->deleteVehicle($_GET['id']);


header('Location: index.php');
 ?>
