<?php
// Definir que o conteudo devolvido nesta página está em JSON
header("Content-Type: application/json; charset=UTF-8");

// Inlcuir a classe carro
include_once "Carro.php";

// Criar objecto da classe carro
$carro = new Carro();

// Usar comportamento para carregar todos os carros da BD
$carros = $carro->listar();

// Retornar conteudo json
echo json_encode($carros);


?>