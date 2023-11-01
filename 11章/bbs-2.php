<div class="card-footer">
  <form action="delete.php" method="post" class="form-inline">
    <?php echo $row['name']?>
    (<?php echo $row['date']?>)
    <input type="hiden" name="id" value="<?php echo $row['id']?>">
    <input type="text" name="pass" placceholder="削除パスワード" class="form-control">
    <input type= "submit" value="削除" class="btn btn-secondary">
  </form>
</div>