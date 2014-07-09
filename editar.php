<?php
/**
 * Created by PhpStorm.
 * User: Belik
 * Date: 2/07/14
 * Time: 18:59
 */

$nombre = $_POST['nombre'];

//WHERE nombrearea = '.$nombre.'

$consultaasd = 'SELECT * FROM AREAS WHERE nombrearea = '.$nombre.' ;';
$consultaUsuarioasd = pg_query($consultaasd);
$filaasd = pg_fetch_row($consultaUsuarioasd);

echo "$filaasd";
$colaborador = $filaasd[1];
echo "$colaborador";

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