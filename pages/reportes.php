<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes</title>
    <?php
        include ('includes-head.php');
        require_once ('../loads.php');
        $datos_reportes = getReportes();

       
    ?>
</head>
    <?php include ('header.php');?>
<body>
<div class="container">
    <div class="container">
    <div class="card">
 <div class="card-body">
     <h3 class="card-title mt-2">Reportes</h3>
     <h5 class="card-subtitle">Aquí encontrarás la información sobre los reportes realizados a los centros APA</h5>
     <table id="demo-foo-addrow2" class="table table-bordered table-stripped table-hover toggle-circle" data-page-size="7">
         <thead>
             <tr>
                 <th data-sort-initial="true" data-toggle="true">Fecha</th>
                 <th>Tipo</th>
                 
                 <th data-hide="phone, tablet">Centro</th>
                 <th data-hide="phone, tablet">Evaluación</th>
                 <th data-sort-ignore="true" class="min-width">Opciones</th>
             </tr>
         </thead>
         <div class="m-t-40">
             <div class="d-flex">
                 <div class="mr-auto">
                     <div class="form-group">
                         <a id="demo-btn-addrow" href="/amigosproanimal/pages/nuevo-reporte.php" class="btn btn-primary "><i class="fa fa-plus ml-2 mr-2" ></i>Crear Reporte
                        </a>
                         <small>Registra un nuevo reporte APA.</small> </div>
                 </div>
                 <div class="ml-auto">
                     <div class="form-group">
                         <i class="fa fa-search"></i>
                         <input id="demo-input-search2" type="text" placeholder="Buscar" autocomplete="off">
                     </div>
                 </div>
             </div>
         </div>
         <tbody>
             <?php
             foreach ($datos_reportes as $reporte){
             echo '<tr>
                 <td>'.$reporte['fecha_reporte'].'</td>
                 <td>'.$reporte['tipo_reporte'].'</td>     
                 <td>'.$reporte['centro'].'</td>    
                 <td class="" ><span class="label label-table label-success text-center">'.$reporte['evaluacion_reporte'].'</span> </td>
                 <td class="text-center">
                    <a class="btn btn-sm btn-primary  " href="/amigosproanimal/pages/ver-reporte?id='.$reporte['id_reporte'].'"; >
                            <i  class="fa fa-eye"></i>
                    </a>
                    <a class="btn btn-sm btn-info "  href="/amigosproanimal/pages/editar-reporte?id='.$reporte['id_reporte'].'"; > 
                            <i class="fa fa-edit"></i>
                    </a>
                    <a class="btn btn-sm btn-danger "  href="/amigosproanimal/pages/borrar?dato=reporte&id='.$reporte['id_reporte'].'"; > 
                            <i class="fas fa-trash"></i>
                    </a>
                    
                 </td>
             </tr>';
             }
             
             ?>
         </tbody>
         <tfoot>
             <tr>
                 <td colspan="6">
                     <div class="text-right">
                         <ul class="pagination">
                         </ul>
                     </div>
                 </td>
             </tr>
         </tfoot>
     </table>
 </div>
                        </div>
    </div>
</div>

<?php
        include ('includes-body.php');
    ?>
    <?php //include ('footer.php');?>
</body>
</html>