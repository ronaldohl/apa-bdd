<?php
require_once('../loads.php');


if(!$_GET['id']){
    redirect('rescates.php');
}
  

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
$datos_rescate = getRescate($_GET['id']);
$datos_domicilio = getDomicilio($datos_rescate['id_domicilio']);
$datos_mascotas = getMascotas();


foreach($datos_mascotas as $indexItem => &$mascota ){
    if($mascota['id_rescate'] != $_GET['id'] ){
        unset($datos_mascotas[$indexItem]);
    }
}
$datos_rescatistas = getPersonas();

foreach($datos_rescatistas as $indexItem => &$rescatista ){
    if($rescatista['tipo_persona']=='ADOPTANTE'){
        unset($datos_rescatistas[$indexItem]);
    }
}
$rescatistasObj = json_decode(json_encode((object) $datos_rescatistas), FALSE);
$id_rescatista = $datos_rescate['id_persona'];

// echo '<pre>';
// print_r($datos_rescate); 
// echo '</pre>';
// echo '<pre>';
// print_r($datos_domicilio); 
// echo '</pre>';
// echo '<pre>';
// print_r($datos_mascotas); 
// echo '</pre>';
// echo '<pre>';
// print_r($rescatistasObj); 
// echo '</pre>';
$datos_mascota = $datos_mascotas[$datos_rescate['id_rescate']]; 


/**********Comprobación de POST  ************ */
$url = 'rescates.php';



// $rescatistasObj = json_decode(json_encode((object) $datos_rescatistas), FALSE);
// echo '<pre>';
// print_r($datos_rescatistas);
// echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php 
      include('includes-head.php');
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Rescate</title>
</head>
<body>
    <?php 
        include ('header.php');
        
    ?>

