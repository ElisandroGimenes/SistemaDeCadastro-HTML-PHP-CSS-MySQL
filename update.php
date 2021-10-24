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
    echo "Insira as novas informações e clique em 'Atualizar' para salvar as alterações.";
    ?>
  </div>
</thead>

<body>

  <div class="img">
    <img src="images/pessoas.png">
  </div>

  <?php

  $id = $_GET['id'];
  $pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', '');

  $sql = "SELECT * FROM usuarios where id=" . $_GET['id'];
  $consulta = $pdo->query($sql);
  $array_retorno = $consulta->fetch(PDO::FETCH_ASSOC);

  ?>
  <form method="POST" action="update2.php?id2=<?php echo $id; ?>">

    <div class="input-group">
      <label>Nome</label>
      <input type="text" name="nome" class="cor_text" value="<?php echo $array_retorno['nome']; ?>">
    </div>

    <div class="input-group">
      <label>Idade</label>
      <input type="text" name="idade" class="cor_text" value="<?php echo $array_retorno['idade']; ?>">
    </div>

    <div class="input-group">
      <button type="submit" name="atualizar" class="btn btn_salvar">Atualizar</button>
      <a href="select.php">
        <button type="button" name="exibir" id="" class="btn btn_salvar" value="Exibir">Exibir</button>
        <a>
          <a href="index.php">
            <button type="button" name="home" class="btn btn_salvar" value="Home">Home</button>
    </div>

  </form>

</body>

</html>