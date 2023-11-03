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
    
    if ($row = $stmt->fetch()){
      $_SESSION['id']= $row['id'];
      header('Location: index.php');
      exit();
    } else {
      
      
      
      header('Location: login.php');
      exit();
    }
  }catch (PDOException $e){
    
    exit('エラー:'.$e->getMessage);
  }
}
?>
<!doctype html>
<html lang="ja">
  <head>
    <title>サークルサイト</title>
    <link rel="stylesheet" href="https://stackpath.bootstrap.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style type="text/css">
      form {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
        text-align: center;
      }
      #name{
        margin-bottom: -1px;
        border-bottom-right-radius:0;
        border-bottom-left-radius:0;
      }
      #password {
        margin-bottom:10px;
        border-top-left-radius:0;
        border-top-right-radius:0;
      }
    </style>
  </head>
  
</html>
