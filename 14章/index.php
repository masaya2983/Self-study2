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
<html lang="ja">

<p>ログイン中のユーザー:<?php echo $_SESSION['name']?></p>
<h1>お知らせ</h1>
<?php 
if (count($line) > 0){
  for($i = 0; $i < count($line[0]);$i++ ){
    if($i == 0){
      echo '<h2>'.$line[0].'</h2>';
      
    } else {
      $body .= $line[$i].'<br>'  ;  
      
    }
  }
} else {
    $body = 'お知らせはありません';
  } 
echo '<p> '.$body.'</p>';
?>
</html>