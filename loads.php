<?php
if (!defined('BASE_PATH')) define('BASE_PATH', 'C:/wamp64/www/amigosproanimal/');
if (!defined('ruta_file_write')) define ('ruta_file_write', BASE_PATH . 'files/writebd.log');
if (!defined('ruta_file_read')) define ('ruta_file_read', BASE_PATH . 'files/readbd.log');
//  include('pages/includes-head.php');
//  include('pages/includes-body.php');
require_once('includes/conexion.php');
require_once('models/tables.model.php');
require_once('config/bd-config.php');
require_once('config/bd-table-names.php');
require_once('config/config.php');
require_once('includes/functions.php');
require_once('includes/crud.php');

