
<?php
include_once "encabezado.php";

$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT * FROM colaborador WHERE estado_colaborador = 1 order by nombre_colaborador asc");

$colaboradores = $resultado->fetch_all(MYSQLI_ASSOC);

?>

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <img src="css/logo.png" width="10%" height="10%">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="listar.php">Colaboradores</a>
      <a class="nav-item nav-link" href="listar_equipos.php">Equipamiento</a>
      <a class="nav-item nav-link" href="asignacion.php">Asignaci&oacute;n equipo</a>
       <a class="nav-item nav-link" href="devolucion.php">Devoluci&oacute;n equipo</a>
      <a class="nav-item nav-link" href="mantenedor.php">Mantenedor</a>
    </div>
  </div>
</nav>
<div class="row">
    <div class="col-12">
        <h3 style="color:Navy;">Colaboradores MDA</h3>
    </div>
    <div class="col-12">


        <a class="btn btn-success my-2" href="formulario_registrar.php">Agregar nuevo Colaborador</a>

        <table class="table">
            <thead>
                
                <tr>
                    <th>RUT</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Acta Entrega</th>
                    <th>Acta Devoluci&oacute;n</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($colaboradores as $colaborador) { ?>


                    <tr>
                        <td><?php echo $colaborador["rut_colaborador"] ?></td>
                        <td><?php echo $colaborador["nombre_colaborador"]." ".$colaborador["apellido_pat_colaborador"]." ".$colaborador["apellido_mat_colaborador"] ?></td>
                        <td><?php echo $colaborador["mail_colaborador"] ?></td>
                        <td><?php echo $colaborador["celular_mda_colaborador"] ?></td>

                         <td>
                            <a <?php if($colaborador["equipo_colaborador"] <> 1 ){ echo "style='display:none;'";} 

                            if($colaborador["equipo_entregado"] == 1)
                            {

                                     echo "href='./pdfeasy/acta_entrega_pdf.php?id=".$colaborador['id_colaborador']."'target='_blank'";

                               } 

                               else 

                                { 
                                   echo "href='equipo_asignado.php?id=".$colaborador['id_colaborador']."'";

                                } 

                                     ?> 
                                     class="btn btn-info" role="button"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                        </td>

                         <td>

                            <a  <?php if($colaborador["equipo_devolucioln"] <> 1 ){ echo "style='display:none;'";}  

                                     echo "href='./pdfeasy/acta_devolucion_pdf.php?id=".$colaborador['id_colaborador']."'target='_blank'";

                               
                               

                                     ?> class="btn btn-info" role="button"><i class="fa fa-file-text-o" aria-hidden="true"></i></a>
                        </td>

                      
                        <td>
                            <a href="editar.php?id=<?php echo $colaborador["id_colaborador"] ?>"class="btn btn-warning" role="button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        </td>
                        <td>
                            <a href="eliminar.php?id=<?php echo $colaborador["id_colaborador"] ?>"class="btn btn-danger" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>

   