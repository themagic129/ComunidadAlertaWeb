
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Comunidad Alerta</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
 
  <link rel="stylesheet" href="estilos_login.css">
  
   
  <!--<meta http-equiv="refresh" content="20" />-->
</head>
<body>

    <div class="container-lg-12">
        <div class="row">
          <div class="col">
              <div class="header">
                  <div class="header-logo">
                      <img src="img/logodefensa.png" alt="">
                       <div class="titulo-defensa">
                           <h3 style="color: #F56A15;">Defensa Civil</h3>
                           <h3 style="color:#3C5396">República Dominicana</h3>
                       </div>
                  </div>
              </div>
          </div>         
        </div>

        <div class="row">
            <div class="col">               
                  <div class="contenido">

                    <div class="contenedor-login">
                        <div class="cabecera-login">
                        <div class="logo">
                            <img src="img/logodefensa.png" alt="">
                        </div>

                            <h2 class="titulo">COMUNIDAD ALERTA</h2>
                            <p>Apoyando la comunidad ante eventos de desastre</p>
                        </div>
                            <form action="login2.php" method="post" autocomplete="off">
                                
                            <?php if (isset($_GET['error'])){ ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                                <?php } ?>                            
                            
                            <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                                    <input type="text" name="usuario" autocomplete="off" placeholder="Introduzca su usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Nunca comparta su nombre de usuario con los demás.</div>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                    <input type="password"  name="contrasena" placeholder="Introduzca su contraseña" class="form-control" id="exampleInputPassword1">
                                  </div>

                                  <div class="form-group">
                  <label for="exampleSelectRounded0">Tipo de Usuario</label>
                  <select class="custom-select rounded-0" name="role" id="exampleSelectRounded0">
                    <option selected value="Operador">Operador</option>
                    <option value="Administrador">Administrador</option>
                   
                  </select>
                </div>


                                  <button type="submit" name="login" class="btn btn-primary" style="width:99%; height:45px; border-radius: 80px;">Iniciar</button>
                                

                            </form>


                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="container-lg-12 d-flex text-center justify-content-center footer">
                
<footer>
    <p class="mt-2">Comunidad Alert Copyright &copy; 2021 <br> Para sugerencias info@comunidadalerta.com</p>
</footer>
                 
                </div>
            </div>
        </div>
      </div>
        
</body>
</html>