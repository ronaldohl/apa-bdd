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
                                  <option value='CENTRO'>Zona Centro</option>;
                                <option value='NORTE'>Zona Norte</option>;
                            </select>
                                </div>
                            </div>
                            <label class="form-label mt-2">Fecha de Donación:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
                                    </div>
                                    <input type="date" name="fecha_donacion" class="form-control" id="inlineFormInputGroup" placeholder="Fecha de donacion">
                                </div>
                            </div>
                            <label class="form-label mt-2">Nombre del Donante:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-user"></i></div>
                                    </div>
                                    <input type="text" name="nombre_donante" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa el nombre del donante..." required="required" data-validation-required-message="Por favor ingresa nombre de la persona donante">
                                </div>
                            </div>
                            <label class="form-label mt-2">RFC:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-plus-square"></i></div>
                                    </div>
                                    <input type="text" name="rfc" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa el RFC..." required="required" data-validation-required-message="Por favor ingresa el RFC de la persona donante">
                                </div>
                            </div>
                            <label class="form-label mt-2">Telefono:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-phone"></i></div>
                                    </div>
                                    <input type="tel" name="telefono" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa un telefono..." required="required" data-validation-required-message="Por favor ingresa un telefono">
                                </div>
                            </div>
                             <label class="form-label mt-2">Correo Electronico:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                    </div>
                                    <input type="text" name="correo" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa el correo electronico..." required="required" data-validation-required-message="Por favor ingresa un correo">
                                </div>
                            </div>
                            <label class="form-label mt-2">Tipo de donación:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-heart"></i></div>
                                    </div>
                                    <select class="form-control" name="tipo_donacion" id="donacion" required="required" data-validation-required-message="Por favor selecciona un tipo de donacion">             
                                  <option value='DINERO'>Dinero</option>;
                                <option value='ESPECIE'>Especie</option>;
                            </select>
                                </div>
                            </div>
                            <label class="form-label mt-2">Monto: <small>(Solo si aplica)</small></label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-money"></i></div>
                                    </div>
                                    <input type="float" name="monto" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa el monto de la donación...">
                                </div>
                            </div>
                            <label class="form-label mt-2">Descripción de la donación:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-edit"></i></div>
                                    </div>
                                    <input type="text" name="descripcion" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa una descripción de la donación...">
                                </div>
                            </div>
                            <h3 class="font-bold text-primary">Dirección</h3>
                    <label class="form-label mt-2">Nombre de la calle:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text">
                                            <i class="fa fa-home"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="calle" class="form-control " placeholder="Calle..." required aria-required="true" pattern="[A-Za-z ]{1,100}" title="Sólo letras Máximo 100" required="required" data-validation-required-message="Por favor ingresa el nombre de la calle.">
                                </div>
                            </div>
                            <label class="form-label mt-2">Numero exterior: <small> (Opcional)</small></label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text">
                                            <i class="fa fa-building"></i>
                                        </div>
                                    </div>
                                    <input type="number" min="0" max="9999" name="numero_ext" class="form-control " placeholder="Numero">
                                </div>
                            </div>
                            <label class="form-label mt-2">Número Interior: <small> (Opcional)</small></label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-level-down"></i></div>
                                    </div>
                                    <input type="text" name="interior" class="form-control" id="inlineFormInputGroup" placeholder="Número interior">
                                </div>
                            </div>
                            <label class="form-label mt-2">Colonia:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-location-arrow"></i></div>
                                    </div>
                                    <input type="text" name="colonia" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa la colonia..." required="required" data-validation-required-message="Por favor ingresa nombre de la colonia">
                                </div>
                            </div>
                            <label class="form-label mt-2">Codigo Postal: <small> (Opcional)</small></label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-map-signs"></i></div>
                                    </div>
                                    <input type="text" name="cp" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa el codigo postal...">
                                </div>
                            </div>
                            <label class="form-label mt-2">Municipio:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                    </div>
                                    <select class="form-control" name="municipio" id="zona" required="required" data-validation-required-message="Por favor selecciona un municipio">             
                                  <option value='AGUASCALIENTES'>Aguascalientes</option>;
                                <option value='JESUS MARIA'>Jesus María</option>;
                                <option value='SAN FRANCISCO DE LOS ROMO'>San Francisco de los Romo</option>;
                            </select>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col ">
                                    <div class="text-right ">
                                        <button type="submit" class="mt-2 btn btn-success ml-5" value="Enviar"> <i class="fa fa-check mr-2"></i> Registrar Donación </button>
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



    $datos_donacion = $donacionModelArray;
    $datos_domicilio = $domicilioModelArray;

    if($_POST['centro']){
        $datos_domicilio['centro'] = $_POST['centro'];
    }else{
        $datos_domicilio['centro'] = 'CENTRO';
    }
    if($_POST['calle']){
        $datos_domicilio['calle'] = $_POST['calle'];
    }else{
        $datos_domicilio['calle'] = ' ';
    }
    if($_POST['numero_ext']){
        $datos_domicilio['numero_ext'] = $_POST['numero_ext'];
    }else{
        $datos_domicilio['numero_ext'] = 'SN';
    }
    if($_POST['interior']){
        $datos_domicilio['interior'] = $_POST['interior'];
    }else{
        $datos_domicilio['interior'] = ' ';
    }
    if($_POST['colonia']){
        $datos_domicilio['colonia'] = $_POST['colonia'];
    }else{
        $datos_domicilio['colonia'] = ' ';
    }
    if($_POST['cp']){
        $datos_domicilio['cp'] = $_POST['cp'];
    }else{
        $datos_domicilio['cp'] = ' ';
    }
    if($_POST['municipio']){
        $datos_domicilio['municipio'] = $_POST['municipio'];
    }else{
        $datos_domicilio['municipio'] = 'AGUASCALIENTES';
    }

    $res_domicilio = postDomicilio($datos_domicilio);
    echo'RES:DOM';
    echo '<pre>';
    print_r($res_domicilio);
    echo '</pre>';


    $id_domicilio = $res_domicilio['id_domicilio'];

    
    
    
    $datos_donacion['id_domicilio'] = $id_domicilio;
    /********VERIFICANDO POST DE DONACION */

    if($_POST['centro']){
        $datos_donacion['centro'] = $_POST['centro'];
    }else{
        $datos_donacion['centro'] = 'CENTRO';
    }

    if($_POST['fecha_donacion']){
        $datos_donacion['fecha_donacion'] = $_POST['fecha_donacion'];
    }else{
        $datos_donacion['fecha_donacion'] = '';
    }
    if($_POST['nombre_donante']){
        $datos_donacion['nombre_donante'] = $_POST['nombre_donante'];
    }else{
        $datos_donacion['nombre_donante'] = 'ANONIMO';
    }

    if($_POST['rfc']){
        $datos_donacion['rfc'] = $_POST['rfc'];
    }else{
        $datos_donacion['rfc'] = 'XAXX010101000';
    }

    if($_POST['rfc']){
        $datos_donacion['rfc'] = $_POST['rfc'];
    }else{
        $datos_donacion['rfc'] = 'XAXX010101000';
    }

    if($_POST['telefono']){
        $datos_donacion['telefono'] = $_POST['telefono'];
    }else{
        $datos_donacion['telefono'] = '';
    }

    if($_POST['correo']){
        $datos_donacion['correo'] = $_POST['correo'];
    }else{
        $datos_donacion['correo'] = 'hola@apa.com';
    }
    if($_POST['tipo_donacion']){
        $datos_donacion['tipo_donacion'] = $_POST['tipo_donacion'];
    }else{
        $datos_donacion['tipo_donacion'] = 'ESPECIE';
    }
    
    if($_POST['monto']){
        $datos_donacion['monto'] = $_POST['monto'];
    }else{
        $datos_donacion['monto'] = 'NA';
    }

    if($_POST['descripcion']){
        $datos_donacion['descripcion'] = $_POST['descripcion'];
    }else{
        $datos_donacion['descripcion'] = ' ';
    }

    $res_donacion = postDonacion($datos_donacion);
}


?>