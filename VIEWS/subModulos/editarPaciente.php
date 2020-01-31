<?php $cp = new ControllerPaciente();  $cp->editar(); ?>
<div class="container-fluid mt-4">

<div class="container">
    <a href="index.php?action=pacientes" class="btn btn-danger">Regresar</a>
</div>
 <?php $datos = $cp->buscar(); ?>
 <form action="index.php?cedula=<?php echo $datos['cedula']; ?>" method="POST">
     <div class="row">
      <div class="col-12">
          <h4 class="text-center">Editar paciente</h4>
      </div>
       </div>
        <div class="row">
            <div class="col-6">
            <label>nombre</label><input type="text" name="nombre" class="form-control " value="<?php echo $datos['nombre'] ?>">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <label>segundo nombre</label><input type="text" name="nombre2" class="form-control" value="<?php echo $datos['nombre2'] ?>">
            </div>
            <div class="col-6">
                <label>apellido</label><input type="text" name="apellido" class="form-control" value="<?php echo $datos['apellido'] ?>">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <label>segundo apellido</label><input type="text" name="apellido2" class="form-control " value="<?php echo $datos['apellido2'] ?>">
            </div>
            <div class="col-6">
                <label>fecha de nacimiento</label><input type="date" name="fecha" class="form-control" value="<?php echo $datos['fechaN'] ?>"> 
            </div>
        </div>
        <div class="row mt-2">                 
            <div class="col-6">
                <label>telefono</label><input type="text" name="telefono" class="form-control " value="<?php echo $datos['telefono'] ?>">
            </div>
            <div class="col-6">
                <label>sexo</label><select class="form-control mt-2" name="sexo" id="sexo">
                <option><?php echo $datos['sexo'] ?></option>  
                <option value="MASCULINO">MASCULINO</option>
                <option value="FEMENINO">FEMENINO</option>
                </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <label>direccion</label><input type="text" name="direccion" class="form-control " value="<?php echo $datos['direccion'] ?>">
            </div>
            <div class="col-6">
                <label>estado</label><input type="text" name="estado" class="form-control " value="<?php echo $datos['estado'] ?>">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <label>estatus</label><input type="text" name="estatus" class="form-control " value="<?php echo $datos['estatus'] ?>">
            </div>
        </div>
        <div class="row mt-1 mb-2">
            <div class="col-12 text-center mt-3">
                <input type="submit" name="" value="Editar" class="btn btn-danger w-50">
            </div>
        </div>              
</form>
</div>