
<?php include_once "encabezado.php"; ?>
<div class="row">
    <div class="col-12">
        <h1>Registrar Nuevo Colaborador</h1>

        <form action="registrar.php" method="POST">
            <div class="form-group">
                <label for="nombre">RUT</label>

                  <!-- elemento de nombre del juego -->
                <input placeholder="RUT" class="form-control" type="text" name="rut" id="rut" required>


            </div>

             <div class="form-group">
                <label for="nombre">Nombre</label>

                  <!-- elemento de nombre del juego -->
                <input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>


            </div>

             <div class="form-group">
                <label for="nombre">Apellido Paterno</label>

                  <!-- elemento de nombre del juego -->
                <input placeholder="Apellido Paterno" class="form-control" type="text" name="ap" id="ap" required>


            </div>

             <div class="form-group">
                <label for="nombre">Apellido Materno</label>

                  <!-- elemento de nombre del juego -->
                <input placeholder="Apellido Materno" class="form-control" type="text" name="am" id="am" required>


            </div>
            <div class="form-group">
                <label for="nombre">Email</label>

                  <!-- elemento de nombre del juego -->
                <input placeholder="Email" class="form-control" type="mail" name="mail" id="mail" required>


            </div>

             <div class="form-group">
                <label for="nombre">Celular MDA</label>

                  <!-- elemento de nombre del juego -->
                <input placeholder="Celular MDA" class="form-control" type="text" name="celular_mda" id="celular_mda" >


            </div>
            <div class="form-group">
                <label for="nombre">Celular Personal</label>

                  
                <input placeholder="Celular Personal" class="form-control" type="text" name="celular_per" id="celular_per" required>


            </div>
            <div class="form-group">
                <label for="nombre">Dirección</label>

                  
                <input placeholder="Direccion" class="form-control" type="text" name="direc" id="direc" required>


            </div>
       
            <div class="form-group"><button class="btn btn-success">Guardar</button></div>
        </form>




    </div>
</div>
