<?php 
require_once 'MODELOS/Medicos.php';
require_once 'LoginUsuario/Usuario.php';

class controllerMedico
{
	public function tablaMedicos()
	{
	    $md = new Medicos();
	    $datos = $md->BuscarMedicos();
	    return $datos;
	}

	public function registrarMedicos()
{
	$medicos = new Medicos();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

     $fecha= $_POST['fecha'];
     $edad = $medicos->calcularEdad($fecha);
     $cedula = $_POST['nacion'].'-'.$_POST['cedula'];
     $telefono = $_POST['codigo'].'-'.$_POST['telefono'];
     $datos=[
          'cedula' => $cedula,       
          'nombre' => trim($_POST['nombre']),
          'nombre2' => trim($_POST['nombre2']),
          'apellido' => trim($_POST['apellido']),
          'apellido2' => trim($_POST['apellido2']),
          'fechaN' => $fecha,
          'edad' => $edad,          
          'telefono' => $telefono,
          'sexo' => trim($_POST['sexo']),
          'direccion' => trim($_POST['direccion']),
          'clave' => trim($_POST['cedula']),
       ];
        
         $user = new Usuario();
         $user->MedicoUser($datos); 

       if($medicos->registrarMedicos($datos)) {
        header("location: ".RUTA_URL."index.php?action=medicos");
       }else{
        die('Algo salio mal');
       }
        }else{

          $datos=[
          'cedula' => '',      
          'nombre' => '',
          'nombre2' => '',
          'apellido' => '',
          'apellido2' => '',
          'fechaN' => '',
          'edad' =>  '',         
          'telefono' => '',
          'sexo' => '',
          'direccion' => '',
       ];
    }
}

public function buscar()
 {
	$medicos = new Medicos();

	if (isset($_GET['ciM'])) {
		
		   $cedula=$_GET['ciM'];     
       $ciudadano = $medicos->obtenerCedula($cedula);
       $datos = [
          'cedula'=> $ciudadano->ci_medico,
          'nombre' => $ciudadano->nombre,
          'nombre2' => $ciudadano->nombre_2,
          'apellido' => $ciudadano->apellido,
          'apellido2' => $ciudadano->apellido_2,
          'fechaN' => $ciudadano->fecha_N,
          'edad' => $ciudadano->edad,
          'telefono' => $ciudadano->telefono,
          'sexo' => $ciudadano->sexo,
          'direccion' => $ciudadano->direccion,     
       ];
	}
	return $datos;
}

public function editar()
{
	 $medicos = new Medicos();
	if (isset($_GET['ciM'])) {
		
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $cedula = $_GET['ciM'];
     $fecha= $_POST['fecha'];
     $edad = $medicos->calcularEdad($fecha);
     $datos=[
          'cedula' => $cedula,       
          'nombre' => trim($_POST['nombre']),
          'nombre2' => trim($_POST['nombre2']),
          'apellido' => trim($_POST['apellido']),
          'apellido2' => trim($_POST['apellido2']),
          'fechaN' => $fecha,
          'edad' => $edad,          
          'telefono' => trim($_POST['telefono']),
          'sexo' => trim($_POST['sexo']),
          'direccion' => trim($_POST['direccion']),
       ];
         $user = new Usuario();
         $user->editarUsuario($datos);

       if ($medicos->actualizarMedico($datos)) {
        header("location: ".RUTA_URL."index.php?action=medicos");
       }else{
       	die('Algo salio mal');
       }
       }
	}
}

public function eliminar()
{
  $medicos = new Medicos();

	if (isset($_GET['CIM'])) {
		
		$cedula = $_GET['CIM'];
    $user = new ControllerLogin();
    $user->eliminarUsuarioMedico($cedula);
       if ($medicos->eliminarMedico($cedula)) {      	
       	header('location:'.RUTA_URL."index.php?action=medicos");
       }else{
       	die('algo salio mal');
       }
	}
}

public function eliminarMedicoUsuario($ci)
{
     $medicos = new Medicos();
     $cedula = $ci;
     $medicos->eliminarMedico($cedula);       
}

}
 ?>