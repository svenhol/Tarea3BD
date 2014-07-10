<?php
/**
 * Created by PhpStorm.
 * User: Belik
 * Date: 2/07/14
 * Time: 15:46
 */

?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MENU ADMINISTRADOR JENERAL!</title>
</head>
<body>
<center>
    <table border="1" width="15%" cellpadding="3">
        <thead>
        <tr>
            <th colspan="2">Menu</th>
        </tr>
        </thead>
</center>
<tr>
    <td>
        <form method="post" action="mis_datos.jsp">
            <center>
                <input type="submit" value="Mis Datos" name="mis_datos" />
            </center>
        </form>
    </td>
</tr>
<tr>
    <td>
        <form method="post" action="areas.php">
            <center>
                <input type="submit" value="Areas"/>
            </center>
        </form>
    </td>
</tr>
<tr>
    <td>
        <form method="post" action="coordinadores.php">
            <center>
                <input type="submit" value="Coordinadores de Area" name="coordinadores" />
            </center>
        </form>
    </td>
</tr>
<tr>
    <td>
        <form method="post" action="noticias.jsp">
            <center>
                <input type="submit" value="Noticias" name="noticias" />
            </center>
        </form>
    </td>
</tr>
<tr>
    <td>
        <form method="post" action="postulantes.jsp">
            <center>
                <input type="submit" value="Postulantes" name="postulantes" />
            </center>
        </form>
    </td>
</tr>
<tr>
    <td>
        <form method="post" action="colaboradores_seleccionados.jsp">
            <center>
                <input type="submit" value="Colaboradores Seleccionados" name="colaboradores_seleccionados" />
            </center>
        </form>
    </td>
</tr>
<tr>
    <td>
        <form method="post" action="Tarea3BD.php">
            <center>
                <input type="submit" value="Cerrar Sesion" name="cerrar_sesion" />
            </center>
        </form>
    </td>
</tr>
</table>
</body>
</html>