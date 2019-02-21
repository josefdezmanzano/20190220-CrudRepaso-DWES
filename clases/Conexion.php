<?php

class Conexion {

    private $host = 'localhost';
    private $user = 'usuario';
    private $database = 'personas';
    private $pass = 'secreto';
    public $llave;

    public function getLlave() {
        $dsn = "mysql:host={$this->host};dbname={$this->database}";
        try {
            $this->llave = new PDO($dsn, $this->user, $this->pass);
            
            $this->llave->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        return $this->llave;
    }

}

