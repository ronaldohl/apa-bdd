
<?php

/* HACIENDO LA CONEXION A LA BD */


function conectarBD() {
    require BASE_PATH . '/config/bd-config.php';
    $conexion = new mysqli($server, $user, $password, $bd, $port);
    if($conexion->connect_errno){
        echo '<script>
        swal({
            title: "ERROR",
             text: "OCURRIÓ UN ERROR CONECTANDO A LA BD VOLVIENDO A INICIO!",
             type: "error"
        }).then (()=>{
          window.location.href = ("index.php");
            });
            </script>';
            
        die();
    }else {
        /* conexion exitosa */ 
        echo '<script>
            swal({
                title: "EXITO",
                text: "SE CONECTÓ A LA BD!",
                type: "success"
                }).then (()=>{
           
            });
            </script>';
            return $conexion;
    }
 };

    ?>

