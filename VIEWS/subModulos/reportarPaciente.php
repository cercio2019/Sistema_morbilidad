<?php 
$cp = new ControllerPaciente();
$datos = $cp->reportarPaciente(); 

$diag = new controllerDiagnostico();
$diag->registrar();
 ?>
<div class="container-fluid mt-4 mb-5">

<div class="container">
    <a href="index.php?action=pacientes" class="btn btn-danger">Regresar</a>
</div>
 <form action="index.php?ci=<?php echo $datos['cedula']; ?>" method="POST" class="formulario">

     <div class="row">
      <div class="col-12">
          <h4 class="text-center">Diagnosticar paciente</h4>
      </div>
       </div>
         
        <input type="hidden" name="cedula" id="cedula" value="<?php echo $datos['cedula'] ?>">
        <input type="hidden" name="nombre"  id="nombre" value="<?php echo $datos['nombre'] ?>">            
        <input type="hidden" name="nombre2" id="nombre2"  value="<?php echo $datos['nombre2'] ?>">          
        <input type="hidden" name="apellido" id="apellido"  value="<?php echo $datos['apellido'] ?>">
        <input type="hidden" name="apellido2" id="apellido2"  value="<?php echo $datos['apellido2'] ?>">
        <input type="hidden" name="fecha" id="fecha"  value="<?php echo $datos['fechaN'] ?>"> 
        <input type="hidden" name="telefono" id="telefono"  value="<?php echo $datos['telefono'] ?>">
        <input type="hidden" name="sexo" id="sexo"  value="<?php echo $datos['sexo'] ?>">
        <input type="hidden" name="estado" id="estado"   value="<?php echo $datos['estado'] ?>">
         
         <div class="row">
            <div class="col-12">
               <h4>Datos Personales</h4>
            </div>
         </div>
         <div class="row">
           <div class="col-6">
            <ul>
               <li>Cedula : <?php echo $datos['cedula']; ?>.</li>
               <li>Nombre : <?php echo $datos['nombre']; ?>.</li>
               <li>Segundo nombre : <?php echo $datos['nombre2']; ?>.</li>
               <li>Apellido : <?php echo $datos['apellido']; ?>.</li>
               <li>Segundo apellido : <?php echo $datos['apellido2']; ?>.</li>

            </ul>
           </div>
           <div class="col-6">
           <li>Fecha de nacimiento : <?php echo $datos['fechaN']; ?>.</li>
           <li>Telefono : <?php echo $datos['telefono']; ?>.</li>
           <li>Sexo : <?php echo $datos['sexo']; ?>.</li>
           <li>Estado : <?php echo $datos['estado']; ?>.</li> 
           </div>
         </div>

        <div class="row mt-2">
            <div class="col-6">
            <?php $patologias = new ControllerPatologia();
            $enfermedades = $patologias->tablaPatologias();
            $arreglo = ['patologias' => $enfermedades]; ?>  
                <label>Enfermedad</label><select class="form-control" name="enfermedad">
                <option>Ninguna</option>
            <?php foreach ($arreglo['patologias'] as $CP) : ?>
                <option><?php echo $CP->nombre; ?></option>
            <?php endforeach; ?>
                </select>
            </div>
            <div class="col-6">
                 <label>Recomendaciones</label><textarea class="form-control" name="recomendaciones">                             
                </textarea>
            </div>
        </div>
        <div class="row mt-1 mb-4">
            <div class="col-12 text-center mt-3">
                <input type="submit" name="" value="Diagnosticar" class="btn btn-danger w-50">
            </div>
        </div>              
    </form>
</div>