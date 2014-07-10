<?php
/**
 * Created by PhpStorm.
 * User: Belik
 * Date: 10/07/14
 * Time: 17:32
 */

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Agregar Coordinador</title>
</head>
<body>
<form method="post" action="agregarcoordinador2.php">
    <center>
        <table border="1" width="15%" cellpadding="3">
            <thead>
            <tr>
                <th colspan="3">Coordinador</th>
            </tr>
            </thead>
    </center>
    <tr>
        <td>Nombre</td>
        <td>
            <input type="text" name="nombre" value=""/>
        </td>
    </tr>
    <tr>
        <td>Rol USM</td>
        <td>
            <input type="text" name="rol" value=""/>
        </td>
    </tr>
    <tr>
        <td>RUT</td>
        <td>
            <input type="text" name="rut" value=""/>
        </td>
    </tr>
    <tr>
        <td>Area</td>
        <td>
            <input type="text" name="area" value=""/>
        </td>
    </tr>
    <tr>
        <td>Telefono</td>
        <td>
            <input type="text" name="telefono" value=""/>
        </td>
    </tr>
    <tr>
        <td>Talla de Polera</td>
        <td>
            <input type="text" name="talla" value=""/>
        </td>
    </tr>
    <tr>
        <td>Carrera</td>
        <td>
            <input type="text" name="carrera" value=""/>
        </td>
    </tr>
    <tr>
        <td>Correo Electronico</td>
        <td>
            <input type="text" name="correo" value=""/>
        </td>
    </tr>
    <tr>
        <td>Contraseña</td>
        <td>
            <input type="text" name="contraseña" value=""/>
        </td>
    </tr>
    <td>
        <input type="submit" value="Agregar"/>
    </td>
</form>
</body>
</html>