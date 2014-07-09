<?php
/**
 * Created by PhpStorm.
 * User: Belik
 * Date: 1/07/14
 * Time: 12:30
 */

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ingreso al Sistema</title>
    </head>
    <body>
        <form method="post" action="login.php">
            <center>
            <table border="1" width="30%" cellpadding="3">
                <thead>
                    <tr>
                        <th colspan="2">Ingresar Datos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rol</td>
                        <td><input type="text" name="rol" value="2012735289" /></td>
                    </tr>
                    <tr>
                        <td>Contraseña</td>
                        <td><input type="password" name="pass" value="asdf" /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Login" /></td>
                        <td><input type="reset" value="Reset" /></td>
                    </tr>
                </tbody>
            </table>
            </center>
        </form>
    </body>
</html>