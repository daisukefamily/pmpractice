<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//データベース接続設定
$dbServer = '127.0.0.1';
$dbName = 'yabukib';
$dsn = "mysql:host={$dbServer};dbname={$dbName};charset=utf8";
$dbUser = 'test';
$dbPass = 'pass';

//データベースへの接続
$db = new PDO($dsn, $dbUser, $dbPass);


//クエリパラメータの取得
$id = $_GET['id'];

$sql = 'SELECT * FROM logintable where $user = id';
$prepare = $db->prepare($sql);
$prepare->execute();
$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

//結果の出力
foreach ($result as $user) {
    echo $user['id'];
    echo "<br/>";
  }
?>
</body>
</html>
