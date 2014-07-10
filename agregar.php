<?php
/**
 * Created by PhpStorm.
 * User: Belik
 * Date: 3/07/14
 * Time: 17:49
 */

$nombre = $_POST['nombre'];
$colaborador = $_POST['colaboradores'];

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Agregar Area</title>
</head>
<body>
<form method="post" action="agregar2.php">
<center>
    <table border="1" width="15%" cellpadding="3">
        <thead>
        <tr>
            <th colspan="3">Area</th>
        </tr>
        </thead>
</center>
<tr>
    <td>Nombre</td>
    <td>
        <input type="text" name="nombre" value="<?php echo $nombre ?>"/>
    </td>
</tr>
<tr>
    <td>Colaboradores</td>
    <td>
        <input type="text" name="colaboradores" value="<?php echo $colaborador ?>"/>
    </td>
</tr>
<td>
    <input type="submit" value="Agregar"/>
</td>
</form>
</body>
</html>