<?php

class Carro {

    // Atributos
    private string $matricula;
    private string $marca;

    // Acessores e Modificadores
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

}

?>