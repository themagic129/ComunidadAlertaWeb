<?php
include_once 'db_conn.php';
if(isset($_POST['crearusuario']))
{	 
	 $nombre = $_POST['nombre'];
	 $email = $_POST['email'];
     $contacto = $_POST['contacto'];
     $cedula = $_POST['cedula'];
	 $usuario = $_POST['usuario'];
	 $contrasena = $_POST['contrasena'];
	 $sql = "INSERT INTO usuarios (nombre,email,contacto,cedula,usuario,contrasena)
	 VALUES ('$nombre','$email','$contacto','$cedula','$usuario','$contrasena')";
	 if (mysqli_query($conn, $sql)) {

        header("Location: index.php");
        exit();
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>