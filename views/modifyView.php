<?php
  include("template/header.php");
 ?>
<main>
  <div class="container" id="addForm">
  <?php
// we get the data of a single vehicle

  foreach ($vehicle as $dataSingleVehicle) {
    echo "<form class='' action='../controllers/modify.php?id=". $_GET['id'] ."' method='post'>";
    echo "<input type='text' name='name' value='".$dataSingleVehicle->getName()."'>";
    echo "<input type='text' name='type' value='".$dataSingleVehicle->getType()."'>";
    echo "<input type='text' name='color' value='".$dataSingleVehicle->getColor()."'>";
    echo "<input type='hidden' name='id' value='".$dataSingleVehicle->getId()."'>";
    echo "<input type='submit' name='' value='Modify'>";

  }
 ?>
</div>
</main>



 <?php
   include("template/footer.php");
  ?>
