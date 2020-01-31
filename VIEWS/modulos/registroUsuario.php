<?php $CP = new ControllerLogin();?>
<div class="container">
<div class="row">
  <div class="col-12 text-center">
			<h3>Registro de Usuarios</h3>
		</div>
  </div>
  <div class="row mt-4">
		<div class="col-6">
			<a href="index.php?action=registro_user" class="btn btn-danger">Registrar nuevo usuario</a>
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
  	 			<th>Tipo</th>
  	 			<th></th>
  	 			<th></th>
  	 		</tr>
  	 	</thead>
  	 	<tbody>
  	 		<?php 
            $usuario = $CP->tablaUsuario();
            $datos = ['usuarios' => $usuario];
             foreach ($datos['usuarios'] as $pc) :?>
  	 		<tr>
  	 			<td><?php echo $pc->cedula_usuario; ?></td>
  	 			<td><?php echo $pc->Nombre_usuario; ?></td>
  	 			<td><?php echo $pc->Apellido_usuario; ?></td>
  	 			<td><?php echo $pc->tipo_usuario; ?></td>
  	 			<td><a href="index.php?user=<?php echo$pc->cedula_usuario; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
  	 			<td><a href="index.php?CIU=<?php echo$pc->cedula_usuario; ?>" class="btn btn-danger"  onclick="return confirm('¿Quieres borrar este registro del sistema?')" ><i class="fas fa-trash-alt"></i></a></td> 	 			
  	 		</tr>
  	 	<?php endforeach; ?>
  	 	</tbody>
  	 </table>	
  	</div>
  </div>
</div>