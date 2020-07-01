<?php
require_once('../loads.php');

if(!$_GET['id']){
    redirect('personas.php');
}else{
    $id_persona = $_GET['id'];

    $datos_persona = getPersona($id_persona);
    // print_r($datos_persona);
    $datos_domicilio = getDomicilio($datos_persona['id_domicilio']);
}

//  echo '<pre>';
//  print_r($datos_persona);
//  echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php 
      include('includes-head.php')
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Persona</title>
</head>
<body>
    <?php 
        include ('header.php');
        
    ?>

<div class="container m-5" >
    <div class="row">
        <div class="col text-left ml-3 mb-3">
            <h3>Editar Persona</h3>
            <hr>
        </div>
        <div class="col text-right ml-3 mb-3">
            <a href="personas.php" class="btn btn-outline-danger"><i class="fa fa-arrow-left mr-2"></i>Regresar</a>
            <hr>
        </div>
    </div>
    <form id=form class="form" accion="editar-persona.php?id=<?php echo $datos_persona['id_persona']; ?> " method='POST'>
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
                            <select class="form-control" name="tipo_persona"  id="zona" required>             
                            <option value="RESCATISTA" <?php echo ($datos_persona['tipo_persona']=='RESCATISTA')?'selected="selected"': ''; ?> >Rescatista</option> 
                            <option value="ADOPTANTE" <?php echo ($datos_persona['tipo_persona']=='ADOPTANTE')?'selected="selected"': ''; ?> >Adoptante</option> 
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
                            <input type="text" name="nombre" class="form-control" id="inlineFormInputGroup" 
                             placeholder="<?php echo $datos_persona['nombre']; ?>"
                             value ="<?php echo $datos_persona['nombre']; ?>"
                               >
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
                            <input type="text" name="apellido_paterno" class="form-control" id="inlineFormInputGroup"  placeholder="<?php echo $datos_persona['apellido_paterno']; ?>"  value ="<?php echo $datos_persona['apellido_paterno']; ?>">
                        </div>
                    </div>
                    <p class="masthead-subheading font-weight-light ">Apellido Materno</p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-running"></i>
                                </div>
                            </div>
                            <input type="text" name="apellido_materno" class="form-control" id="inlineFormInputGroup"  placeholder="<?php if($datos_persona['apellido_materno']){echo $datos_persona['apellido_materno'];} ?>"  value ="<?php echo $datos_persona['apellido_materno']; ?>">
                        </div>
                    </div>
                    <p class="masthead-subheading font-weight-light ">Fecha de Nacimiento</p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                            <input type="date" name="fecha_nacimiento" class="form-control "  placeholder="<?php echo $datos_persona['fecha_nacimiento']; ?>" value="<?php echo $datos_persona['fecha_nacimiento']; ?>">
                        </div>
                    </div>
                    <p class="masthead-subheading font-weight-light ">Celular</p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-mobile"></i>
                                </div>
                            </div>
                            <input type="text" name="celular" class="form-control" id="inlineFormInputGroup"  placeholder="<?php echo $datos_persona['celular']; ?>"  value ="<?php echo $datos_persona['celular']; ?>">
                        </div>
                    </div>
                    <p class="masthead-subheading font-weight-light ">Telefono </p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                            </div>
                            <input type="text" name="telefono" class="form-control" id="inlineFormInputGroup"  placeholder="<?php echo $datos_persona['telefono']; ?>"  value ="<?php echo $datos_persona['telefono']; ?>">
                        </div>
                    </div>
                    <p class="masthead-subheading font-weight-light ">Correo</p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <input type="text" name="correo" class="form-control" id="inlineFormInputGroup"  placeholder="<?php echo $datos_persona['correo']; ?>"  value ="<?php echo $datos_persona['correo']; ?>">
                        </div>
                    </div>
                    <hr>
                    <h3 class="font-bold text-primary">Dirección</h3>
                    <div class="form-row mt-2 mb-2">
                        <div class="col text-right mr-5">
                        <h4 class="text-right">Opciones de Domicilio <small>(Ver Domicilio, Editar Domicilio, Borrar Domicilio)</small></h4>
                            <a class="btn btn-primary mr-1 ml-1 " href="/amigosproanimal/pages/ver-domicilio?id=<?php echo $datos_domicilio['id_domicilio']; ?>">
                                <i  class="fa fa-eye"></i>
                            </a>
                            <a class="btn btn-info mr-1 ml-1"  href="/amigosproanimal/pages/editar-domicilio?id=<?php echo $datos_domicilio['id_domicilio']; ?>" > 
                                <i class="fa fa-edit"></i>
                            </a>
                            <a class="btn btn-danger mr-1 ml-1" href="/amigosproanimal/pages/borrar?dato=domicilio&id=<?php echo $datos_domicilio['id_domicilio']; ?>">
                                <i class="fas fa-trash"></i>
                            </a> 
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
                                    <input type="text" name="calle" class="form-control " readonly  placeholder="<?php echo $datos_domicilio['calle']; ?>"  >
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
            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o mr-2"></i>Guardar</button>
            <hr>
        </div>
                    </div>
                </div>
    </form>
</div>
<?php

if(!$_POST){

}

if($_POST){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    $persona_editada = $personaModelArray;
    $persona_editada['id_persona'] = $datos_persona['id_persona'];
    $persona_editada['id_domicilio'] = $datos_persona['id_domicilio'];
    $persona_editada['centro'] = $datos_persona['centro'];

    if($_POST['tipo_persona']){
        $persona_editada['tipo_persona'] = $_POST['tipo_persona'];
    }else{
        $persona_editada['tipo_persona'] = $datos_persona['tipo_persona'];
    }
    if($_POST['nombre']){
        $persona_editada['nombre'] = $_POST['nombre'];
    }else{
        $persona_editada['nombre'] = $datos_persona['nombre'];
    }
    if($_POST['apellido_paterno']){
        $persona_editada['apellido_paterno'] = $_POST['apellido_paterno'];
    }else{
        $persona_editada['apellido_paterno'] = $datos_persona['apellido_paterno'];
    }
    if($_POST['apellido_materno']){
        $persona_editada['apellido_materno'] = $_POST['apellido_materno'];
    }else{
        $persona_editada['apellido_materno'] = $datos_persona['apellido_materno'];
    }
    if($_POST['fecha_nacimiento']){
        $persona_editada['fecha_nacimiento'] = $_POST['fecha_nacimiento'];
    }else{
        $persona_editada['fecha_nacimiento'] = $datos_persona['fecha_nacimiento'];
    }
    if($_POST['celular']){
        $persona_editada['celular'] = $_POST['celular'];
    }else{
        $persona_editada['celular'] = $datos_persona['celular'];
    }
    if($_POST['telefono']){
        $persona_editada['telefono'] = $_POST['telefono'];
    }else{
        $persona_editada['telefono'] = $datos_persona['telefono'];
    }
    if($_POST['correo']){
        $persona_editada['correo'] = $_POST['correo'];
    }else{
        $persona_editada['correo'] = $datos_persona['correo'];
    }
    // echo '<pre>';
    // print_r($persona_editada);
    // echo '</pre>';
    $res = putPersona($persona_editada);
}
?>
</body>
</html>