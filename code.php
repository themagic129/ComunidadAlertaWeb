<?php
session_start();
include('dbconfig.php');

//enviar alerta a tabla reportes
if(isset($_POST['finalizar'])){

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
    
    $ref_table = "Reporte";
    $postRef_result = $database->getReference($ref_table)->push($postData);
       
    if($postRef_result){
    
        $_SESSION['status'] = "Se ha enviado su alerta, un representante lo contactará";
        header('Location: index.php');
    
    }else{
    
        $_SESSION['status'] = "No se ha enviado la alerta";
        header('Location: index.php');
    
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