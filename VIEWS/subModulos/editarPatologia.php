<?php 
$cp = new ControllerPatologia();
$cp->editar();
$datos = $cp->buscar();
 ?>
<div class="container-fluid mt-4">

<div class="container">
    <a href="index.php?action=patologias" class="btn btn-danger">Regresar</a>
</div>
     <form action="index.php?cop=<?php echo $datos['id']; ?>" method="POST">

        <div class="row">
            <div class="col-12">
               <h4 class="text-center">Editar de patologias</h4>
           </div>
           </div>
            <div class="row">
                <div class="col-6">
                    <label>nombre</label><input type="text" name="nombre" class="form-control " value="<?php echo $datos['nombre']; ?>">
                </div>
            </div>
        <div class="row">
                <div class="col-6">
                    <label>Descripcion</label><textarea class="form-control" name="descripcion"><?php echo $datos['descripcion'];  ?></textarea>
                </div>
        </div>
        <div class="row mt-1 mb-2">
                <div class="col-12 text-center mt-3">
                    <input type="submit" name="" value="registrar" class="btn btn-danger w-50">
                </div>
        </div>              
                </form>
            </div>