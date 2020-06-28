<?php
    require_once('../loads.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminando</title>
    <?php include ('includes-head.php');?>
</head>
<body>

<?php include ('includes-body.php');?>
</body>
</html>

<?php
    if(!$_GET){
        //alv
    }

    $tabla = $_GET['dato'];
    $id = $_GET['id'];

    switch($tabla){
        case 'reporte' :
            deleteReporte($id);
        break;
        case 'adopcion' :
            deleteAdopcion($id);
        break;
        case 'donacion' :
            deleteDonacion($id);
        break;
        case 'mascota' :
            deleteMascota($id);
        break;
        case 'persona' :
            deletePersona($id);
        break;
        case 'producto' :
            deleteProducto($id);
        break;
        case 'rescate' :
            deleteRescate($id);
        break;
        case 'usuario' :
            deleteUsuario($id);
        break;
    }
?>