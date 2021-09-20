<?php 

// Incluir class
include_once "Carro.php";

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
            </tr>

            <?php foreach ($carros as $carro) { ?>
            
                <tr>
                    <td><?php echo $carro["matricula"]; ?></td>
                    <td><?php echo $carro["marca"]; ?></td>
                </tr>

            <?php } ?>


        </table>

    </body>
</html>