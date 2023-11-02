<?php
session_start();
if(isset($_SESSION['id'])){
  
  
  header('Location: index.php');
} else if (isset($_POST['name']) &&isset($_POST['password'])){
  
  
  $dsn = 'mysql:host=localhost;dbname=tennis;charset=utf8';
  $user = 
}
?>