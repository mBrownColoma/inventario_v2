<?php
include_once "encabezado.php";

$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("select * from colaborador where equipo_colaborador = 1");

$equipos = $resultado->fetch_all(MYSQLI_ASSOC);

?>

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <img src="css/logo.png" width="10%" height="10%">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="listar.php">Colaboradores</a>
      <a class="nav-item nav-link" href="listar_equipos.php">Equipamiento</a>
      <a class="nav-item nav-link" href="asignacion.php">Asignaci&oacute;n equipo</a>
       <a class="nav-item nav-link active" href="devolucion.php">Devoluci&oacute;n equipo</a>
      <a class="nav-item nav-link" href="mantenedor.php">Mantenedor</a>
    </div>
  </div>
</nav>

<div class="row">
    <div class="col-12">
        <h3 style="color:Navy;">Devoluci&oacute;n equipos MDA</h3>
    </div>
    <div class="col-12">


<!-- inicio de tabla que muestra los datos de los video juegos almacenados en la bbdd-->
        <table class="table">
            <thead>
                <!-- cabecera -->
                <tr>
                    <th>COLABORADOR</th>
                    <th>DEVOLUCION</th>
               
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($equipos as $equipo) { ?>


                    <tr>

                        <td><?php echo $equipo["nombre_colaborador"]." ".$equipo["apellido_pat_colaborador"]." ".$equipo["apellido_mat_colaborador"] ?></td>
               
                        <td>
                            <a href="devolucioln_equipos.php?id=<?php echo $equipo["id_colaborador"] ?>" class="btn btn-success" role="button"><i class="fa fa-recycle" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>
