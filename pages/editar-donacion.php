<?php
require_once('../loads.php');
// session_start();
validarSesion();
if(!$_GET['id']){
    redirect('donaciones.php');
}
$id_donacion = $_GET['id'];

$datos_donacion = getDonacion($id_donacion);
$datos_domicilio = getDomicilio($datos_donacion['id_domicilio']);
 // echo '<pre>';
 // print_r($datos_donacion);
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
    <title>Nuevo Donacion</title>
</head>
<body>
    <?php 
        include ('header.php');
        
    ?>
<div class="container m-5">
                    <form action="nueva-donacion.php" method="POST">
                        <label class="form-label mt-2">Centro:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-users"></i></div>
                                    </div>
                                    <select class="form-control" name="centro" id="centro" required="required" data-validation-required-message="Por favor selecciona un centro de APA">             
                                  <option value='CENTRO' <?php echo ($datos_donacion['centro']=='CENTRO')?'selected="selected"': ''; ?> >Zona Centro</option>;
                                <option value='NORTE' <?php echo ($datos_donacion['centro']=='NORTE')?'selected="selected"': ''; ?>>Zona Norte</option>;
                            </select>
                                </div>
                            </div>
                            <label class="form-label mt-2">Fecha de Donación:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
                                    </div>
                                    <input type="date" name="fecha_donacion" class="form-control"                                    
                                    value="<?php echo $datos_donacion['fecha_donacion']; ?>"
                                    >
                                </div>
                            </div>
                            <label class="form-label mt-2">Nombre del Donante:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                                    </div>
                                    <input type="text" name="nombre_donante" class="form-control" id="inlineFormInputGroup" 
                                    placeholder="<?php echo $datos_donacion['nombre_donante']; ?> "
                                    value="<?php echo $datos_donacion['nombre_donante']; ?> "
                                    required="required" data-validation-required-message="Por favor ingresa nombre de la persona donante">
                                </div>
                            </div>
                            <label class="form-label mt-2">RFC:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-plus-square"></i></div>
                                    </div>
                                    <input type="text" name="rfc" class="form-control" id="inlineFormInputGroup" 
                                    placeholder="<?php echo $datos_donacion['rfc']; ?> "
                                    value="<?php echo $datos_donacion['rfc']; ?> " 
                                    required="required" data-validation-required-message="Por favor ingresa el RFC de la persona donante">
                                </div>
                            </div>
                            <label class="form-label mt-2">Telefono:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-phone"></i></div>
                                    </div>
                                    <input type="tel" name="telefono" class="form-control" id="inlineFormInputGroup" 
                                    placeholder="<?php echo $datos_donacion['telefono']; ?> "
                                    value="<?php echo $datos_donacion['telefono']; ?> " 
                                    required="required" data-validation-required-message="Por favor ingresa un telefono">
                                </div>
                            </div>
                             <label class="form-label mt-2">Correo Electronico:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                    </div>
                                    <input type="text" name="correo" class="form-control" id="inlineFormInputGroup" 
                                    placeholder="<?php echo $datos_donacion['correo']; ?> "
                                    value="<?php echo $datos_donacion['correo']; ?> "
                                    required="required" data-validation-required-message="Por favor ingresa un correo">
                                </div>
                            </div>
                            <label class="form-label mt-2">Tipo de donación:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-heart"></i></div>
                                    </div>
                                    <select class="form-control" name="tipo_donacion" id="donacion" required="required" data-validation-required-message="Por favor selecciona un tipo de donacion">             
                                  <option value='DINERO' <?php echo ($datos_donacion['tipo_donacion']=='DINERO')?'selected="selected"': ''; ?> >Dinero</option>;
                                <option value='ESPECIE' <?php echo ($datos_donacion['tipo_donacion']=='ESPECIE')?'selected="selected"': ''; ?> >Especie</option>;
                            </select>
                                </div>
                            </div>
                            <label class="form-label mt-2">Monto: <small>(Solo si aplica)</small></label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-money"></i></div>
                                    </div>
                                    <input type="float" name="monto" class="form-control" id="inlineFormInputGroup" 
                                    placeholder="<?php echo $datos_donacion['monto']; ?> "
                                    value="<?php echo $datos_donacion['monto']; ?> "
                                    >
                                </div>
                            </div>
                            <label class="form-label mt-2">Descripción de la donación:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-edit"></i></div>
                                    </div>
                                    <input type="text" name="descripcion" class="form-control" id="inlineFormInputGroup" 
                                    placeholder="<?php echo $datos_donacion['descripcion']; ?> "
                                    value="<?php echo $datos_donacion['descripcion']; ?> "
                                    >
                                </div>
                            </div>
                            <hr>
                            <div class="fomr-row mt-3">
                                <div class="col">
                                    <h3 class="font-bold text-primary text-left">Dirección</h3>
                                </div>
                                <div class="col text-right">
                                    <label for="">Opciones Domicilio:</label>
                                    <a class="btn btn-primary " href="ver-domicilio.php?id=<?php echo $datos_domicilio['id_domicilio']; ?>" > <i class="fa fa-eye" ></i></a>
                                    <a class="btn btn-info " href="editar-domicilio.php?id=<?php echo $datos_domicilio['id_domicilio']; ?>" > <i class="fa fa-edit" ></i></a>
                                    <a class="btn btn-danger " href="borrar.php?dato=domicilio&id=<?php echo $datos_domicilio['id_domicilio']; ?>" > <i class="fas fa-trash" ></i></a>                                
                                </div>
                            </div>
                    <label class="form-label mt-2">Nombre de la calle:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text">
                                            <i class="fa fa-home"></i>
                                        </div>
                                    </div>
                                    <input readonly type="text" name="calle" class="form-control " 
                                    placeholder="<?php echo $datos_domicilio['calle']; ?>" 
                                    value="<?php echo $datos_domicilio['calle']; ?>" 
                                    required aria-required="true" pattern="[A-Za-z ]{1,100}" title="Sólo letras Máximo 100" required="required" data-validation-required-message="Por favor ingresa el nombre de la calle.">
                                </div>
                            </div>
                            <label class="form-label mt-2">Numero exterior:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text">
                                            <i class="fa fa-building"></i>
                                        </div>
                                    </div>
                                    <input readonly type="number" min="0" max="9999" name="numero_ext" class="form-control " 
                                    placeholder="<?php echo $datos_domicilio['numero_ext']; ?>" 
                                    value="<?php echo $datos_domicilio['numero_ext']; ?>"
                                    >
                                </div>
                            </div>
                            <label class="form-label mt-2">Número Interior:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-level-down"></i></div>
                                    </div>
                                    <input readonly type="text" name="interior" class="form-control" id="inlineFormInputGroup" 
                                    placeholder="<?php echo $datos_domicilio['interior']; ?>" 
                                    value="<?php echo $datos_domicilio['interior']; ?>" 
                                    >
                                </div>
                            </div>
                            <label class="form-label mt-2">Colonia:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-location-arrow"></i></div>
                                    </div>
                                    <input readonly type="text" name="colonia" class="form-control" id="inlineFormInputGroup" 
                                    placeholder="<?php echo $datos_domicilio['colonia']; ?>" 
                                    value="<?php echo $datos_domicilio['colonia']; ?>" 
                                    required="required" data-validation-required-message="Por favor ingresa nombre de la colonia">
                                </div>
                            </div>
                            <label class="form-label mt-2">Codigo Postal:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-map-signs"></i></div>
                                    </div>
                                    <input readonly type="text" name="cp" class="form-control" id="inlineFormInputGroup" 
                                    placeholder="<?php echo $datos_domicilio['cp']; ?>" 
                                    value="<?php echo $datos_domicilio['cp']; ?>" 
                                    >
                                </div>
                            </div>
                            <label class="form-label mt-2">Municipio:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                    </div>
                                    <select readonly class="form-control" name="municipio" id="zona" required="required" data-validation-required-message="Por favor selecciona un municipio">             
                                  <option value=''><?php echo $datos_domicilio['municipio']; ?></option>;                                
                            </select>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col ">
                                    <div class="text-right ">
                                        <button type="submit" class="mt-2 btn btn-primary ml-5" value="Enviar"> <i class="fa fa-floppy-o mr-2"></i> Actualizar Datos Donación </button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>


