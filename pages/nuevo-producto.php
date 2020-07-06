<?php
require_once('../loads.php');
// session_start();
validarSesion();

// echo '<pre>';
// print_r($datos_rescatistas);
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
                    <form action="nuevo-producto.php" method="POST">
                            <label class="form-label mt-2">Nombre del Producto:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-cube"></i></div>
                                    </div>
                                    <input type="text" name="nombre" class="form-control" id="inlineFormInputGroup" placeholder="Nombre del producto..." required="required" data-validation-required-message="Por favor ingresa el nombre del producto">
                                </div>
                            </div>
                            <label class="form-label mt-2">Tipo de Producto:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-cubes"></i></div>
                                    </div>
                                    <!-- <input type="text" name="tipo" class="form-control" id="inlineFormInputGroup" placeholder="Tipo del producto..." required="required" data-validation-required-message="Por favor ingresa un tipo de producto"> -->
                                    <select  name="tipo" class="form-control" id="inlineFormInputGroup" placeholder="Tipo del producto..." required="required" data-validation-required-message="Por favor ingresa un tipo de producto">
                                    <option value="VACUNA">Vacuna</option>
                                    <option value="ALIMENTO">Alimento</option>
                                    </select>
                                </div>
                            </div>
                            <label class="form-label mt-2">Unidad Medida:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-plus-square"></i></div>
                                    </div>
                                    <input type="text" name="unidad_medida" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa la unidad de medida..." required="required" data-validation-required-message="Por favor ingresa la unidad de medida">
                            </div>
                            </div>
                            <label class="form-label mt-2">Cantidad:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-circle-o-notch"></i></div>
                                    </div>
                                    <input type="float" name="cantidad" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa la Cantidad..." required="required" data-validation-required-message="Por favor ingresa la cantidad">
                                </div>
                            </div>
                            <label class="form-label mt-2">Descripción:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-asterisk"></i></div>
                                    </div>
                                    <input type="text" name="descripcion" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa alguna descripcion del producto..." required="required" data-validation-required-message="Por favor alguna descripcion del producto">
                                </div>
                            </div>
                            
                            
				<label class="form-label mt-2">Centro:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-users"></i></div>
                                    </div>
                                    <select class="form-control" name="centro" id="centro" required="required" data-validation-required-message="Por favor selecciona un centro de APA">             
                                  <option value='CENTRO'>Zona Centro</option>;
                                <option value='NORTE'>Zona Norte</option>;
                            </select>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col ">
                                    <div class="text-right ">
                                        <button type="submit" class="mt-2 btn btn-success ml-5" value="Enviar">Registrar Producto ></button>
                                    </div>
                                </div>
                           </div>     
                    </form>
                </div>


<?php

if(!$_POST){

}
if($_POST){
    $datos_producto = $productoModelArray;

    if($_POST['nombre']){
        $datos_producto['nombre'] = $_POST['nombre'];
    }
    if($_POST['tipo']){
        $datos_producto['tipo'] = $_POST['tipo'];
    }
    if($_POST['unidad_medida']){
        $datos_producto['unidad_medida'] = $_POST['unidad_medida'];
    }
    if($_POST['cantidad']){
        $datos_producto['cantidad'] = $_POST['cantidad'];
    }
    if($_POST['descripcion']){
        $datos_producto['descripcion'] = $_POST['descripcion'];
    }
    if($_POST['centro']){
        $datos_producto['centro'] = $_POST['centro'];
    }
     //echo '<pre>';   
     //print_r($_POST);
     //echo '</pre>';   

     $res = postProducto($datos_producto);

     print_r($res);
}
?>
</body>
</html>