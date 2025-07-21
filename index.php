<?php
session_start();
$_SESSION['nombre'] = 'Juan';
var_dump($_SESSION);
// $uno = 'uno';
$uno = 1;
$dos = 'dos';
$tres = $dos;
echo $$tres;
// echo $uno;
?>
<h1>hola</h1>