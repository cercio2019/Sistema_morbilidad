<?php 
$user = new ControllerLogin();
$datos= $user->buscar();
 ?>
<div class="container-fluid mt-4">

<div class="container">
    <a href="index.php?action=registroUsuario" class="btn btn-danger">Regresar</a>
</div>
     <form action="index.php?user=<?php echo $datos['cedula']; ?>" method="POST">

        <div class="row">
            <div class="col-12">
               <h4 class="text-center">Editar de Contraseña</h4>
           </div>
           </div>
            <div class="row">
                <div class="col-6">
                    <label>contraseña Actual</label><input type="password" name="Actual" class="form-control ">
                </div>
            </div>
        <div class="row">
                <div class="col-6">
                    <label>Nueva contraseña</label><input type="password" name="nuevaContraseña" class="form-control">
                </div>
                <div class="col-6">
                    <label>Confirmar contraseña</label><input type="password" name="confirmarContraseña" class="form-control">
                </div>
        </div>
        <div class="row mt-1 mb-2">
                <div class="col-12 text-center mt-3">
                    <input type="submit" name="" value="cambiar contraseña" class="btn btn-danger w-50">
                </div>
        </div>              
                </form>

                <p><?php $error = $user->CambioContraseña();
                        echo $error;
                 ?></p>

            </div>

