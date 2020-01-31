 <?php
class EnlacesPaginas{

public function enlacesPaginasModel($enlacesModel){

if($enlacesModel=="pacientes" || $enlacesModel=="medicos" ||
   $enlacesModel=="patologias" || $enlacesModel=="Reportes" ||
   $enlacesModel=="registroUsuario"){

	  $module = "VIEWS/modulos/".$enlacesModel.".php";
	}
	else if($enlacesModel== "index.php"){

			$module= "VIEWS/modulos/inicio.php";
	}
	elseif ($enlacesModel=='registro_pacientes' || $enlacesModel=='editarPaciente'
	  || $enlacesModel=='registro_medicos'      || $enlacesModel=='editarMedico'
	  || $enlacesModel=='registro_patologias'   || $enlacesModel=='editarPatologia' 
	  || $enlacesModel=='ImprimirDiagnostico'   || $enlacesModel=='reportarPaciente' 
	  || $enlacesModel=='registro_user'         || $enlacesModel== 'cambioContraseña'
	  || $enlacesModel== 'ContraseñaMedico') {

			$module = "VIEWS/subModulos/".$enlacesModel.".php";
	}
	else{
		 $module= "VIEWS/modulos/inicio.php";
	} 
        return $module;
	}
}
?>