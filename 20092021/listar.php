<?php 

// Incluir class
include_once "Carro.php";

// Verifica se o parametro "action" em GET está definido
if (isset($_GET["action"])){

    // Verifica se o parametro "action" tem o valor "apagar"
    if ($_GET["action"] == "apagar"){

        $carro = new Carro();
        $carro->setId($_GET["id"]);

        $carro->apagar();

    }

}

$carro = new Carro();
$carros = $carro->listar();

//var_dump($carros);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Listar Carros</title>
    </head>
    <body>

        <table>

            <tr>
                <td>Matricula</td>
                <td>Marca</td>
                <td></td>
                <td></td>
            </tr>

            <?php foreach ($carros as $carro) { ?>
            
                <tr>
                    <td><?php echo $carro["matricula"]; ?></td>
                    <td><?php echo $carro["marca"]; ?></td>

                    <td>
                        <a href="listar.php?action=apagar&id=<?php echo $carro["id"]; ?>">
                            Eliminar
                        </a>
                    </td>

                    <td>
                        <a href="editar.php?id=<?php echo $carro["id"]; ?>">
                            Editar
                        </a>
                    </td>

                </tr>

            <?php } ?>


        </table>

    </body>
</html>