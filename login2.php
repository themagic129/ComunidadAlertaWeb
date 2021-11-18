<?php
session_start();
include "db_conn.php";

//if(isset($_POST['login']) && isset($_POST['contrasena']))//

if(isset($_POST['usuario']) && isset($_POST['contrasena']) && isset($_POST['role'])){
   
   function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;}
   
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];   
    $role = $_POST['role'];


     if(empty($usuario)){
        header("Location: login.php?error=Usuario requerido");
        exit();


     }else if(empty($contrasena)){
        header("Location: login.php?error=Contraseña requerida");
        exit();



     }else {
         $sql = "SELECT * FROM usuarios where usuario='$usuario' AND contrasena='$contrasena'";

            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) === 1){
               $row = mysqli_fetch_assoc($result);
               if($row['contrasena']=== $contrasena && $row['role']=== $role){
               
                    $_SESSION['usuario'] = $row['usuario'];
                    $_SESSION['nombre'] = $row['nombre'];                   
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: index.php");
                    exit();

               }else{
                    header("Location: login.php?error=Usuario o contraseña incorrectos");
                    exit();
               }
           
            }else{
                header("Location: login.php?error=Usuario o contraseña incorrectos");
                exit();
            }
     }


}else{
    header("Location: login.php");
    exit();
}