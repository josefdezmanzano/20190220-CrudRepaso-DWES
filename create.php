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
        $nombre = "este es nuevo";
        $apellidos = "Mamamio";
        $foto = "img/default";
        $perfil="1";

        $dbc = new Conexion();

        $conexion = $dbc->getLlave();

        $alumno = new Alumnos($conexion, $nombre, $apellidos, $foto, $perfil);

        $stmt = $alumno->create();
        ?>
    </body>
</html>
