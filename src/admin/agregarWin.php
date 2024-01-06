<?php
include_once "../database/conexion.php";
if ($_POST) {
    $fecha = $_POST['fecha'];
    $bajas = $_POST['bajas'];

    $sentencia = $bd->prepare("INSERT INTO victorias(fecha, bajas) VALUES (?,?);");
    $ejecutar = $sentencia->execute([$fecha, $bajas]);

    if ($ejecutar == TRUE) {
        header('Location: admin.php');
    }
}
