<?php
/**
 * Created by PhpStorm.
 * User: Belik
 * Date: 2/07/14
 * Time: 16:26
 */

$cadena="host='localhost' port='5432' dbname='Tarea3DB' user='confuser' password='chocha'";
$con = pg_connect($cadena) or die ('Error de conexion. Pongase en contacto con administrador');

$consulta = 'SELECT nombrearea, colaboradoresrequeridos FROM areas;';
$consultaUsuario = pg_query($consulta);

$asd = pg_fetch_all_columns($consultaUsuario);
$asd2 = sizeof($asd);

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Menu de Areas</title>
</head>
<body>
<center>
    <table border="1" width="15%" cellpadding="3">
        <thead>
        <tr>
            <th colspan="3">Areas</th>
        </tr>
        </thead>
</center>
<?php
for ($i = 0;$i < $asd2;$i++){
    $llamar = pg_fetch_row($consultaUsuario);
    echo "<tr>";
    echo "<td>";
    echo '<form name=f1 method="post" action="editar.php">';
    echo '<input type="text" name="nombre" value=';
    echo "$llamar[0]";
    echo " />";
    echo "<td>";
    echo '<input type="submit" value="Modificar" name="editar"/>';
    //echo "</form>";
    echo "</form>";
    echo "</td>";
    echo "</td>";
    echo "</tr>";
}
?>
<td>
    <form method="post" action="agregar.php">
        <input type="submit" value="Agregar"/>
    </form>
</td>
</table>
</body>
</html>
<?php
