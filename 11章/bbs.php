<h1>掲示板</h1>
<form acction="write.php" method="post">
  <div class="form-group">
    <label>タイトル</label>
    <input type="text" name="title" class="form-control">
  </div>
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
  <input type ="submit" class="btn btn-primary" value="書き込む">
</form>