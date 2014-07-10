<?php
/**
 * Created by PhpStorm.
 * User: Belik
 * Date: 2/07/14
 * Time: 19:21
 */

$cadena="host='localhost' port='5432' dbname='Tarea3DB' user='confuser' password='chocha'";
$con = pg_connect($cadena) or die ('Error de conexion. Pongase en contacto con administrador');

$nombre = $_POST['nombre'];

$consulta = "DELETE FROM areas WHERE nombrearea = '$nombre'";
$asdsad = pg_query($con, $consulta);

header('Location: areas.php');