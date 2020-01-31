<?php 
require_once 'MODELOS/Diagnosticos.php';
require_once 'MODELOS/Patologias.php';

class ControllerDiagnostico
{
	public function tablaDiagnostico()
	{
		$diag = new Diagnosticos();
		$datos = $diag->mostrarDiagnosticos();
		return $datos;
	}

	public function mostrarRegistro()
	{
		$diag = new Diagnosticos();

		if (isset($_GET['registro'])) {
		  
		  $id = $_GET['registro'];
          
          $dato= $diag->buscarRegistro($id);
      
         $datos = [
           'id' => $dato->no_registro,
           'cedula' => $dato->ci_paciente,
           'nombre' => $dato->nombre,
           'nombre2' => $dato->nombre_2,
           'apellido' => $dato->apellido,
           'apellido2' => $dato->apellido_2,
           'edad' => $dato->edad,
           'sexo' => $dato->sexo,
           'telefono' => $dato->telefono,
           'enfermedad' => $dato->enfermedades,
           'recomendaciones' => $dato->recomendaciones,
           'ci_medico' => $dato->ci_medico,
           'medico' => $dato->medico,
           'telefonoM' => $dato->telef_med,
         ];
		}
		return $datos;
	}

  public function registrar()
  {

     if (isset($_GET['ci'])) {
       $diag = new Diagnosticos();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {      
     $edad = 21;
     $dia=date("j");
     $mes=date("n");
     $año=date("Y");
     $fechaRegistro= $dia.'/'.$mes.'/'.$año;

     $Pato = new Patologias();     
     $enfermedad = $_POST['enfermedad'];
     $Patologias = $Pato->reportarPatologia($enfermedad);
     $dato= ['id'=> $Patologias->codpatologia,
            'nombre'=> $Patologias->nombre,
            'descripcion' => $Patologias->descripcion ];
   
     $diagnostico=$dato['id'].'- '.$dato['nombre'].':  
     '.$dato['descripcion'];

     $cedula = $_GET['ci'];
     $datos=[
          'cedula' => $cedula,       
          'nombre' => trim($_POST['nombre']),
          'nombre2' => trim($_POST['nombre2']),
          'apellido' => trim($_POST['apellido']),
          'apellido2' => trim($_POST['apellido2']),
          'edad' => $edad,          
          'telefono' => trim($_POST['telefono']),
          'sexo' => trim($_POST['sexo']),
          'estado' => trim($_POST['estado']),
          'enfermedad' => $diagnostico,
          'recomendaciones' => trim($_POST['recomendaciones']),
          'ci_medico' => trim($_POST['cedulaM']),
          'medico' => trim($_POST['nombreM']),
          'telefonoM' => trim($_POST['telefonoM']), 
          'fechaRegistro' => $fechaRegistro,
       ];
         
       if($diag->registrarDiagnostico($datos)) {
        header("location: ".RUTA_URL."index.php?action=Reportes");
       }else{
        die('Algo salio mal');
       }
    }
  }
    
  }

  public function eliminar()
  {
    if (isset($_GET['IDD'])) {
      
      $diag = new Diagnosticos();
      $ID = $_GET['IDD'];

      if ($diag->eliminarID($ID)) {       
        header('location:'.RUTA_URL."index.php?action=Reportes");
       }else{
        die('algo salio mal');
       }
    }
  }

  public function eliminarXcedula($cedula)
  {
    $diag = new Diagnosticos();
    $diag->eliminarCedula($cedula);
  }
}
 ?>