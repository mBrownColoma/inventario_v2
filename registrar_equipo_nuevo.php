
<?php

$mysqli = include_once "conexion.php";
 
$serial_equipo = $_POST["serial_equi"];
$procesador_equipo = $_POST["procesador_equi"];
$ram_equipo = $_POST["ram_equi"];
$tipo_hdd_equipo = $_POST["tipo_hdd_equi"];
$capacidad_hdd_equipo = $_POST["capacidad_hdd_equi"];
$fecha_compra_equipo = $_POST["fecha_compra_equi"];
$valor_equipo = $_POST["valor_equi"];
$id_tipo_equipo = $_POST["id_tipo_equi"];
$id_marca = $_POST["id_mar"];
$id_modelo = $_POST["id_mode"];
$status_equipo = 1;
$status_asignacion = 0;

$query = $mysqli->prepare("INSERT INTO equipo(serial_equipo, procesador_equipo, ram_equipo, tipo_hdd_equipo, capacidad_hdd_equipo, fecha_compra_equipo, 
valor_equipo, id_tipo_equipo, id_marca, id_modelo, status_equipo, status_asignacion)
VALUES
(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$query->bind_param("ssssssiiiiii",$serial_equipo, $procesador_equipo, $ram_equipo, $tipo_hdd_equipo, $capacidad_hdd_equipo, $fecha_compra_equipo, 
$valor_equipo, $id_tipo_equipo, $id_marca, $id_modelo, $status_equipo, $status_asignacion);
var_dump($query);
$query->execute();

header("Location: equipamiento.php");
