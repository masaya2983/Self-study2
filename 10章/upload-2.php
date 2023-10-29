<?php
$msg = null;
$alert = null;
if (isset($_FILES['imag']) && is_uploaded_file($_FILES['image']['tmp_name'])){
  $old_name = $_FILES['image']['tmp_name'];
  $new_name = $_FILES['image']['name'];
  if (move_uploaded_file($old_name, 'album/'.$new_name)){
    $msg = 'アップロードしました';
    $alert = 'success';
  } else {
    $msg = 'アップロードできませんした';
    $alert = 'danger';
  }
    
}

?>
<!doctype html>
<html lang='ja'>
  <h1>画像をアップロード</h1>
  <?php
   if($msg){
     echo '<div class="alert alert-'.$alert.'"role="alert">'.$msg.'</div>';
   }
?>
<form action="uoload.php" method="post" enctype="multipart/form-data">
  
</form>
</html>