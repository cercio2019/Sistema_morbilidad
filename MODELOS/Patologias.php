<?php 
require_once 'BaseDatos/Base.php';

class Patologias
{	
	function __construct()
	{
	  $this->db = new Base;
	}

   public function MostrarPatologias()
   {
   	$this->db->query('SELECT * FROM patologias');
   	$resultados = $this->db->registros();
   	return $resultados;
   }

   public function registrarPatologia($datos)
   {
   	  $this->db->query('INSERT INTO patologias (nombre, descripcion) VALUES (:nombre, :descripcion)');

   	  $this->db->bind(':nombre', $datos['nombre']);
   	  $this->db->bind(':descripcion', $datos['descripcion']);

   	  if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
   }

   public function obtenerId($id)
	{
		$this->db->query('SELECT * FROM patologias WHERE codpatologia = :id');
		$this->db->bind(':id', $id);
		$fila= $this->db->registro();
		return $fila;
	}

public function actualizarPatologia($datos)
{
	$this->db->query('UPDATE patologias SET  nombre= :nombre, descripcion= :descripcion WHERE codpatologia = :id');

    $this->db->bind('id', $datos['id']);
	$this->db->bind(':nombre', $datos['nombre']);
	$this->db->bind(':descripcion', $datos['descripcion']);
	
     if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
}

public function reportarPatologia($patologia)
{
	$this->db->query('SELECT codpatologia, nombre, descripcion FROM patologias WHERE nombre = :nombre');
	$this->db->bind(':nombre', $patologia);
	$datos= $this->db->registro();
	return $datos;
}

public function eliminarPatologia($id)
{
		$this->db->query('DELETE FROM patologias WHERE codpatologia = :id');

		$this->db->bind(':id', $id);
        
        if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
}
}
 ?>