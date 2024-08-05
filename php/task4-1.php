<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
<?php
  $num = rand(1,100);
  $fortune = "";
  if ($num <= 20) {
    $fortune = "大吉";
  } else if ($num <= 50 ) {
    $fortune = "中吉";
  } else if ($num <= 80 ) {
    $fortune = "吉";
  } else if ($num <= 95 ) {
    $fortune = "凶";
  } else {
    $fortune = "大凶";
  }
?>
<h1>今日の運勢は”<?= $fortune; ?>”です。</h1>
</body>
</html>