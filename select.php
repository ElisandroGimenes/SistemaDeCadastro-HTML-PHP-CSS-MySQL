<?php

$pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', '');

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Exibir dados</title>

    <link rel="stylesheet" href="style.css">


</head>
<thead>
    <div class="txt">
        <?php
        echo "Utilize os botões 'Editar' para alterar ou 'Deletar' para excluir registros.";
        ?>
    </div>
</thead>

<body>
    <div class="img">
        <img src="images/pessoas.png">
    </div>
    <form>
        <table class="striped">
            <td>Nome</td>
            <td>Idade</td>
            <?php

            $consulta = $pdo->query("SELECT * FROM usuarios;");

            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

            ?>

                <tr>

                    <td><?php echo $linha['nome']; ?></td>

                    <td><?php echo $linha['idade']; ?></td>

                    <td>
                        <a href="update.php?id=<?php echo $linha['id']; ?>" style="float: right" class="edit_btn">Editar</a>
                    </td>

                    <td>
                        <a href="exclui.php?id=<?php echo $linha['id']; ?>" onclick="deletar()" style="float: right" class="del_btn">Excluir</a>
                    </td>

                </tr>

            <?php } ?>
        </table>
        <div class="div">
            <a href="index.php">
                <input type="button" class="btn btn_salvar" value="Voltar">
            </a>
        </div>

    </form>

</body>

</html>