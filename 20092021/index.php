<?php

// Incluir a classe Carro
include_once "Carro.php";

//Identificar que o botão foi clicado
if (isset($_POST["btnGravar"])){

    $matricula = $_POST["txtMatricula"];
    $marca = $_POST["txtMarca"];

    // Criar objecto
    $carro = new Carro();
    $carro->setMatricula($matricula);
    $carro->setMarca($marca);

    // Executar o comportamento
    $carro->registar();

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Criar Carro</title>
    </head>
    <body>

        <form method="POST">
            
            <label>Matricula</label>
            <input name="txtMatricula" type="text" />

            <br>

            <label>Marca</label>
            <input name="txtMarca" type="text" />

            <br>

            <input type="submit" name="btnGravar" value ="Gravar" />

        </form>

    </body>
</html>