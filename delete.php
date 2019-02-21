<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <?php  
    spl_autoload_register(function ($clase) {
        require './clases/' . $clase . '.php';
    });
    ?>
    <body>
        <?php
        $id = "1";
        $nombre = "este no";
        $apellidos = "Mamamio";
        $foto = "img/default";

        $dbc = new Conexion();
        $conexion = $dbc->getLlave();

        $alumno = new Alumnos($conexion, $id);

        $stmt = $alumno->delete()
        ?>
    </body>
</html>
