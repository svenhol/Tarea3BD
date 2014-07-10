<?php
/**
 * Created by PhpStorm.
 * User: Belik
 * Date: 2/07/14
 * Time: 18:59
 */

$cadena="host='localhost' port='5432' dbname='Tarea3DB' user='confuser' password='chocha'";
$con = pg_connect($cadena) or die ('Error de conexion. Pongase en contacto con administrador');

$nombre = $_POST['nombre'];

$consultaasd = 'SELECT * FROM areas';
$consultaUsuarioasd = pg_query($con, $consultaasd);
$columnas = pg_fetch_all_columns($consultaUsuarioasd);
for ($i=0;$i<sizeof($columnas);$i++){
    $filaasd = pg_fetch_row($consultaUsuarioasd);
    if ($filaasd[1]==$nombre){
        $colaborador = $filaasd[2];
    }
}

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Menu de Areas</title>
</head>
<body>
<form method="post" action="editar2.php">
<center>
    <table border="1" width="15%" cellpadding="3">
        <thead>
        <tr>
            <th colspan="3">Edicion del Area <?php echo $nombre ?></th>
        </tr>
        </thead>
</center>
<tr>
    <td>Nombre</td>
    <td>
        <input type="text" name="nombrenuevo" value="<?php echo $nombre ?>"/>
        <input type="hidden" name="nombre" value="<?php echo $nombre ?>"/>
    </td>
</tr>
<tr>
    <td>Colaboradores</td>
    <td>
        <input type="text" name="colaboradores" value="<?php echo $colaborador ?>"/>
    </td>
</tr>
<tr>
    <td>
        <input type="submit" value="Editar" name="editar" />
    </td>
</form>
<form method="post" action="confirmacion.php">
    <input type="hidden" name="nombre" value="<?php echo $nombre ?>"/>
    <td>
        <input type="submit" value="Borrar" name="borrar" />
    </td>
</tr>
</form>
</body>
</html>
