<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>登録完了</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php require 'mainte/insert.php';
	insertContact($_POST);	//PDO実行
	?>
  やることを作成しました！
  <br>
  <a href="index.php">一覧に戻る</a>
</body>
</html>