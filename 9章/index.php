<?php $info = file_get_contents("info.txt") ?>
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