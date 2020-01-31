<?php
$CP = new ControllerPaciente();
 ?>
<div class="container">
<div class="row">
  <div class="col-12 text-center">
			<h3>Registro de pacientes</h3>
		</div>
  </div>
  <div class="row mt-4">
		<div class="col-6">
			<a href="index.php?action=registro_pacientes" class="btn btn-danger">Registrar nuevo paciente</a>
		</div>
		<div class="col-6">
			<form>
			<div class="row">
			<div class="col-6">
			<input type="text" name="cedula" placeholder="Ingresar cedula" class="form-control">
			</div>
			<div class="col-6">
			<input type="submit" name="" value="Buscar" class="btn btn-dark text-white">
			</div>
			</div>				
			</form>
		</div>
  </div>
  <div class="row mt-5">
  	<div class="col-12">
  	 <table class="table">
  	 	<thead class="btn-danger text-white">
  	 		<tr>
  	 			<th>Cedula</th>
  	 			<th>Nombre</th>
  	 			<th>Apellido</th>
  	 			<th>Edad</th>
  	 			<th>Estatus</th>
  	 			<th></th>
  	 			<th></th>
  	 		</tr>
  	 	</thead>
  	 	<tbody>
  	 		<?php 
            $pacientes = $CP->tablaPacientes();
            $datos = ['pacientes' => $pacientes];
             foreach ($datos['pacientes'] as $pc) :?>
  	 		<tr>
  	 			<td><a href="index.php?ci=<?php echo $pc->ci_paciente;  ?>"><?php echo $pc->ci_paciente; ?></a></td>
  	 			<td><?php echo $pc->nombre; ?></td>
  	 			<td><?php echo $pc->apellido; ?></td>
  	 			<td><?php echo $pc->edad; ?></td>
  	 			<td><?php echo $pc->estatus; ?></td>
  	 			<td><a href="index.php?cedula=<?php echo$pc->ci_paciente; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
  	 			<td><a href="index.php?CI=<?php echo$pc->ci_paciente; ?>" class="btn btn-danger"  onclick="return confirm('¿Quieres borrar este registro del sistema?')" ><i class="fas fa-trash-alt"></i></a></td> 	 			
  	 		</tr>
  	 	<?php endforeach; ?>
  	 	</tbody>
  	 </table>	
  	</div>
  </div>
	
</div>