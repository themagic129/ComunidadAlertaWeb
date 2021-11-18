<?php
session_start();
include('dbconfig.php');


if(isset($_POST['crearusuario']))
{

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$telefono = $_POST['telefono'];

$userProperties = [
    'email' => $email,
    'emailVerified' => false,
    'phoneNumber' => $telefono,
    'password' => $contrasena,
    'displayName' => $nombre,   
   
];

$createdUser = $auth->createUser($userProperties);

if($createdUser)
{

    $_SESSION['status'] = "User Created Succefully";
    header("Location: usuarios.php");
    exit();

}else {
    $_SESSION['status'] = "User Creation Failed";
    header("Location: usuarios.php");
    exit();
}



}



//crear usuario
if(isset($_POST['crearusuario'])){

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];    
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $email = $_POST['email'];   
    $telefono = $_POST['telefono'];   
    $postData = [
        'usuario'=>$usuario,
        'contrasena'=>$contrasena,        
        'nombre'=>$nombre,       
        'email'=>$email,
            
    ];
    
    $ref_table = "Usuarios";
    $postRef_result = $database->getReference($ref_table)->push($postData);
       
    if($postRef_result){
    
        $_SESSION['status'] = "Usuario Creado Correctamente";
        header('Location: usuarios.php');
    
    }else{
    
        $_SESSION['status'] = "No se ha podido crear";
        header('Location: usuarios.php');
    
    }
    
    }




//Finalizar/Atender alerta //
if(isset($_POST['finalizar']))

{

$del_id = $_POST['finalizar'];

$ref_table = 'Emergencias/' .$del_id;
$deletequery_result = $database->getReference($ref_table)->remove();

if($deletequery_result){

    $_SESSION['status'] = "Se atendió la emergencia";
    header('Location: index.php');

}

else
{
    $_SESSION['status'] = "No se pudo realizar";
    header('Location: index.php');
}

}



//enviar alerta a tabla emergencias
if(isset($_POST['enviar_alerta'])){

$tipoemergencia = $_POST['tipoemergencia'];
$nombrepersona = $_POST['nombredepersona'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$descripcion = $_POST['descripcion'];

$postData = [
    'tipoemergencia'=>$tipoemergencia,
    'nombredepersona'=>$nombrepersona,
    'direccion'=>$direccion,
    'telefono'=>$telefono,
    'descripcion'=>$descripcion,    
    
];

$ref_table = "Emergencias";
$postRef_result = $database->getReference($ref_table)->push($postData);
   
if($postRef_result){

    $_SESSION['status'] = "Se ha enviado su alerta, un representante lo contactará";
    header('Location: index.php');

}else{

    $_SESSION['status'] = "No se ha enviado la alerta";
    header('Location: index.php');

}

}

?>