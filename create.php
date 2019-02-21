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
        $perfil = "1";
        /*
          if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
          //print_r($_FILES['portada']);
          $permitidos = array('image/png', 'image/jpg', 'image/jpeg', 'image/gif', 'image/tiff', 'img/bmp');
          if (!in_array($_FILES['foto']['type'], $permitidos)) {
          echo "El archivo debe ser una imagen!!!!!!!!!!!!!";
          die();
          }
          $dir_uploads = 'img/avatares/';
          $nombreF1 = $_FILES['foto']['name'];
          $id_time = time();
          $nombreF2 = $dir_uploads . $id_time . '-' . $nombreF1;
          move_uploaded_file($_FILES['foto']['tmp_name'], $nombreF2);
          $foto = $nombreF2; */

        $dbc = new Conexion();

        $conexion = $dbc->getLlave();

        $alumno = new Alumnos($conexion, $nombre, $apellidos, $foto, $perfil);

        $stmt = $alumno->create();
        
        $stmt= null;
        $conexion=null;
        ?>
    </body>
</html>
