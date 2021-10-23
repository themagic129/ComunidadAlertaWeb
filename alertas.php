<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>



<div class="row">

<div class="col">
    <div class="tarjeta-emergencia">
  <div class="card" style="width: 18rem;">
  <div class="card-body">
  <h4 class="titulo-tarjeta">Alerta</h4>
    <h4 class="tipo-alerta"><?=$row['tipoalerta'];?></h4>
    
    <div class="detalle-evento">
    <p class="detalle">Detalles</p>
    <p class="info">Nombre: <span class="dato-info"><?=$row['nombrepersona'];?></span></p>
    <p class="info">Dirección: <span class="dato-info"><?=$row['direccion'];?></span></p>
    <p class="info">Teléfono: <span class="dato-info"><?=$row['telefono'];?></span></p>
    <a href="#" class="btn btn-primary" style="width:99%">Atender</a>
  </div>
  </div>
</div>
</div>
</div>
</div>


</body>
</html>




