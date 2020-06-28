
<?php
    require_once('loads.php');
    session_start();

    if(!isset($_SESSION['usuario'])){
        //   echo 'NO SETEADA';
        //   global $CENTRO;
        //   print_r($CENTRO);
        header('Location: ./pages/login.php');
    }else{
        // global $CENTRO;
        // echo 'SET';
        // echo 'session:';
        // print_r($_SESSION);
        // echo 'CENTRO:';
        // print_r($CENTRO);
       // header('Location: ./pages/error-404.php');
      
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="">
    <!-- <link href="/amigosproanimal/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <!-- <link href="/amigosproanimal/assets/css/style.css" rel="stylesheet"> -->
    <!-- page css -->

    <?php 
    include('pages/includes-head.php');
    ?>
    <!-- You can change the theme colors from here -->
    <!-- <link href="/amigosproanimal/assets/css/colors/default-dark.css" id="theme" rel="stylesheet"> -->
</head>
<body> 
    <?php
    include('pages/header.php');
    ?>  
    
<div class="container ">
    <form class="form mt-6" action="/amigosproanimal/index.php" method='GET'>
        <div class="form-row mt-6">
            <div class="col mt-3">
                <input type="date" class="form-control" name="fecha" id='fecha'>
            </div>
        </div>
        <div class="form-row mt-2 ">
            <div class="col text-right ">
                <button class="btn btn-success mt-6" tipe="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
<?php 
        include('./pages/includes-body.php');
        // include('./pages/footer.php');
    ?>
</body>
</html>
<?php
if(isset($_POST['fecha'])){
    $fecha = $_POST['fecha'];
    echo 'Fecha: ->  '. $fecha;
}

// require  BASE_PATH .'includes/crud.php';
//     require('./models/tables.model.php');
    $datos_adopcion = array(
        'id_adopcion' => 1,
        'id_persona' => 1,
        'id_mascota' => 1,
        'fecha_adopcion' => '2020-06-11',
        'anotaciones' => 'este es un comentario editado',
        'tipo' => 'DEFINITIVA',
        'activo' => 1,
        'centro' => 'CENTRO' 
    );

    $datos_domicilio = array(
        'id_domicilio' => 1,
        'calle' => 'ROSALIA MONROY 104',
        'numero_ext' => 1, 
        'interior' => 'A', 
        'colonia' => 'LIC. JOSÉ LÓPEZ PORTILLO', 
        'cp' => 20206, 
        'municipio' => 'AGUASCALIENTES', 
        'centro' => 'NORTE', 
        'estado' => '',
        'activo' => ''
        );

 $datos_donacion = array(
            'id_donacion' => 1,
            'centro' => 'CENTRO', 
            'fecha_donacion' => '2020-06-23',
            'nombre_donante' => 'RONALDO', 
            'rfc' => 'HEL961228UG6', 
            'id_domicilio' => 1,
            'telefono' => '4491234567', 
            'correo' => 'ronaldo@actual.com', 
            'tipo_donacion' => 'DINERO', 
            'monto' => (float)500,
            'descripcion' => 'DONACION AL CENTRO APA',
            'activo' => ''  
);

$datos_mascota = array(
    'id_mascota' => 1 , 
    'id_rescate' => 1, 
    'nombre' => 'BLANCO', 
    'especie' => 'GATO', 
    'detalles_especie' => 'PEQUEÑO', 
    'fecha_nac' => '2019-01-20',
    'condicion_rescate' => 'MALA',
    'fecha_desparasitacion' => '', 
    'fecha_esterilizacion' => '', 
    'complicaciones' => 'SE ENCUENTRA LASTIMADO DE UN OJO', 
    'tratamiento' => '', 
    'anotaciones' => '', 
    'estatus' => 'RESGUARDO-APA', 
    'activo' => '', 
    'fecha_alta' => '', 
    'centro' => 'NORTE'
);

$datos_persona = array(
    'id_persona'=> 1, 
    'tipo_persona'=> 'RESCATISTA', 
    'nombre'=> 'RONALDO',
    'apellido_paterno'=> 'HERNÁNDEZ',
    'apellido_materno'=> 'LÓPEZ',
    'fecha_nacimiento'=> '1996-12-28', 
    'celular'=> 4492272775,
    'telefono'=> 4499999999,
    'correo'=> 'ronaldo@apa.com',
    'id_domicilio'=> 1,        
    'fecha_alta'=> '',        
    'activo'=> '',        
    'centro'=> 'CENTRO'
);

$datos_producto = array(
    'id_producto'=> 2,
    'nombre'=> 'COVID-19',
    'tipo'=> 'VACUNA',
    'unidad_medida'=> 'DOSIS',
    'cantidad'=> 45,
    'descripcion'=> 'CURA CONTRA COVID v3',
    'centro'=> 'NORTE',
    'activo'=> '',
    'fecha_alta'=> ''
);
$datos_reporte = array(
    'id_reporte'=>2,
    'tipo_reporte'=>'CALLEJERO',
    'descripcion_reporte'=>'PERRO CALLEJERO POR DUEÑOS NO LE DEJAN COMIDA Y ESTA ENCADENADO',
    'evaluacion_reporte'=>'RESCATAR',
    'fecha_reporte'=>'2020-06-25',
    'detalles_tipo'=>'PARA RESCATE ',
    'centro'=>'NORTE',
    'detalles_evaluacion'=>'PROGRAMAR '
);


$datos_rescate = array (
    'id_rescate'=>2,
    'id_persona'=> 5,
    'id_domicilio'=>2,
    'fecha_rescate'=>'2020-06-25',
    'anotaciones'=>'SE POSPONE',
    'centro'=>'CENTRO',
    'activo'=>''
);

$datos_usuario = array (
    'id_usuario' => 28,
    'nombre_usuario' => 'actualizado',
    'password' => 'ronaldo55',
    'centro'   => 'NORTE',
    'activo'   => '',
    'fecha_alta'   => '',
    'rol'   => ''
);

$datos_vacuna_mascota = array (
    'id_vacuna_mascota' => 1,
    'id_producto' => 1,
    'id_mascota' => 1,
    'fecha' => '2020-10-10',
    'centro' => 'NORTE'
);


    // print_r (getMascota(1));
    /*print_r($adopcion);
    echo '</pre>';
    echo "TO OBJECT";
    $object = json_decode(json_encode((object) $adopcion), FALSE);
    $adopcionObj = (object) $adopcion;
    echo '<pre>';
    print_r($adopcionObj);
    echo '</pre>';
    echo 'adopcion :';
    echo $object->anotaciones;
*/  
    // print_r(postDonacion($datos_donacion));
    // pushMascota($datos_mascota);
    // pushProducto($datos_producto);
    // postReporte($datos_reporte);
    // pushRescate($datos_rescate);
    // pushVacunaMascota($datos_vacuna_mascota);
    //  print_r(postUsuario($datos_usuario));
    //  print_r(pushAdopcion($datos_adopcion));
    //  print_r(putAdopcion($datos_adopcion));
    //  print_r(putDomicilio($datos_domicilio));
    //   print_r(putDonacion($datos_donacion));
    //   print_r(putMascota($datos_mascota));
    //    print_r(putPersona($datos_persona));
    //    print_r(pushProducto($datos_producto));
//  print_r(putProducto($datos_producto));
// print_r(putReporte($datos_reporte));
// print_r(putRescate($datos_rescate));
// print_r(putUsuario($datos_usuario));

// deleteAdopcion(4);
// deleteDomicilio(1);
// deleteDonacion(1);
// deleteMascota(3);
 //print_r(getMascotas());

?>