<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
    <?php
        include ('includes-head.php');
        require_once('../loads.php');
        // session_start();
        validarSesion();
        if(getPersonas()){
            $datos_personas = getPersonas();
        }
        if($_GET){   
        if($_GET['adopcion'] && $_GET['id_mascota']){
            $id_mascota = $_GET['id_mascota'];
            $band_adopcion = true;
        }
    }else{
        $id_mascota = 0;
        $band_adopcion = false;
    }

    ?>
</head>
<body class="">
<?php 
    include ('header.php');
?>
<div class="container">
    <div class="container">
    <div class="card">
 <div class="card-body">
     <h3 class="card-title mt-2">Personas</h3>
     <h5 class="card-subtitle">Aquí encontrarás la información sobre los nuestros rescatistas y adoptantes APA</h5>
     <table id="demo-foo-addrow2" class="table table-bordered table-stripped table-hover toggle-circle" data-page-size="7">
         <thead>
             <tr>
                 <th data-sort-initial="true" data-toggle="true">Nombre</th>
                 <th>Apellidos</th>
                 <th data-hide="phone, tablet">Centro APA</th>
                 <th data-hide="phone, tablet">Tipo</th>
                 <th data-sort-ignore="true" class="min-width">Opciones</th>
             </tr>
         </thead>
         <div class="m-t-40">
             <div class="d-flex">
                 <div class="mr-auto">
                     <div class="form-group">
                         <a id="demo-btn-addrow" href="/amigosproanimal/pages/nueva-persona.php" class="btn btn-primary "><i class="fa fa-plus ml-2 mr-2" ></i> Nueva Persona
                        </a>
                         <small>Registra una nueva Persona.</small> </div>
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
             foreach ($datos_personas as $persona){
             echo '<tr>
                 <td>'.$persona['nombre'] .'</td>
                 <td>'.$persona['apellido_paterno'].' '.$persona['apellido_materno'].'</td>
                 <td>'.$persona['centro'] .'</td>    
                 <td class="" ><span class="label label-table label-'.badgePersona($persona).' text-center">'.$persona['tipo_persona'] .'</span> </td>
                 <td class="text-center">
                    <a class="btn btn-sm btn-primary mr-1 ml-1 " href="/amigosproanimal/pages/ver-persona?id='.$persona['id_persona'] .'"; >
                            <i  class="fa fa-eye"></i>
                    </a>
                    <a class="btn btn-sm btn-info mr-1 ml-1"  href="/amigosproanimal/pages/editar-persona?id='.$persona['id_persona'] .'"; > 
                            <i class="fa fa-edit"></i>
                    </a>
                    <a class="btn btn-sm btn-danger mr-1 ml-1" href="/amigosproanimal/pages/borrar?daoto=persona&id='.$persona['id_persona'] .'";>
                            <i class="fas fa-trash"></i>
                    </a>
                    '; ?>
                    <?php if(esAdoptante($persona)&& $band_adopcion): ?>
                        <a class="btn btn-sm btn-warning mr-1 ml-1" href="/amigosproanimal/pages/adopcion-02?persona=<?php echo $persona['id_persona']; ?>&id_mascota=<?php echo $id_mascota; ?>" >
                            <i class="fas fa-hand-holding-heart"></i> Seleccionar
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
        include ('footer.php');
    ?>
</body>
</html>