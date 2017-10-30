<?php
require('../model/VehiculeManager.php');
require('../entities/Vehicule.php');

// delete the vehicle selected

$vehicleManager = new VehicleManager();

$vehicle = $vehicleManager->deleteVehicle($_GET['id']);

header('Location: index.php');
 ?>
