<?php 
require_once('../loads.php');
// session_start();
validarSesion();      
$datos_mascotas = getMascotas();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas</title>
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
     <h3 class="card-title mt-2">Mascotas</h3>
     <h5 class="card-subtitle">Aquí encontrarás la información sobre los animales APA</h5>
     <table id="demo-foo-addrow2" class="table table-bordered table-stripped table-hover toggle-circle" data-page-size="7">
         <thead>
             <tr>
                 <th data-sort-initial="true" data-toggle="true">Nombre</th>
                 <th>Especie</th>
                 <th data-hide="phone, tablet">Centro APA</th>
                 <th data-hide="phone, tablet">Estatus</th>
                 <th data-sort-ignore="true" class="min-width">Opciones <small>(Ver,Editar, Borrar y Adoptar)</small></th>
             </tr>
         </thead>
         <div class="m-t-40">
             <div class="d-flex">
                 
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
             foreach ($datos_mascotas as $mascota){
             echo '<tr>
                 <td>'.$mascota['nombre'] .'</td>
                 <td>'.$mascota['especie'].'</td>
                 <td>'.$mascota['centro'] .'</td>    
                 <td class="" ><span class="label label-table label-'.badgeMascota($mascota).' text-center">'.$mascota['estatus'] .'</span> </td>
                 <td class="text-center">
                    <a class="btn btn-sm btn-primary mr-1 ml-1 " href="/amigosproanimal/pages/ver-mascota?id='.$mascota['id_mascota'] .'"; >
                            <i  class="fa fa-eye"></i>
                    </a>
                    <a class="btn btn-sm btn-info mr-1 ml-1"  href="/amigosproanimal/pages/editar-mascota?id='.$mascota['id_mascota'] .'"; > 
                            <i class="fa fa-edit"></i>
                    </a>
                    <a class="btn btn-sm btn-danger mr-1 ml-1" href="/amigosproanimal/pages/borrar?dato=mascota&id='.$mascota['id_mascota'] .'";>
                            <i class="fas fa-trash"></i>
                    </a> 
                    '; ?>
                    <?php if(paraAdopcion($mascota)): ?>
                        <a class="btn btn-sm btn-warning mr-1 ml-1" href="/amigosproanimal/pages/adopcion-01?id_mascota=<?php echo $mascota['id_mascota']; ?>" >
                            <i class="fas fa-hand-holding-heart"></i>
                     </a> 
                     <?php endif ?>
                 </td>
             </tr>
             <?php 
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