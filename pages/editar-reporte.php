<?php
    require_once('../loads.php');
    if(!$_GET){
        // echo 'No GET';
         header('Location: ../index.php');
    }elseif(!$_GET['id']){
         header('Location: ../index.php');
        // echo 'No GET id';
    }
    $id_reporte = $_GET['id'];
    $datos_reporte = getReporte($id_reporte);

    if($_POST){
        $reporte_editado = $_POST;
        // print_r($reporte_editado);
    }
    // print_r($reporte);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Reporte</title>
    <?php include ('includes-head.php');?>
</head>
<body>
<?php include ('header.php');?>

<div class="container m-5" >
    <div class="row">
        <div class="col text-left ml-3 mb-3">
            <h3>Editar Reporte</h3>
            <hr>
        </div>
        <div class="col text-right ml-3 mb-3">
            <a href="reportes.php" class="btn btn-outline-danger"><i class="fa fa-arrow-left"></i>Regresar</a>
            <hr>
        </div>
    </div>
    <form id=form class="form" accion="editar-reporte.php" method='POST'>
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputFecha4">Fecha</label>
                    <input type="date" name='fecha_reporte' required class="form-control" id="inputFecha4" placeholder="Fecha de Reporte" value="<?php echo $datos_reporte['fecha_reporte']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <i class="fa fa-paw mr-2"></i><label class="" for="centroApa">Centro Apa</label>
                    <select name="centro" id="centroApa" required class="form-control">
                        <option value="CENTRO" <?php echo ($datos_reporte['centro']=='CENTRO')?'selected="selected"': ''; ?>>Centro</option>
                        <option value="NORTE" <?php echo ($datos_reporte['centro']=='NORTE')?'selected="selected"': ''; ?>>Norte</option>
                    </select>
                </div>
        </div>
                <div class="form-row">
             <div class="form-group col-md-6">
                <label for="inputTipoReporte"><i class="fa fa-list-alt mr-2"></i>Tipo</label>                
                <select class="form-control" name="tipo_reporte" required>                                       
                    <option value="MALTRATO" <?php echo ($datos_reporte['tipo_reporte']=='MALTRATO')?'selected="selected"': ''; ?> >MALTRATO</option>
                    <option value="ATROPELLO" <?php echo ($datos_reporte['tipo_reporte']=='ATROPELLO')?'selected="selected"': ''; ?> >ATROPELLO</option>
                    <option value="CALLEJERO" <?php echo ($datos_reporte['tipo_reporte']=='CALLEJERO')?'selected="selected"': ''; ?> >CALLEJERO</option>
                    <option value="PERDIDO" <?php echo ($datos_reporte['tipo_reporte']=='PERDIDO')?'selected="selected"': ''; ?> >PERDIDO</option>
                    <option value="OTRO" <?php echo ($datos_reporte['tipo_reporte']=='OTRO')?'selected="selected"': ''; ?> >OTRO</option>
                
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputDetalles4"><i class="fas fa-pencil-alt mr-2" id="icon"></i>Detalles Tipo</label>
                <input type="text" class="form-control" id="inputTipo4" name="detalles_tipo" placeholder="<?php echo $datos_reporte['detalles_tipo']; ?>" value="<?php echo $datos_reporte['detalles_tipo']; ?>" >                
            </div>
        </div>
        <div class="form-group">
            <label for="inputDescripcion2"><i class="fas fa-info-circle mr-2" id="icon1"></i>Descripción</label>
            <textarea class="form-control" required name="descripcion_reporte" id="inputDescricpion2" placeholder="<?php echo $datos_reporte['descripcion_reporte'];  ?>" value="<?php echo $datos_reporte['descripcion_reporte'];  ?>" ></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="evaluacion"><i class="fas fa-notes-medical mr-3" id=icon3></i>Evaluación</label>
            <select name="evaluacion_reporte" id="evaluacion" class="form-control" required>
                <option value="RESCATAR" <?php echo ($datos_reporte['evaluacion_reporte']=='RESCATAR')?'selected="selected"': ''; ?>>RESCATAR</option>
                <option value="CANALIZAR" <?php echo ($datos_reporte['evaluacion_reporte']=='CANALIZAR')?'selected="selected"': ''; ?>>CANALIZAR</option>
                <option value="PENDIENTE" <?php echo ($datos_reporte['evaluacion_reporte']=='PENDIENTE')?'selected="selected"': ''; ?>>PENDIENTE</option>
                <option value="OTRO" <?php echo ($datos_reporte['evaluacion_reporte']=='OTRO')?'selected="selected"': ''; ?>>OTRO</option>
            </select>            
        </div>
        <div class="form-group col-md-6">
              <label for="inputZip"> <i class="fas fa-clipboard-list mr-2" id="icon"></i>Detalles Evaluación</label>
            <input type="text" name="detalles_evaluacion" class="form-control" id="inputZip" placeholder="<?php echo $datos_reporte['detalles_evaluacion']; ?>">
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col text-right">
                <button type="submit" class="btn btn-success" id=guardar>Guardar</button>
            </div>
        </div>
    </form>
</div>
<?php include ('includes-body.php');?>
</body>
</html>

<?php
    
    if($_POST){
        $reporte_editado = $reporteModelArray;
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
        $reporte_editado['id_reporte']= $datos_reporte['id_reporte'];
        $reporte_editado['tipo_reporte'] = $_POST['tipo_reporte'];
        $reporte_editado['descripcion_reporte'] = $_POST['descripcion_reporte'];
        $reporte_editado['evaluacion_reporte'] = $_POST['evaluacion_reporte'];
        $reporte_editado['fecha_reporte'] = $_POST['fecha_reporte'];
        $reporte_editado['centro'] = $_POST['centro'];
    
        if($_POST['detalles_tipo']){
            $reporte_editado['detalles_tipo'] = $_POST['detalles_tipo'];
        }
        if($_POST['detalles_evaluacion']){
            $reporte_editado['detalles_evaluacion'] = $_POST['detalles_evaluacion'];
        }
        echo 'rep_editado';
        print_r($reporte_editado);
        // include ('includes-head.php');
        $res = putReporte($reporte_editado);
        echo'despues de put';
        // if($res){
        //     print_r($res);
        // }
        
    
    }
  
?>