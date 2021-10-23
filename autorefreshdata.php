<?php 

if(isset($_SESSION['status'])){

  echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
  unset($_SESSION['status']);
}


?>

<?php
  

include('dbconfig.php');

$ref_table = 'Emergencias';
$fetchdata = $database->getReference($ref_table)->getValue();

if($fetchdata > 0){

  foreach($fetchdata as $key => $row)
   {

    ?>
 
 <div class="row">

<div class="col">
    <div class="tarjeta-emergencia">
  <div class="card" style="width: 18rem;">
  <div class="card-body">
  <h4 class="titulo-tarjeta">Alerta</h4>
    <h4  class="tipo-alerta"><?=$row['tipoemergencia'];?></h4>
    
    <div class="detalle-evento">
    <p class="detalle">Detalles</p>
    <p  class="info">Nombre: <span class="dato-info"><?=$row['nombredepersona'];?></span></p>
    <p class="info">Dirección: <span class="dato-info"><?=$row['direccion'];?></span></p>
    <p class="info">Teléfono: <span class="dato-info"><?=$row['telefono'];?></span></p>
    <p class="info">Descripcion: <span class="dato-info"><?=$row['descripcion'];?></span></p>
    
    <form action="code.php" method="POST">

    <button type="submit" name="finalizar" value="<?=$key?>" class="btn btn-primary" style="width:99%">Finalizar</button>
    </form>
  </div>
  </div>
</div>
</div>
</div>
</div>

    <?php

   }



}else{
  ?>
  
    <h2>No hay Emergencias</h2>
  
  <?php
}

   
   ?>