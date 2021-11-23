<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php include_once "vistas/parte_superior.php"?>
<?php
include_once 'db_conn.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE usuarios set id='" . $_POST['id'] . "', nombre='" . $_POST['nombre'] . "', usuario='" . $_POST['usuario'] . "', email='" . $_POST['email'] . "' ,contacto='" . $_POST['contacto']  .  "' ,cedula='" . $_POST['cedula'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Datos actualizados";
}
$result = mysqli_query($conn,"SELECT * FROM usuarios WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>



<div class="container col-4 shadow p-3 mb-5 bg-white rounded" style="margin-top: 70px; height:600px; padding: 30px; border-radius: 20px;">
<h2 class="text-center mb-3">Editar Usuario</h2>

<form name="form_usuario" method="post" action="usuarios.php">
<div><?php if(isset($message)) { echo $message; } ?>
</div>

<input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>">
<input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
<br>
Nombre: <br>
<input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>">
<br>
Usuario:<br>
<input type="text" name="usuario" class="form-control" value="<?php echo $row['usuario']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
<br>
Cedula:<br>
<input type="text" name="cedula" class="form-control" value="<?php echo $row['cedula']; ?>">
<br>

Contacto:<br>
<input type="text" name="contacto" class="form-control" value="<?php echo $row['contacto']; ?>">
<br>
<input type="submit" name="submit" value="Actualizar" class="btn btn-primary" style="width: 100%;">


</form>
</div>


</div>
<?php include_once "vistas/parte_inferior.php"?>

