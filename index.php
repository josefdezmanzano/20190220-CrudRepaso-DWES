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
        //creamos la conexion 
        $dbc = new Conexion();
        $conexion = $dbc->getLlave();
        $alumno = new Alumnos($conexion);

        $stmt = $alumno->read();
        while ($fila = $stmt->fetch(PDO::FETCH_OBJ)) {
            echo "$fila->id";
            echo " $fila->nombre";
            echo " $fila->apellidos";
            echo "$fila->foto";
            echo "$fila->perfil";
        }


        $stmt = null;
        $conexion = null;
        ?>
    </body>
</html>
