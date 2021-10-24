<?php

include 'index.php';

header ('location:select.php');

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

try {
    $pdo = new PDO('mysql:host=localhost;dbname=crud','root', '');
   
    $insere = $pdo->prepare('INSERT INTO usuarios (nome,idade) VALUES(:nome,:idade)');
    $insere->execute(array(':nome' => $nome, ':idade' => $idade));
     
    echo $insere->rowCount() . " registro inserido com sucesso!"; 
  } 
catch(PDOException $e) {
    echo 'Erro: ' . $e->getMessage();

  }
?>

