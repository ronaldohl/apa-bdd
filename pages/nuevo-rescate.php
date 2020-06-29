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
                                <select class="form-control" name="centro" id="zona" required>             
                                    
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
                    
                    <div class="form-row ">
                        <div class="col mr-5">
                            <div class="text-right">
                                <button type="submit" class="mt-2 btn btn-success btn-xl" value="Enviar">Registrar Rescate  <i class="fa fa-check ml-2"></i> </button>
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
    $datos_reporte = $reporteModelArray;
    /**********Comprobación de POST  ************ */
    $url = 'reportes.php';
    if (!$_POST['tipo_reporte']){
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
    }
    $datos_reporte['tipo_reporte'] = $_POST['tipo_reporte'];
    $datos_reporte['descripcion_reporte'] = $_POST['descripcion_reporte'];
    $datos_reporte['evaluacion_reporte'] = $_POST['evaluacion_reporte'];
    $datos_reporte['fecha_reporte'] = $_POST['fecha_reporte'];
    $datos_reporte['centro'] = $_POST['centro'];

    if($_POST['detalles_tipo']){
        $datos_reporte['detalles_tipo'] = $_POST['detalles_tipo'];
    }
    if($_POST['detalles_evaluacion']){
        $datos_reporte['detalles_evaluacion'] = $_POST['detalles_evaluacion'];
    }
    // include ('includes-head.php');
    $res = postReporte($datos_reporte);
    // if($res){
    //     print_r($res);
    // }
    

}


?>
</body>
</html>