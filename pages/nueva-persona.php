<?php
require_once('../loads.php');


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

<div class="container m-5" >
    <div class="row">
        <div class="col text-left ml-3 mb-3">
            <h3>Nuevo Persona</h3>
            <hr>
        </div>
        <div class="col text-right ml-3 mb-3">
            <a href="rescates.php" class="btn btn-outline-danger"><i class="fa fa-arrow-left mr-2"></i>Regresar</a>
            <hr>
        </div>
    </div>
    <form id=form class="form" accion="nueva-persona.php" method='POST'>
    <div class="form-group mt-3 mb-3">

    <h3 class="font-bold text-primary">Datos de la persona</h3>
                    <p class="masthead-subheading font-weight-light ">Tipo de Persona</p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fas fa-list"></i>
                                </div>
                            </div>
                            <select class="form-control" name="tipo_persona" id="zona" required>             
                             <option value='CENTRO'>ADOPTANTE</option>;
                            <option value='NORTE'>RESCATISTA</option>;
                            </select>
                        </div>
                    </div>  
                    <p class="masthead-subheading font-weight-light ">Nombre</p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-male"></i>
                                </div>
                            </div>
                            <input type="text" name="nombre" class="form-control" id="inlineFormInputGroup" placeholder="Nombre de la persona..." required="required" data-validation-required-message="Por favor ingresa el nombre de la persona">
                        </div>
                    </div>
                    <p class="masthead-subheading font-weight-light ">Apellido Paterno</p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-walking"></i>
                                </div>
                            </div>
                            <input type="text" name="apellido_paterno" class="form-control" id="inlineFormInputGroup" placeholder="Apellido paterno..." required="required" data-validation-required-message="Por favor ingresa el apellido paterno">
                        </div>
                    </div>
                    <p class="masthead-subheading font-weight-light ">Apellido Materno <small> (Opcional)</small></p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-running"></i>
                                </div>
                            </div>
                            <input type="text" name="apellido_materno" class="form-control" id="inlineFormInputGroup" placeholder="Apellido materno...">
                        </div>
                    </div>
                    <p class="masthead-subheading font-weight-light ">Fecha de Nacimiento <small> (Opcional)</small></p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                            <input type="date" name="fecha_nacimiento" class="form-control " placeholder="Fecha Nacimiento">
                        </div>
                    </div>
                    <p class="masthead-subheading font-weight-light ">Celular <small> (Opcional)</small></p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-mobile"></i>
                                </div>
                            </div>
                            <input type="text" name="apellido_materno" class="form-control" id="inlineFormInputGroup" placeholder="Telefono celular...">
                        </div>
                    </div>
                    <p class="masthead-subheading font-weight-light ">Telefono <small> (Opcional)</small></p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                            </div>
                            <input type="text" name="telefono" class="form-control" id="inlineFormInputGroup" placeholder="Telefono de casa...">
                        </div>
                    </div>
                    <p class="masthead-subheading font-weight-light ">Correo <small> (Opcional)</small> </p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <input type="text" name="correo" class="form-control" id="inlineFormInputGroup" placeholder="ej: arturolopez@gmail.com">
                        </div>
                    </div>
                    <hr>
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
                        <div class="col mr-5">
                            <div class="text-right">
                                <button type="submit" class="mt-2 btn btn-success btn-lg " value="Enviar">Registrar Rescate  <i class="fa fa-check ml-2"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
</div>
<?php

if(!$_POST){

}
?>
</body>
</html>