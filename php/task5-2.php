<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
<?php
$week = array("月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日", "日曜日");
$i = 0;

echo "<ul>";
while ($i < count($week)) {
    echo "<li>" . $week[$i] . "</li>\n";
    $i++;
}
echo "</ul>";
?>





</body>
</html>