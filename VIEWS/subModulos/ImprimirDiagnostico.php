<?php 
$Cd = new ControllerDiagnostico();
$datos = $Cd->mostrarRegistro();
 ?>
<div class="container">
	<div class="row">
		<div class="col-12 text-center">
			  <h3>¿Deseas imprimir el diagnostico de este paciente?</h3>
		</div>
	</div>
	
			<form action="PDF/Pdf.php" target="_blank" method="POST">

			    	<input type="hidden" name="id"  value="<?php echo $datos['id']; ?>">			    
			    	<input type="hidden" name="cedula"   value="<?php echo $datos['cedula']; ?>">			    
			    	<input type="hidden" name="nombre"   value="<?php echo $datos['nombre']; ?>">			   
			    	<input type="hidden" name="nombre2"   value="<?php echo $datos['nombre2']; ?>">			   
			    	<input type="hidden" name="apellido"   value="<?php echo $datos['apellido']; ?>">			  
			    	<input type="hidden" name="apellido2"   value="<?php echo $datos['apellido2']; ?>">			  
			    	<input type="hidden" name="edad"   value="<?php echo $datos['edad']; ?>">			   
			    	<input type="hidden" name="sexo"   value="<?php echo $datos['sexo']; ?>">			   
			    	<input type="hidden" name="telefono"   value="<?php echo $datos['telefono']; ?>">
						<input type="hidden" name="enfermedad" value="<?php echo $datos['enfermedad'];?>">			   
			    	<input type="hidden" name="recomendaciones" value="<?php echo $datos['recomendaciones']; ?>" >			  
			    	<input type="hidden" name="cedulaM"   value="<?php echo $datos['ci_medico']; ?>">			   
			    	<input type="hidden" name="nombreM"   value="<?php echo $datos['medico']; ?>">			   
			    	<input type="hidden" name="telefonoM"  value="<?php echo $datos['telefonoM']; ?>">

						<div class="row mt-3">
						  <div class="col-12">
							   <p>Numero de registro : <?php echo $datos['id']; ?></p>
							</div>
							 <div class="col-6">
							 <ul>
							    <li>Cedula : <?php echo $datos['cedula'];?> </li>
							    <li>Nombre : <?php echo $datos['nombre'];?> </li>
							    <li>Segundo Nombre : <?php echo $datos['nombre2'];?> </li>
							    <li>Apellido : <?php echo $datos['apellido'];?> </li>
							    <li>Segundo Apellido : <?php echo $datos['apellido2'];?> </li>
							 </ul>
							 </div>
							 <div class="col-6">
							 <li>Edad : <?php echo $datos['edad'];?> </li>
							 <li>Sexo : <?php echo $datos['sexo'];?> </li>
							 <li>Telefono : <?php echo $datos['telefono'];?> </li>							 
							 </div>
							 <div class="col-6">
							 <label for="">Enfermedad :</label><p><?php echo $datos['enfermedad'];?></p>
							 </div>
							 <div class="col-6">
							 <label for="">Recomendaciones :</label><p><?php echo $datos['recomendaciones'];?></p>
							 </div>
							 <div class="col-6">
							 <ul>
							 <li>Cedula de medico: <?php echo $datos['ci_medico'];?> </li>
							 <li>Nombre de medico: <?php echo $datos['medico'];?> </li>
							 <li>Telefono de medico: <?php echo $datos['telefonoM'];?> </li>

							 </ul>
							 </div>
						</div>



	        
		<div class="row m-5">
			<div class="col-6">
				<a href="index.php?action=Reportes" class="btn btn-danger">regresar</a>
			</div>
			    <div class="col-6">
			    	<input type="submit" class="btn btn-primary" value="imprimir">
			    </div>
    </div>
             

			</form>
</div>