<?php

$id = $_GET['id2']; 
$nome = $_POST['nome'];
$idade = $_POST['idade'];
   
try {
  $pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  $stmt = $pdo->prepare('UPDATE usuarios SET nome = :nome, idade = :idade WHERE id = :id');
  $stmt->execute(array(
    ':id'   => $id,
    ':nome' => $nome,
    ':idade'=> $idade
  ));
  
  echo $stmt->rowCount()." registro atualizado com sucesso!";   
  
  header ('location:select.php');

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

?>
