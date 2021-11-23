<?php
include_once 'db_conn.php';
$sql = "DELETE FROM usuarios WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header("Location: usuarios.php");
    exit();
} else {
    echo "Error al Eliminar Usuario: " . mysqli_error($conn);
}
mysqli_close($conn);
?>