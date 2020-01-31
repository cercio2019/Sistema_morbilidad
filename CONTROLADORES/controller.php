<?php
require_once 'MODELOS/model.php';

class Controller{
	
public function enlacesPaginasController(){

    if(isset($_GET["action"])){
    
	$enlacesController = $_GET["action"];
	}
     elseif (isset($_GET['cedula'])) {
  		
  		$enlacesController = 'editarPaciente';

  	}elseif (isset($_GET['ciM'])) {
      
      $enlacesController = 'editarMedico';

    }elseif (isset($_GET['cop'])) {
      
      $enlacesController = 'editarPatologia';

    }elseif (isset($_GET['registro'])) {
      
      $enlacesController = 'ImprimirDiagnostico';

    }elseif (isset($_GET['ci'])) {
      
      $enlacesController = 'reportarPaciente';

    }elseif (isset($_GET['user'])) {
        
        $enlacesController = 'cambioContraseña';
    }
      else{

  		$enlacesController= "index.php";
  	}

	$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

	include $respuesta;
  }
}
?>