<?php
// Obtener ruta limpia desde la URL
$request = $_SERVER['REQUEST_URI'];
$script_name = dirname($_SERVER['SCRIPT_NAME']);
$base_path = rtrim($script_name, '/');
$path = trim(str_replace($base_path, '', $request), '/');

// Dividir la URL por /
$segments = array();
$segments = explode('/', $path);

$page = $segments[1] ? 'home':''; // en vez de $segments[1]
include "const.php";
include "template/layout.php";
?>  
