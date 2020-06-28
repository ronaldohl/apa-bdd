<?php
session_start();
session_destroy();
$_SESSION = array();

header('Location: /amigosproanimal/index.php');
die();

?>