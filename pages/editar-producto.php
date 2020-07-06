<?php
require_once('../loads.php');
// session_start();
validarSesion();
if(!$_GET['id']){
    redirect('productos.php');
}
    $id_producto = $_GET['id'];

    $datos_producto = getProducto($id_producto);

   


//echo '<pre>';
//print_r($datos_producto);
//echo '</pre>';
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
                    <form action="editar-producto.php?id=<?php echo $datos_producto['id_producto']; ?>" method="POST">
                            <label class="form-label mt-2">Nombre del Producto:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-cube"></i></div>
                                    </div>
                                    <input type="text" name="nombre" class="form-control" id="inlineFormInputGroup" 
                                    placeholder="<?php echo $datos_producto['nombre'];  ?>" 
                                    value="<?php echo $datos_producto['nombre'];  ?>" 
                                    required="required" data-validation-required-message="Por favor ingresa el nombre del producto">
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
                                    <option value="VACUNA" <?php echo($datos_producto['tipo']=='VACUNA')?'selected="selected"': ''; ?> >Vacuna</option>
                                    <option value="ALIMENTO" <?php echo($datos_producto['tipo']=='ALIMENTO')?'selected="selected"': ''; ?> >Alimento</option>
                                    </select>
                                </div>
                            </div>
                            <label class="form-label mt-2">Unidad Medida:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-plus-square"></i></div>
                                    </div>
                                    <input type="text" name="unidad_medida" class="form-control" id="inlineFormInputGroup"
                                        placeholder="<?php echo $datos_producto['unidad_medida'];  ?>" 
                                        value="<?php echo $datos_producto['unidad_medida'];  ?>" 
                                        required="required" data-validation-required-message="Por favor ingresa la unidad de medida">
                            </div>
                            </div>
                            <label class="form-label mt-2">Cantidad:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-circle-o-notch"></i></div>
                                    </div>
                                    <input type="float" name="cantidad" class="form-control" id="inlineFormInputGroup"
                                        placeholder="<?php echo $datos_producto['cantidad'];  ?>" 
                                        value="<?php echo $datos_producto['cantidad'];  ?>" 
                                        required="required" data-validation-required-message="Por favor ingresa la cantidad">
                                </div>
                            </div>
                            <label class="form-label mt-2">Descripción:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-asterisk"></i></div>
                                    </div>
                                    <input type="text" name="descripcion" class="form-control" id="inlineFormInputGroup" 
                                        placeholder="<?php echo $datos_producto['descripcion'];  ?>" 
                                        value="<?php echo $datos_producto['descripcion'];  ?>" 
                                        required="required" data-validation-required-message="Por favor alguna descripcion del producto">
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col ">
                                    <div class="text-right ">
                                        <button type="submit" class="mt-2 btn btn-primary ml-5" value="Enviar"> <i class="fa fa-floppy-o mr-2"></i> Actualizar Producto </button>
                                    </div>
                                </div>
                           </div>     
                    </form>
                </div>


<?php

if(!$_POST){

}
if($_POST){
   $producto_editado = $productoModelArray;

   $producto_editado['id_producto'] = $datos_producto['id_producto'];
   $producto_editado['centro'] = $datos_producto['centro'];
   
if($_POST['nombre']){
    $producto_editado['nombre'] = $_POST['nombre'];
}else{
    $producto_editado['nombre'] = $datos_producto['nombre'];
}

if($_POST['tipo']){
    $producto_editado['tipo'] = $_POST['tipo'];
}else{
    $producto_editado['tipo'] = $datos_producto['tipo'];
}

if($_POST['unidad_medida']){
    $producto_editado['unidad_medida'] = $_POST['unidad_medida'];
}else{
    $producto_editado['unidad_medida'] = $datos_producto['unidad_medida'];
}

if($_POST['cantidad']){
    $producto_editado['cantidad'] = $_POST['cantidad'];
}else{
    $producto_editado['cantidad'] = $datos_producto['cantidad'];
}

if($_POST['descripcion']){
    $producto_editado['descripcion'] = $_POST['descripcion'];
}else{
    $producto_editado['descripcion'] = $datos_producto['descripcion'];
}

$res = putProducto($producto_editado);


}
?>
</body>
</html>