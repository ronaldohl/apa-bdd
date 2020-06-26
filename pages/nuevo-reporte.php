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
    <form id=form class="form" accion="nuevo-reporte.php" method='GET'>
                <div class="form-group col-md-6">
                    <label for="inputFecha4">Fecha</label>
                    <input type="date" class="form-control" id="inputFecha4" placeholder="Fecha de Reporte">
                </div>
                <div class="form-row">
             <div class="form-group col-md-6">
                <label for="inputTipoReporte"><i class="fa fa-list-alt mr-2"></i> Tipo</label>
                <select class="form-control" >
                    <option selected>Selecciona un Tipo de Reporte...</option>
                    <option>Maltrato</option>
                    <option>Atropello</option>
                    <option>Callejero</option>
                    <option>Perdido</option>
                    <option>Otro</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputDetalles4"><i class="fas fa-pencil-alt mr-2" id="icon"></i>Detalles Tipo</label>
                <input type="text" class="form-control" id="inputTipo4" placeholder="     Detalles Tipo">
                
            </div>
        </div>
        <div class="form-group">
            <label for="inputDescripcion2"><i class="fas fa-info-circle" id="icon1"></i>Descripción</label>
            <textarea class="form-control" id="inputDescricpion2" placeholder="Ingresa la Descripcion">
            </textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCity"><i class="fas fa-notes-medical mr-3" id=icon3></i>Evaluación</label>
            <input type="text" class="form-control" id="inputEvaluacion">
            
        </div>
        <div class="form-group col-md-6">
              <label for="inputZip"> <i class="fas fa-clipboard-list mr-2" id="icon"></i>Detalles Evaluación</label>
            <input type="text" class="form-control" id="inputZip">
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