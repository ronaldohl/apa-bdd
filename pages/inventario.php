<?php 
require_once('../loads.php');
      
$datos_productos = getProductos();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
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
     <h3 class="card-title mt-2">Productos</h3>
     <h5 class="card-subtitle">Aquí encontrarás la información sobre los productos en almacen APA</h5>
     <table id="demo-foo-addrow2" class="table table-bordered table-stripped table-hover toggle-circle" data-page-size="7">
         <thead>
             <tr>
                 <th data-sort-initial="true" data-toggle="true">Nombre</th>
                 <th>Tipo</th>
                 <th data-hide="phone, tablet">Centro APA</th>
                 <th data-hide="phone, tablet">Unidad</th>
                 <th data-hide="phone, tablet">Cantidad</th>
                 <th data-sort-ignore="true" class="min-width">Opciones</th>
             </tr>
         </thead>
         <div class="m-t-40">
             <div class="d-flex">
                 <div class="mr-auto">
                     <div class="form-group">
                         <a id="demo-btn-addrow" href="/amigosproanimal/pages/nuevo-producto.php" class="btn btn-primary "><i class="fa fa-plus ml-2 mr-2" ></i> Nuevo Producto
                        </a>
                         <small>Registra un nuevo Producto.</small> </div>
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
             foreach ($datos_productos as $producto){
             echo '<tr>
                 <td>'.$producto['nombre'] .'</td>
                 <td>'.$producto['tipo'].'</td>
                 <td>'.$producto['unidad_medida'] .'</td>    
                 <td>'.$producto['cantidad'] .'</td>    
                 <td class="" ><span class="label label-table label-success text-center">'.$producto['centro'] .'</span> </td>
                 <td class="text-center">
                    <a class="btn btn-sm btn-primary mr-1 ml-1 " href="/amigosproanimal/pages/ver-producto?id='.$producto['id_producto'] .'"; >
                            <i  class="fa fa-eye"></i>
                    </a>
                    <a class="btn btn-sm btn-info mr-1 ml-1"  href="/amigosproanimal/pages/editar-producto?id='.$producto['id_producto'] .'"; > 
                            <i class="fa fa-edit"></i>
                    </a>
                    <a class="btn btn-sm btn-danger mr-1 ml-1" href="/amigosproanimal/pages/borrar?dato=producto&id='.$producto['id_producto'] .'";>
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