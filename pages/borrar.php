<?php
    require_once('../loads.php');

    if(!$_GET){
        //alv
    }

    $tabla = $_GET['dato'];
    $id = $_GET['id'];

    switch($tabla){
        case 'reporte' :
           print_r (deleteReporte($id));
        break;
    }
