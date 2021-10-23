
<?php include_once "vistas/parte_superior.php"?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
         
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
  
<div class="container col-12">
  

    
<h4>Insertar datos en BD
  <a href="index.php" class="btn btn-primary float-end">Back</a>
</h4>

<form action="code.php" method="POST">

<div class="form-group mb-3">
    <label for="">Tipo de Emergencia</label>
    <input type="text" name="tipoemergencia" class="form-control">
</div>

<div class="form-group mb-3">
    <label for="">Su Nombre</label>
    <input type="text" name="nombredepersona" class="form-control">
</div>

<div class="form-group mb-3">
    <label for="">Direccion</label>
    <input type="text" name="direccion" class="form-control">
</div>


<div class="form-group mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono" class="form-control">
</div>


<div class="form-group mb-3">
    <label for="">Descripcion</label>
    <input type="textarea" name="descripcion" class="form-control">
</div>



<div class="form-group mb-3">
    <button type="submit" name="enviar_alerta" class="btn btn-primary">Enviar Alerta</button>
</div>


</form>

  <!-- /.content -->
</div>


<?php include_once "vistas/parte_inferior.php"?>

