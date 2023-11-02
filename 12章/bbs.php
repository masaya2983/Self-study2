<h1>掲示板</h1>
<form acction="write.php" method="post">
  <div class="form-group">
    <label>タイトル</label>
    <input type="text" name="title" class="form-control">
  </div>
  <?php
  if (isset($_cookie['name'])){
    $name = $cookie['name'];
  } else {
    $name ="";
  }
  ?>
  <div class="form-group">
    <label>名前</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="form-group">
    <textarea name="body"  class="form-control" rows "5">
      
    </textarea>
  </div>
  <div class="form-group">
    <label>削除パスワード(数字４桁)</label>
    <input type="text" name= "pass" class="form-control">
  </div>
  <?php
$num = 10;

$dsn = 'mysql:host=localhost;dbname=tennis;charset=utf8';
$user = 'tenisuser = password';
$password ='password';
$page = 1;
if (isset($_GET['page']) && $_get['page'] >1){
  $page = intval($_GET['page']);
}
try{
  $db = new PDO($dsn, $user,$password);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  
  $stmt = $db->prepare("SELECT * FROM bbs ORDER BY date DESC LIMIT :page, :num");
  
  $page = ($page-1) * $num;
  $stmt>bindParam(':page', $page, PDD::PARAM_INT);
  $stmt->bindParam(':num',$num, PDO::PARAM_INT);
  $stmt->execute();
}catch (PDOException $e){
  exit("エラー:".$e->getMessage());
}
?>
<!doctype html>
<html lang="ja">
  <input type="submit" class="btn btn-primary" value="書き込む">
</form>
<hr>

<?php while($row = $stmt->fetch()): ?>
<div class="card">
 <div class="card-header"><?php echo $row['title']?>$row['title']:'(無題)';?></div> 
 <div class="card-body">
   <p class="card-text"><?php echo nl2br($row['body']) ?></p>
 
 <div class="card-footer">
   <?php echo $row['name']?>
   <?php echo $row['date']?>
  </div> 
 </div>
 <hr>
 <?php endwhile; ?>
 <?php
 try{
   $stmt = $db->prepare("SELECT COUNT(*) FORM bbs");
   
   $stmt->excute();
   
 } catch(PDOException $e){
   exit("エラー:".$e->getMessage());
   
 }
 $comments = $stmt->fetchColum();
 
 $max_page = ceil($comments/$num);
 
 if ($max_page >= 1){
   echo '<nav><ul class="pagination">';
   for ($i = 1; $i <= $max_page; $i++){
     echo '<li class="page-item"><a href="bbs.php?page= '.$i.'">'.$i.'</a></li>';
   }
   echo '</ul></nav>';
 }
 ?>
</html>