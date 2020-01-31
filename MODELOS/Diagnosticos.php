<?php 
require_once 'BaseDatos/Base.php';

class Diagnosticos
{	
	function __construct()
	{
       $this->db = new Base;	    
	}

	public function mostrarDiagnosticos()
	{
	 $this->db->query('SELECT * FROM diagnostico');
	 $resultados = $this->db->registros();
	 return $resultados;
	}

	public function registrarDiagnostico($datos)
	{
		$this->db->query('INSERT INTO diagnostico (ci_paciente, nombre, nombre_2, apellido, apellido_2, edad, sexo, telefono, estado, enfermedades, recomendaciones, ci_medico, medico, telef_med, fechaRegistro) VALUES (:cedula, :nombre, :nombre2, :apellido, :apellido2, :edad, :sexo, :telefono, :estado, :enfermedades,  :recomendaciones, :ciM, :medico, :teleM, :fecha)');
       
       $this->db->bind(':cedula', $datos['cedula']);
       $this->db->bind(':nombre', $datos['nombre']);
       $this->db->bind(':nombre2', $datos['nombre2']);
       $this->db->bind(':apellido', $datos['apellido']);
       $this->db->bind(':apellido2', $datos['apellido2']);
       $this->db->bind(':edad', $datos['edad']);
       $this->db->bind(':sexo', $datos['sexo']);
       $this->db->bind(':telefono', $datos['telefono']);
       $this->db->bind(':estado', $datos['estado']);
       $this->db->bind(':enfermedades', $datos['enfermedad']);
       $this->db->bind(':recomendaciones', $datos['recomendaciones']);
       $this->db->bind(':ciM', $datos['ci_medico']);
       $this->db->bind(':medico', $datos['medico']);
       $this->db->bind(':teleM', $datos['telefonoM']);
       $this->db->bind(':fecha', $datos['fechaRegistro']);

     if ($this->db->execute()) {
     	return true;
     }else{
       return false;
     }
	}

	public function buscarRegistro($id)
	{
		$this->db->query('SELECT * FROM diagnostico WHERE no_registro= :id');
		$this->db->bind(':id', $id);
	    $fila= $this->db->registro();
		return $fila;
	}

	public function eliminarID($id)
	{
		$this->db->query('DELETE FROM diagnostico WHERE no_registro= :id');

		$this->db->bind(':id', $id );

	if ($this->db->execute()) {
     	   return true;
      }else{
           return false;
     }

	}

	public function eliminarCedula($cedula)
	{
		$this->db->query('DELETE FROM diagnostico WHERE ci_paciente = :cedula');
		$this->db->bind(':cedula', $cedula);
		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
		
	}
}

 ?>