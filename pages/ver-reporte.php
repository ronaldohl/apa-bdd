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
    $reporte = getReporte($id_reporte);
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
            <h3>Ver Reporte</h3>
            <hr>
        </div>
        <div class="col text-right ml-3 mb-3">
            <a href="reportes.php" class="btn btn-outline-danger"><i class="fa fa-arrow-left"></i>Regresar</a>
            <hr>
        </div>
    </div>
    <form id=form class="form" accion="" method='POST'>
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputFecha4">Fecha</label>
                    <input type="date" name='fecha_reporte' required class="form-control" id="inputFecha4" value="<?php echo $reporte['fecha_reporte']; ?>" readonly placeholder="<?php echo $reporte['fecha_reporte']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <i class="fa fa-paw mr-2"></i><label class="" for="centroApa">Centro Apa</label>
                    <select name="centro" readonly id="centroApa" required class="form-control">
                        <option value=""><?php echo $reporte['centro']; ?></option>            
                    </select>
                </div>
        </div>
                <div class="form-row">
             <div class="form-group col-md-6">
                <label for="inputTipoReporte"><i class="fa fa-list-alt mr-2"></i> Tipo</label>
                <select class="form-control" name="tipo_reporte" readonly> 
                    <option value=""><?php echo $reporte['tipo_reporte']; ?></option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputDetalles4"><i class="fas fa-pencil-alt mr-2" id="icon"></i>Detalles Tipo</label>
                <input type="text" class="form-control" id="inputTipo4" name="detalles_tipo" placeholder="Detalles Tipo" readonly value="<?php echo $reporte['detalles_tipo']; ?>">                
            </div>
        </div>
        <div class="form-group">
            <label for="inputDescripcion2"><i class="fas fa-info-circle mr-2" id="icon1"></i>Descripción</label>
            <textarea class="form-control" required name="descripcion_reporte" id="inputDescricpion2" placeholder="<?php echo $reporte['descripcion_reporte']; ?>" readonly value="<?php echo $reporte['descripcion_reporte']; ?>" ></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="evaluacion"><i class="fas fa-notes-medical mr-3" id=icon3></i>Evaluación</label>
            <select name="evaluacion_reporte" id="evaluacion" class="form-control" required readonly>
                <option value=""><?php echo $reporte['evaluacion_reporte']; ?></option>
                
            </select>            
        </div>
        <div class="form-group col-md-6">
              <label for="inputZip"> <i class="fas fa-clipboard-list mr-2" id="icon"></i>Detalles Evaluación</label>
            <input type="text" name="detalles_evaluacion" class="form-control" id="inputZip" readonly value="<?php echo $reporte['detalles_evaluacion']; ?>">
            </div>
        </div>
        <br>
        <div class="form-row">
            
        </div>
    </form>
</div>
<?php include ('includes-body.php');?>
</body>
</html>

<?php
    

  
?>