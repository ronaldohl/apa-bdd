<?php

// require('./config/config.php');
require('../loads.php');
require(BASE_PATH . 'includes/conexion.php');
require(BASE_PATH . 'config/bd-table-names.php');
require(BASE_PATH . 'includes/functions.php');
$HOST = $HOST; 
$mascota   = $table_mascota;
$persona   = $table_persona;
$rescate   = $table_rescate;
$reporte   = $table_reporte;
$domicilio = $table_domicilio;
$adopcion   = $table_adopcion;
$donacion   = $table_donacion;
$producto   = $table_producto;
$usuario   = $table_usuario;
$vacuna_mascota   = $table_vacuna_mascota;
$conexionbd = conectarBD();
$lock_tables = 'LOCK TABLES';
$unlock_tables = 'UNLOCK TABLES';
/*****************GET ************** */
function getMascotas (){
        global $mascota;    
        global $HOST;           
        $sql = "SELECT * FROM $mascota WHERE activo = '1' ";
        global $conexionbd;
        $res =   $conexionbd->query($sql);
        if($res->num_rows){            
            $i = 0;
            $bytes = 0;
            while($row = $res->fetch_assoc()){
                $datos[$i] = ($row);
                $i++;
            }
            write_file('./files/readbd.log', "R $mascota ROW $i ");                
        }else{
            echo '<script>
            swal({   
                title: "Are you sure?",   
                text: "You will not be able to recover this imaginary file!",   
                type: "warning",   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Yes, delete it!",   
                
            }, function(){   
                swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
            });
            </script>';
            // sleep(3000);
            die();
            // return null;
            /*echo '<script>
            swal({
            title: "ERROR",
            text: "NO HAY DATOS PARA MOSTRAR!",
            type: "error"
             }).then (()=>{
           window.location.href = ("/amigosproanimal/pages/home.php");
            });
            </script>';*/
            
        }
        
        return $datos;
    
};

function getAdopciones (){
    global $adopcion;    
    global $HOST;           
    $sql = "SELECT * FROM $adopcion WHERE activo = '1'";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $adopcion ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
    return $datos;

};
function getDomicilios (){
    global $domicilio;    
    global $HOST;           
    $sql = "SELECT * FROM $domicilio WHERE activo = '1'";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $domicilio ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
    return $datos;

};

function getDonaciones (){
    global $donacion;    
    global $HOST;           
    $sql = "SELECT * FROM $donacion WHERE activo = '1'";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $donacion ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
    return $datos;

};

function getPersonas(){
    global $persona;    
    global $HOST;           
    $sql = "SELECT * FROM $persona WHERE activo = '1'";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $persona ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
    return $datos;

};

function getProductos(){
    global $producto;    
    global $HOST;           
    $sql = "SELECT * FROM $producto WHERE activo = '1'";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $producto ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
    return $datos;

};

function getReportes(){
    global $reporte;    
    global $HOST;           
    $sql = "SELECT * FROM $reporte WHERE activo = '1'";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $reporte ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }    
    return $datos;

};
function getRescates(){
    global $rescate;    
    global $HOST;           
    $sql = "SELECT * FROM $rescate WHERE activo = '1'";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $rescate ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    return $datos;
};

function getUsuarios(){
    global $usuario;    
    global $HOST;           
    $sql = "SELECT * FROM $usuario WHERE activo = '1'";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $usuario ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }    
    return $datos;
};

function getVacunasMascota($id_mascota){
    global $vacuna_mascota;    
    global $HOST;           
    $sql = "SELECT * FROM $vacuna_mascota WHERE id_mascota = $id_mascota";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $vacuna_mascota ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
    return $datos;

};
/*****************GET BY ID ************** */
function getAdopcion($id_adopcion){
    global $adopcion;    
    global $HOST;           
    $sql = "SELECT * FROM $adopcion WHERE id_adopcion = $id_adopcion AND activo = '1' ";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $adopcion ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
    return $datos;

};

