<?php
require_once('../loads.php');

if(!$_GET){
    redirect('adopciones.php');
}

if(!$_GET['id']){
    redirect('adopciones.php');
}

$id_adopcion = $_GET['id'];

$datos_adopcion = getAdopcion($id_adopcion);

$datos_persona = getPersona($datos_adopcion['id_persona']);

$datos_mascota = getMascota($datos_adopcion['id_mascota']);
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
            <h3>Ver detalles Adopcion</h3>
        </div>
        <div class="col">
        
        </div>
    </div>
        <hr>    
                    <form action="" method="POST">
                    <div class="form-row">
                        <div class="col">                
                            <h3 class="font-bold mt-2">Mascota:</h3>
                        </div>
                        <div class="col text-right">
                        <h6>Opciones Mascota:</h6>
                                    <a class="btn btn-sm btn-primary mr-1 ml-1 " href="/amigosproanimal/pages/ver-mascota?id=<?php echo $datos_mascota['id_mascota']; ?>" >
                                        <i  class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-info mr-1 ml-1"  href="/amigosproanimal/pages/editar-mascota?id=<?php echo $datos_mascota['id_mascota']; ?>" > 
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-danger mr-1 ml-1" href="/amigosproanimal/pages/borrar?dato=mascota&id=<?php echo $datos_mascota['id_mascota']; ?>">
                                        <i class="fas fa-trash"></i>
                                    </a>  
                        </div>
                    </div>
                            <div class="form-row mt-2 justify-content-center">
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
                            <div class="form-row">
                                <div class="col">
                                    <h3 class="font-bold mt-2">Adoptante:</h3>
                                </div>
                                <div class="col text-right">
                                    <h6>Opciones Persona:</h6>
                                    <a class="btn btn-sm btn-primary mr-1 ml-1 " href="/amigosproanimal/pages/ver-persona?id=<?php echo $datos_persona['id_persona']; ?>" >
                                        <i  class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-info mr-1 ml-1"  href="/amigosproanimal/pages/editar-persona?id=<?php echo $datos_persona['id_persona']; ?>" > 
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-danger mr-1 ml-1" href="/amigosproanimal/pages/borrar?id=<?php echo $datos_persona['id_persona']; ?>">
                                        <i class="fas fa-trash"></i>
                                    </a>                                                                   
                                </div>
                                
                            </div>    
                            <div class="form-row mt-3  justify-content-center">
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
                                    <select readonly class="form-control" name="centro" id="centro" required="required" data-validation-required-message="Por favor selecciona un centro de APA">             
                                  <option value=''><?php echo $datos_adopcion['centro']; ?></option>;
                                
                            </select>
                                </div>
                            </div>
                            <label class="form-label mt-2">Fecha de Adopcion:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
                                    </div>
                                    <input readonly type="date" name="fecha_adopcion" class="form-control" id="inlineFormInputGroup" 
                                        placeholder="<?php echo $datos_adopcion['fecha_adopcion']; ?>" 
                                        value="<?php echo $datos_adopcion['fecha_adopcion']; ?>" 
                                        >
                                </div>
                            </div>
                            <label class="form-label mt-2">Anotaciones:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-bars"></i></div>
                                    </div>
                                    <input readonly type="text" name="anotaciones" class="form-control" id="inlineFormInputGroup" 
                                    placeholder="<?php echo $datos_adopcion['anotaciones']; ?>"
                                    value="<?php echo $datos_adopcion['anotaciones']; ?>"
                                    >
                                </div>
                            </div>                                                        
                            <label class="form-label mt-2">Tipo de adopción:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-heart"></i></div>
                                    </div>
                                    <select readonly class="form-control" name="tipo" id="donacion" required="required" data-validation-required-message="Por favor selecciona un tipo de adopcion">             
                                  <option value=''><?php echo $datos_adopcion['tipo']; ?></option>;
                                
                            </select>
                                </div>
                            </div>
                            
                            <div class="form-row ">
                                <div class="col ">
                                    <div class="text-right ">
                                        <a href="adopciones.php"  class="mt-2 btn btn-info ml-5" value="Enviar"> <i class="fa fa-arrow-circle-left mr-2"></i> Regresar </a>
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