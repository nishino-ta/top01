<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
  <style>
    tr,th,td{
      border:1px #333 solid;
      padding: 4px 17px;
      text-align: center;
    }
    table{
      border-collapse: collapse;
    }

  </style>
</head>
<body>
  <?php
  $a = array('name' =>'鉛筆','price' =>'100円');
  $b = array('name' =>'消しゴム','price' =>'200円');
  define ('TAX','1.1');
  $pen = 100;
  $eraser = 200;
  $dz = 12;
  ?>

  <table>
    <tr>
      <th>商品</th>
      <th>価格</th>
      <th>税込価格</th>
      <th>1Dzの価格</th>
    </tr>
    <tr>
      <td><?= $a[name]; ?></td>
      <td><?= $a[price]; ?></td>
      <td><?= $pen*TAX; ?>円</td>
      <td><?= $pen*TAX*$dz; ?>円</td>
    </tr>
    <tr>
      <td><?= $b[name]; ?></td>
      <td><?= $b[price]; ?></td>
      <td><?= $eraser*TAX; ?>円</td>
      <td><?= $eraser*TAX*$dz; ?>円</td>
    </tr>
  </table>
  <p>消費税は<?= (TAX-1)*100; ?>％です。</p>
</body>
</html>