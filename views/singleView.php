<?php
  include("template/header.php");
 ?>
<main>
  <div class="container" id="formSinglePage">
    <form class="" action="" method="post">
      <input type="text" name="name" value="" placeholder="Name">
      <input type="text" name="type" value="" placeholder="Type">
      <input type="text" name="color" value="" placeholder="Color">
      <input type="submit" name="add" value="add vehicule"><br>
      <!-- <input type="submit" name="modify" value="Modify" class="modify"> -->
      <?php
        echo "<a class='btn btn-custom btn-sm' href='../controllers/modify.php?id=".$_GET['id']."'>Modify</a>
        <a class='btn btn-custom btn-sm' href='../controllers/delete.php?id=".$_GET['id']."'>Delete</a>";
       ?>

      <!-- <input type="submit" name="delete" value="Delete" class="delete"> -->
    </form>
    <hr>
  </div>

<div class="container">
  <h3 class="text-center">Vehicule's details</h3>
  <p>
    <?php
    foreach ($vehicle as $dataSingleVehicle) {
        echo "<p>".$dataSingleVehicle->getName()."</p>";
        echo "<p>".$dataSingleVehicle->getType()."</p>";
        echo "<p>".$dataSingleVehicle->getColor()."</p>";
    }

   ?>
  </p>
</div>
</main>

<?php
include("template/footer.php");

 ?>
