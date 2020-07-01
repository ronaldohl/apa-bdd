<?php
require_once('../loads.php');

if(!$_GET['id']){
    redirect('../index.php');
}else{
    $id_domicilio = $_GET['id'];

    // $datos_persona = getPersona($id_persona);
    // print_r($datos_persona);
    $datos_domicilio = getDomicilio($id_domicilio);
}

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
    <title>Ver Domicilio</title>
</head>
<body>
    <?php 
        include ('header.php');
        
    ?>

<div class="container m-5" >
    <div class="row">
        <div class="col text-left ml-3 mb-3">
            <h3>Ver Domicilio</h3>
            <hr>
        </div>
        <div class="col text-right ml-3 mb-3">
            <a href="./index.php" class="btn btn-outline-danger"><i class="fa fa-arrow-left mr-2"></i>Regresar</a>
            <hr>
        </div>
    </div>
    <form id=form class="form" accion="nueva-persona.php" method='POST'>
    <div class="form-group mt-3 mb-3">

   
                    <h3 class="font-bold text-primary">Dirección</h3>
                    <label class="form-label mt-2">Nombre de la calle:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text">
                                            <i class="fa fa-home"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="calle" class="form-control " readonly placeholder="<?php echo $datos_domicilio['calle']; ?>" required aria-required="true"  required="required" >
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
                                    <input type="number" min="0" max="9999" name="numero_ext" class="form-control " readonly placeholder="<?php if($datos_domicilio['numero_ext']){echo $datos_domicilio['numero_ext'];} ?>">
                                </div>
                            </div>
                            <label class="form-label mt-2">Número Interior: </label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-level-down"></i></div>
                                    </div>
                                    <input type="text" name="interior" class="form-control" id="inlineFormInputGroup" readonly  placeholder="<?php if($datos_domicilio['interior']){echo $datos_domicilio['interior'];} ?>">
                                </div>
                            </div>
                            <label class="form-label mt-2">Colonia:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-location-arrow"></i></div>
                                    </div>
                                    <input type="text" name="colonia" class="form-control" id="inlineFormInputGroup" readonly placeholder="<?php if($datos_domicilio['colonia']){echo $datos_domicilio['colonia'];} ?>" required="required" data-validation-required-message="Por favor ingresa nombre de la colonia">
                                </div>
                            </div>
                            <label class="form-label mt-2">Codigo Postal: <small> (Opcional)</small></label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-map-signs"></i></div>
                                    </div>
                                    <input type="text" name="cp" class="form-control" id="inlineFormInputGroup" readonly placeholder="<?php if($datos_domicilio['cp']){echo $datos_domicilio['cp'];} ?>">
                                </div>
                            </div>
                            <label class="form-label mt-2">Municipio:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                    </div>
                                    <select class="form-control" name="municipio" readonly id="zona" required="required" data-validation-required-message="Por favor selecciona un municipio">             
                                  <option value=''><?php if($datos_domicilio['municipio']){echo $datos_domicilio['municipio'];} ?></option>;
                            </select>
                                </div>
                            </div>
				
                                                                                    
                    
                    <div class="row ">
                    <div class="col text-right ml-3 mb-3">
            <a href="../index.php" class="btn btn-outline-danger"><i class="fa fa-arrow-left mr-2"></i>Regresar</a>
            <hr>
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