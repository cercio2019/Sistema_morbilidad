<div class="container mb-4">
<div class="row">
  <div class="col-12 text-center">
			<h3>Registro de Patologias</h3>
		</div>
  </div>
  <div class="row mt-4">
		<div class="col-6">
			<a href="index.php?action=registro_patologias" class="btn btn-danger">Registrar nueva patologia</a>
		</div>
		<div class="col-6">
			<form>
				<div class="row">
				<div class="col-6">
				<input type="text" name="cedula" placeholder="Ingresar patologia" class="form-control">
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
  	 			<th>Nombre</th>
  	 			<th>Descripcion</th>
  	 			<th></th>
  	 			<th></th>
  	 		</tr>
  	 	</thead>
  	 	<tbody>
  	 		<?php 
  	 		$CP = new ControllerPatologia(); 
            $patologias = $CP->tablaPatologias();
            $datos = ['enfermedades' => $patologias];
             foreach ($datos['enfermedades'] as $pc) :?>
  	 		<tr>
  	 			<td><?php echo $pc->codpatologia; ?></td>
  	 			<td><?php echo $pc->nombre; ?></td>
  	 			<td><?php echo $pc->descripcion; ?></td>
  	 			<td><a href="index.php?cop=<?php echo$pc->codpatologia; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
  	 			<td><a href="index.php?COP=<?php echo$pc->codpatologia; ?>" class="btn btn-danger"  onclick="return confirm('¿Quieres borrar este registro del sistema?')" ><i class="fas fa-trash-alt"></i></a></td> 	 			
  	 		</tr>
  	 	<?php endforeach; ?>
  	 	</tbody>
  	 </table>	
  	</div>
  </div>
	
</div>