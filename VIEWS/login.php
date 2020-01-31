<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href= "Bootstrap/css/bootstrap.css">
	<title><?php echo NOMBRESITIO; ?></title>
</head>
<body>

<div class="bg-primary text-white">
	<h1 class="p-4"></h1>
</div>

<div class="container-fluid" style="margin-top: 150px;">
   
	<div class="row  p-2">		
		<div class="col-6">              
         <h3 class="text-white ml-5">Entrar al sistema</h3>

		<?php if (isset($error)) {?>
   	        <p class=" ml-5"><?php echo $error; ?></p>
        <?php } ?>

		<form class="ml-1 pt-2" method="POST" action="">
		<div>
			<label>usuario</label>
			 
		   <div class="row">
		   <div class="col-3">
		   <select name="nacion" id="" class="form-control">
			<option value="[V]">[V]</option>
			<option value="[E]">[E]</option>
			</select>
		   </div>
		    <div class="col-9">
			<input type="text" name="usuario"  class="form-control">
			</div>
		   </div>
		</div>
		<div class="mt-2">
			<label>contraseña</label><input type="password" name="password" class="form-control ">
		</div>
		<div class="text-center"><input type="submit"  value="ingresar" class="btn btn-danger mt-3 mb-4 w-50"></div>
	</form>

</div>
<div class="col-6 ">
	<img src="Bootstrap/img/ascardio.png" style="width: 100%; margin-top: 50px;">
</div>
</div>
</div>

<div class="container-fluid bg-primary fixed-bottom">
	<div class="p-4"></div>
</div>
<script src="Bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="Bootstrap/js/popper.min.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>