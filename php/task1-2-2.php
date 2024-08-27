<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php 
  define('TAX',10);
  $a = 100;
  $b = 110;
  $c = 200;
  $d = 220;
  ?>

  
  <p>現在、消費税は<?= TAX; ?>％です。</p>
  <p>鉛筆が<?= $a; ?>円で税込<?= $b; ?>円です。</p>
  <p>消しゴムが<?= $c; ?>円で税込<?= $d; ?>円です。</p>
</body>
</html>