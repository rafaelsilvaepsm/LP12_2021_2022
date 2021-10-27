<?php 

    include_once "carro.php";

    $json = file_get_contents('php://input');

    $data = json_decode($json, true);

    $carro = new Carro();
    $carro->setMatricula($data["matricula"]);
    $carro->setMarca($data["marca"]);

    $carro->registar();

?>