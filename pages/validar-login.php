<?php
        // require("../incsludes/conexion.php");
        // require('C:\wamp64\www\amigosproanimal\config\config.php');
        require_once( 'C:/wamp64/www/amigosproanimal/' . 'includes/crud.php');
    if(isset ($_POST) ){
        // print_r($_POST);
        $datos = $_POST;
        // print_r($datos);
        // require_once('models/tables.model.php');
        // require_once('config/bd-table-names.php');
        $table_usr = $table_usuario;
        $conexionbd = conectarBD();
        validarCamposLogin($datos);
    }else{
        echo '<script>
                swal({
                     title: "ERROR",
                     text: "Favor de LLENAR LOS CAMPOS!",
                     type: "error"
                 }).then (()=>{
                window.location.href = ("/amigosproanimal/pages/login.php");
                });
                </script>';
    }
    function validarCamposLogin ($datos){

        if(!$datos['nombre_usuario']){
            echo '<script>
                swal({
                     title: "ERROR",
                     text: "INGRESAR NOMBRE DE USUARIO!",
                     type: "error"
                 }).then (()=>{
                window.location.href = ("/amigosproanimal/pages/login.php");
                });
                </script>';
        }elseif (!$datos['password']) {
            echo '<script>
                swal({
                     title: "ERROR",
                     text: "INGRESAR CONTRASEÑA!",
                     type: "error"
                 }).then (()=>{
                window.location.href = ("/amigosproanimal/pages/login.php");
                });
                </script>';
        }elseif (!$datos['centro']) {
            echo '<script>
                swal({
                     title: "ERROR",
                     text: "INGRESAR CONTRASEÑA!",
                     type: "error"
                 }).then (()=>{
                window.location.href = ("/amigosproanimal/pages/login.php");
                });
                </script>';
        }
        global $conexionbd;
        global $table_usr;
        $datosObj = json_decode(json_encode((object) $datos), FALSE);
        $sql = "SELECT id FROM $table_usr WHERE nombre_usuario = $datosObj->nombre_usuario AND password = $datosObj->password AND centro = $datosObj->centro";
        $res = $conexionbd->query($sql);
        print_r($res);

        
    }
?>