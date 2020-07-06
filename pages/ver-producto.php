<?php
require_once('../loads.php');
// session_start();
validarSesion();
if(!$_GET['id']){
    redirect('productos.php');
}

$id_producto = $_GET['id'];

$datos_producto = getProducto($id_producto);

// echo '<pre>';
// print_r($datos_producto);
// echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php 
      include('includes-head.php')
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Persona</title>
</head>
<body>
    <?php 
        include ('header.php');
        
    ?>
    <div class="container m-5">
    <hr>
        <div class="row">
            <div class="col">
             <h3> Ver Producto </h3>
            </div>
            <div class="col text-right">
                <a href="inventario.php" class="btn btn-info" ><i class="fa fa-arrow-circle-left mr-2"></i>Regresar</a>
            </div>
        </div>
    <hr>
                    <form action="" method="POST">
                            <label class="form-label mt-2">Nombre del Producto:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-cube"></i></div>
                                    </div>
                                    <input  readonly type="text" name="nombre" class="form-control" id="inlineFormInputGroup"
                                     placeholder="<?php echo $datos_producto['nombre']; ?>" 
                                     value="<?php echo $datos_producto['nombre']; ?>" 
                                     required="required" data-validation-required-message="Por favor ingresa el nombre del producto">
                                </div>
                            </div>
                            <label class="form-label mt-2">Tipo de Producto:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-cubes"></i></div>
                                    </div>
                                    <!-- <input  readonly type="text" name="tipo" class="form-control" id="inlineFormInputGroup" placeholder="Tipo del producto..." required="required" data-validation-required-message="Por favor ingresa un tipo de producto"> -->
                                    <select readonly  name="tipo" class="form-control" id="inlineFormInputGroup" placeholder="Tipo del producto..." required="required" data-validation-required-message="Por favor ingresa un tipo de producto">
                                    <option value=""><?php echo $datos_producto['tipo']; ?></option>
                                    
                                    </select>
                                </div>
                            </div>
                            <label class="form-label mt-2">Unidad Medida:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-plus-square"></i></div>
                                    </div>
                                    <input  readonly type="text" name="unidad_medida" class="form-control" id="inlineFormInputGroup" 
                                    placeholder="<?php echo $datos_producto['unidad_medida']; ?>" 
                                     value="<?php echo $datos_producto['unidad_medida']; ?>" 
                                     required="required" data-validation-required-message="Por favor ingresa la unidad de medida">
                            </div>
                            </div>
                            <label class="form-label mt-2">Cantidad:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-circle-o-notch"></i></div>
                                    </div>
                                    <input  readonly type="float" name="cantidad" class="form-control" id="inlineFormInputGroup" 
                                    placeholder="<?php echo $datos_producto['cantidad']; ?>" 
                                     value="<?php echo $datos_producto['cantidad']; ?>" 
                                    required="required" data-validation-required-message="Por favor ingresa la cantidad">
                                </div>
                            </div>
                            <label class="form-label mt-2">Descripción:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-asterisk"></i></div>
                                    </div>
                                    <input  readonly type="text" name="descripcion" class="form-control" id="inlineFormInputGroup" 
                                    placeholder="<?php echo $datos_producto['descripcion']; ?>" 
                                     value="<?php echo $datos_producto['descripcion']; ?>" 
                                    required="required" data-validation-required-message="Por favor alguna descripcion del producto">
                                </div>
                            </div>
                            
                            
				<label class="form-label mt-2">Centro:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-users"></i></div>
                                    </div>
                                    <select readonly class="form-control" name="centro" id="centro" required="required" data-validation-required-message="Por favor selecciona un centro de APA">             
                                    <option value=""><?php echo $datos_producto['centro']; ?></option>
                            </select>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col ">
                                    <div class="text-right ">
                                        <a href="inventario.php"  class="mt-2 btn btn-info ml-5" value="Enviar"> <i class="fa fa-arrow-circle-left mr-2"></i> Regresar</a>
                                    </div>
                                </div>
                           </div>     
                    </form>
                </div>


<?php



?>
</body>
</html>