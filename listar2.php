<?php

// incorporamos el archivo de conexion a mysql, y almacenamos el retorno en una variable
$mysqli = include_once "conexion.php";

//genramos la consulta select al a base de datos
$resultado = $mysqli->query("SELECT id, nombre, descripcion FROM videojuegos");

//obtenemos como resutlado y que es almacenado en la variable $resultado obj 


//idnombredesc
//dsfsdgsgsgsdg
//fadfdafadfadf

//proceso el resultado de la consulta a datos asociativos a los campos de la tabla
$videojuegos = $resultado->fetch_all(MYSQLI_ASSOC);

//id    nombre  desc
//dsf  sdgsg    sgsdg
//fadf dafad    fadf


echo"<br>";
foreach ($videojuegos as $videojuego) {

	//  id    nombre    desc

	//  dsf     sdgsg    sgsdg
	//  fadf    dafad    fadf
	//->fadf   dafad    fadf


echo $videojuego["id"];
echo"<br>";
echo $videojuego["nombre"];
echo"<br>";
echo $videojuego["descripcion"];
echo"<br>";
}



?>                    