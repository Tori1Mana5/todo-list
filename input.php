<?php 

session_start();

header('X-FRAME-OPTIONS:DENY');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>登録画面</title>
	<link rel="stylesheet" href="">
</head>
<body>

登録画面です
<form method="post" action="confirm.php">
	やることは？
	<input type="text" name="do">
	<input type="hidden" name="csrf" value="<?php echo $token; ?>">
	<input type="submit" value="確認する">
</form>
<a href="index.php">一覧に戻る</a>


</body>
</html>