
<?php

//parametros de conexion a base de datos
	//indica la ruta o direccion del servidor
$host = "127.0.0.1";
	//usuario de base de datos
$usuario = "root";
	//clave de usuario de base datos
$contrasenia = "";
	//nombre de la base de datos
$base_de_datos = "inventario_mda";


// instancia del objeto de conexion a la base de datos mediante mysqli
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);


if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else
{
	
	return $mysqli;
}


