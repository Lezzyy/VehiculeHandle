<?php
class VehicleManager{
  public function getDb(){
    $db = new PDO('mysql:host=localhost;dbname=vehiculeHandle;charset=utf8', 'root', 'gj7b!17LA');
    return $db;
  }

  // request to show all the vehicles

  public function getAllVehicles(){
  $response=$this->getDb()->query('SELECT * FROM vehiculeList');
  $vehicles = $response->fetchAll(PDO::FETCH_ASSOC);
  return $vehicles;
}

// request to add one vehicle

public function addVehicle($input){
  $response=$this->getDb()->prepare('INSERT INTO vehiculeList(name, type, color) VALUES(:name, :type, :color)');
  $response->bindValue(':name', $input['name'], PDO::PARAM_STR);
  $response->bindValue(':type', $input['type'], PDO::PARAM_STR);
  $response->bindValue(':color', $input['color'], PDO::PARAM_STR);
  $response->execute();
}

// request to get one vehicle

public function getSingleVehicle($idVehicle){
  $response=$this->getDb()->query('SELECT * FROM vehiculeList WHERE id='.$idVehicle);
  $vehicle=$response->fetchAll(PDO::FETCH_ASSOC);
  return $vehicle;
}

// request to modify a vehicle

public function updateSingleVehicle($vehicle){
  $response = $this->getDb()->prepare('UPDATE vehiculeList SET name= :name, type = :type, color = :color WHERE id = :id');

  $response->bindValue(':name', $vehicle->getName(), PDO::PARAM_STR);
  $response->bindValue(':type', $vehicle->getType(), PDO::PARAM_STR);
  $response->bindValue(':color', $vehicle->getColor(), PDO::PARAM_STR);
  $response->bindValue(':id', $vehicle->getId(), PDO::PARAM_INT);

  $response->execute();

}


// request to delete a vehicle

public function deleteVehicle($id){
$response=$this->getDb()->query('DELETE FROM vehiculeList WHERE id = '.$id);
}

}

?>
