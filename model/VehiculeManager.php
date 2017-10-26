<?php
class VehiculeManager{
  public function getDb(){
    $db = new PDO('mysql:host=localhost;dbname=vehiculeHandle;charset=utf8', 'root', 'gj7b!17LA');
    return $db;
  }

  // request to show all the vehicules

  public function getAllVehicules(){
  $response=$this->getDb()->query('SELECT * FROM vehiculeList');
  $vehicules = $response->fetchAll(PDO::FETCH_ASSOC);
  return $vehicules;
}

// request to add one vehicule

public function addVehicule($input){
  $response=$this->getDb()->prepare('INSERT INTO vehiculeList(name, type, color) VALUES(:name, :type, :color)');
  $response->bindValue(':name', $input['name'], PDO::PARAM_STR);
  $response->bindValue(':type', $input['type'], PDO::PARAM_STR);
  $response->bindValue(':color', $input['color'], PDO::PARAM_STR);
  $response->execute();
}

// request to get one vehicule

public function getSingleVehicule($idVehicule){
  $response=$this->getDb()->query('SELECT * FROM vehiculeList WHERE id='.$idVehicule);
  $vehicule=$response->fetchAll(PDO::FETCH_ASSOC);
  return $vehicule;
}



}

?>
