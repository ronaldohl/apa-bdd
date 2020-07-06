<?php
require_once('../loads.php');
// session_start();
validarSesion();
if(!$_GET['id']){
    redirect('../index.php');
}else{
    $id_domicilio = $_GET['id'];

    // $datos_persona = getPersona($id_persona);
    // print_r($datos_persona);
    $datos_domicilio = getDomicilio($id_domicilio);
}

// echo '<pre>';
// print_r($datos_domicilio);
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
            <a href="/amigosproanimal/index.php" class="btn btn-outline-danger"><i class="fa fa-arrow-left mr-2"></i>Regresar</a>
            <hr>
        </div>
    </div>
    <form id=form class="form" accion="editar-domicilio.php?id=<?php echo $datos_domicilio['id_domicilio']; ?>" method='POST'>
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
                                    <input type="text" name="calle" class="form-control "  placeholder="<?php echo $datos_domicilio['calle']; ?>"
                                     value="<?php echo $datos_domicilio['calle']; ?>"
                                     required aria-required="true"  required="required" >
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
                                    <input type="number" min="0" max="9999" name="numero_ext" class="form-control "  
                                    value="<?php if($datos_domicilio['numero_ext']){echo $datos_domicilio['numero_ext'];} ?>"
                                    placeholder="<?php if($datos_domicilio['numero_ext']){echo $datos_domicilio['numero_ext'];} ?>">
                                </div>
                            </div>
                            <label class="form-label mt-2">Número Interior: </label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-level-down"></i></div>
                                    </div>
                                    <input type="text" name="interior" class="form-control" id="inlineFormInputGroup" 
                                    value="<?php if($datos_domicilio['interior']){echo $datos_domicilio['interior'];} ?>"
                                      placeholder="<?php if($datos_domicilio['interior']){echo $datos_domicilio['interior'];} ?>">
                                </div>
                            </div>
                            <label class="form-label mt-2">Colonia:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-location-arrow"></i></div>
                                    </div>
                                    <input type="text" name="colonia" class="form-control" id="inlineFormInputGroup"  
                                    value="<?php if($datos_domicilio['colonia']){echo $datos_domicilio['colonia'];} ?>"
                                    placeholder="<?php if($datos_domicilio['colonia']){echo $datos_domicilio['colonia'];} ?>" required="required" data-validation-required-message="Por favor ingresa nombre de la colonia">
                                </div>
                            </div>
                            <label class="form-label mt-2">Codigo Postal: <small> (Opcional)</small></label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-map-signs"></i></div>
                                    </div>
                                    <input type="text" name="cp" class="form-control" id="inlineFormInputGroup"  
                                    value="<?php if($datos_domicilio['cp']){echo $datos_domicilio['cp'];} ?>"
                                    placeholder="<?php if($datos_domicilio['cp']){echo $datos_domicilio['cp'];} ?>">
                                </div>
                            </div>
                            <label class="form-label mt-2">Municipio:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                    </div>
                                    <select class="form-control" name="municipio"  id="zona" required="required" data-validation-required-message="Por favor selecciona un municipio">             
                                  
                                  <option value='AGUASCALIENTES'<?php echo ($datos_domicilio['municipio']=='AGUASCALIENTES')?'selected="selected"': ''; ?> >AGUASCALIENTES</option>;
                                  <option value='JESUS MARIA'<?php echo ($datos_domicilio['municipio']=='JESUS MARIA')?'selected="selected"': ''; ?> >JESUS MARÍA</option>;
                                  <option value='SAN FRANCISCO DE LOS ROMO'<?php echo ($datos_domicilio['municipio']=='SAN FRANCISCO DE LOS ROMO')?'selected="selected"': ''; ?> >SAN FRANCISCO DE LOS ROMO</option>;
                            </select>
                                </div>
                            </div>
				
                                                                                    
                    
                    <div class="row ">
                    <div class="col text-right ml-3 mb-3">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o mr-2"></i>Guardar</button>
                        <hr>
                    </div>
                    </div>
                </div>
    </form>
</div>
<?php

if($_POST){
$domicilio_editado = $domicilioModelArray;
$domicilio_editado['id_domicilio'] = $datos_domicilio['id_domicilio'];  
$domicilio_editado['centro'] = $datos_domicilio['centro'];  

if($_POST['calle']){
    $domicilio_editado['calle'] = $_POST['calle'];
}else{
    $domicilio_editado['calle'] = $datos_domicilio['calle'];
}
if($_POST['numero_ext']){
    $domicilio_editado['numero_ext'] = $_POST['numero_ext'];
}else{
    $domicilio_editado['numero_ext'] = $datos_domicilio['numero_ext'];
}
if($_POST['interior']){
    $domicilio_editado['interior'] = $_POST['interior'];
}else{
    $domicilio_editado['interior'] = $datos_domicilio['interior'];
}
if($_POST['colonia']){
    $domicilio_editado['colonia'] = $_POST['colonia'];
}else{
    $domicilio_editado['colonia'] = $datos_domicilio['colonia'];
}
if($_POST['cp']){
    $domicilio_editado['cp'] = $_POST['cp'];
}else{
    $domicilio_editado['cp'] = $datos_domicilio['cp'];
}
if($_POST['municipio']){
    $domicilio_editado['municipio'] = $_POST['municipio'];
}else{
    $domicilio_editado['municipio'] = $datos_domicilio['municipio'];
}

$res = putDomicilio($domicilio_editado);

}
?>
</body>
</html>