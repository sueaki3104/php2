<?php

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


// SQL作成
$sql = 'SELECT * FROM whisky_table';
$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

// SQL実行の処理
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
// var_dump($result);
// exit();
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["date_of_purchase"]}</td>
      <td>{$record["distillery_name"]}</td>
      <td>{$record["whisky_name"]}</td>
      <td>{$record["whisky_age"]}</td>
      <td>{$record["place"]}</td>
      <td>{$record["how_many"]}</td>
      <td>{$record["price"]}</td>
      <td>{$record["memory"]}</td>
    </tr>
  ";
}




?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB連携型todoリスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>DB連携型todoリスト（一覧画面）</legend>
    <a href="whisky_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>ウィスキーのこと１</th>
          <th>ウィスキーのこと２</th>
        </tr>
      </thead>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
          <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>