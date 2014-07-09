<?php
/**
 * Created by PhpStorm.
 * User: Belik
 * Date: 1/07/14
 * Time: 17:32
 */

$cadena="host='localhost' port='5432' dbname='Tarea3DB' user='confuser' password='chocha'";
$con = pg_connect($cadena) or die ('Error de conexion. Pongase en contacto con administrador');

$rol = $_POST['rol'];
$pass = $_POST['pass'];
$consulta = 'SELECT * FROM ESTUDIANTES WHERE rolestudiante = '. $rol. ';';
$consultaUsuario = pg_query($consulta);

$fila = pg_fetch_row($consultaUsuario);
if ($pass =! $fila[2]){
    echo "Los datos ingresados son erroneos.";
}
else {
    $consulta2 = 'SELECT * FROM estudiantes JOIN coordinadores ON estudiantes.rolestudiante = coordinadores.rolestudiante WHERE estudiantes.rolestudiante =' . $rol . ";";
    $consultaTipo = pg_query($consulta2);
    $fila = pg_fetch_row($consultaTipo);
    if ($consultaTipo){
        if ($fila[5] == "JENERAL!"){
            //REDIRIJIR A LA PAJINA PRINSIPAL DEL COORDINADOR JENERAL!
            header('Location: JENERAL!.php');
        }
        else{
            //redirigir al menu de coordinador de area
        }
    }
    else{
        //redirigir al menu de postulante/colaborador/wwhatevver
    }
}