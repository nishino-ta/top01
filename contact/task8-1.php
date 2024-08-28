<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="stylesheet.css">
</head>
<?php
var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $kana = $_POST['kana'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $inquiry = $_POST['inquiry'];
    $textarea = $_POST['textarea'];
    $privacy = $_POST['privacy'];
    echo "<h1>確認画面</h1>";
    echo "<p>お名前: " . $name . "</p>";
    echo "<p>フリガナ: " . $kana . "</p>";
    echo "<p>メールアドレス: " . $mail . "</p>";
    echo "<p>電話番号: " . $tel . "</p>";
    echo "<p>お問い合わせ項目: " . $inquiry . "</p>";
    echo "<p>お問い合わせ内容: " . $textarea . "</p>";
    echo "<p>個人情報保護方針: " . $privacy . "</p>";
}
?>

<body>
  <header>
    <div class="header">
      <h1>ここには会社名が入ります</h1>
      <div class="head_btn">
        <a href="#" class="head_btn1">ボタン</a>
        <a href="#" class="head_btn2">ボタン</a>
      </div>
    </div>
    <div class="menu">
      <a href="#" class="menu_btn">メニュー01</a>
      <a href="#" class="menu_btn">メニュー02</a>
      <a href="#" class="menu_btn">メニュー03</a>
    </div>
  </header>
  <div class="mv">
    <img src="mv.png" alt="">
  </div>
  <div class="main">
    <div class="sec_01">
      <div class="wrapper">
        <div class="sec_01_content">
          <h1>お問い合わせ</h1>
          <p>お問い合わせや業務内容に関するご質問は、電話またはこちらのお問い合わせフォームより承っております。<br>後ほど担当者よりご連絡させていただきます。</p>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="wrapper">
        <div class="Form">
          <div class="border">
            <form action="task8-2.php" method="POST">
              <div class="Form-Item">
                <p class="Form-Item-Label">
                  お名前<span class="Form-Item-Label-Required">必須</span>
                </p>
                <input type="text" name="name" class="Form-Item-Input" placeholder="例）山田太郎" value="<?= $name;?>">
              </div>
              <div class="Form-Item">
                <p class="Form-Item-Label">フリガナ<span class="Form-Item-Label-Required">必須</span></p>
                <input type="text" name="kana" class="Form-Item-Input" placeholder="例）ヤマダタロウ" value="<?= $kana;?>">
              </div>
              <div class="Form-Item">
                <p class="Form-Item-Label">メールアドレス<span class="Form-Item-Label-Required">必須</span></p>
                <input type="text" name="mail" class="Form-Item-Input" placeholder="例）example@gmail.com" value="<?= $mail;?>">
              </div>
              <div class="Form-Item">
                <p class="Form-Item-Label">電話番号<span class="Form-Item-Label-Required">必須</span></p>
                <input type="text" name="tel" class="Form-Item-Input" placeholder="例）000-0000-0000" value="<?= $tel;?>">
              </div>
              <div class="Form-Item">
                <p class="Form-Item-Label">お問い合わせ項目<span class="Form-Item-Label-Required">必須</span></p>
                <div class="cp_ipselect cp_sl01">
                  <select name="inquiry">
                    <option value="" hidden>選択してください</option>
                    <option value="1" <?php if($inquiry == 1){echo 'selected';}?>>1</option>
                    <option value="2" <?php if($inquiry == 2){echo 'selected';}?>>2</option>
                    <option value="3" <?php if($inquiry == 3){echo 'selected';}?>>3</option>
                    <option value="4" <?php if($inquiry == 4){echo 'selected';}?>>4</option>
                  </select>
                  </div>
              </div>
              <div class="Form-Item">
                <p class="Form-Item-Label isMsg">お問い合わせ内容<span class="Form-Item-Label-Required">必須</span></p>
                <textarea name="textarea" class="Form-Item-Textarea">こちらにお問い合わせ内容をご記入ください</textarea>
              </div>
              <div class="Form-Item">
                <p class="Form-Item-Label">個人情報保護方針<span class="Form-Item-Label-Required">必須</span></p>
                <input type="checkbox" name="privacy" class="q1" <?php if($privacy == on){echo 'checked';}?>><a href=""><font color="#006600"><span>個人情報保護方針</span></font></a>に同意します。
              </div>
              <input type="submit" class="Form-Btn" value="送信する">
            </form>
          </div>
        </div>        
      </div>
    </div>
    <div class="sec_btn">
      <div class="wrapper">
        <div class="sec_btn_content">
         <div class="sec_btn_left">
           <h3>こちらからご購入ください</h3>
           <a href="#" class="sec_btn1">ネットショップ</a>
         </div>
         <div class="sec_btn_right">
           <h3>お気軽にお問い合わせください</h3>
           <a href="#" class="sec_btn2">お問い合わせ</a>
         </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <h3>ここには会社名が入ります</h3>
    <p>住所が入ります<br>03-1234-5678<br>営業時間：9:00～18:00</p>
    <div class="border">
      <div class="link">
        <a href="#" class="menu_btn">リンク01</a>
        <a href="#" class="menu_btn">リンク02</a>
        <a href="#" class="menu_btn">リンク03</a>
        <a href="#" class="menu_btn">リンク04</a>
        <a href="#" class="menu_btn">リンク05</a>
        <a href="#" class="menu_btn">リンク06</a>
      </div>
    </div>
    <p>©copyright</p>
  </footer>
</body>
</html>
