<div class="btn-group ml-5 mt-1">
   <button type="button" class="btn bg-primary p-3 text-white"><a href="index.php" class="text-white">Inicio</a></button>
    <button type="button" class="btn bg-primary p-3 text-white "><a href="index.php?action=pacientes" class="text-white">Pacientes</a></button>
   <button type="button" class="btn bg-primary p-3 "><a href="index.php?action=Reportes" class="text-white">Reportes</a></button>
  <div class="btn-group">
   <button type="button" class="btn bg-primary  dropdown-toggle p-3 text-white" data-toggle="dropdown">usuarios</button>
   <div class="dropdown-menu bg-primary">
   <a href="index.php?action=ContraseñaMedico" class="dropdown-item text-white bg">Cambio de contraseña</a>
   	<a href="<?php echo RUTA_URL; ?>LoginUsuario/cerrarSesion.php" class="dropdown-item text-white bg">Cerrar sesion</a>
   </div>
  </div>

</div>