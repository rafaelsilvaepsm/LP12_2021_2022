<?php

// Incluir a classe Carro
include_once "Carro.php";

if (isset($_GET["id"])){

    $carro = new Carro();
    $carro->setId($_GET["id"]);
    $carroEditar = $carro->getById()[0];

}

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
            <input name="txtMatricula" type="text" value="<?php echo $carroEditar["matricula"]; ?>" />

            <br>

            <label>Marca</label>
            <input name="txtMarca" type="text" value="<?php echo $carroEditar["marca"]; ?>" />

            <br>

            <input type="submit" name="btnGravar" value ="Gravar" />

        </form>

    </body>
</html>