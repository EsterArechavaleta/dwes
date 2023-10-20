<?php

?>
<?php include('header.php'); ?>

<div class="card-group">
  <div class="card">
    <img src="./imagenes/individual.jpg" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Habitación individual</h5>
      <p class="card-text">Habitación de una cama individual, con posibilidad de poner una supletoria</p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Precio desde: ___________</small>
    </div>
  </div>
  <div class="card">
    <img src="./imagenes/doble.jfif" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Habitación doble</h5>
      <p class="card-text">Habitaciones con la posibilidad de tener camas individuales o de matrimonio.</p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Precio desde: ___________</small>
    </div>
  </div>
  <div class="card">
    <img src="./imagenes/suite.jpeg" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">Suite</h5>
      <p class="card-text">Contiene dormitorio con cama de matrimonio, cuarto de baño completo y pequeña salita.</p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Precio desde: ___________</small>
    </div>
  </div>
</div>
<?php include('form_rooms_insert.php'); ?> 
<?php include('form_rooms_update.php'); ?>   
<?php include('form_rooms_select.php'); ?>
<?php include('form_rooms_delete.php'); ?>
<?php include('footer.php'); ?>
