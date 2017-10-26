<?php
  include("template/header.php")
 ?>
<div class="container">
  <form class="" action="" method="post">
    <input type="text" name="name" value="" placeholder="Name">
    <input type="text" name="type" value="" placeholder="Type">
    <input type="text" name="color" value="" placeholder="Color">
    <input type="submit" name="" value="add vehicule">
  </form>
  <hr>
</div>

<div class="container TabList">
  <h2 class="text-center">Vehicule available</h2>
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
      <?php foreach ($vehicules as $vehicule){
        echo "<tr>";
        echo "<th>".$vehicule->getId()."</th>";
        echo "<td>".$vehicule->getName()."</td>";
        echo "<td>".$vehicule->getType()."</td>";
        echo "<td>".$vehicule->getColor()."</td>";
        echo "<input type='hidden' name='' value='."$vehicule->getId()".'>";
        echo "<td><input type='submit' name='' value='See more'><input type='submit' name='' value='Modify'><input type='submit' name='' value='Delete'></td>";
        echo "</tr>";
      } ?>


  </tbody>
</table>
</div>

 <?php
   include("template/footer.php")
  ?>
