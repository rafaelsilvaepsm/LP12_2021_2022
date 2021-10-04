<?php

class Carro {

    // Atributos
    private $id;
    private $matricula;
    private $marca;

    // Acessores e Modificadores
    public function setId($value){
        $this->id = $value;
    }

    public function getId(){
        return $this->id;
    }

    public function setMatricula($value){
        $this->matricula = $value;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMarca($value){
        $this->marca = $value;
    }

    public function getMarca(){
        return $this->marca;
    }

    // Comportamentos

    public function registar(){

        //Conectar á base de dados
        $dsn = "mysql:host=localhost;dbname=stand";
        $user = "root";
        $pass = "";
        $conexao = new PDO($dsn, $user, $pass);

        // Instrução SQL para registar o carro
        $sql = "INSERT INTO carros(matricula, marca) VALUES ('" . $this->matricula . "', '" . $this->marca . "')";

        //Executar instrução SQL na base de dados
        $conexao->exec($sql);
    }  

    public function apagar(){

        //Conectar á base de dados
        $dsn = "mysql:host=localhost;dbname=stand";
        $user = "root";
        $pass = "";
        $conexao = new PDO($dsn, $user, $pass);

        // Instrução SQL para registar o carro
        $sql = "DELETE FROM carros WHERE id = " . $this->id;

        //Executar instrução SQL na base de dados
        $conexao->exec($sql);

    }
    
    public function listar(){

        //Conectar á base de dados
        $dsn = "mysql:host=localhost;dbname=stand";
        $user = "root";
        $pass = "";
        $conexao = new PDO($dsn, $user, $pass);

        // Instrução SQL para selecionar dados da bd
        $sql = "SELECT * FROM carros";

        // Preparar instrução 
        $query = $conexao->query($sql);

        // Executar a query e gravar resultados
        $carros = $query->fetchAll(PDO::FETCH_ASSOC);

        // Retornar os dados
        return $carros;

    }

    public function getById(){

        //Conectar á base de dados
        $dsn = "mysql:host=localhost;dbname=stand";
        $user = "root";
        $pass = "";
        $conexao = new PDO($dsn, $user, $pass);

        // Instrução SQL para selecionar dados da bd
        $sql = "SELECT * FROM carros WHERE id =" . $this->id;

        // Preparar instrução 
        $query = $conexao->query($sql);

        // Executar a query e gravar resultados
        $carros = $query->fetchAll(PDO::FETCH_ASSOC);

        // Retornar os dados
        return $carros;

    }

}

?>