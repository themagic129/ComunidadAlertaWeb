

<?php include_once "vistas/parte_superior.php"?>



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
     <table class="table col-12 text-center">

     <thead style="background-color: #3D5498; color:white;">
       <tr>
         <th>Usuario</th>
         <th>Tipo de Usuario</th>
         <th>Nombre</th>
         <th>Apellido</th>
         <th>Email</th>
         <th>Teléfono</th>
         <th>Editar</th>    
         <th>Eliminar</th>     
       </tr>
     </thead>

     <tbody>
           <?php
           include('dbconfig.php');

           $ref_table = 'Usuarios';
           $fetchdata = $database->getReference($ref_table)->getValue();

           if($fetchdata > 0) {

            foreach($fetchdata as $key => $row){

              ?>
               <tr>
               
               <td><?=$row['usuario'];?></td>
               <td><?=$row['tipousuario'];?></td>
               <td><?=$row['nombre'];?></td>
               <td><?=$row['apellido'];?></td>
               <td><?=$row['email'];?></td>
               <td><?=$row['telefono'];?></td>
               <td>
                 <a href="editar-usuario.php" class="btn btn-primary btn-sm">Editar</a>
               </td>

               <td>
                 <a href="borrar-usuario.php" class="btn btn-danger btn-sm">Eliminar</a>
               </td>
               
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
  