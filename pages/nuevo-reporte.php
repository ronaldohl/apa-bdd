<?php
require_once('../loads.php');
if(!$_POST){

}

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
            <h3>Nuevo Reporte</h3>
            <hr>
        </div>
        <div class="col text-right ml-3 mb-3">
            <a href="reportes.php" class="btn btn-outline-danger"><i class="fa fa-arrow-left"></i>Regresar</a>
            <hr>
        </div>
    </div>
    <form id=form class="form" accion="nuevo-reporte.php" method='POST'>
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputFecha4">Fecha</label>
                    <input type="date" name='fecha_reporte' required class="form-control" id="inputFecha4" placeholder="Fecha de Reporte">
                </div>
                <div class="form-group col-md-6">
                    <i class="fa fa-paw mr-2"></i><label class="" for="centroApa">Centro Apa</label>
                    <select name="centro" id="centroApa" required class="form-control">
                        <option value="CENTRO">Centro</option>
                        <option value="NORTE">Norte</option>
                    </select>
                </div>
        </div>
                <div class="form-row">
             <div class="form-group col-md-6">
                <label for="inputTipoReporte"><i class="fa fa-list-alt mr-2"></i> Tipo</label>
                <select class="form-control" name="tipo_reporte" required>
                    
                    <option value="MALTRATO">Maltrato</option>
                    <option value="ATROPELLO">Atropello</option>
                    <option value="CALLEJERO">Callejero</option>
                    <option value="PERDIDO">Perdido</option>
                    <option value="OTRO">Otro</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputDetalles4"><i class="fas fa-pencil-alt mr-2" id="icon"></i>Detalles Tipo</label>
                <input type="text" class="form-control" id="inputTipo4" name="detalles_tipo" placeholder="Detalles Tipo">                
            </div>
        </div>
        <div class="form-group">
            <label for="inputDescripcion2"><i class="fas fa-info-circle mr-2" id="icon1"></i>Descripción</label>
            <textarea class="form-control" required name="descripcion_reporte" id="inputDescricpion2" placeholder="Ingresa la Descripcion" ></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="evaluacion"><i class="fas fa-notes-medical mr-3" id=icon3></i>Evaluación</label>
            <select name="evaluacion_reporte" id="evaluacion" class="form-control" required>
                <option value="RESCATAR">RESCATAR</option>
                <option value="CANALIZAR">CANALIZAR</option>
                <option value="PENDIENTE">PENDIENTE</option>
                <option value="OTRO">OTRO</option>
            </select>            
        </div>
        <div class="form-group col-md-6">
              <label for="inputZip"> <i class="fas fa-clipboard-list mr-2" id="icon"></i>Detalles Evaluación</label>
            <input type="text" name="detalles_evaluacion" class="form-control" id="inputZip">
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col text-right">
                <button type="submit" class="btn btn-success" id=guardar>Registrar</button>
            </div>
        </div>
    </form>
</div>
<?php
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