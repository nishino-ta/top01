<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
    class Staff {
      private $name; // 名前
      private $age;  // 年齢
      private $sex;  // 性別
      private $id;   // 社員番号
  
      // コンストラクタ
      public function __construct($name, $age, $sex, $id) {
          $this->name = $name;
          $this->age = $age;
          $this->sex = $sex;
          $this->id = $id;
      }
  
      // 名前を取得するメソッド
      public function getName() {
          return $this->name;
      }
  
      // 年齢を取得するメソッド
      public function getAge() {
          return $this->age;
      }
  
      // 性別を取得するメソッド
      public function getSex() {
          return $this->sex;
      }
  
      // 社員番号を取得するメソッド
      public function getId() {
          return $this->id;
      }
  
      // スタッフ情報を表示するメソッド
      public function displayInfo() {
          echo "({$this->id}) {$this->name} {$this->age}歳 {$this->sex}\n";
      }
  }
  
  // Staffクラスのオブジェクトを生成
  $staff1 = new Staff('佐藤 一郎', 31, '男性', 'S0001');
  $staff2 = new Staff('山田 花子', 25, '女性', 'S0002');
  $staff3 = new Staff('鈴木 次郎', 27, '男性', 'S0003');
  
  // スタッフ情報を表示
  $staff1->displayInfo(); // (S0001) 佐藤 一郎 31歳 男性
  $staff2->displayInfo(); // (S0002) 山田 花子 25歳 女性
  $staff3->displayInfo(); // (S0003) 鈴木 次郎 27歳 男性
  
  ?>
  
</body>
</html>