<?php
class Conexion {
    private $host = 'localhost';
    private $user = 'usuario';
    private $database = 'personas';
    private $pass = 'secreto';
    public $llave;
    public function getLllave() {
        $dsn = "mysql:host={$this->host};dbname={$this->database}";
       //$this->llave = null;
        //new PDO("mysql:host='serv';dbname='bbdd',user,pass");
        try {
            $this->llave = new PDO($dsn, $this->user, $this->pass);
            $this->llave->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // $this->llave->exec("set names utf8");            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $this->llave;
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

