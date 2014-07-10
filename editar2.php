<?php
/**
 * Created by PhpStorm.
 * User: Belik
 * Date: 10/07/14
 * Time: 12:10
 */

$cadena="host='localhost' port='5432' dbname='Tarea3DB' user='confuser' password='chocha'";
$con = pg_connect($cadena) or die ('Error de conexion. Pongase en contacto con administrador');

$nombre = $_POST['nombre'];
$nombrenuevo = $_POST['nombrenuevo'];
$colaborador = $_POST['colaboradores'];

$consultaid = 'SELECT * FROM areas;';
$consultaasd = pg_query($consultaid);
$columnas = pg_fetch_all_columns($consultaasd);

for ($i=0;$i<sizeof($columnas);$i++){
    $filaasd = pg_fetch_row($consultaasd);
    if ($filaasd[1]==$nombre){
        $id = $filaasd[0];
    }
}

$consulta = "UPDATE areas SET nombrearea = '$nombrenuevo', colaboradoresrequeridos = '$colaborador' WHERE idarea = '$id';";
$consultaUsuario = pg_query($con, $consulta);

header('Location: areas.php');

?>