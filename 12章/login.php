<?php
session_start();
if(isset($_SESSION['id'])){
  
  
  header('Location: index.php');
} else if (isset($_POST['name']) &&isset($_POST['password'])){
  
  
  $dsn = 'mysql:host=localhost;dbname=tennis;charset=utf8';
  $user = 'tennisuser';
  $password = 'password';
  
  try{
    $db = new PDO($dsn,$user,$password);
    $db->setAttribute(PDO::ATTR_EMuLATE_PREPARES,false);
    $stmt=$db->prepare("SELECT * FROM users WHERE name=:name AND password=:pass");
    
    $stmt->bindParam(':name'$_POST['name'],PDO::PARAM_STR);
    $stmt->bindParam(':pass', hash("sha256",$_POST['password']),PDO::PARSMSTR);
    $stmt->execute();
  }
}
?>