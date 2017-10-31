<?php
  include("template/header.php");
 ?>
<main>
<!-- Form to add a vehicle in db and show on this page  -->
  <div class="container" id="addForm">
    <form class="" action="" method="post">
      <input type="text" name="name" value="" placeholder="Name">
      <input type="text" name="type" value="" placeholder="Type">
      <input type="text" name="color" value="" placeholder="Color">
      <input type="submit" name="" class="btn btn-custom" value="Add vehicle">
    </form>
    <hr>
  </div>

<!-- Table to show all the vehicle register in db  -->

  <div class="container TabList">
    <h2 class="text-center">Available vehicles</h2>
  <table class="table table-striped table-responsive text-center">
    <thead>
      <tr>
        <th>#</th>
        <th>Brand</th>
        <th>Type</th>
        <th>Color</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($vehicles as $vehicle){
          echo "<tr>";
          echo "<td>".$vehicle->getId()."</td>";
          echo "<td>".$vehicle->getName()."</td>";
          echo "<td>".$vehicle->getType()."</td>";
          echo "<td>".$vehicle->getColor()."</td>";
          echo "<td><a class='btn btn-custom btn-sm' href='../controllers/single.php?id=".$vehicle->getId()."'>See more</a>
          <a class='btn btn-custom btn-sm' href='../controllers/modify.php?id=".$vehicle->getId()."'>Modify</a>
          <a class='btn btn-custom btn-sm' href='../controllers/delete.php?id=".$vehicle->getId()."'>Delete</a></td>";
          echo "</tr>";
        } ?>
    </tbody>
  </table>
  </div>
</main>

 <?php
   include("template/footer.php");
  ?>
