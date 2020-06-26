<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Reporte</title>
    <?php 
        include ('includes-head.php');
    ?>
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
    </div>
    <form id=form class="form" accion="nuevo-reporte.php" method='GET'>
                <div class="form-group col-md-6">
                    <label for="inputFecha4">Fecha</label>
                    <input type="date" name='fecha_reporte' class="form-control" id="inputFecha4" placeholder="Fecha de Reporte">
                </div>
                <div class="form-row">
             <div class="form-group col-md-6">
                <label for="inputTipoReporte"><i class="fa fa-list-alt mr-2"></i> Tipo</label>
                <select class="form-control" name="tipo_reporte">
                    <option selected>Selecciona un Tipo de Reporte...</option>
                    <option value="MALTRATO">Maltrato</option>
                    <option value="ATROPELLO">Atropello</option>
                    <option value="CALLEJERO">Callejero</option>
                    <option value="PERDIDO">Perdido</option>
                    <option value="OTRO">Otro</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputDetalles4"><i class="fas fa-pencil-alt mr-2" id="icon"></i>Detalles Tipo</label>
                <input type="text" class="form-control" id="inputTipo4" name="detalles_tipo" placeholder="     Detalles Tipo">                
            </div>
        </div>
        <div class="form-group">
            <label for="inputDescripcion2"><i class="fas fa-info-circle mr-2" id="icon1"></i>Descripción</label>
            <textarea class="form-control" name="descripcion_reporte" id="inputDescricpion2" placeholder="Ingresa la Descripcion"></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="evaluacion"><i class="fas fa-notes-medical mr-3" id=icon3></i>Evaluación</label>
            <select name="evaluacion_reporte" id="evaluacion" class="form-control">
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
    
</body>
</html>