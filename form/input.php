<?php 
$pageFlag = 0;

if(!empty($_POST['do'])){
	$pageFlag = 1;
}

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
	<?php if($pageFlag === 0) :?>
		登録画面です
		<form method="post" action="input.php">
			やることは？
			<input type="hidden" name="id">
			<textarea name="do"><?php if(!empty($_POST['do'])){echo $_POST['do'] ;} ?></textarea>
			<input type="submit" value="確認する">
		</form>
	<?php endif ?>

	<?php if($pageFlag === 1) :?>
		確認画面です
		<form method="post" action="../index.php">
			やること:
			<input type="hidden" name="id">
			<textarea name="do"><?php echo $_POST['do'] ?></textarea>
			<input type="submit" value="登録する">
		</form>
		<br>
		<a href="input.php">戻る</a>
	<?php endif ?>

</body>
</html>