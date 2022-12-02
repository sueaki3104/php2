<?php
// POSTデータ確認
// var_dump($_POST);
// exit();
if (
  !isset($_POST['date_of_purchase']) || $_POST["date_of_purchase"]=='' ||
  !isset($_POST['distillery_name']) || $_POST["distillery_name"]=='' ||
  !isset($_POST['whisky_name']) || $_POST["whisky_name"]=='' ||
  !isset($_POST['whisky_age']) || $_POST["whisky_age"]=='' ||
  !isset($_POST['place']) || $_POST["place"]=='' ||
  !isset($_POST['how_many']) || $_POST["how_many"]=='' ||
  !isset($_POST['price']) || $_POST["price"]=='' ||
  !isset($_POST['memory']) || $_POST["memory"]==''
) {
  exit('必要事項の入力がされていません');
}

$date_of_purchase = $_POST["date_of_purchase"];
$distillery_name = $_POST["distillery_name"];
$whisky_name =  $_POST["whisky_name"];
$whisky_age =  $_POST["whisky_age"];
$place =  $_POST["place"];
$how_many =  $_POST["how_many"];
$price =  $_POST["price"];
$memory =  $_POST["memory"];

// DB接続
$dbn ='mysql:dbname=gsacf_l08_06;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';


try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

// 「dbError:...」が表示されたらdb接続でエラーが発生していることがわかる．

// SQL作成&実行
$sql = 'INSERT INTO whisky_table (id, date_of_purchase, distillery_name, whisky_name, whisky_age, place, how_many, price, memory, created_at, updated_at) VALUES (NULL, :date_of_purchase, :distillery_name, :whisky_name, :whisky_age, :place, :how_many, :price, :memory, now(), now())';

$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':date_of_purchase', $date_of_purchase, PDO::PARAM_STR);
$stmt->bindValue(':distillery_name', $distillery_name, PDO::PARAM_STR);
$stmt->bindValue(':whisky_name', $whisky_name, PDO::PARAM_STR);
$stmt->bindValue(':whisky_age', $whisky_age, PDO::PARAM_STR);
$stmt->bindValue(':place', $place, PDO::PARAM_STR);
$stmt->bindValue(':how_many', $how_many, PDO::PARAM_STR);
$stmt->bindValue(':price', $price, PDO::PARAM_STR);
$stmt->bindValue(':memory', $memory, PDO::PARAM_STR);

// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header('Location:whisky_read.php');