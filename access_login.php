<?php
session_start();
include_once "conexion.php";
if(!empty($_POST["user"])AND $_POST["pass"]){
    $usuario=$_POST["user"];
    $password=$_POST["pass"];
    $datos=$mysqli->query("select * from users where username='$usuario' and password = '$password'");
    if ($datosobtenidos=$datos -> fetch_object()) {
        
        $_SESSION["name"]=$datosobtenidos->username;
        $_SESSION["id_area"]=$datosobtenidos->id_area;
        // echo($_SESSION["name"]);
        // echo($_SESSION["id_area"]);
        header("location: usuarios.php");
        // echo"funca";
    } else {
        header("location: login.php");
    }
}
?>