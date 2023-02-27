<?php
include_once "encabezado.php";

$clave = $_POST['carta'];

$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("select
 e.id_equipo,
 e.serial_equipo,
 m.marca_equipo,
 mo.modelo_equipo,
 e.procesador_equipo,
 e.capacidad_hdd_equipo,
 e.ram_equipo, te.tipo_equipo,
 e.valor_equipo,
 e.fecha_compra_equipo 
 from equipo e 
 inner join tipo_equipo te
 on e.id_tipo_equipo = te.id_tipo_equipo
 inner join marca_equipo m
 on e.id_marca = m.id_marca_equipo 
 inner join modelo_equipo mo
 on e.id_modelo = mo.id_modelo_equipo where e.status_equipo = 1 and status_asignacion = 0 order by e.fecha_compra_equipo desc");

$equipos = $resultado->fetch_all(MYSQLI_ASSOC);

?>

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="css/logo.png" width="10%" height="10%">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="listar.php">Colaboradores</a>
      <a class="nav-item nav-link" href="listar_equipos.php">Equipamiento</a>
      <a class="nav-item nav-link active" href="asignacion.php">Asignaci&oacute;n equipo</a>
       <a class="nav-item nav-link" href="devolucion.php">Devoluci&oacute;n equipo</a>
      <a class="nav-item nav-link" href="mantenedor.php">Mantenedor</a>
    </div>
  </div>
</nav>

<div class="row">
    <div class="col-12">
        <h3 style="color:Navy;">Asignaci&oacute;n equipamiento tecnol&oacute;gico MDA</h3>
    </div>
    <div class="col-12">


<!-- inicio de tabla que muestra los datos de los video juegos almacenados en la bbdd-->
        <table class="table">
            <thead>
                <!-- cabecera -->
                <tr>
                    <th>SERIAL</th>
                    <th>MARCA</th>
                    <th>MODELO</th>
                    <th>PROCESADOR</th>
                    <th>HDD</th>
                    <th>RAM</th>
                    <th>TIPO EQUIPO</th>
                    <th>VALOR EQUIPO</th>
                    <th>FECHA COMPRA</th>
                    <th>COLABORADOR</th>
                    <th>ASIGNAR</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($equipos as $equipo) { ?>


                    <tr>
                        <input type="hidden" id="eq" value="<?php echo $equipo["id_equipo"] ?>">
                        <td><?php echo $equipo["serial_equipo"] ?></td>
                        <td><?php echo $equipo["marca_equipo"] ?></td>
                        <td><?php echo $equipo["modelo_equipo"] ?></td>
                        <td><?php echo $equipo["procesador_equipo"] ?></td>
                        <td><?php echo $equipo["capacidad_hdd_equipo"] ?></td>
                        <td><?php echo $equipo["ram_equipo"] ?></td>
                        <td><?php echo $equipo["tipo_equipo"] ?></td>
                        <td><?php echo $equipo["valor_equipo"] ?></td>
                        <td><?php echo $equipo["fecha_compra_equipo"] ?></td>
                       
                        <td>
                          
                            <select id="colaborador">
        <option value="0">Seleccione colaborador</option>
        <?php
          $query = $mysqli -> query ("select * from colaborador where equipo_entregado <>1 ");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[id_colaborador].'">'.$valores[nombre_colaborador]." ".$valores[apellido_pat_colaborador].'</option>';


          }
        ?>
      </select>
                        </td>
                        <td>
                           
                            <button type="button" onclick="ShowSelected()"; class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>
