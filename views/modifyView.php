<?php
  include("template/header.php");
 ?>
<main>
  <div class="container" id="addForm">
  <?php
  foreach ($vehicle as $dataSingleVehicle) {
    echo "<form class='' action='../controllers/single.php' method='post'>";
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
