<?php

// Incluir a classe Carro
include_once "Carro.php";

//Identificar que o botão foi clicado
if (isset($_POST["btnGravar"])){

    $id = $_POST["txtId"];
    $matricula = $_POST["txtMatricula"];
    $marca = $_POST["txtMarca"];

    // Criar objecto
    $carro = new Carro();
    $carro->setId($id);
    $carro->setMatricula($matricula);
    $carro->setMarca($marca);

    // Executar o comportamento
    $carro->gravar();

}

//Carregar dados da base de dados
if (isset($_GET["id"])){

    $carro = new Carro();
    $carro->setId($_GET["id"]);
    $carroEditar = $carro->getById()[0];

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Criar Carro</title>
    </head>
    <body>

        <form method="POST">

            <input type="hidden" name="txtId" value="<?php echo $carroEditar["id"]; ?>" />
            
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