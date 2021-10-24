<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <title>Cadastro de clientes</title>

    <link rel="stylesheet" href="style.css" />
</head>

<thead>
    <div class="txt">
        <?php
        echo "Insira o cadastro nos campos: Nome e Idade.";
        ?>
    </div>
</thead>

<body>

    <div class="img">
        <img src="images/pessoas.png">
    </div>

    <form name="cadUsuario" method="POST" action="insert.php">

        <div class="input-group">
            <label>Nome</label>
            <input type="text" name="nome" class="cor_text" placeholder="Nome completo">
        </div>

        <div class="input-group">
            <label>Idade</label>
            <input type="text" name="idade" class="cor_text" placeholder="Sua idade">
        </div>

        <div class="input-group">
            <button type="submit" name="salvar" class="btn btn_salvar">Salvar</button>
            <a href="select.php">
                <button type="button" name="exibir" id="" class="btn btn_salvar" value="Exibir">Exibir</button>
                <a>
        </div>

    </form>

</body>

</html>