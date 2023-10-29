<?php
$images = array();

if ($handle = opeendir)('./album'){
  while ($entry = readdir($handle)){
    if ($entry ! = "." && $entry !=".."){
      $images[] = $entry ;
    }
  }
  closedir($handle);
}

?>
<!doctype html>
<html lang="ja">
  
  <h1>アルバム</h1>
  <?php
  if (count($images)>0){
    echo '<div class="row">';
    foreach ($images as $img){
      echo '<div class=col3>';
      echo '<div class="card">';
      echo '<a href="./album/'.$img.'"targe="_blank"><img src="./album/'.$img.'"class="img-fluid"></a>';
      echo '</div>';
      echo '</div>'
        
  } else {
    echo '<div class="alert alert-dark" role="alert">画像はまだありません</div>';
  }
  ?>
</html>