<?php
require('../loads.php');
// session_start();
validarSesion();
if(!$_GET){
    // echo 'No GET';
     header('Location: ../index.php');
}elseif(!$_GET['id']){
     header('Location: ../index.php');
    // echo 'No GET id';
}

$id_mascota = $_GET['id'];
$datos_mascota = getMascota($id_mascota);

//  echo "<pre>";
//  print_r($datos_mascota);
//  echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mascota</title>
    <?php include 'includes-head.php'?>
</head>
<body>
<?php include 'header.php'?>
<div class="container m-5">
    <div class="row">
        <div class="col text-left">
            <h2>Editar Mascota</h2>
        </div>
    </div>
    <hr>
    <form action="editar-mascota.php?id=<?php echo $datos_mascota['id_mascota']; ?>" method="POST">
        <label class="form-label mt-2">Nombre de la Mascota:</label>
        <div class="form-row  justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-paw"></i></div>
                </div>
                <input type="text" name="nombre" class="form-control" id="inlineFormInputGroup"
                    required="required"
                    placeholder="<?php echo $datos_mascota['nombre']; ?>"
                    value="<?php echo $datos_mascota['nombre']; ?>" 
                    data-validation-required-message="Por favor ingresa el nombre de la mascota">
            </div>
        </div>
        <label class="form-label mt-2">Especie:</label>
        <div class="form-row  justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-bug"></i></div>
                </div>
                <select class="form-control" name="especie" id="especie" required="required"
                    data-validation-required-message="Por favor selecciona una especie">
                    <option value='PERRO'<?php echo ($datos_mascota['especie']=='PERRO')?'selected="selected"': ''; ?> >Perro</option>;
                    <option value='GATO' <?php echo ($datos_mascota['especie']=='GATO')?'selected="selected"': ''; ?> >Gato</option>;
                    <option value='AVE' <?php echo ($datos_mascota['especie']=='AVE')?'selected="selected"': ''; ?> >Ave</option>;
                    <option value='ROEDOR' <?php echo ($datos_mascota['especie']=='ROEDOR')?'selected="selected"': ''; ?> >Roedor</option>;
                    <option value='PEZ' <?php echo ($datos_mascota['especie']=='PEZ')?'selected="selected"': ''; ?> >Pez</option>;
                    <option value='OTRO' <?php echo ($datos_mascota['especie']=='OTRO')?'selected="selected"': ''; ?> >Otro</option>;
                </select>
            </div>
        </div>
        <label class="form-label mt-2">Detalles Especie:</label>
        <div class="form-row  justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-plus-square"></i></div>
                </div>
                <input type="text" name="detalles_especie" class="form-control" id="inlineFormInputGroup"
                    placeholder="<?php echo $datos_mascota['detalles_especie']; ?>"
                    value="<?php echo $datos_mascota['detalles_especie']; ?>" >
            </div>
        </div>
        <label class="form-label mt-2">Fecha de Nacimiento:</label>
        <div class="form-row  justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
                </div>
                <input type="date" name="fecha_nac" class="form-control" id="inlineFormInputGroup"
                    required="required"
                    placeholder="<?php echo $datos_mascota['fecha_nac']; ?>"
                    value="<?php echo $datos_mascota['fecha_nac']; ?>" 
                    data-validation-required-message="Por favor ingresa la fecha de nacimiento">
            </div>
        </div>
        <label class="form-label mt-2">Condición de Rescate:</label>
        <div class="form-row  justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-heart"></i></div>
                </div>
                <select class="form-control" name="condicion_rescate" id="centro" required="required"
                    data-validation-required-message="Por favor selecciona una condicion de rescate" required="required">                    
                    <option value='BUENA'<?php echo ($datos_mascota['condicion_rescate']=='BUENA')?'selected="selected"': ''; ?> >Buena</option>;
                    <option value='REGULAR'<?php echo ($datos_mascota['condicion_rescate']=='REGULAR')?'selected="selected"': ''; ?> >Regular</option>;
                    <option value='MALA'<?php echo ($datos_mascota['condicion_rescate']=='MALA')?'selected="selected"': ''; ?> >Mala</option>;
                </select>
            </div>
        </div>
        <label class="form-label mt-2">Fecha de Desparasitación:</label>
        <div class="form-row  justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-asterisk"></i></div>
                </div>
                <input type="date" name="fecha_desparasitacion" class="form-control" id="inlineFormInputGroup"
                placeholder="<?php echo $datos_mascota['fecha_desparasitacion']; ?>"
                    value="<?php echo $datos_mascota['fecha_desparasitacion']; ?>" >
            </div>
        </div>
        <label class="form-label mt-2">Fecha de Esterilización:</label>
        <div class="form-row  justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-plus"></i></div>
                </div>
                <input type="date" name="fecha_esterilizacion" class="form-control" id="inlineFormInputGroup"
                    placeholder="<?php echo $datos_mascota['fecha_desparasitacion']; ?>"
                    value="<?php echo $datos_mascota['fecha_desparasitacion']; ?>">
            </div>
        </div>
        <label class="form-label mt-2">Complicaciones:</label>
        <div class="form-row  justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-warning"></i></div>
                </div>
                <input type="text" name="complicaciones" class="form-control" id="inlineFormInputGroup"
                    placeholder="<?php echo $datos_mascota['complicaciones']; ?>"
                    value="<?php echo $datos_mascota['complicaciones']; ?>">
            </div>
        </div>
        <label class="form-label mt-2">Tratamiento:</label>
        <div class="form-row  justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-flask"></i></div>
                </div>
                <input type="text" name="tratamiento" class="form-control" id="inlineFormInputGroup"
                placeholder="<?php echo $datos_mascota['tratamiento']; ?>"
                    value="<?php echo $datos_mascota['tratamiento']; ?>">
            </div>
        </div>
        <label class="form-label mt-2">Anotaciones:</label>
        <div class="form-row  justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-edit"></i></div>
                </div>
                <input type="text" name="anotaciones" class="form-control" id="inlineFormInputGroup"
                placeholder="<?php echo $datos_mascota['anotaciones']; ?>"
                    value="<?php echo $datos_mascota['anotaciones']; ?>">
            </div>
        </div>
        <label class="form-label mt-2">Estatus:</label>
        <div class="form-row  justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-exclamation-circle"></i></div>
                </div>
                <select class="form-control" name="estatus" id="centro" required="required" readonly
                    data-validation-required-message="Por favor selecciona un estatus">
                    <option value=""> <?php echo $datos_mascota['estatus']; ?></option>
                </select>
            </div>
        </div>
        <label class="form-label mt-2">Centro:</label>
        <div class="form-row  justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-users"></i></div>
                </div>
                <select class="form-control" name="centro" id="centro" required="required"
                    data-validation-required-message="Por favor selecciona un centro de APA">
                    <option value='CENTRO' <?php echo ($datos_mascota['centro']=='CENTRO')?'selected="selected"': ''; ?> >Zona Centro</option>;
                    <option value='NORTE' <?php echo ($datos_mascota['centro']=='NORTE')?'selected="selected"': ''; ?>  >Zona Norte</option>;
                </select>
            </div>
        </div>
        <div class="form-row ">
            <div class="col ">
                <div class="text-right ">
                    <button type="submit" class="mt-2 btn btn-primary btn-lg ml-5" value="Enviar">Guardar <i class="fa fa-floppy-o" ></i></button>
                </div>
            </div>
        </div>
    </form>
