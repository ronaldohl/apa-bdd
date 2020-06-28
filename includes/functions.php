<?php
// require('C:\wamp64\www\amigosproanimal\loads.php');
// require(BASE_PATH .'config/config.php');

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