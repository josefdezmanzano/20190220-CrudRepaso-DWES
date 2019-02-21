<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of personas
 *
 * @author seillo
 */
class Alumnos {

    private $id;
    private $conexion;
    private $tablas = 'alumnos';
    private $nombre;
    private $apellidos;
    private $foto;
    private $perfil;

    public function __construct() {
        $parametros = func_get_args();
        $numParams = func_num_args();
        $funcion_constructor = '__construct' . $numParams;
        if (method_exists($this, $funcion_constructor)) {
            call_user_func_array(array($this, $funcion_constructor), $parametros);
        }
    }

    public function __construct1($conexion) {
        $this->conexion = $conexion;
    }

    public function __construct2($conexion, $id) {
        $this->id = $id;
        $this->conexion = $conexion;
    }

    public function __construct4($conexion, $nombre, $apellidos, $foto) {
        $this->conexion = $conexion;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->foto = $foto;
    }

    
        public function __construct5($conexion, $nombre, $apellidos, $foto, $perfil) {
        $this->conexion = $conexion;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->foto = $foto;
        $this->perfil=$perfil;
    }
         public function __construct6($conexion, $id, $nombre, $apellidos, $foto, $perfil) {
        $this->conexion = $conexion;
        $this->id=$id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->foto = $foto;
        $this->perfil=$perfil;
    }

    //ACCIONES
    public function create() {

        $insert = "insert into alumnos(nombre, apellidos, foto, perfil)
        values (:nombre,:apellidos,:foto,:perfil)";
        $stmt = $this->conexion->prepare($insert);
        $stmt->execute(
                array(
                    ':nombre' => $this->nombre,
                    ':apellidos' => $this->apellidos,
                    ':foto' => $this->foto,
                    ':perfil'=> $this->perfil
        ));
        return $stmt;
    }

    public function read() {
        $query = 'select * from ' . $this->tablas . ' order by id asc';
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function update() {

        $update = "UPDATE alumnos SET nombre=:nombre, apellidos=:apellidos,foto=:foto
        WHERE id=:id";

        $stmt = $this->conexion->prepare($update);

        $stmt->execute(
                array(
                    ':nombre' => $this->nombre,
                    ':apellidos' => $this->apellidos,
                    ':foto' => $this->foto,
                    ':id' => $this->id
        ));


        return $stmt;
    }

    public function delete() {
        $delete = "DELETE FROM alumnos WHERE id=:id";
        $stmt = $this->conexion->prepare($delete);
        $stmt->execute(array(':id' => $this->id));
        return $stmt;
    }

    public function show() {//detalles
        $query = 'select * from ' . $this->tablas . ' where id=:id';
        //preparamos la consulta
        $stmt = $this->conexion->prepare($query);
        // $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute(array(':id' => $this->id));
        return $stmt;
    }

}