<div class="container m-5" >
    <div class="row">
        <div class="col text-left ml-3 mb-3">
            <h3>Editar Rescate</h3>
            <hr>
        </div>
        <div class="col text-right ml-3 mb-3">
            <a href="rescates.php" class="btn btn-outline-danger"><i class="fa fa-arrow-left mr-2"></i>Regresar</a>
            <hr>
        </div>
    </div>
    <form id=form class="form" accion="editar-rescate.php" method='POST'>
    <div class="form-group mt-3 mb-3">
                    <p class="masthead-subheading font-weight-light ">Fecha Rescate</p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                            <input type="date"  name="fecha_rescate" class="form-control " placeholder="Fecha Rescate" required aria-required="true" required="required" data-validation-required-message="Fecha Inválida." value="<?php echo $datos_rescate['fecha_rescate']; ?>">        
                        </div>
                    </div>
                    <label class="form-label mt-2">Rescatista Apa:</label>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                                <select class="form-control" name="id_rescatista" id="rescatista" required>             
                                    
                                    <?php  
                                foreach($rescatistasObj as $r){                            
                                    echo '<option value=" '.$r->id_persona. '"'; if($r->id_persona == $id_rescatista){echo 'selected="selected"';}else{echo ' ';} echo ' > '.$r->nombre .' '. $r->apellido_paterno.' </option>' ;                                     
                                };
                                ?>
                                </select>

                        </div>
                       
                    </div>
                    
                    <label class="form-label mt-2">Centro Apa:</label>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fas fa-hotel"></i>
                                </div>
                            </div>
                            <select class="form-control" name="centro" id="zona" required>             
                            <option value="CENTRO" <?php echo ($datos_rescate['centro']=='CENTRO')?'selected="selected"': ''; ?>>Centro</option>
                        <option value="NORTE" <?php echo ($datos_rescate['centro']=='NORTE')?'selected="selected"': ''; ?>>Norte</option>
                            </select>
                        </div>
                    </div>
                    <h3 class="font-bold text-primary">Anotaciones Generales de Rescate</h3>
				        <label class="form-label mt-2">Anotaciones:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-edit"></i></div>
                                    </div>
                                    <textarea type="text" name="anotaciones" class="form-control" id="inlineFormInputGroup" placeholder="<?php echo $datos_rescate['anotaciones']; ?>" value="<?php echo $datos_rescate['anotaciones']; ?>"></textarea>
                                </div>
                            </div>
                    <hr>
                    <h3 class="font-bold text-primary">Datos Lugar de Rescate</h3>
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
                                    <input type="text" name="calle" class="form-control " placeholder="<?php echo $datos_domicilio['calle']; ?>" required aria-required="true" pattern="[A-Za-z ]{1,100}" title="Sólo letras Máximo 100" readonly>
                                </div>
                            </div>
                            
                            <label class="form-label mt-2">Colonia:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-location-arrow"></i></div>
                                    </div>
                                    <input type="text" name="colonia" class="form-control" id="inlineFormInputGroup" placeholder="<?php echo $datos_domicilio['colonia']; ?>" required="required" data-validation-required-message="" readonly>
                                </div>
                            </div>
                            
                            <label class="form-label mt-2">Municipio:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                    </div>
                                    <select class="form-control" name="municipio" id="zona" required="required" data-validation-required-message="Por favor selecciona un municipio" readonly>             
                                  <option value=''><?php echo $datos_domicilio['municipio']; ?></option>;                                
                            </select>
                                </div>
                            </div>
                            <hr>
                            <h3 class="font-bold text-primary">Datos Mascota Rescatada</h3>
                            <div class="form-row">
                                <div class="col-5">
                                    <label class="form-label mt-2">Nombre de la Mascota:</label>
                                </div>
                                <div class="col-4 ">
                                    <label class="form-label mt-2">Especie:</label>
                                </div>
                                <div class="col-3 ">
                                    <label class="form-label mt-2">Opciones:</label>
                                </div>
                                
                            </div>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-5">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-paw"></i></div>
                                    </div>
                                    <input type="text" readonly  name="nombre" class="form-control" id="inlineFormInputGroup" placeholder="<?php echo $datos_mascota['nombre']; ?>" required="required" data-validation-required-message="Por favor ingresa el nombre de la mascota">
                                </div>
                                <div class="input-group mb-2 text-center col-4 ">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-bug"></i></div>
                                    </div>
                                    <input type="text" readonly name="especie" class="form-control" id="inlineFormInputGroup" placeholder="<?php echo $datos_mascota['especie']; ?>" required="required" data-validation-required-message="Por favor ingresa el nombre de la mascota">
                                </div>
                                <div class="col-3">
                                    <a class="btn btn-primary mrs-1 ml-1 " href="/amigosproanimal/pages/ver-mascota?id=<?php echo $datos_mascota['id_mascota']; ?>">
                                        <i  class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-info mr-1 "  href="/amigosproanimal/pages/editar-mascota?id="<?php echo $datos_mascota['id_mascota']; ?> > 
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger mr-1 " href="/amigosproanimal/pages/borrar?dato=mascota&id=<?php echo $datos_mascota['id_mascota']; ?>">
                                        <i class="fas fa-trash"></i>
                                    </a> 
                                </div>
                            </div>
                                                          
                    
                    <div class="form-row ">
                        <div class="col mr-5">
                            <div class="text-right">
                                <button type="submit" class="mt-2 btn btn-success btn-lg " value="Enviar"><i class="fa fa-check ml-2"></i> Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
    </form>
</div>
<?php

if(!$_POST){

}
if($_POST){
    // echo 'POST EDIT:';
    // echo '<pre>';
    // print_r($_POST); 
    // echo '</pre>';

  $rescate_editado = $rescateModelArray;

  $rescate_editado['id_rescate'] = $datos_rescate['id_rescate']; 
  $rescate_editado['id_domicilio'] = $datos_rescate['id_domicilio']; 
  if($_POST['centro']){$rescate_editado['centro'] = $_POST['centro'];}
  if($_POST['fecha_rescate']){$rescate_editado['fecha_rescate'] = $_POST['fecha_rescate'];}
  if($_POST['id_rescatista']){$rescate_editado['id_persona'] = $_POST['id_rescatista'];}
  if($_POST['anotaciones']){$rescate_editado['anotaciones'] = $_POST['anotaciones'];}else{
    $rescate_editado['anotaciones'] = $datos_rescate['anotaciones'];
  }
  
//   echo 'RESCATE EDITAD:';
//   echo '<pre>';
//   print_r($rescate_editado); 
//   echo '</pre>';
  $resultado = putRescate($rescate_editado);
    // echo 'DESPUES DE PUT RES:';
    // echo '<pre>';
    // print_r($resultado); 
    // echo '</pre>';


}


?>
</body>
</html>