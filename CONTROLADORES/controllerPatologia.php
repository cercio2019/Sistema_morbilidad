<?php 
require_once 'MODELOS/Patologias.php';

class ControllerPatologia
{
	public function tablaPatologias()
	{
		$patologias = new Patologias();
		$datos = $patologias->MostrarPatologias();
    return $datos;
	}

	public function registrar()
{
	$patologias = new Patologias();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

     $datos=[     
          'nombre' => trim($_POST['nombre']),
          'descripcion' => trim($_POST['descripcion']),
       ];
         
       if($patologias->registrarPatologia($datos)) {
        header("location: ".RUTA_URL."index.php?action=patologias");
       }else{
        die('Algo salio mal');
       }
        }else{

          $datos=[  
          'nombre' => '',
          'descripcion' => '',
       ];
    }
}

public function buscar()
 {
	$patologias = new Patologias();

	if (isset($_GET['cop'])) {
		
		$id=$_GET['cop'];
     
       $enfermedad = $patologias->obtenerId($id);

       $datos = [
         'id'=> $enfermedad->codpatologia,
         'nombre' => $enfermedad->nombre,
         'descripcion' => $enfermedad->descripcion,    
       ];
	}
	return $datos;
}

public function editar()
{
	 $patologias = new Patologias();
	if (isset($_GET['cop'])) {
		
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id = $_GET['cop'];

 	 $datos=[
          'id' => $id,       
          'nombre' => trim($_POST['nombre']),
          'descripcion' => trim($_POST['descripcion']),
       ];
     
       if ($patologias->actualizarPatologia($datos)) {
        header("location: ".RUTA_URL."index.php?action=patologias");
       }else{
       	die('Algo salio mal');
       }
       }
	}
}

public function eliminar()
{
     $patologias = new Patologias();

	if (isset($_GET['COP'])) {
		
		$id = $_GET['COP'];

       if ($patologias->eliminarPatologia($id)) {      	
       	header('location:'.RUTA_URL."index.php?action=patologias");
       }else{
       	die('algo salio mal');
       }
	}
}
}
 ?>