<?php 
$cm = new controllerMedico();
$cm->registrarMedicos();
 ?>
<div class="container-fluid mt-4">

<div class="container">
    <a href="index.php?action=medicos" class="btn btn-danger">Regresar</a>
</div>

                <form action="index.php?action=registro_medicos" method="POST">

                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-center">Registro de medicos</h4>
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
                         <label>segundo nombre</label><input type="text" name="nombre2" class="form-control ">
                        </div>
                         <div class="col-6">
                         <label>apellido</label><input type="text" name="apellido" class="form-control ">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                         <label>segundo apellido</label><input type="text" name="apellido2" class="form-control ">
                        </div>
                         <div class="col-6">
                         <label>fecha de nacimiento</label><input type="date" name="fecha" class="form-control">   
                        </div>
                    </div>
                    <div class="row mt-2">
                 
                         <div class="col-6">
                         <label>telefono</label>              
                         <div class="row">
                        <div class="col-3">
                         <select name="codigo" class="form-control">
                         <option value="-">-</option>
                         <option value="0416">0416</option>
                         <option value="0426">0426</option>
                         <option value="0414">0414</option>
                         <option value="0424">0424</option>
                         <option value="0412">0412</option>                
                        </select>
                        </div>
                        <div class="col-9">
                        <input type="text" name="telefono" class="form-control ">
                       </div>               
                        </div>
                        </div>
                        <div class="col-6">
                        <label>sexo</label><select class="form-control mt-2" name="sexo" id="sexo">
                          <option value="MASCULINO">MASCULINO</option>
                          <option value="FEMENINO">FEMENINO</option>
                        </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                         <div class="col-6">
                         <label>direccion</label><input type="text" name="direccion" class="form-control ">
                        </div>
                    </div>
                    <div class="row mt-1 mb-2">
                        <div class="col-12 text-center mt-3">
                            <input type="submit" name="" value="registrar" class="btn btn-danger w-50">
                        </div>
                    </div>              
                </form>
            </div>