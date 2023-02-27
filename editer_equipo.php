
<?php
include_once "encabezado.php";

//generamos la conexion a bbdd
$mysqli = include_once "conexion.php";


//capturamos el id del videojuego seleccionado enviado por metodo get
$id = $_GET["id"];

//preparamos la consulta select con where praa traer los datos del juego a editar
$sentencia = $mysqli->prepare("select
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
 on e.id_modelo = mo.id_modelo_equipo WHERE e.id_equipo = ?");

$sentencia->bind_param("i", $id);

$sentencia->execute();

$resultado = $sentencia->get_result();

# Obtenemos solo una fila, que será el videojuego a editar
$equipo = $resultado->fetch_assoc();
if (!$equipo) {
    exit("No hay resultados para este equipo");
}

?>

<div class="row">
    <div class="col-12">
        <h1>Actualizar Datos equipo</h1>

        <form action="actualizar_equipo.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $equipo["e.id_equipo"] ?>">

             <div class="form-group">
                <label for="nombre">SERIAL</label>


                <input value="<?php echo $equipo["serial_equipo"] ?>" placeholder="RUT" class="form-control" type="text" name="rut" id="rut" required>



            </div>

            <div class="form-group">
                <label for="nombre">MARCA</label>


                <input value="<?php echo $equipo["marca_equipo"] ?>" placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>



            </div>

             <div class="form-group">
                <label for="ap">MODELO</label>


                <input value="<?php echo $equipo["modelo_equipo"] ?>" placeholder="Apellido paterno" class="form-control" type="text" name="ap" id="ap" required>



            </div>

             <div class="form-group">
                <label for="am">PROCESADOR</label>


                <input value="<?php echo $equipo["procesador_equipo"] ?>" placeholder="Apellido Materno" class="form-control" type="text" name="am" id="am" required>



            </div>

             <div class="form-group">
                <label for="nombre">HDD</label>


                <input value="<?php echo $equipo["capacidad_hdd_equipo"] ?>" placeholder="Email colaborador" class="form-control" type="text" name="mail" id="mail" required>



            </div>

             <div class="form-group">
                <label for="nombre">RAM</label>


                <input value="<?php echo $equipo["ram_equipo"] ?>" placeholder="Celular MDA" class="form-control" type="text" name="celular" id="celular" required>



            </div>

            <div class="form-group">
                <label for="nombre">VALOR EQUIPO</label>


                <input value="<?php echo $equipo["valor_equipo"] ?>" placeholder="Celular MDA" class="form-control" type="text" name="celular" id="celular" required>



            </div>


            <div class="form-group">
                <label for="nombre">FECHA COMPRA</label>


                <input value="<?php echo $equipo["fecha_compra_equipo"] ?>" placeholder="Celular MDA" class="form-control" type="text" name="celular" id="celular" required>



            </div>


      
            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-warning" href="listar_equipos.php">Volver</a>
            </div>

        </form>
    </div>
</div>