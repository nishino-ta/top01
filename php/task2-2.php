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
  $a = array('name' =>'鉛筆','price' =>'100円','price2' =>'110円');
  $b = array('name' =>'消しゴム','price' =>'200円','price2' =>'220円');
  $c = array('name' =>'定規','price' =>'300円','price2' =>'330円');
  ?>

  <table>
    <tr>
      <th>商品</th>
      <th>価格</th>
      <th>税込価格</th>
    </tr>
    <br>
    <tr>
      <td><?= $a[name]; ?></td>
      <td><?= $a[price]; ?></td>
      <td><?= $a[price2]; ?></td>
    </tr>
    <tr>
      <td><?= $b[name]; ?></td>
      <td><?= $b[price]; ?></td>
      <td><?= $b[price2]; ?></td>
    </tr>
    <tr>
      <td><?= $c[name]; ?></td>
      <td><?= $c[price]; ?></td>
      <td><?= $c[price2]; ?></td>
    </tr>
  </table>
</body>
</html>