function getDomicilio($id_domicilio){
    global $domicilio;    
    global $HOST;           
    $sql = "SELECT * FROM $domicilio WHERE id_domicilio= $id_domicilio AND activo = '1' ";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $domicilio ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
    return $datos;

};
function getDonacion($id_donacion){
    global $donacion;    
    global $HOST;           
    $sql = "SELECT * FROM $donacion WHERE id_donacion = $id_donacion AND activo = '1' ";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $donacion ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
    return $datos;

};
function getMascota($id_mascota){
    global $mascota;    
    global $HOST;           
    $sql = "SELECT * FROM $mascota WHERE id_mascota = $id_mascota AND activo = '1' ";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $mascota ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
    return $datos;

};
function getPersona($id_persona){
    global $persona;    
    global $HOST;           
    $sql = "SELECT * FROM $persona WHERE id_persona = $id_persona AND activo = '1' ";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $persona ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
    return $datos;

};


function getProducto($id_producto){
    global $producto;    
    global $HOST;           
    $sql = "SELECT * FROM $producto WHERE id_producto = $id_producto AND activo = '1'";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $producto ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
    return $datos;

};

function getReporte($id_reporte){
    global $reporte;    
    global $HOST;           
    $sql = "SELECT * FROM $reporte WHERE id_reporte = $id_reporte AND activo = '1'";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $reporte ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
    return $datos;

};
function getRescate($id_rescate){
    global $rescate;    
    global $HOST;           
    $sql = "SELECT * FROM $rescate WHERE id_rescate = $id_rescate AND activo = '1'";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $rescate ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
    return $datos;

};
function getUsuario($id_usuario){
    global $usuario;    
    global $HOST;           
    $sql = "SELECT * FROM $usuario WHERE id_usuario = $id_usuario AND activo = '1'";
    global $conexionbd;
    $res =   $conexionbd->query($sql);
    if($res->num_rows){            
        $i = 0;
        $bytes = 0;
        while($row = $res->fetch_assoc()){
            $datos[$i] = ($row);
            $i++;
        }
        write_file('./files/readbd.log', "R $usuario ROW $i ");                
    }else{
        echo '<script>
        swal({
        title: "ERROR",
        text: "NO HAY DATOS PARA MOSTRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
    return $datos;

};
/*****************POST ************** */
function postAdopcion($datos){
    //Conexion bd
    global $conexionbd;
    global $adopcion;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("INSERT INTO $adopcion (id_persona, id_mascota, anotaciones, tipo, centro, fecha_adopcion)
        VALUES ($datosObj->id_persona, $datosObj->id_mascota, '$datosObj->anotaciones', '$datosObj->tipo', '$datosObj->centro', '$datosObj->fecha_adopcion' ) ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $adopcion WRITE");
        $conexionbd->query($sql);
        if($conexionbd->affected_rows>=1){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE REGISTRÓ TU ADOPCIÓN!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            write_file('./files/writebd.log', "R $adopcion ROW 1 -"); 
            $id_res = $conexionbd->insert_id;
            $conexionbd->query($unlock_tables);
            return getAdopcion($id_res);
        }else{
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
        }
};
function postDomicilio($datos){
        //Conexion bd
        global $conexionbd;
        global $domicilio;
        $datosObj = json_decode(json_encode((object) $datos), FALSE);
            $sql = ("INSERT INTO $domicilio (calle, numero_ext, interior, colonia, cp, municipio, centro)
            VALUES ('$datosObj->calle', $datosObj->numero_ext, '$datosObj->interior', '$datosObj->colonia', $datosObj->cp, '$datosObj->municipio', '$datosObj->centro' ) ") ;
            global $lock_tables;
            global $unlock_tables;
            $conexionbd->query("$lock_tables $domicilio WRITE");
            $conexionbd->query($sql);
            if($conexionbd->affected_rows>=1){
                //Insert correcto
                echo '<script>
                swal({
                    title: "GRACIAS",
                    text: "SE REGISTRÓ EL DOMICILIO!",
                    type: "success"
                }).then (()=>{               
                });
                </script>';
                write_file('./files/writebd.log', "R $domicilio ROW 1 "); 
                $id_res = $conexionbd->insert_id;
                $conexionbd->query($unlock_tables);
                return getDomicilio($id_res);
            }else{
                echo '<script>
                swal({
                    title: "ERROR",
                    text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                    type: "error"
                }).then (()=>{
                   window.location.href = ("/amigosproanimal/index.php");
                });
                    </script>';          
                
            }
};

function postDonacion($datos){
            //Conexion bd
            global $conexionbd;
            global $donacion;
            $datosObj = json_decode(json_encode((object) $datos), FALSE);
                $sql = ("INSERT INTO $donacion (centro, fecha_donacion, nombre_donante, rfc, id_domicilio, telefono, correo, tipo_donacion, monto, descripcion)
                VALUES ('$datosObj->centro', '$datosObj->fecha_donacion', '$datosObj->nombre_donante', '$datosObj->rfc', $datosObj->id_domicilio, $datosObj->telefono, '$datosObj->correo', '$datosObj->tipo_donacion', $datosObj->monto, '$datosObj->descripcion' ) ") ;
                global $lock_tables;
                global $unlock_tables;
                $conexionbd->query("$lock_tables $donacion WRITE");
                $conexionbd->query($sql);
                if($conexionbd->affected_rows>=1){
                    //Insert correcto
                    echo '<script>
                    swal({
                        title: "GRACIAS",
                        text: "SE REGISTRÓ EL DONATIVO!",
                        type: "success"
                    }).then (()=>{               
                    });
                    </script>';
                    write_file('./files/writebd.log', "R $donacion ROW 1 "); 
                    $id_res = $conexionbd->insert_id;
                    $conexionbd->query($unlock_tables);
                    return getDonacion($id_res);
                   
                }else{
                    echo '<script>
                    swal({
                        title: "ERROR",
                        text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                        type: "error"
                    }).then (()=>{
                       window.location.href = ("/amigosproanimal/index.php");
                    });
                        </script>';          
                    
                   
                }
};

function postMascota($datos){
    //Conexion bd
    global $conexionbd;
    global $mascota;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("INSERT INTO $mascota 
            (id_rescate, 
             nombre,
             especie,
             detalles_especie,
             fecha_nac, 
             condicion_rescate,
             fecha_desparasitacion,
             fecha_esterilizacion,
             complicaciones,
             tratamiento,
             anotaciones,
             estatus,
             centro)
        VALUES ( $datosObj->id_rescate,
                '$datosObj->nombre', 
                '$datosObj->especie',
                '$datosObj->detalles_especie', 
                '$datosObj->fecha_nac',
                '$datosObj->condicion_rescate',
                '$datosObj->fecha_desparasitacion', 
                '$datosObj->fecha_esterilizacion', 
                '$datosObj->complicaciones',
                '$datosObj->tratamiento',
                '$datosObj->anotaciones',
                '$datosObj->estatus',
                '$datosObj->centro' ) ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $mascota WRITE");
        $conexionbd->query($sql);
        if($conexionbd->affected_rows>=1){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE REGISTRÓ LA MASCOTA!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            write_file('./files/writebd.log', "R $mascota ROW 1 "); 
            $id_res = $conexionbd->insert_id;
            $conexionbd->query($unlock_tables);
            return getMascota($id_res);
        }else{
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
            
           
        }
};

function postPersona($datos){
    //Conexion bd
    global $conexionbd;
    global $persona;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("INSERT INTO $persona 
            (tipo_persona, 
             nombre,
             apellido_paterno,
             apellido_materno,
             fecha_nacimiento, 
             celular,
             telefono,
             correo,
             id_domicilio,        
             centro)
        VALUES ('$datosObj->tipo_persona',
                '$datosObj->nombre', 
                '$datosObj->apellido_paterno',
                '$datosObj->apellido_materno', 
                '$datosObj->fecha_nacimiento',
                 $datosObj->celular,
                 $datosObj->telefono, 
                '$datosObj->correo', 
                 $datosObj->id_domicilio,
                '$datosObj->centro'
                 ) ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $persona WRITE");
        $conexionbd->query($sql);
        if($conexionbd->affected_rows>=1){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE REGISTRÓ LA PERSONA!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            $id_res = $conexionbd->insert_id;
            $conexionbd->query($unlock_tables);
            return getPersona($id_res);
        }else{
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
            
           
        }
};

function postProducto($datos){
    //Conexion bd
    global $conexionbd;
    global $producto;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("INSERT INTO $producto 
            (nombre, 
             tipo,
             unidad_medida,
             cantidad,
             descripcion,                          
             centro)
        VALUES ('$datosObj->nombre',
                '$datosObj->tipo', 
                '$datosObj->unidad_medida',
                 $datosObj->cantidad, 
                '$datosObj->descripcion',
                '$datosObj->centro'                
                 ) ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $producto WRITE");
        $conexionbd->query($sql);
        if($conexionbd->affected_rows>=1){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE REGISTRÓ EL PRODUCTO!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            write_file('./files/writebd.log', "R $producto ROW 1 "); 
            $id_res = $conexionbd->insert_id;
            $conexionbd->query($unlock_tables);
            return getProducto($id_res);
        }else{
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
            
           
        }
};

function postReporte($datos){
    //Conexion bd
    global $conexionbd;
    global $reporte;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("INSERT INTO $reporte 
            (tipo_reporte, 
             descripcion_reporte,
             evaluacion_reporte,
             fecha_reporte,
             detalles_tipo,                          
             detalles_evaluacion)
        VALUES ('$datosObj->tipo_reporte',
                '$datosObj->descripcion_reporte', 
                '$datosObj->evaluacion_reporte',
                '$datosObj->fecha_reporte', 
                '$datosObj->detalles_tipo',
                '$datosObj->detalles_evaluacion'                
                 ) ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $reporte WRITE");
        $conexionbd->query($sql);
        if($conexionbd->affected_rows>=1){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE REGISTRÓ EL REPORTE!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            write_file('./files/writebd.log', "R $reporte ROW 1 "); 
            $id_res = $conexionbd->insert_id;
            $conexionbd->query($unlock_tables);
            return getReporte($id_res);
        }else{
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
            
           
        }
};

function postRescate($datos){
    //Conexion bd
    global $conexionbd;
    global $rescate;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("INSERT INTO $rescate 
            (id_persona, 
             id_domicilio,
             fecha_rescate,
             anotaciones,
             centro                       
             )
        VALUES ( $datosObj->id_persona,
                 $datosObj->id_domicilio, 
                '$datosObj->fecha_rescate',
                '$datosObj->anotaciones', 
                '$datosObj->centro'                
                 ) ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $rescate WRITE");
        $conexionbd->query($sql);
        if($conexionbd->affected_rows>=1){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE REGISTRÓ EL RESCATE!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            write_file('./files/writebd.log', "R $rescate ROW 1 "); 
            $id_res = $conexionbd->insert_id;
            $conexionbd->query($unlock_tables);
            return getRescate($id_res);
        }else{
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
            
           
        }
};

function postUsuario($datos){
    //Conexion bd
    global $conexionbd;
    global $usuario;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("INSERT INTO $usuario 
            (nombre_usuario, 
             password,
             centro                                       
             )
        VALUES ('$datosObj->nombre_usuario',
                '$datosObj->password', 
                '$datosObj->centro'          
                 ) ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $usuario WRITE");
         $conexionbd->query($sql);
        //  print_r($conexionbd);
        if($conexionbd->affected_rows>=1){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE REGISTRÓ EL USUARIO!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            write_file('./files/writebd.log', "R $usuario ROW 1 "); 
            $id_res = $conexionbd->insert_id;
            $conexionbd->query($unlock_tables);
            return getUsuario($id_res);
            
            
        }else{
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
            
           
        }
};

function postVacunaMascota($datos){
    //Conexion bd
    global $conexionbd;
    global $vacuna_mascota;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("INSERT INTO $vacuna_mascota 
            (id_producto, 
             id_mascota,
             fecha,                                       
             centro                                       
             )
        VALUES ( $datosObj->id_producto,
                 $datosObj->id_mascota, 
                '$datosObj->fecha',          
                '$datosObj->centro'         
                 ) ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $vacuna_mascota WRITE");
        $conexionbd->query($sql);
        if($conexionbd->affected_rows>=1){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE REGISTRÓ LA APLICACIÓN!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            write_file('./files/writebd.log', "R $vacuna_mascota ROW 1 "); 
            $id_res = $conexionbd->insert_id;
            $conexionbd->query($unlock_tables);
            
        }else{
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
            
           
        }
};

/******************PUT ********* */
function putAdopcion($datos){
    //Conexion bd
    global $conexionbd;
    global $adopcion;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("UPDATE $adopcion SET
        id_persona =  $datosObj->id_persona,
         id_mascota =  $datosObj->id_mascota,
         anotaciones = '$datosObj->anotaciones',
         tipo = '$datosObj->tipo',
         centro = '$datosObj->centro',
         fecha_adopcion = '$datosObj->fecha_adopcion'
        WHERE 
             id_adopcion = $datosObj->id_adopcion
                   ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $adopcion WRITE");
        $conexionbd->query($sql);
        print_r($conexionbd->error);
        if(!$conexionbd->error){
            //UPDATE correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE ACTUALIZO LA ADOPCIÓN!",
                type: "success"
            }).then (()=>{
                    
            });
            </script>';
            write_file('./files/writebd.log', "R $adopcion ROW 1 -"); 
            $conexionbd->query($unlock_tables);
            return getAdopcion($datosObj->id_adopcion);
        }else{
            return $conexionbd->error;
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
        }
};

function putDomicilio($datos){
    //Conexion bd
    global $conexionbd;
    global $domicilio;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("UPDATE $domicilio SET 
            calle ='$datosObj->calle', 
            numero_ext = $datosObj->numero_ext, 
            interior = '$datosObj->interior',  
            colonia = '$datosObj->colonia',  
            cp = $datosObj->cp,  
            municipio ='$datosObj->municipio',  
            centro ='$datosObj->centro'  
        WHERE id_domicilio = $datosObj->id_domicilio 
             ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $domicilio WRITE");
        $conexionbd->query($sql);
        if(!$conexionbd->error){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE ACTUALIZÓ EL DOMICILIO!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            write_file('./files/writebd.log', "R $domicilio ROW 1 "); 
            $conexionbd->query($unlock_tables);
            return getDomicilio($datosObj->id_domicilio);
        }else{
           
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
            
        }
};

function putDonacion($datos){
    //Conexion bd
    global $conexionbd;
    global $donacion;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("UPDATE $donacion SET
         centro  = '$datosObj->centro',
         fecha_donacion = '$datosObj->fecha_donacion', 
         nombre_donante = '$datosObj->nombre_donante', 
         rfc = '$datosObj->rfc', 
         id_domicilio = $datosObj->id_domicilio,
         telefono = $datosObj->telefono, 
         correo = '$datosObj->correo',
         tipo_donacion  = '$datosObj->tipo_donacion',
         monto  = $datosObj->monto,
         descripcion = '$datosObj->descripcion'
        WHERE id_donacion = $datosObj->id_donacion
         ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $donacion WRITE");
        $conexionbd->query($sql);
        if(!$conexionbd->error){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE ACTUALIZO EL DONATIVO!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            write_file('./files/writebd.log', "R $donacion ROW 1 "); 
            $conexionbd->query($unlock_tables);
            return getDonacion($datosObj->id_donacion);
           
        }else{
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
            
           
        }
};

function putMascota($datos){
    //Conexion bd
    global $conexionbd;
    global $mascota;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("UPDATE  $mascota SET
             id_rescate = $datosObj->id_rescate,
             nombre = '$datosObj->nombre', 
             especie= '$datosObj->especie',
             detalles_especie = '$datosObj->detalles_especie', 
             fecha_nac = '$datosObj->fecha_nac',
             condicion_rescate = '$datosObj->condicion_rescate',
             fecha_desparasitacion = '$datosObj->fecha_desparasitacion', 
             fecha_esterilizacion = '$datosObj->fecha_esterilizacion', 
             complicaciones = '$datosObj->complicaciones',
             tratamiento = '$datosObj->tratamiento',
             anotaciones = '$datosObj->anotaciones',
             estatus = '$datosObj->estatus',
             centro = '$datosObj->centro' 
        WHERE id_mascota = $datosObj->id_mascota ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $mascota WRITE");
        $conexionbd->query($sql);
        if(!$conexionbd->error){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE ACTUALIZÓ LA MASCOTA!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            write_file('./files/writebd.log', "R $mascota ROW 1 "); 
            $conexionbd->query($unlock_tables);
            return getMascota($datosObj->id_mascota);
        }else{
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
            
           
        }
};

function putPersona($datos){
    //Conexion bd
    global $conexionbd;
    global $persona;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("UPDATE $persona SET
             tipo_persona = '$datosObj->tipo_persona', 
             nombre = '$datosObj->nombre', 
             apellido_paterno = '$datosObj->apellido_paterno',
             apellido_materno = '$datosObj->apellido_materno', 
             fecha_nacimiento = '$datosObj->fecha_nacimiento', 
             celular = $datosObj->celular,
             telefono = $datosObj->telefono, 
             correo = '$datosObj->correo', 
             id_domicilio = $datosObj->id_domicilio,        
             centro = '$datosObj->centro'
             WHERE id_persona = $datosObj->id_persona
              ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $persona WRITE");
        $conexionbd->query($sql);
        if(!$conexionbd->error){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE ACTUALIZÓ LA PERSONA!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            $conexionbd->query($unlock_tables);
            return getPersona($datosObj->id_persona);
        }else{
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
            
           
        }
};

function putProducto($datos){
    //Conexion bd
    global $conexionbd;
    global $producto;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("UPDATE $producto SET 
             nombre = '$datosObj->nombre', 
             tipo = '$datosObj->tipo', 
             unidad_medida = '$datosObj->unidad_medida',
             cantidad = $datosObj->cantidad, 
             descripcion = '$datosObj->descripcion',                          
             centro = '$datosObj->centro' 
            WHERE id_producto = $datosObj->id_producto ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $producto WRITE");
        $conexionbd->query($sql);
        if(!$conexionbd->error){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE ACTUALIZÓ EL PRODUCTO!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            write_file('./files/writebd.log', "R $producto ROW 1 "); 
            $conexionbd->query($unlock_tables);
            return getProducto($datosObj->id_producto);
        }else{
            return $conexionbd->error;
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
            
           
        }
};

function putReporte($datos){
    //Conexion bd
    global $conexionbd;
    global $reporte;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("UPDATE $reporte SET
             tipo_reporte ='$datosObj->tipo_reporte',
             descripcion_reporte ='$datosObj->descripcion_reporte', 
             evaluacion_reporte ='$datosObj->evaluacion_reporte',
             fecha_reporte ='$datosObj->fecha_reporte', 
             detalles_tipo ='$datosObj->detalles_tipo',
             detalles_evaluacion ='$datosObj->detalles_evaluacion',                
             centro ='$datosObj->centro'                
        WHERE id_reporte = $datosObj->id_reporte ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $reporte WRITE");
        $conexionbd->query($sql);
        if(!$conexionbd->error){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE ACTUALIZÓ EL REPORTE!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            write_file('./files/writebd.log', "R $reporte ROW 1 "); 
            $conexionbd->query($unlock_tables);
            return getReporte($datosObj->id_reporte);
        }else{
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
            
           
        }
};

function putRescate($datos){
    //Conexion bd
    global $conexionbd;
    global $rescate;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("UPDATE $rescate SET
             id_persona = $datosObj->id_persona,
             id_domicilio = $datosObj->id_domicilio, 
             fecha_rescate = '$datosObj->fecha_rescate',
             anotaciones = '$datosObj->anotaciones', 
             centro = '$datosObj->centro'
        WHERE id_rescate = $datosObj->id_rescate ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $rescate WRITE");
        $conexionbd->query($sql);
        if(!$conexionbd->error){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE ACTUALIZÓ EL RESCATE!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            write_file('./files/writebd.log', "R $rescate ROW 1 "); 
            $conexionbd->query($unlock_tables);
            return getRescate($datosObj->id_rescate);
        }else{
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
            
           
        }
};

function putUsuario($datos){
    //Conexion bd
    global $conexionbd;
    global $usuario;
    $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = ("UPDATE $usuario SET 
             nombre_usuario  = '$datosObj->nombre_usuario',
             password = '$datosObj->password', 
             centro = '$datosObj->centro'
        WHERE id_usuario = $datosObj->id_usuario ") ;
        global $lock_tables;
        global $unlock_tables;
        $conexionbd->query("$lock_tables $usuario WRITE");
         $conexionbd->query($sql);
        //  print_r($conexionbd);
        if(!$conexionbd->error){
            //Insert correcto
            echo '<script>
            swal({
                title: "GRACIAS",
                text: "SE ACTUALIZO EL USUARIO!",
                type: "success"
            }).then (()=>{               
            });
            </script>';
            write_file('./files/writebd.log', "R $usuario ROW 1 "); 
            $conexionbd->query($unlock_tables);
            return getUsuario($datosObj->id_usuario);                        
        }else{
            echo '<script>
            swal({
                title: "ERROR",
                text: "OCURRIÓ UN ERROR VOLVIENDO A INICIO!",
                type: "error"
            }).then (()=>{
               window.location.href = ("/amigosproanimal/index.php");
            });
                </script>';          
            
           
        }
};

/***********DELETE BY ID ****** */

function deleteAdopcion($id_adopcion){
    global $adopcion;    
    global $HOST;
    $sql = "UPDATE $adopcion SET activo = 0 WHERE id_adopcion = $id_adopcion ";
    global $conexionbd;
     $conexionbd->query($sql);
    if(!$conexionbd->error){            
        echo '<script>
            swal({
                title: "BORRADO",
                text: "SE BORRÓ LA ADOPCION !",
                type: "info"
            }).then (()=>{               
            });
            </script>';
        write_file('./files/writebd.log', "D $adopcion ROW 1");
        return true;
    }else{        
        echo '<script>
        swal({
        title: "ERROR",
        text: "OCURRIÓ UN ERROR AL BORRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
    
   

};

function deleteDomicilio($id_domicilio){
    global $domicilio;    
    global $HOST;
    $sql = "UPDATE $domicilio SET activo = 0 WHERE id_domicilio = $id_domicilio ";
    global $conexionbd;
     $conexionbd->query($sql);
    if(!$conexionbd->error){            
        echo '<script>
            swal({
                title: "BORRADO",
                text: "SE BORRÓ EL DOMICILIO !",
                type: "info"
            }).then (()=>{               
            });
            </script>';
        write_file('./files/writebd.log', "D $domicilio ROW 1");
        return true;
    }else{        
        echo '<script>
        swal({
        title: "ERROR",
        text: "OCURRIÓ UN ERROR AL BORRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
};

function deleteDonacion($id_donacion){
    global $donacion;    
    global $HOST;
    $sql = "UPDATE $donacion SET activo = 0 WHERE id_donacion = $id_donacion ";
    global $conexionbd;
     $conexionbd->query($sql);
    if(!$conexionbd->error){            
        echo '<script>
            swal({
                title: "BORRADO",
                text: "SE BORRÓ LA DONACION !",
                type: "info"
            }).then (()=>{               
            });
            </script>';
        write_file('./files/writebd.log', "D $donacion ROW 1");
        return true;
    }else{        
        echo '<script>
        swal({
        title: "ERROR",
        text: "OCURRIÓ UN ERROR AL BORRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
};

function deleteMascota($id_mascota){
    global $mascota;    
    global $HOST;
    $sql = "UPDATE $mascota SET activo = 0 WHERE id_mascota = $id_mascota ";
    global $conexionbd;
     $conexionbd->query($sql);
    if(!$conexionbd->error){            
        echo '<script>
            swal({
                title: "BORRADO",
                text: "SE BORRÓ LA MASCOTA !",
                type: "info"
            }).then (()=>{               
            });
            </script>';
        write_file('./files/writebd.log', "D $mascota ROW 1");
        return true;
    }else{        
        echo '<script>
        swal({
        title: "ERROR",
        text: "OCURRIÓ UN ERROR AL BORRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
};

function deletePersona($id_persona){
    global $persona;    
    global $HOST;
    $sql = "UPDATE $persona SET activo = 0 WHERE id_persona = $id_persona ";
    global $conexionbd;
     $conexionbd->query($sql);
    if(!$conexionbd->error){            
        echo '<script>
            swal({
                title: "BORRADO",
                text: "SE BORRÓ LA PERSONA !",
                type: "info"
            }).then (()=>{               
            });
            </script>';
        write_file('./files/writebd.log', "D $persona ROW 1");
        return true;
    }else{        
        echo '<script>
        swal({
        title: "ERROR",
        text: "OCURRIÓ UN ERROR AL BORRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
};

function deleteProducto($id_producto){
    global $producto;    
    global $HOST;
    $sql = "UPDATE $producto SET activo = 0 WHERE id_producto = $id_producto ";
    global $conexionbd;
     $conexionbd->query($sql);
    if(!$conexionbd->error){            
        echo '<script>
            swal({
                title: "BORRADO",
                text: "SE BORRÓ EL PRODUCTO !",
                type: "info"
            }).then (()=>{               
            });
            </script>';
        write_file('./files/writebd.log', "D $producto ROW 1");
        return true;
    }else{        
        echo '<script>
        swal({
        title: "ERROR",
        text: "OCURRIÓ UN ERROR AL BORRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
};


function deleteReporte($id_reporte){
    global $reporte;    
    global $HOST;
    $sql = "UPDATE $reporte SET activo = 0 WHERE id_reporte = $id_reporte ";
    global $conexionbd;
     $conexionbd->query($sql);
    if(!$conexionbd->error){            
        echo '<script>
            swal({
                title: "BORRADO",
                text: "SE BORRÓ EL REPORTE !",
                type: "info"
            }).then (()=>{               
            });
            </script>';
        write_file('./files/writebd.log', "D $reporte ROW 1");
        return true;
    }else{        
        echo '<script>
        swal({
        title: "ERROR",
        text: "OCURRIÓ UN ERROR AL BORRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
};

function deleteRescate($id_rescate){
    global $rescate;    
    global $HOST;
    $sql = "UPDATE $rescate SET activo = 0 WHERE id_rescate = $id_rescate ";
    global $conexionbd;
     $conexionbd->query($sql);
    if(!$conexionbd->error){            
        echo '<script>
            swal({
                title: "BORRADO",
                text: "SE BORRÓ EL RESCATE !",
                type: "info"
            }).then (()=>{               
            });
            </script>';
        write_file('./files/writebd.log', "D $rescate ROW 1");
        return true;
    }else{        
        echo '<script>
        swal({
        title: "ERROR",
        text: "OCURRIÓ UN ERROR AL BORRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
};
function deleteUsuario($id_usuario){
    global $usuario;    
    global $HOST;
    $sql = "UPDATE $usuario SET activo = 0 WHERE id_usuario = $id_usuario ";
    global $conexionbd;
     $conexionbd->query($sql);
    if(!$conexionbd->error){            
        echo '<script>
            swal({
                title: "BORRADO",
                text: "SE BORRÓ EL USUARIO !",
                type: "info"
            }).then (()=>{               
            });
            </script>';
        write_file('./files/writebd.log', "D $usuario ROW 1");
        return true;
    }else{        
        echo '<script>
        swal({
        title: "ERROR",
        text: "OCURRIÓ UN ERROR AL BORRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
};
function deleteVacunaMascota($id_vacuna_mascota){
    global $vacuna_mascota;    
    global $HOST;
    $sql = "UPDATE $vacuna_mascota SET activo = 0 WHERE id_vacuna_mascota = $id_vacuna_mascota ";
    global $conexionbd;
     $conexionbd->query($sql);
    if(!$conexionbd->error){            
        echo '<script>
            swal({
                title: "BORRADO",
                text: "SE BORRÓ EL vacuna_mascota !",
                type: "info"
            }).then (()=>{               
            });
            </script>';
        write_file('./files/writebd.log', "D $vacuna_mascota ROW 1");
        return true;
    }else{        
        echo '<script>
        swal({
        title: "ERROR",
        text: "OCURRIÓ UN ERROR AL BORRAR!",
        type: "error"
         }).then (()=>{
       window.location.href = ("/amigosproanimal/pages/home.php");
        });
        </script>';
    die();
    }
};