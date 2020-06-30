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

<div class="container m-5" >
    <div class="row">
        <div class="col text-left ml-3 mb-3">
            <h3>Nuevo Rescate</h3>
            <hr>
        </div>
        <div class="col text-right ml-3 mb-3">
            <a href="rescates.php" class="btn btn-outline-danger"><i class="fa fa-arrow-left mr-2"></i>Regresar</a>
            <hr>
        </div>
    </div>
    <form id=form class="form" accion="nuevo-rescate.php" method='POST'>
    <div class="form-group mt-3 mb-3">
                    <p class="masthead-subheading font-weight-light ">Fecha Rescate</p>
                    <div class="form-row  justify-content-center">
                        <div class="input-group mb-2 text-center col-11">
                            <div class="input-group-addon">
                                <div class="input-group-text">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                            <input type="date" name="fecha_rescate" class="form-control " placeholder="Fecha Rescate" required aria-required="true" required="required" data-validation-required-message="Fecha Inválida.">
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
                                    echo '<option value=" '. $r->id_persona.'  "> '. $r->nombre .' '. " " .' '. $r->apellido_paterno.'  </option>';
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
                             <option value='CENTRO'>CENTRO</option>;
                            <option value='NORTE'>NORTE</option>;
                            </select>
                        </div>
                    </div>
                    <hr>
                    <h3 class="font-bold text-primary">Datos Lugar de Rescate</h3>
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
                            <hr>
                            <h3 class="font-bold text-primary">Datos Mascota Rescatada</h3>
                            <label class="form-label mt-2">Nombre de la Mascota:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-paw"></i></div>
                                    </div>
                                    <input type="text" name="nombre" class="form-control" id="inlineFormInputGroup" placeholder="Nombre de la mascota..." required="required" data-validation-required-message="Por favor ingresa el nombre de la mascota">
                                </div>
                            </div>
                            <label class="form-label mt-2">Especie:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-bug"></i></div>
                                    </div>
                                    <select class="form-control" name="especie" id="especie" required="required" data-validation-required-message="Por favor selecciona una especie">             
                                        <option value='PERRO'>Perro</option>;
                                        <option value='GATO'>Gato</option>;
				                        <option value='AVE'>Ave</option>;
                                        <option value='ROEDOR'>Roedor</option>;
				                        <option value='PEZ'>Pez</option>;
                                        <option value='OTRO'>Otro</option>;
                                    </select>
                                </div>
                            </div>
                            <label class="form-label mt-2">Detalles Especie: <small>(Opcional)</small></label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-plus-square"></i></div>
                                    </div>
                                    <input type="text" name="detalles_especie" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa detalles sobre la especie...">
                            </div>
                            </div>
                            <label class="form-label mt-2">Fecha de Nacimiento: <small>(Aproximada)</small></label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-calendar-o"></i></div>
                                    </div>
                                    <input type="date" name="fecha_nac" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa la fecha de nacimiento..." required="required" data-validation-required-message="Por favor ingresa la fecha de nacimiento">
                                </div>
                            </div>
                             <label class="form-label mt-2">Condición del Animal al momento del Rescate:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-heart"></i></div>
                                    </div>
                                    <select class="form-control" name="condicion_rescate" id="" required="required" data-validation-required-message="Por favor selecciona una condicion de rescate" required="required" data-validation-required-message="Por favor ingresa una condicion de rescate">             
                                        <option value='BUENA'>Buena</option>;
                                        <option value='REGULAR'>Regular</option>;
				                        <option value='MALA'>Mala</option>;
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <h3 class="font-bold text-primary">Anotaciones Generales de Rescate</h3>
				<label class="form-label mt-2">Anotaciones:</label>
                            <div class="form-row  justify-content-center">
                                <div class="input-group mb-2 text-center col-11">
                                    <div class="input-group-addon">
                                        <div class="input-group-text"><i class="fa fa-edit"></i></div>
                                    </div>
                                    <textarea type="text" name="anotaciones" class="form-control" id="inlineFormInputGroup" placeholder="Ingresa alguna anotación..."></textarea>
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
if($_POST){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    $datos_rescate = $rescateModelArray;
    $datos_domicilio = $domicilioModelArray;
    $datos_mascota = $mascotaModelArray();
     $centro_apa = $_POST['centro'];

    $datos_domicilio['calle'] = $_POST['calle']; 
    $datos_domicilio['numero_ext'] = $_POST['numero_ext']; 
    $datos_domicilio['interior'] = $_POST['interior']; 
    $datos_domicilio['colonia'] = $_POST['colonia']; 
    $datos_domicilio['cp'] = $_POST['cp']; 
    $datos_domicilio['municipio'] = $_POST['municipio']; 
    $datos_domicilio['centro'] = $centro_apa;
    
    
    $datos_rescate['centro'] = $centro_apa;
    $datos_rescate['fecha_rescate'] = $_POST['fecha_rescate'];
    $datos_rescate['id_persona'] = $_POST['id_persona'];
    $datos_rescate['id_domicilio'] = $_POST['id_domicilio'];
    $datos_rescate['anotaciones'] = $_POST['anotaciones'];
    
    
    $datos_mascota['id_rescate'] = '';
    $datos_mascota['nombre'] = $_POST['nombre'];
    $datos_mascota['especie'] = $_POST['especie'];
    $datos_mascota['detalles_especie'] = $_POST['detalles_especie'];
    $datos_mascota['fecha_nac'] = $_POST['fecha_nac'];
    $datos_mascota['condicion_rescate'] = $_POST['condicion_rescate'];
    $datos_mascota['estatus'] = $_POST['estatus'];
    $datos_mascota['centro'] = $centro_apa;
    
    echo 'Domicilio:';
    echo '<pre>';
    print_r($datos_domicilio);
    echo '</pre>';
    echo 'Rescate:';
    echo '<pre>';
    print_r($datos_rescate);
    echo '</pre>';
    echo 'Mascota:';
    echo '<pre>';
    print_r($datos_mascota);
    echo '</pre>';
    
    
    
    
    /**********Comprobación de POST  ************ */
    $url = 'rescates.php';
    /*if (!$_POST['tipo_reporte']){
        echo '<script>
            swal({
                title: "ERROR",
                text: "Favor de llenar todos los campos!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/pages/reportes.php");
            });
                </script>';  
        redirect($url);
    }elseif(!$_POST['descripcion_reporte']){
        echo '<script>
            swal({
                title: "ERROR",
                text: "Favor de llenar todos los campos!",
                type: "error"
            }).then (()=>{
               
            });
                </script>';  
        redirect($url);
    }elseif(!$_POST['evaluacion_reporte']){
        echo '<script>
            swal({
                title: "ERROR",
                text: "Favor de llenar todos los campos!",
                type: "error"
            }).then (()=>{
               
            });
                </script>';  
        redirect($url);
    }elseif(!$_POST['fecha_reporte']){
        echo '<script>
            swal({
                title: "ERROR",
                text: "Favor de llenar todos los campos!",
                type: "error"
            }).then (()=>{
               
            });
                </script>';  
        redirect($url);
    }elseif(!$_POST['centro']){
        redirect($url);
    }*/


    $datos_rescate['fecha_rescate'] = $_POST['fecha_rescate'];

    /*$datos_reporte['tipo_reporte'] = $_POST['tipo_reporte'];
    $datos_reporte['descripcion_reporte'] = $_POST['descripcion_reporte'];
    $datos_reporte['evaluacion_reporte'] = $_POST['evaluacion_reporte'];
    $datos_reporte['fecha_reporte'] = $_POST['fecha_reporte'];
    $datos_reporte['centro'] = $_POST['centro'];
*/
    // if($_POST['detalles_tipo']){
    //     $datos_reporte['detalles_tipo'] = $_POST['detalles_tipo'];
    // }
    // if($_POST['detalles_evaluacion']){
    //     $datos_reporte['detalles_evaluacion'] = $_POST['detalles_evaluacion'];
    // }
    // include ('includes-head.php');
    //$res = postReporte($datos_reporte);
    // if($res){
    //     print_r($res);
    // }
    

}


?>
</body>
</html>