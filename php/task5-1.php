<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
<h1>九九の表</h1>
<table>
<?php
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>\n";
    for ($j = 1; $j <= 9; $j++) {
        echo "<td> $i x $j = " . $i * $j  ."</td>\n"; 
    }
    echo "</tr>";
}
?>
</table>




</body>
</html>