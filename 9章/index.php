<?php 
$fp =fopen("info.txt","r");
$line = array();
$body = '';
if ($fp){
  while (!feof($fp)){
    $line[]= fgets($fp);
  }
  fclose($fp);
}
?>
<!doctype html>
<html lang="ja"></html>


<h1>お知らせ</h1>
<p><?php 
if ($fp){
  
  $title = fgets($fp);
  if ($title){
    
    echo '<p><a href="info.php">'.$title.'</a></p>';
  }else{
    echo '<p>お知らせはありません</p>';
  }
  fclose($$fp);
}else{
  

echo '<p> お知らせはありません</p>';
}

?>