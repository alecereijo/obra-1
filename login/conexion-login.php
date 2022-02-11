<?php

$conexion;
$servidor = '127.0.0.1';
$bd = 'obra';
$user = 'Alejandra';
$pass = 'kimberly';

try{
    $conexion = new PDO('mysql:host='.$servidor.';dbname='.$bd, $user, $pass);
} catch (PDOException $e){
    echo "Erro de conexión";
    exit;
}
return $conexion;
?>
