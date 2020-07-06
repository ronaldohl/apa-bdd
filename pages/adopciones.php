<?php 
require_once('../loads.php');
      
$datos_adopciones = getAdopciones();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopciones</title>
    <?php
        include ('includes-head.php');                
    ?>
</head>
<body>
<?php 
    include ('header.php');
?>
<div class="container">
    <div class="container">
    <div class="card">
 <div class="card-body">
     <h3 class="card-title mt-2">Adopciones</h3>
     <h5 class="card-subtitle">Aquí podrás ver las mascotas adoptadas o realizar una nueva donación</h5>
     <table id="demo-foo-addrow2" class="table table-bordered table-stripped table-hover toggle-circle" data-page-size="7">
         <thead>
             <tr>
                 <th data-sort-initial="true" data-toggle="true">Fecha</th>
                 <th data-hide="phone, tablet">Centro APA</th>
                 <th>Anotaciones</th>
                 <th data-hide="phone, tablet">Tipo</th>    
                 <th data-sort-ignore="true" class="min-width">Opciones</th>
             </tr>
         </thead>
         <div class="m-t-40">
             <div class="d-flex">
                 <div class="mr-auto">
                     <div class="form-group">
                         <a id="demo-btn-addrow" href="/amigosproanimal/pages/mascotas.php" class="btn btn-primary "><i class="fa fa-plus ml-2 mr-2" ></i> Nueva Adopcion
                        </a>
                         <small>Registra un nueva Adopcion.</small> </div>
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
             foreach ($datos_adopciones as $adopcion){
             echo '<tr>
                 <td>'.$adopcion['fecha_adopcion'] .'</td>
                 <td>'.$adopcion['centro'].'</td>
                 <td>'.$adopcion['anotaciones'] .'</td>    
                 <td class="" ><span class="label label-table label-'.badgeAdopciones($adopcion) .' text-center">'.$adopcion['tipo'] .'</span> </td>
                 <td class="text-center">
                    <a class="btn btn-sm btn-primary mr-1 ml-1 " href="/amigosproanimal/pages/ver-adopcion?id='.$adopcion['id_adopcion'] .'"; >
                            <i  class="fa fa-eye"></i>
                    </a>
                    <a class="btn btn-sm btn-info mr-1 ml-1"  href="/amigosproanimal/pages/editar-adopcion?id='.$adopcion['id_adopcion'] .'"; > 
                            <i class="fa fa-edit"></i>
                    </a>
                    <a class="btn btn-sm btn-danger mr-1 ml-1" href="/amigosproanimal/pages/borrar?dato=adopcion&id='.$adopcion['id_adopcion'] .'";>
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
<div class="container mb-5 mt-5">
  
</div>

<?php
        include ('includes-body.php');
        // include ('footer.php');
    ?>
</body>
</html>