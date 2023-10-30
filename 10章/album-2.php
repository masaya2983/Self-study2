<?php
$images = array();
$sum = 4;

if($handle = opendir('./album')){
  while ($entry = readddir($handle)){
    
    if ($entry ! = "." && $entry !=".."){
      $images[] = $entry;
    }
  }
  closedir($handle);
}
?>
<!doctype html>
<html lang="ja">
  
  <h1>アルバム</h1>
  <?php
  if (count($images) >0){
    echo '<div class="row">';
    
    $images = array_chunk($images, $num);
    
    $page = 1;
    
    if (isset($_GET['page']) && is_numeric($_GET['page'])){
      $page = intval($_GET['page']);
      
      
    }
  }
  ?>
</html>