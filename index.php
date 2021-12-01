
<?php include_once "vistas/parte_superior.php"?>

<?php include_once "validar_usuario.php"?>



<script>
  $(document).ready(function() {
    setInterval(function(){
      $("#autodata").load("autorefreshdata.php");
      refresh();
    },1000);
  });

 

</script>





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="ml-5">Tablero de Emergencias</h1>
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
    
  <div class="container col-12 d-flex flex-wrap">
   

  <div id="autodata" class="col-12 d-flex flex-wrap">
    
  </div>



<!--Fin Codigo de prueba-->


 </div>


</div>
      </div>
    </div>
  </div>


    </div>
   


    <!-- /.content -->
  </div>

  <?php include_once "vistas/parte_inferior.php"?>


 