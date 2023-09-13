<pre>
  <?php
  //配列の作成$friends[0]~$friends[2]ができる
    $friends = array("はるき","かおる","ひでと");
  //キーを指定して追加する。キーは飛び飛び値でもOK
    $friends[5] = "まさとし";
    
    $friends[2] = "よしき";
    var_dump($friends);
  ?>