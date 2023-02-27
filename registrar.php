
<?php

$mysqli = include_once "conexion.php";
 
$nombre = $_POST["nombre"];
$rut = $_POST["rut"];
$ap = $_POST["ap"];
$am = $_POST["am"];
$celular_mda = $_POST["celular_mda"];
$celular_per = $_POST["celular_per"];
$mail = $_POST["mail"];
$direccion = $_POST["direc"];
$estado = 1;
$estado_entrega = 0;

$query = $mysqli->prepare("INSERT INTO colaborador(rut_colaborador, nombre_colaborador, apellido_pat_colaborador, apellido_mat_colaborador, mail_colaborador, 
celular_mda_colaborador, celular_per_colaborador, direccion_colaborador, estado_colaborador, equipo_entregado)
VALUES
(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$query->bind_param("ssssssssii",$rut, $nombre, $ap, $am, $mail, $celular_mda,$celular_per, $direccion, $estado, $estado_entrega);
var_dump($query);
$query->execute();

header("Location: usuarios.php");
