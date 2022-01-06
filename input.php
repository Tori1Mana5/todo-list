<?php 

session_start();

require 'validation.php';

header('X-FRAME-OPTIONS:DENY');

$errors = validation($_POST);
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

<?php if(!empty($errors) && !empty($_POST['btn_confirm'])): ?>
	<?php echo '<ul>'; ?>
	<?php 
		foreach($errors as $error){
			echo '<li>'. $error . '</li>';
		}
	?>
	<?php echo '</ul>'; ?>
<?php endif; ?>
登録画面です
<form method="post" action="confirm.php">
	やることは？
	<br>
	<textarea name="todo"></textarea>
	<br>
	<input type="submit" name="btn_confirm" value="確認する">
</form>
<a href="index.php">一覧に戻る</a>


</body>
</html>