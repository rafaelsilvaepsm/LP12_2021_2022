<?php

class Conexao extends PDO{

    // Atributos
    private $dsn;
    private $user;
    private $pass;

    // Construtor
    function __construct() {
        $this->dsn = "mysql:host=localhost;dbname=stand";
        $this->user = "root";
        $this->pass = "";

        parent::__construct($this->dsn, $this->user, $this->pass);

    }

}

?>