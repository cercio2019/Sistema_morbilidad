<div class="container-fluid">
<div class="row">
  <div class="col-12 text-center">
			<h3>Registro de Diagnosticos</h3>
		</div>
  </div>
  <div class="row mt-4">
		<div class="col-6">
			<a href="index.php?action=pacientes" class="btn btn-danger">Reportar un nuevo paciente</a>
		</div>
		<div class="col-6">
			<form>
				<div class="row">
				<div class="col-6">
				<input type="text" name="cedula" placeholder="Ingresar cedula" class="form-control">
			    </div>
			    <div class="col-4">
				<input type="submit" name="" value="Buscar" class="btn btn-dark text-white">
			    </div>
			</div>
			</form>
		</div>
  </div>
  <div class="row mt-5">
  	<div class="col-12">
  	 <table class="table">
  	 	<thead class="btn-danger text-white text-center">
  	 		<tr>
  	 			<th>id</th>
  	 			<th>Cedula</th>
  	 			<th>Nombre</th>
  	 			<th>Apellido</th>
  	 			<th>Enfermedad</th>
  	 			<th></th>
  	 			<th></th>
  	 			<th></th>
  	 		</tr>
  	 	</thead>
  	 	<tbody>
  	 		<?php 
  	 		$CD = new ControllerDiagnostico(); 
            $diagnosticos = $CD->tablaDiagnostico();
            $datos = ['enfermedades' => $diagnosticos];
             foreach ($datos['enfermedades'] as $pc) :?>
  	 		<tr>
  	 			<td><?php echo $pc->no_registro; ?></td>
  	 			<td><?php echo $pc->ci_paciente; ?></td>
  	 			<td><?php echo $pc->nombre; ?></td>
  	 			<td><?php echo $pc->apellido; ?></td>
  	 			<td><?php echo $pc->enfermedades; ?></td>
  	 			<td><a href="index.php?registro=<?php echo $pc->no_registro; ?>" class="btn btn-dark">Imprimir</a></td>
  	 			<td><a href="index.php?di=<?php echo $pc->no_registro; ?>" class="btn btn-primary">Editar</a></td>
  	 			<td><a href="index.php?IDD=<?php echo $pc->no_registro; ?>" class="btn btn-danger"  onclick="return confirm('¿Quieres borrar este registro del sistema?')" ><i class="fas fa-trash-alt"></i></a></td> 	 			
  	 		</tr>
  	 	<?php endforeach; ?>
  	 	</tbody>
  	 </table>	
  	</div>
  </div>
	
</div>