</body>
</html>

<?php

if($_POST){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';



    $donacion_editada = $donacionModelArray;

    $id_domicilio = $datos_domicilio['id_domicilio'];
    
    $donacion_editada['id_domicilio'] = $id_domicilio;
    /********VERIFICANDO POST DE DONACION */

    if($_POST['centro']){
        $donacion_editada['centro'] = $_POST['centro'];
    }else{
        $donacion_editada['centro'] = $datos_donacion['centro'];
    }

    if($_POST['fecha_donacion']){
        $donacion_editada['fecha_donacion'] = $_POST['fecha_donacion'];
    }else{
        $donacion_editada['fecha_donacion'] = $datos_donacion['fecha_donacion'];
    }
    if($_POST['nombre_donante']){
        $donacion_editada['nombre_donante'] = $_POST['nombre_donante'];
    }else{
        $donacion_editada['nombre_donante'] = $datos_donacion['nombre_donante'];
    }

    if($_POST['rfc']){
        $donacion_editada['rfc'] = $_POST['rfc'];
    }else{
        $donacion_editada['rfc'] = $datos_donacion['rfc'];
    }

    if($_POST['rfc']){
        $donacion_editada['rfc'] = $_POST['rfc'];
    }else{
        $donacion_editada['rfc'] = $datos_donacion['rfc'];
    }

    if($_POST['telefono']){
        $donacion_editada['telefono'] = $_POST['telefono'];
    }else{
        $donacion_editada['telefono'] = $datos_donacion['telefono'];
    }

    if($_POST['correo']){
        $donacion_editada['correo'] = $_POST['correo'];
    }else{
        $donacion_editada['correo'] = $datos_donacion['correo'];
    }
    if($_POST['tipo_donacion']){
        $donacion_editada['tipo_donacion'] = $_POST['tipo_donacion'];
    }else{
        $donacion_editada['tipo_donacion'] = $datos_donacion['tipo_donacion'];
    }
    
    if($_POST['monto']){
        $donacion_editada['monto'] = $_POST['monto'];
    }else{
        $donacion_editada['monto'] = $datos_donacion['monto'];
    }

    if($_POST['descripcion']){
        $donacion_editada['descripcion'] = $_POST['descripcion'];
    }else{
        $donacion_editada['descripcion'] = $datos_donacion['descripcion'];
    }

    $res_donacion = putDonacion($donacion_editada);
}


?>