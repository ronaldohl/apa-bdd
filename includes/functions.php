<?php
require_once('./config/config.php');

date_default_timezone_set ("America/Mexico_City" );
$HOST = $HOST;


function write_file($file, $message){
    global $HOST;
    $hoy = date("Y-m-d H:i:s"); 
    file_put_contents($file, "$HOST - DATE: $hoy  $message \n", FILE_APPEND );

}