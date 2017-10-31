<?php
  include("template/header.php");
 ?>
<main>
  <div class="container" id="addForm">
  <?php
// we get the data of a single vehicle

  foreach ($vehicle as $dataSingleVehicle) {
    echo "<form class='' action='../controllers/modify.php?id=". $_GET['id'] ."' method='post'>";
  ?>
  <div class="form-group" id="modifyForm">
    <label for="vehicleName">Name</label>
    <input type="text" name='name' class="form-control" value="<?php echo $dataSingleVehicle->getName() ;?>"><br>
    <label for="vehicleType">Type</label>
    <input type="text" name='type' class="form-control" value="<?php echo $dataSingleVehicle->getType() ;?>"><br>
    <label for="vehicleColor">Color</label>
    <input type="text" name='color' class="form-control" value="<?php echo $dataSingleVehicle->getColor() ;?>"><br>
    <input type="hidden" name='id' class="form-control" value="<?php echo $dataSingleVehicle->getId() ;?>"><br>
    <input type='submit' name='' value='Modify' class="btn btn-custom">
  </div>


<?php
 }
 ?>


</div>
</main>



 <?php
   include("template/footer.php");
  ?>
