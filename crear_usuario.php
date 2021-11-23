<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php include_once "vistas/parte_superior.php"?>

<?php 

if(isset($_SESSION['status'])){

  echo "<h5 class='alert alert-success'>".$_SESSION['status']."</h5>";
  unset($_SESSION['status']);
}


?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

<form action="insertar_usuario.php" method="POST">

<div class="form-group mb-3">
    <label for="">Nombre Completo</label>
    <input type="text" name="nombre" class="form-control">
</div>

<div class="form-group mb-3">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control">
</div>

<div class="form-group mb-3">
    <label for="">Contacto</label>
    <input type="text" name="contacto" class="form-control">
</div>

<div class="form-group mb-3">
    <label for="">Cedula</label>
    <input type="text" name="cedula" class="form-control">
</div>

<div class="form-group mb-3">
    <label for="">Usuario</label>
    <input type="text" name="usuario" class="form-control">
</div>


<div class="form-group mb-3">
    <label for="">Contraseña</label>
    <input type="password" name="contrasena" class="form-control">
</div>


<!-- BTN DE MUESTRA
<div class="form-group mb-3">
    <button type="submit" name="enviar_alerta" class="btn btn-primary">Enviar Alerta</button>
</div> -->
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" name="crearusuario" class="btn btn-primary">Crear Usuario</button>
 </div>

</div>
     

</form>



<!-- BKP FORMULARI OREGISTRO DE USUARIOS -->

<!--<form action="code.php" method="POST">

<div class="form-group mb-3">
    <label for="">Nombre</label>
    <input type="text" name="usuario" class="form-control">
</div>

<div class="form-group mb-3">
    <label for="">Contraseña</label>
    <input type="password" name="contrasena" class="form-control">
</div>

<select class="form-select" name="tipousuario" aria-label="Default select example">
  <option selected>Tipo de Usuario</option>
  <option value="1">Estándard</option>
  <option value="2">Administrador</option>  
</select>

<hr>
<h5>Datos Personales</h5>
<hr>

<div class="form-group mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre" class="form-control">
</div>


<div class="form-group mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido" class="form-control">
</div>


<div class="form-group mb-3">
    <label for="">Email</label>
    <input type="text" name="email" class="form-control">
</div>


<div class="form-group mb-3">
    <label for="">Teléfono</label>
    <input type="text" name="telefono" class="form-control">
</div>



     

</form>-->






     
    </div>
  </div>
</div>



<?php include_once "vistas/parte_inferior.php"?>


  