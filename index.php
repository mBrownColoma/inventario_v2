<?php
include_once "encabezado.php";

$mysqli = include_once "conexion.php";

$resultado = $mysqli->query("select * from tipo_equipo where status_tipo_equipo = 1");

$equipos = $resultado->fetch_all(MYSQLI_ASSOC);



//------------------------------------------------------------------//

$resultado2 = $mysqli->query("select * from marca_equipo where status_equipo = 1");

$marcas = $resultado2->fetch_all(MYSQLI_ASSOC);

//----------------------------------------------------------------//


//------------------------------------------------------------------//

$resultado3 = $mysqli->query("select * from modelo_equipo where status_modelo = 1");

$modelos = $resultado3->fetch_all(MYSQLI_ASSOC);

//----------------------------------------------------------------//
?>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="css/logo.png" width="10%" height="10%">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="listar.php">Colaboradores</a>
      <a class="nav-item nav-link" href="listar_equipos.php">Equipamiento</a>
      <a class="nav-item nav-link" href="asignacion.php">Asignaci&oacute;n equipo</a>
       <a class="nav-item nav-link" href="devolucion.php">Devoluci&oacute;n equipo</a>
      <a class="nav-item nav-link active" href="mantenedor.php">Mantenedor</a>
    </div>
  </div>
</nav>

<div class="row">
    <div class="col-12">
        <h3 style="color:Navy;">Mantenedor MDA</h3>
    </div>
    <div class="col-12">


        <a class="btn btn-success my-2" href="formulario_registrar_tipo_equipo.php">Agregar nuevo tipo equipo</a>

<!-- inicio de tabla que muestra los datos de los video juegos almacenados en la bbdd-->
        <table class="table">
            <thead>
                <!-- cabecera -->
                <tr>
                    <th>ID</th>
                    <th>TIPO EQUIPO</th>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($equipos as $equipo) { ?>


                    <tr>

                        <td><?php echo $equipo["id_tipo_equipo"] ?></td>
                        <td><?php echo $equipo["tipo_equipo"] ?></td>
             
                       
                        <td>
                          
                            <a href="editar_tipo_equipo.php?id=<?php echo $equipo["id_tipo_equipo"] ?>" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </td>
                        <td>
                            <a href="eliminar_tipo_equipo.php?id=<?php echo $equipo["id_tipo_equipo"] ?>" class="btn btn-danger" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>


     <div class="col-12">
<hr>
        <a class="btn btn-success my-2" href="formulario_registrar_marca_equipo.php">Agregar nuevo tipo marca</a>

<!-- inicio de tabla que muestra los datos de los video juegos almacenados en la bbdd-->
        <table class="table">
            <thead>
                <!-- cabecera -->
                <tr>
                    <th>ID</th>
                    <th>MARCA EQUIPO</th>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>
                   
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($marcas as $marca) { ?>


                    <tr>

                        <td><?php echo $marca["id_marca_equipo"] ?></td>
                        <td><?php echo $marca["marca_equipo"] ?></td>
             
                       
                        <td>
                          
                            <a href="editar_marca_equipo.php?id=<?php echo $marca["id_marca_equipo"] ?>" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </td>
                        <td>
                            <a href="eliminar_marca_equipo.php?id=<?php echo $marca["id_marca_equipo"] ?>" class="btn btn-danger" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <div class="col-12">
<hr>
        <a class="btn btn-success my-2" href="formulario_registrar_modelo_equipo.php">Agregar nuevo  modelo</a>

<!-- inicio de tabla que muestra los datos de los video juegos almacenados en la bbdd-->
        <table class="table">
            <thead>
                <!-- cabecera -->
                <tr>
                    <th>ID</th>
                    <th>MODELO EQUIPO</th>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>
                   
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($modelos as $modelo) { ?>


                    <tr>

                        <td><?php echo $modelo["id_modelo_equipo"] ?></td>
                        <td><?php echo $modelo["modelo_equipo"] ?></td>
             
                       
                        <td>
                          
                            <a href="editar_modelo_equipo.php?id=<?php echo $modelo["id_modelo_equipo"] ?>" class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </td>
                        <td>
                            <a href="eliminar_modelo_equipo.php?id=<?php echo $modelo["id_modelo_equipo"] ?>" class="btn btn-danger" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>




