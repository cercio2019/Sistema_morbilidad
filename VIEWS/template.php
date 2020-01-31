<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UFT-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href= "Bootstrap/css/bootstrap.css">
	<title><?php echo NOMBRESITIO; ?></title>
</head>
<body>
<div class="container-fluid bg-primary">
<div class="row">
	<div class="col-sm-12 col-md-3">
	    <img src="Bootstrap/img/ascardio.png" width="210">
	</div>
	<?php
      switch ($dato->tipo_usuario) {
      	case 'Administrador':?>
           <div class="col-sm-12 col-md-8">
      		<?php include "Menus/nav_1.php"; ?>
            </div>
      <?php  break;
      	case 'Medico':?>
           <div class="col-sm-12 col-md-8 text-center">
      	 	<?php include "Menus/nav_2.php"; ?>
           </div>
       <?php  break;      
      }
    ?>	
</div>
</div>

<div class="container-fluid mt-4">
<?php
$mvc = new Controller();
$mvc -> enlacesPaginasController();

$CP = new ControllerPaciente();
if (isset($_GET['CI'])) { $CP->eliminar(); }

$CM = new controllerMedico();
if (isset($_GET['CIM'])) {$CM->eliminar();}

$patologia = new ControlLerPatologia();
if (isset($_GET['COP'])) {$patologia->eliminar();}

$diagnostico = new ControllerDiagnostico();
if (isset($_GET['IDD'])) {$diagnostico->eliminar();}

$usuario = new ControllerLogin();
if (isset($_GET['CIU'])) {$usuario->eliminar();}
?>
</div>

<div class="container-fluid bg-primary text-white fixed-bottom">
	<div class="row ">
		<div class="col-3 text-center">
			<p>Usuario: <strong> <?php echo $dato->Nombre_usuario." ".$dato->Apellido_usuario; ?></strong></p>
		</div>
		<div class="col-3 text-center">
			<p>Tipo de usuario:<strong> <?php echo $dato->tipo_usuario; ?></strong></p>
		</div>
	</div>
</div>
<script src="Bootstrap/js/datos.js"></script>
<script src="Bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="Bootstrap/js/popper.min.js"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>
<script src="Bootstrap/js/all.js"></script>
</body>
</html>