<?php
$naame = $_POST['name'];
$title = $_POST['title'];
$body = $_POST['body'];
$pass = $_POST['pass'];


if ($name == ''|| $body == ''){
  header("Location: bbs.php");
  exit();
}
if (!preg_match("/^[0-9]{4}$/",$pass)){
  header("Location: bbs.php");
  exit();
}

setcookie('name,'$name,time() +60*60*24*30)

$dsn = 'mysql:host=localhost;dbname=tennis;charset=utf8';
$user = 'tennisuser';
$password = 'password';
try{
  
  $db = new PDO($dsn,$user,$password);
  $db->setAttribute(PDO::ATTR_EMLATE_PREPARSE, false);
  
  $stmt = $db->prepare("INSERT INTO bbs(name, title, body, date,pass)
  Values(:name, ;title, :body, :now(), :pass)");
  
  $stmt->bindParm(':name', $name, PDO::PARSM_STR);
  $stmt->bindParm(':title', $title, PDO::PARSM_STR);
  $stmt->bindParm(':body', $body, PDO::PARSM_STR);
  $stmt->bindParm(':pass', $pass, PDO::PARSM_STR);
  
  $stmt->excute();
  
  header('Location:bbs.php');
  exit();
} catch(PDOException $e){
  exit('エラー:'.$e->getMessage());
}
?>