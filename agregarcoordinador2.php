<?php
/**
 * Created by PhpStorm.
 * User: Belik
 * Date: 10/07/14
 * Time: 17:43
 */

$cadena="host='localhost' port='5432' dbname='Tarea3DB' user='confuser' password='chocha'";
$con = pg_connect($cadena) or die ('Error de conexion. Pongase en contacto con administrador');

$nombre = $_POST['nombre'];
$rol = $_POST['rol'];
$rut = $_POST['rut'];
$area = $_POST['area'];
$telefono = $_POST['telefono'];
$talla = $_POST['talla'];
$carrera = $_POST['carrera'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

/*if ($nombre == '' || $colaborador == ''){
    echo '<html>';
    echo '<body>';
    echo '<center>';
    echo '<table>';
    echo '<tr><th colspan="3">Error al Agregar</th></tr>';
    echo '<tr>';
    echo '<td>';
    echo '<form method="post" action="agregar.php">';
    echo '<input type="hidden" name="nombre" value="'.$nombre.'"/>';
    echo '<input type="hidden" name="colaboradores" value="'.$colaborador.'"/>';
    echo '<input type="submit" value="Aceptar"/>';
    echo '</form></td></tr></table></center></body></html>';
}
*/
$consulta = "INSERT INTO estudiantes(rolestudiante, idcampus) VALUES ('$rol', '$campus')";
$consulta2 = "INSERT INTO coordinadores(rolestudiante, idarea, tipo) VALUES ('$rol', '$campus')";
$asdsad = pg_query($con, $consulta);

header('Location: areas.php');

?>