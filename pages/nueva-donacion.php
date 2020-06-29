<?php
require_once('../loads.php');

$datos_rescatistas = getPersonas();

foreach($datos_rescatistas as $indexItem => &$rescatista ){
    if($rescatista['tipo_persona']=='ADOPTANTE'){
        unset($datos_rescatistas[$indexItem]);
    }
}
$rescatistasObj = json_decode(json_encode((object) $datos_rescatistas), FALSE);
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
    <title>Nuevo Reporte</title>
</head>
<body>
    <?php 
        include ('header.php');
        
    ?>
<div class="container m-5">
                    <form action="estado-cuenta.php" method="POST">
                        <label class="form-label mt-2">Centro:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-users"></i></div>
                                    </div>
                                    <select class="custom-select" name="centro" id="centro" required="required" data-validation-required-message="Por favor selecciona un centro de APA">             
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
                                    <select class="custom-select" name="tipo_donacion" id="donacion" required="required" data-validation-required-message="Por favor selecciona un tipo de donacion">             
                                  <option value='DINERO'>Dinero</option>;
                                <option value='ESPECIE'>Especie</option>;
                            </select>
                                </div>
                            </div>
                            <label class="form-label mt-2">Monto:</label>
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
                            <div class="form-row ">
                                <div class="col ">
                                    <div class="text-right ">
                                        <button type="submit" class="mt-2 btn btn-success ml-5" value="Enviar">Consultar Saldo ></button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>


</body>
</html>