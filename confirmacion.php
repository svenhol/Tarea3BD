<?php
/**
 * Created by PhpStorm.
 * User: Belik
 * Date: 10/07/14
 * Time: 13:53
 */

$nombre = $_POST['nombre'];

?>

<html>
<body>
<center>
<table border="1" width="15%" cellpadding="3">
<form method="post" action="borrar.php">
    <thead>
    <tr><th colspan="3">Confirme el borrado</th></tr>
    </thead>
    <tr>
        <td>
            <input type="hidden" name="nombre" value="<?php echo $nombre ?>"/>
            <input type="submit" value="Confirmar" />
        </td>
</form>
<form method="post" action="areas.php">
        <td>
            <input type="submit" value="Cancelar" />
        </td>
    </tr>
</form>
</table>
</center>
</body>
</html>