

<?php include_once "vistas/parte_superior.php"?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="ml-5">Historial de Emergencias</h1>
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
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Crear Usuario
</button>
     <table class="table">

     <thead style="background-color: #3D5498; color:white;">
       <tr>
         <th>Fecha</th>
         <th>Tipo</th>
         <th>Nombre de la Persona</th>
         <th>Dirección</th>
         <th>Teléfono</th>
         <th>Descripción</th>
         <th>Hora</th>
       </tr>
     </thead>

     <tbody>
           <?php
           include('dbconfig.php');

           $ref_table = 'Emergencias';
           $fetchdata = $database->getReference($ref_table)->getValue();

           if($fetchdata > 0) {

            foreach($fetchdata as $key => $row){

              ?>
               <tr>
               <td><p>26/10/63</p></td>
               <td><?=$row['tipoemergencia'];?></td>
               <td><?=$row['nombredepersona'];?></td>
               <td><?=$row['direccion'];?></td>
               <td><?=$row['telefono'];?></td>
               <td><?=$row['descripcion'];?></td>
               <td><p>12:00 PM</p></td>
              </tr>

              <?php

            }
            
           }
           else{

            ?>

            <tr>
              <td colspan="7">No se encuentran registros</td>
           </tr>

            <?php

           }

           ?>


  

     </tbody>

     
     </table>
     
 </div>
 

</div>
      </div>
    </div>
  </div>


    </div>
   


    <!-- /.content -->
  </div>

  <?php include_once "vistas/parte_inferior.php"?>

  <?php include_once "crear_usuario.php"?>
  