<?php  
require_once 'BaseDatos/Base.php';
class Medicos
{
	function __construct()
	{
		$this->db = new Base;
	}

	public function BuscarMedicos()
	{
	 $this->db->query('SELECT * FROM medicos');
	 $resultados = $this->db->registros();
	 return $resultados;
	}

	public function registrarMedicos($datos)
{
	$this->db->query('INSERT INTO medicos (ci_medico, nombre, nombre_2, apellido, apellido_2, fecha_N, edad,  telefono, direccion, sexo) VALUES (:cedula, :nombre, :nombre2, :apellido, :apellido2, :fecha, :edad, :telefono, :direccion, :sexo)');

	$this->db->bind(':cedula', $datos['cedula']);
	$this->db->bind(':nombre', $datos['nombre']);
	$this->db->bind(':nombre2', $datos['nombre2']);
	$this->db->bind(':apellido', $datos['apellido']);
	$this->db->bind(':apellido2', $datos['apellido2']);
	$this->db->bind(':fecha', $datos['fechaN']);
	$this->db->bind(':edad', $datos['edad']);	
	$this->db->bind(':telefono', $datos['telefono']);	
	$this->db->bind(':sexo', $datos['sexo']);
	$this->db->bind(':direccion', $datos['direccion']);

	if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
}

 public function calcularEdad($fecha)
  {
  	 $dia=date("j");
     $mes=date("n");
     $año=date("Y");
     $day= substr($fecha, 8,2);
     $month= substr($fecha, 5,2);
     $year= substr($fecha, 0,4);
     $edad;

     if ($month>$mes) {
	
	  $edad= $año-$year-1;

    }else if ($mes==$month && $day>$dia) {

	$edad= $año-$year-1;

    }else{

	 $edad= $año-$year;
    }
    return $edad;
 }

public function obtenerCedula($cedula)
	{
		$this->db->query('SELECT * FROM medicos WHERE ci_medico = :cedula');
		$this->db->bind(':cedula', $cedula);
		$fila= $this->db->registro();
		return $fila;
	}

public function actualizarMedico($datos)
{
	$this->db->query('UPDATE medicos SET  nombre= :nombre, nombre_2= :nombre2, apellido= :apellido, apellido_2= :apellido2, fecha_N= :fecha, edad= :edad, telefono= :telefono, direccion= :direccion, sexo= :sexo WHERE ci_medico = :cedula');

    $this->db->bind(':cedula', $datos['cedula']);
	$this->db->bind(':nombre', $datos['nombre']);
	$this->db->bind(':nombre2', $datos['nombre2']);
	$this->db->bind(':apellido', $datos['apellido']);
	$this->db->bind(':apellido2', $datos['apellido2']);
	$this->db->bind(':fecha', $datos['fechaN']);
	$this->db->bind(':edad', $datos['edad']);
	$this->db->bind(':telefono', $datos['telefono']);
	$this->db->bind(':sexo', $datos['sexo']);
	$this->db->bind(':direccion', $datos['direccion']);
	
     if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
}

public function eliminarMedico($cedula)
{
    $this->db->query('DELETE FROM medicos WHERE ci_medico = :cedula');
	$this->db->bind(':cedula', $cedula);
        
    if ($this->db->execute()) {
			return true;
	} else {
			return false;
	}
}
}
 ?>