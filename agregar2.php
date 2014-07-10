<?php
/**
 * Created by PhpStorm.
 * User: Belik
 * Date: 10/07/14
 * Time: 12:23
 */

$cadena="host='localhost' port='5432' dbname='Tarea3DB' user='confuser' password='chocha'";
$con = pg_connect($cadena) or die ('Error de conexion. Pongase en contacto con administrador');

$nombre = $_POST['nombre'];
$colaborador = $_POST['colaboradores'];

if ($nombre == '' || $colaborador == ''){
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

$consulta = "INSERT INTO areas(nombrearea, colaboradoresrequeridos) VALUES ('$nombre', '$colaborador')";
$asdsad = pg_query($con, $consulta);

header('Location: areas.php');

?>