<?php
  include("template/header.php");
 ?>
<main>
<!-- form to add a vehicle in db and show on the home page -->

  <div class="container" id="formSinglePage">
    <form class="" action="" method="post">
      <input type="text" name="name" value="" placeholder="Name">
      <input type="text" name="type" value="" placeholder="Type">
      <input type="text" name="color" value="" placeholder="Color">
      <input type="submit" name="add" value="add vehicule"><br>
    </form>
    <hr>
  </div>

<!--show the data of the vehicle selected  -->
<?php
foreach ($vehicle as $dataSingleVehicle) {
  ?>

<div class="card text-center">
  <div class="card-header">
  <h2>  Vehicule's details</h2>
  </div>
  <div class="card-block">
    <h3 class="card-title"><?php echo $dataSingleVehicle->getName(); ?></h4>
    <p class="card-text"><?php echo $dataSingleVehicle->getType(); ?></p>
    <p class="card-text"><?php echo $dataSingleVehicle->getColor(); ?></p>

  </div>
  <div class="card-footer text-muted">
    <?php
      echo "<a class='btn btn-custom btn-sm' href='../controllers/modify.php?id=".$_GET['id']."'>Modify</a>
      <a class='btn btn-custom btn-sm' href='../controllers/delete.php?id=".$_GET['id']."'>Delete</a>";
     ?>
  </div>
</div>
<?php
}
?>
</main>

<?php
include("template/footer.php");

 ?>
