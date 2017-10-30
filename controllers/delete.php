<?php
require('../model/VehiculeManager.php');
require('../entities/Vehicule.php');

$vehicleManager = new VehicleManager();

$vehicle = $vehicleManager->deleteVehicle($_GET['id']);
var_dump($vehicle);

header('Location: index.php');
 ?>
