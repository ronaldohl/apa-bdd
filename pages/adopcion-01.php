<?php
require('../loads.php');

if(!$_GET['id_mascota']){
    redirect('mascotas.php');
}

$id_mascota = $_GET['id_mascota'];
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
    <title>Ver Mascota Para adoptar</title>
    <?php include 'includes-head.php'?>
</head>
<body>
<?php include 'header.php'?>
<div class="container m-5">
    <div class="row">
        <div class="col">
            <h2><i class="fa fa-paw mr-3"></i>Ver Mascota Para adoptar</h2>
        </div>
        <div class="col text-right mr-5">
            <a href="/amigosproanimal/pages/mascotas.php" class="btn btn-outline-danger"> <i class="fa fa-arrow-left mr-2"></i> Regresar</a>
        </div>
    </div>
        <hr>
        <p class="text-center ">Valida los datos de la mascota a adoptar y después elige seleccionar un adoptante registrado o registrar uno nuevo.</p>
    <form action="estado-cuenta.php" method="POST">
        <label class="form-label mt-2">Nombre de la Mascota:</label>
        <div class="form-row justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-paw"></i></div>
                </div>
                <input readonly type="text" name="nombre" class="form-control" id="inlineFormInputGroup"
                    placeholder="<?php echo $datos_mascota['nombre']; ?>"
                    value="<?php echo $datos_mascota['nombre']; ?>" 
                    required="required"
                    data-validation-required-message="Por favor ingresa el nombre de la mascota" />
            </div>
        </div>
        <label class="form-label mt-2">Especie:</label>
        <div class="form-row justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-bug"></i></div>
                </div>
                <select readonly class="form-control" name="especie" id="especie" required="required"
                    data-validation-required-message="Por favor selecciona una especie">
                    <option value=""><?php echo $datos_mascota['especie']; ?></option>;                   
                </select>
            </div>
        </div>
        <label class="form-label mt-2">Detalles Especie:</label>
        <div class="form-row justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-plus-square"></i></div>
                </div>
                <input readonly type="text" name="detalles_especie" class="form-control" id="inlineFormInputGroup"
                    placeholder="<?php echo $datos_mascota['detalles_especie']; ?>"
                    value="<?php echo $datos_mascota['detalles_especie']; ?>" />
            </div>
        </div>
        <label class="form-label mt-2">Fecha de Nacimiento:</label>
        <div class="form-row justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
                </div>
                <input readonly type="date" name="fecha_nac" class="form-control" id="inlineFormInputGroup"
                    placeholder="<?php echo $datos_mascota['fecha_nac']; ?>"
                    value="<?php echo $datos_mascota['fecha_nac']; ?>"  required="required"
                    data-validation-required-message="Por favor ingresa la fecha de nacimiento" />
            </div>
        </div>
        <label class="form-label mt-2">Condición de Rescate:</label>
        <div class="form-row justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-heart"></i></div>
                </div>
                <select class="form-control" readonly name="condicion_rescate" id="centro" required="required">
                    <option value=""><?php echo $datos_mascota['condicion_rescate']; ?></option>;                    
                </select>
            </div>
        </div>
        <label class="form-label mt-2">Fecha de Desparasitación:</label>
        <div class="form-row justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-asterisk"></i></div>
                </div>
                <input readonly type="text" name="fecha_desparasitacion" class="form-control" id="inlineFormInputGroup"
                    placeholder="<?php echo $datos_mascota['fecha_desparasitacion']; ?>"
                    value="<?php echo $datos_mascota['fecha_desparasitacion']; ?>" />
            </div>
        </div>
        <label class="form-label mt-2">Fecha de Esterilización:</label>
        <div class="form-row justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-plus"></i></div>
                </div>
                <input readonly type="text" name="fecha_esterilizacion" class="form-control" id="inlineFormInputGroup"
                placeholder="<?php echo $datos_mascota['fecha_esterilizacion']; ?>"
                    value="<?php echo $datos_mascota['fecha_esterilizacion']; ?>" />
            </div>
        </div>
        <label class="form-label mt-2">Complicaciones:</label>
        <div class="form-row justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-warning"></i></div>
                </div>
                <input readonly type="text" name="complicaciones" class="form-control" id="inlineFormInputGroup"
                placeholder="<?php echo $datos_mascota['complicaciones']; ?>"
                    value="<?php echo $datos_mascota['complicaciones']; ?>" />
            </div>
        </div>
        <label class="form-label mt-2">Tratamiento:</label>
        <div class="form-row justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-flask"></i></div>
                </div>
                <input readonly type="text" name="tratamiento" class="form-control" id="inlineFormInputGroup"
                placeholder="<?php echo $datos_mascota['tratamiento']; ?>"
                    value="<?php echo $datos_mascota['tratamiento']; ?>" />
            </div>
        </div>
        <label class="form-label mt-2">Anotaciones:</label>
        <div class="form-row justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-edit"></i></div>
                </div>
                <input readonly type="text" name="anotaciones" class="form-control" id="inlineFormInputGroup"
                placeholder="<?php echo $datos_mascota['anotaciones']; ?>"
                    value="<?php echo $datos_mascota['anotaciones']; ?>" />
            </div>
        </div>
        <label class="form-label mt-2">Estatus:</label>
        <div class="form-row justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text">
                        <i class="fa fa-exclamation-circle"></i>
                    </div>
                </div>
                <select class="form-control" readonly name="estatus">
                    <option value=""><?php echo $datos_mascota['estatus']; ?></option>;                    
                </select>
            </div>
        </div>
        <label class="form-label mt-2">Centro:</label>
        <div class="form-row justify-content-center">
            <div class="input-group mb-2 text-center col-11">
                <div class="input-group-addon">
                    <div class="input-group-text"><i class="fa fa-users"></i></div>
                </div>
                <select class="form-control" readonly name="centro" id="centro" required="required"
                    data-validation-required-message="Por favor selecciona un centro de APA">
                    <option value=""><?php echo $datos_mascota['centro']; ?></option>;                    
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                
                    <a href="/amigosproanimal/pages/nueva-persona.php?adopcion=1" class="mt-2 btn btn-primary ml-5" >
                    <i class="fa fa-plus mr-2"></i>Registrar nueva persona 
                    </a>
               
            </div>
            <div class="col text-right">
                <a href="/amigosproanimal/pages/personas?adopcion=1&id_mascota=<?php echo $datos_mascota['id_mascota'] ?>" 
                    class="btn btn-info mt-2"
                ><i class="fa fa-user mr-2"></i>Seleccionar persona</a>
            </div>
        </div>
    </form>
</div>
<?php include 'includes-body.php'?>
</body>
</html>