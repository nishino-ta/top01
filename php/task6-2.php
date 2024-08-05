<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
<?php
function max_number($n1, $n2) {
    return max($n1, $n2);
}

$a = 9;
$b = 21;

$maxValue = max_number($a, $b);

echo "\$a=" . $a . "\n";
echo "\$b=" . $b . "\n";
echo "\$aと\$bのうち最大値は" . $maxValue . "です。\n";
?>




</body>
</html>