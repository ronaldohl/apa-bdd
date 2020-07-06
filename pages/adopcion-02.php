<?php
require_once('../loads.php');

if(!$_GET){
    redirect('adopciones.php');
}


if($_GET){
    if($_GET['id_mascota'] && $_GET['persona']){
        $id_mascota = $_GET['id_mascota'];
        $id_persona = $_GET['persona'];

        $datos_persona = getPersona($id_persona);
        $datos_mascota = getMascota($id_mascota);
    }
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
    <title>Nueva Adopcion</title>
</head>
<body>
    <?php 
        include ('header.php');
        
    ?>
<div class="container m-5">
    <div class="row">
        <div class="col">
            <h3>Registrar Nueva Adopción</h3>
        </div>
        <div class="col">
        
        </div>
    </div>
        <hr>    
                    <form action="adopcion-02.php?persona=<?php echo $id_persona;?>&id_mascota=<?php echo $id_mascota; ?>" method="POST">
                    <h3 class="font-bold mt-2">Mascota:</h3>
                            <div class="form-row  justify-content-center">
                                <div class="col ml-5">
                                    <h5>Mascota: </h5>
                                    <p><?php echo $datos_mascota['nombre']; ?></p>
                                </div>
                                <div class="col">
                                    <h5>Especie:</h5>
                                    <p><?php echo $datos_mascota['especie']; ?></p>
                                </div>
                                <div class="col">
                                    <h5>Detalles Especie:</h5>
                                    <p><?php echo $datos_mascota['detalles_especie']; ?></p>
                                </div>
                            </div>
                            <hr>    
                    <h3 class="font-bold mt-2">Adoptante:</h3>
                            <div class="form-row  justify-content-center">
                                <div class="col ml-5">
                                    <h5>Nombre: </h5>
                                    <p><?php echo $datos_persona['nombre'] . ' '. $datos_persona['apellido_paterno'];   ?></p>
                                </div>
                                <div class="col">
                                    <h5>Celular:</h5>
                                    <p><?php echo $datos_persona['celular']; ?></p>
                                </div>
                                <div class="col">
                                    <h5>Correo:</h5>
                                    <p><?php echo $datos_persona['correo']; ?> </p>
                                </div>
                            </div>
                            <hr>
                            <h3 class="font-bold mt-2">Datos Generales Adopción:</h3>    
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
                            <label class="form-label mt-2">Fecha de Adopcion:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
                                    </div>
                                    <input type="date" name="fecha_adopcion" class="form-control" id="inlineFormInputGroup" placeholder="Fecha de donacion">
                                </div>
                            </div>
                            <label class="form-label mt-2">Anotaciones:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-bars"></i></div>
                                    </div>
                                    <input type="text" name="anotaciones" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa anotaciones generales de la adopcion">
                                </div>
                            </div>                                                        
                            <label class="form-label mt-2">Tipo de adopción:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-heart"></i></div>
                                    </div>
                                    <select class="form-control" name="tipo" id="donacion" required="required" data-validation-required-message="Por favor selecciona un tipo de adopcion">             
                                  <option value='TEMPORAL' >Temporal</option>;
                                <option value='DEFINITIVA' selected="selected">Definitiva</option>;
                            </select>
                                </div>
                            </div>
                            
                            <div class="form-row ">
                                <div class="col ">
                                    <div class="text-right ">
                                        <button type="submit" class="mt-2 btn btn-success ml-5" value="Enviar"> <i class="fa fa-check mr-2"></i> Registrar Adopción </button>
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

    $datos_adopcion = $adopcionModelArray;

    $datos_adopcion['id_persona'] = $id_persona;
    $datos_adopcion['id_mascota'] = $id_mascota;
    if($_POST['tipo']=='TEMPORAL'){
        $datos_mascota['estatus']='ADOPCION-TEMPORAL';
    }elseif($_POST['tipo']=='DEFINITIVA'){
        $datos_mascota['estatus']='ADOPCION-DEFINITIVA';
    }

    putMascota($datos_mascota);

    if($_POST['tipo']){
        $datos_adopcion['tipo'] = $_POST['tipo'];
    }
    if($_POST['fecha_adopcion']){
        $datos_adopcion['fecha_adopcion'] = $_POST['fecha_adopcion'];
    }
    if($_POST['anotaciones']){
        $datos_adopcion['anotaciones'] = $_POST['anotaciones'];
    }
    if($_POST['centro']){
        $datos_adopcion['centro'] = $_POST['centro'];
    }

    postAdopcion($datos_adopcion);
}


?>