</div>
<?php include 'includes-body.php'?>
</body>
</html>

<?php 
if($_POST){
    $mascota_editada = $mascotaModelArray;
    $mascota_editada['id_mascota'] = $datos_mascota['id_mascota'];
    $mascota_editada['id_rescate'] = $datos_mascota['id_rescate'];
    $mascota_editada['estatus'] = $datos_mascota['estatus'];

    if($_POST['nombre']){
        $mascota_editada['nombre'] = $_POST['nombre'];
    }else{
        $mascota_editada['nombre'] = $datos_mascota['nombre'];
    }

    if($_POST['especie']){
        $mascota_editada['especie'] = $_POST['especie'];
    }else{
        $mascota_editada['especie'] = $datos_mascota['especie'];
    }
    if($_POST['detalles_especie']){
        $mascota_editada['detalles_especie'] = $_POST['detalles_especie'];
    }else{
        $mascota_editada['detalles_especie'] = $datos_mascota['detalles_especie'];
    }

    if($_POST['fecha_nac']){
        $mascota_editada['fecha_nac'] = $_POST['fecha_nac'];
    }else{
        $mascota_editada['fecha_nac'] = $datos_mascota['fecha_nac'];
    }
    if($_POST['condicion_rescate']){
        $mascota_editada['condicion_rescate'] = $_POST['condicion_rescate'];
    }else{
        $mascota_editada['condicion_rescate'] = $datos_mascota['condicion_rescate'];
    }
    if($_POST['fecha_desparasitacion']){
        $mascota_editada['fecha_desparasitacion'] = $_POST['fecha_desparasitacion'];
    }else{
        $mascota_editada['fecha_desparasitacion'] = $datos_mascota['fecha_desparasitacion'];
    }
    if($_POST['fecha_esterilizacion']){
        $mascota_editada['fecha_esterilizacion'] = $_POST['fecha_esterilizacion'];
    }else{
        $mascota_editada['fecha_esterilizacion'] = $datos_mascota['fecha_esterilizacion'];
    }
    if($_POST['complicaciones']){
        $mascota_editada['complicaciones'] = $_POST['complicaciones'];
    }else{
        $mascota_editada['complicaciones'] = $datos_mascota['complicaciones'];
    }
    if($_POST['tratamiento']){
        $mascota_editada['tratamiento'] = $_POST['tratamiento'];
    }else{
        $mascota_editada['tratamiento'] = $datos_mascota['tratamiento'];
    }
    if($_POST['anotaciones']){
        $mascota_editada['anotaciones'] = $_POST['anotaciones'];
    }else{
        $mascota_editada['anotaciones'] = $datos_mascota['anotaciones'];
    }
    if($_POST['centro']){
        $mascota_editada['centro'] = $_POST['centro'];
    }else{
        $mascota_editada['centro'] = $datos_mascota['centro'];
    }
    

    $res = putMascota($mascota_editada);

    echo $res;


}

?>