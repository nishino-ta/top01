<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php 
  define('TITLE','現在、消費税は10%です。');
  $a ='100円';
  $b ='110円';
  $c ='200円';
  $d ='220円';
  ?>

  
  <?= TITLE; ?>
  <p>鉛筆が<?= $a; ?>で税込<?= $b; ?>です。</p>
  <p>消しゴムが<?= $c; ?>で税込<?= $d; ?>です。</p>
</body>
</html>