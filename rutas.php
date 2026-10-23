<?php

include("conexion.php");

$sql = "SELECT * FROM Ruta";

$resultado = $conexion->query($sql);

$rutas = [];

while($fila = $resultado->fetch_assoc()){
    $rutas[] = $fila;
}

header('Content-Type: application/json');

echo json_encode($rutas);

?>