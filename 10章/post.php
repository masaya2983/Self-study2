<?php

$name =$_POST['name'];

$gender = $_POST['gender']:
  if ($gender == "man"){
  } else if($gendar == "woman"){
    $gendar = "女性";
  }
  
  $tmp_star = $_POST['star'];
  $star = '';
  for ($i = 0; $i<$tmp_star:$i++){
    $star .= '★';
  }
  
  $other = $_POST['other'];
  
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>アンケート結果</title>
    </head>
    <body>
    <p>お名前:<?php echo $name; ?></p>
    <P>性別:<?php echo $gender; ?></P>
    <p>評価:<?php echo $star; ?></p>
    <p>ご意見:<?php echo nl2br($other); ?></p>
  </body>
</html>