

<?php include_once "vistas/parte_superior.php"?>
<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT * FROM usuarios");
?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="ml-5">Gestionar Usuarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Tablero</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    
  <div class="container-fluid">
  <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#exampleModal">
  Crear Usuario
</button>
 
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table class="table col-12 text-center">
  
  <thead style="background-color: #3D5498; color:white;">
  <tr>
    <th>Nombre</th>
    <th>Usuario</th>
    <th>Rol</th>
    <th>Email</th>
    <th>Contacto</th>
    <th>Cédula</th>
    <th>Acción</th>
  </tr>
  </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["nombre"]; ?></td>
    <td><?php echo $row["usuario"]; ?></td>
    <td><?php echo $row["role"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["contacto"]; ?></td>
    <td><?php echo $row["cedula"]; ?></td>
    <td><a href="proceso_actualizarusuarios.php?id=<?php echo $row["id"]; ?>"><i class="far fa-edit" style="text-decoration:none; color:#FEC61F; margin-right:10px;"></i></a>
     <a href="borrar_usuario.php?id=<?php echo $row["id"]; ?>"><i class="fas fa-trash-alt" style="text-decoration:none; color:#F45549;"></i></a></td>
    
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>


</div>
</div>


     





  <?php include_once "vistas/parte_inferior.php"?>

  <?php include_once "crear_usuario.php"?>
  <?php include_once "proceso_actualizarusuarios.php"?>
  