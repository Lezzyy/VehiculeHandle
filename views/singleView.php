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
      <input type="submit" name="modify" value="Modify" class="modify">
      <input type="submit" name="delete" value="Delete" class="delete">
    </form>
    <hr>
  </div>

  <div class="container">
  </div>

<div class="container">
  <h3 class="text-center">Vehicule's details</h3>
  <p>
    <!-- <?php echo $vehicule->getName() ;?> -->
  </p>
</div>



</main>

<?php
include("template/footer.php");

 ?>
