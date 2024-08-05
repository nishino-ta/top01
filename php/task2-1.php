<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $week = array('日','月','火','水','木','金','土');
  ?>
  
  <ul>
    <li><?= $week[0];?>曜日</li>
    <li><?php echo $week[1];?>曜日</li>
    <li><?= $week[2];?>曜日</li>
    <li><?= $week[3];?>曜日</li>
    <li><?= $week[4];?>曜日</li>
    <li><?= $week[5];?>曜日</li>
    <li><?= $week[6];?>曜日</li>
  </ul>
</body>
</html>