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
        $dbc = new Conexion();
        $conexion = $dbc->getLllave();
        $alumno = new Alumnos($conexion);
        while ($fila = $stmt->fetch(PDO::FETCH_OBJ)) {
        $fila->id; 
        $fila->nombre;
        $fila->apellidos;
        $fila->foto;
        $fila->perfil;
        $fila->id;
        
        }
        ?>
    </body>
</html>
