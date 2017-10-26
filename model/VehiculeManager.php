<?php
class VehiculeManager{
  public function getDb(){
    $db = new PDO('mysql:host=localhost;dbname=vehiculeHandle;charset=utf8', 'root', 'gj7b!17LA');
    return $db;
  }

  public function getAllVehicules(){
  $response=$this->getDb()->query('SELECT * FROM vehiculeList');
  $vehicules = $response->fetchAll(PDO::FETCH_ASSOC);
  return $vehicules;
}
}

 ?>
