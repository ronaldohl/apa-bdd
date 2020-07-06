<?php
// require('C:\wamp64\www\amigosproanimal\loads.php');
// require(BASE_PATH .'config/config.php');
session_start();
date_default_timezone_set ("America/Mexico_City" );
$HOST = $HOST;


function write_file($file, $message){
    global $HOST;
    $hoy = date("Y-m-d H:i:s"); 
    file_put_contents($file, "$HOST - DATE: $hoy  $message \n", FILE_APPEND );

}

function redirect($url)
{
    if (!headers_sent())
    {    
        
        header('Location: '.$url);
        exit;
        }
    else
        {  
        echo '<script type="text/javascript">';
        
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}

function paraAdopcion($mascota){

    if($mascota['estatus'] == 'RESGUARDO-APA'){
        return true;
    }else{
        return false;
    }

}

function esAdoptante ($persona){
    if($persona['tipo_persona'] == 'ADOPTANTE' ){
        return true;
    }else{
        return false;
    }
}

function badgeReportes($reporte){
    if($reporte['evaluacion_reporte']=='RESCATAR'){
        return 'success';
    }elseif($reporte['evaluacion_reporte']=='PENDIENTE'){
        return 'warning';
    }elseif($reporte['evaluacion_reporte']=='CANALIZAR'){
        return 'primary';
    }elseif($reporte['evaluacion_reporte']=='OTRO'){
        return 'info';
    }
}

function badgeAdopciones($adopcion){
    if($adopcion['tipo']== 'TEMPORAL' ){
        return 'info';
    }elseif($adopcion['tipo'] == 'DEFINITIVA'){
        return 'success';
    }
}

function badgePersona($persona){
    if($persona['tipo_persona']=='ADOPTANTE'){
        return 'primary';
    }elseif($persona['tipo_persona']=='RESCATISTA'){
        return 'info';
    }
}
function badgeMascota($mascota){
    if($mascota['estatus']=='ADOPCION-TEMPORAL'){
        return 'info';
    }elseif($mascota['estatus']=='ADOPCION-DEFINITIVA'){
        return 'success';
    }elseif($mascota['estatus']=='RESGUARDO-APA'){
        return 'warning';
    }
}

function badgeProducto($producto){
    if($producto['centro']=='CENTRO'){
        return 'primary';
    }
    if($producto['centro']=='NORTE'){
        return 'info';
    }
}

function badgeDonacion($donacion){
    if($donacion['tipo_donacion']=='DINERO'){
        return 'primary';
    }
    if($donacion['tipo_donacion']=='ESPECIE'){
        return 'info';
    }
}

function validarSesion(){
    if(!isset($_SESSION['usuario'])){
        redirect('/amigosproanimal/pages/login.php');
    }else{
      return true;
    }
}