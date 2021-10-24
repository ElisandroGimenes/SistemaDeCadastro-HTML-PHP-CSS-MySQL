<?php 

  include_once 'select.php';

  header ('location:select.php');

  $id = $_GET['id'];
    
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $pdo->prepare('DELETE FROM usuarios WHERE id = :id');
    $stmt->bindParam(':id', $id); 
    $stmt->execute();
      
    echo $stmt->rowCount() . " registro deletado!"; 
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }

?>








