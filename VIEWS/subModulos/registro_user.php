<?php 
$cp = new ControllerLogin();
$cp->registrar();
 ?>
<div class="container-fluid mt-4">

<div class="container">
    <a href="index.php?action=registroUsuario" class="btn btn-danger">Regresar</a>
</div>

    <form action="index.php?action=registro_user" method="POST">

        <div class="row">
            <div class="col-12">
                <h4 class="text-center">Registro de Usuarios</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
            <label for="">Cedula:</label>
            <div class="row">
            
            <div class="col-3">
            <select name="nacion" class="form-control">
                    <option value="[V]">[V]</option>
                    <option value="[E]">[E]</option>
            </select>
            </div>
            <div class="col-9">
            <input type="text" name="cedula" class="form-control">
            </div>
            </div>
            </div>
            <div class="col-6">
                         <label>nombre</label><input type="text" name="nombre" class="form-control ">
            </div>
            </div>
        <div class="row mt-2">
            <div class="col-6">
                         <label>apellido</label><input type="text" name="apellido" class="form-control ">
            </div>                    
            <div class="col-6">
                         <label>Tipo</label><select class="form-control" name="tipo">
                             <option>Administrador</option>
                             <option>Invitado</option>
                         </select>
            </div>
            <div class="col-6">
                <label>Contraseña</label><input type="password" name="contraseña" class="form-control">
            </div>
        </div>
        <div class="row mt-1 mb-2">
            <div class="col-12 text-center mt-3">
                <input type="submit" value="registrar" class="btn btn-danger w-50">
            </div>
        </div>              
                </form>
            </div>