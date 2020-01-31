<div class="container">
<div class="row">
  <div class="col-12 text-center">
			<h3>Registro de Medicos</h3>
		</div>
  </div>
  <div class="row mt-4">
		<div class="col-6">
			<a href="index.php?action=registro_medicos" class="btn btn-danger">Registrar nuevo medico</a>
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
  	 			<th>Telefono</th>
  	 			<th></th>
  	 			<th></th>
  	 		</tr>
  	 	</thead>
  	 	<tbody>
  	 		<?php 
  	 		$Md = new controllerMedico(); 
            $medicos = $Md->tablaMedicos();
            $datos = ['medicos' => $medicos];
             foreach ($datos['medicos'] as $pc) :?>
  	 		<tr>
  	 			<td><?php echo $pc->ci_medico; ?></td>
  	 			<td><?php echo $pc->nombre; ?></td>
  	 			<td><?php echo $pc->apellido; ?></td>
  	 			<td><?php echo $pc->edad; ?></td>
  	 			<td><?php echo $pc->telefono; ?></td>
  	 			<td><a href="index.php?ciM=<?php echo$pc->ci_medico; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
  	 			<td><a href="index.php?CIM=<?php echo$pc->ci_medico; ?>" class="btn btn-danger"  onclick="return confirm('¿Quieres borrar este registro del sistema?')" ><i class="fas fa-trash-alt"></i></a></td> 	 			
  	 		</tr>
  	 	<?php endforeach; ?>
  	 	</tbody>
  	 </table>	
  	</div>
  </div>
	
</div>