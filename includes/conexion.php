
<?php

/* HACIENDO LA CONEXION A LA BD */


function conectarBD() {
    require BASE_PATH . '/config/bd-config.php';
    $conexion = new mysqli($server, $user, $password, $bd, $port);
    if($conexion->connect_errno){    
        die("Ocurrio un error al conectarse al a base de datos");
    }else {
        return $conexion;
    }
 };

    ?>

