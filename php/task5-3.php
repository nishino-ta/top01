<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
  <style>
    tr,th,td{
      border:1px #333 solid;
      padding: 5px 20px;
    }
    table{
      border-collapse: collapse;
    }

  </style>
</head>
<body>
<?php
$students = array(
    "鉛筆" => array(
        "price" => 100,
        "price2" => 110,
    ),
    "消しゴム" => array(
        "price" => 200,
        "price2" => 220,
    ),
    "定規" => array(
        "price" => 300,
        "price2" => 330,
    )
);

echo "<table border='1'>";
echo "<tr><th>商品</th><th>価格</th><th>税込価格</th></tr>";
foreach ($students as $name => $grades) {
    echo "<tr>";
    echo "<td>" . $name . "</td>";
    foreach ($grades as $subject => $grade) {
        echo "<td>" . $grade . "円</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>



</body>
</html>