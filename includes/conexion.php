<?php
$db_host = "localhost"; /*quitar tt*/
$db_nombre = "biblo1"; /*quitar s*/
$db_usuario = "root";
$db_contra = "";

// $db_host="localhost"; /*quitar tt*/
//     $db_nombre="id10551872_biblo1"; /*quitar s*/
//      $db_usuario="id10551872_biblo1";
//    $db_contra="programacion1";

// $db_host="fdb24.awardspace.net"; /*quitar tt*/
//     $db_nombre="3130289_biblo1"; /*quitar s*/
//      $db_usuario="3130289_biblo1";
//     $db_contra="programacion1";

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
