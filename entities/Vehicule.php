<?php

class Vehicule{
  protected $id;
  protected $name;
  protected $type;
  protected $color;

  // getters

  public function getId(){
    return $this->id;
  }

  public function getName(){
    return $this->name;
  }

  public function getType(){
    return $this->type;
  }

  public function getColor(){
    return $this->color;
  }

  // setters

  public function setId($id){
    $this->id=$id;
  }

  public function setName($name){
    $this->name=$name;
  }

  public function setType($type){
    $this->type=$type;
  }

  public function setColor($color){
    $this->color=$color;
  }

// Methods
  public function hydrate($vehiculesData) {
    foreach ($vehiculesData as $key => $value) {
    $method='set'.ucfirst($key);
    if(method_exists($this, $method)){
      $this->$method($value);
    }

    public function __construct($vehiculesData){
      $this->hydrate($vehiculesData);
    }
    }
  }
}

 ?>
