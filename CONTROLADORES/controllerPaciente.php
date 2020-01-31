<?php 
require_once 'MODELOS/Pacientes.php';

class ControllerPaciente 
{
	public function tablaPacientes()
	{
	    $pc = new Pacientes();
	    $datos = $pc->BuscarPacientes();
	    return $datos;
	}

	public function registrar()
{
	$pacientes = new Pacientes();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
     $fecha = $_POST['fecha']; 
     $edad = $pacientes->calcularEdad($fecha);
     $cedula = $_POST['nacion'].'-'.$_POST['cedula'];
     $telefono = $_POST['codigo'].'-'.$_POST['telefono'];
     $datos=[
          'cedula'   =>    $cedula,       
          'nombre'   =>    trim($_POST['nombre']),
          'nombre2'  =>    trim($_POST['nombre2']),
          'apellido' =>    trim($_POST['apellido']),
          'apellido2'=>    trim($_POST['apellido2']),
          'fechaN'   =>    $fecha,
          'edad'     =>    $edad,          
          'telefono' =>    $telefono,
          'sexo'     =>    trim($_POST['sexo']),
          'direccion'=>    trim($_POST['direccion']),
          'estado'   =>    trim($_POST['estado']),
          'estatus'  =>    trim($_POST['estatus']),
       ];
         
       if($pacientes->registrarPacientes($datos)) {
        header("location: ".RUTA_URL."index.php?action=pacientes");
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
          'estado' => '',
          'estatus' => ''
       ];
    }
}

public function buscar()
 {
	$pacientes = new Pacientes();

	if (isset($_GET['cedula'])) {
		
	$cedula=$_GET['cedula'];     
   $ciudadano = $pacientes->obtenerCedula($cedula);
   $datos = [
         'cedula'=> $ciudadano->ci_paciente,
         'nombre' => $ciudadano->nombre,
         'nombre2' => $ciudadano->nombre_2,
         'apellido' => $ciudadano->apellido,
         'apellido2' => $ciudadano->apellido_2,
         'fechaN' => $ciudadano->fecha_N,
         'edad' => $ciudadano->edad,
         'telefono' => $ciudadano->telefono,
         'sexo' => $ciudadano->sexo,
         'direccion' => $ciudadano->direccion,
         'estado' => $ciudadano->estado,
         'estatus' => $ciudadano->estatus     
       ];
	}
	return $datos;
}

public function reportarPaciente()
 {
  $pacientes = new Pacientes();

  if (isset($_GET['ci'])) {
    
       $cedula=$_GET['ci'];     
       $ciudadano = $pacientes->obtenerCedula($cedula);
       $datos = [
         'cedula'=> $ciudadano->ci_paciente,
          'nombre' => $ciudadano->nombre,
          'nombre2' => $ciudadano->nombre_2,
          'apellido' => $ciudadano->apellido,
          'apellido2' => $ciudadano->apellido_2,
          'fechaN' => $ciudadano->fecha_N,
          'edad' => $ciudadano->edad,
          'telefono' => $ciudadano->telefono,
          'sexo' => $ciudadano->sexo,
          'direccion' => $ciudadano->direccion,
          'estado' => $ciudadano->estado,
          'estatus' => $ciudadano->estatus     
       ];
  }
  return $datos;
}

public function editar()
{
	 $pacientes = new Pacientes();
	if (isset($_GET['cedula'])) {
		
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $fecha = $_POST['fecha']; 
        $edad = $pacientes->calcularEdad($fecha);
        $cedula = $_GET['cedula'];
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
          'estado' => trim($_POST['estado']),
          'estatus' => trim($_POST['estatus'])
       ];
     
       if ($pacientes->actualizarPaciente($datos)) {
        header("location: ".RUTA_URL."index.php?action=pacientes");
       }else{
       	die('Algo salio mal');
       }

       }
	}
}

public function eliminar()
{
   $pacientes = new Pacientes();

	if (isset($_GET['CI'])) {
		
      $cedula = $_GET['CI'];      
      $diagnostico = new ControllerDiagnostico();
      $diagnostico->eliminarXcedula($cedula);

       if ($pacientes->eliminarPaciente($cedula)) {      	
       	header('location:'.RUTA_URL."index.php?action=pacientes");
       }else{
       	die('algo salio mal');
       }
	}
}
}
 ?>