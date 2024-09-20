<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php
$message = '今日の日付：'. date('Y/m/d');
define('TITLE','定数とは');
$a = array('田中',100,'OK');
$a[] = 200;
$a[total] = 300;
array_push($a, 400, 500);
?>

  <h1>Hello PHP World</h1>

  <p><?= $message ?></p>
  <p><?= TITLE; ?></p>
  <p>
    <?php print_r($a);?><br>
  </p>
  <a href="top01/">TOPページ</a>
</body>

<?php
  try{
    $pdo = new PDO(
      'mysql:host=localhost;dbname=company;charset=utf8mb4',
      'root',
      'root'
      [
        PDO::ATTR_DEFAULT_FETCH_MODE -> PDO::FETCH_ASSOC
      ]
    );

    // $pdo->query("DROP TABLE IF EWISTS syain");
    // $pdo->query(
      // "CREATE TABLE syain(
        // id    INT PRIMARY KEY,
        // name  VARCHAR(128),
        // age   4T,
        // work VARCHAR(64)
      // )"
    // );

    $pdo->query(
      "INSERT INTO syain (id, name, age, work) VALUES
        (10001, '佐藤 一郎', 31, '社員'),
        (10002, '山田 花子', 25, '社員'),
        (10003, '鈴木 次郎', 27, '社員'),
        (20001, '田中 友子', 24, 'パート')
        "
    );

    $stmt = $pdo->query("SELECT * FROM syain");
    $result = $stmt->fetchALL();
    // print_r($result);
    var_dump($results);

  } catch(PDOException $e) {
    echo $e->getMessage() . '<br>';
    exit;
  }
?>
</html>