<?php 

  function h($str){
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  }
	header('X-FRAME-OPTIONS:DENY');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>確認画面</title>
	<link rel="stylesheet" href="">
</head>
<body>
<form method="post" action="thanks.php">
	やること:
  <?php echo h($_POST['todo']); ?>
  <br>
  <input type="hidden" name="todo" value="<?php echo h($_POST['todo']); ?>">
  <input type="submit" value="登録する">
</form>
<br>
<a href="index.php">一覧に戻る</a>

</body>
</html>