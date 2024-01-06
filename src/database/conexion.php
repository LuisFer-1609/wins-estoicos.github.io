<?php
$contrasenia = '';
$usuario = 'root';
$nombreBD = 'warzone';

try {
    $bd = new PDO(
        'mysql:host=localhost; dbname=' . $nombreBD,
        $usuario,
        $contrasenia,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (Exception  $e) {
    echo "Problema con la conexion: " . "No se estableció conexión con la base de datos";
}
