<?php
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)->withServiceAccount('bdcomunidad-alerta-firebase-adminsdk-szkb8-2524b6ea0a.json')
->withDatabaseUri('https://bdcomunidad-alerta-default-rtdb.firebaseio.com');
$database = $factory->createDatabase();
?>