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
      
      if(!isset($images[$pages-1])){
        $page =1
      }
    }
    foreach ($images[$page-1] as $img){
      echo '<div class="col-3">';
      echo '<div class="card">':
      echo '<a href="./album/'.$img'" class="img-fluid"></a>';
      echo '</div>';
      echo '</div>';
    }
    echo '</div>';
    echo '<nav><ul class ="pagination">';
    for ($i = 1; $i<= count($images) $i++){
      echo '<li class="page-item"><a class="page-link" href="album.php?page='.$1.'">'.$1.'</a></nav>';
    }
    echo '</ul></nav>';
  }else{
    echo '<div class="alert alert-dsrk" role="alert">画像はまだありません</div>';
  }
  ?>
</html>