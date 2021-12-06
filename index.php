<?php 
	header('X-FRAME-OPTIONS:DENY');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TODOアプリケーション</title>
	<link rel="stylesheet" href="">
</head>
<body>
	今日やるべきこと
	<br>
	<a href="input.php">登録しにいく！！！！！！！</a>
	<table border="2"  bordercolor="red">
		<tr>
			<th><input type="checkbox" name="checkbox" checked></th>			
			<th>やること</th>
			<th>登録日</th>
			<th>更新日</th>
			<th>削除</th>
		</tr>
		<tr>
			<td><input type="checkbox" name="checkbox"></td>
			<td>勉強を行う</td>
			<td>2021-12-01-22:35</td>
			<td>2021-12-01-22:35</td>
			<td><button>削除</button></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="checkbox"></td>
			<td>お風呂を掃除する</td>
			<td>2021-12-01-19:00</td>
			<td>2021-12-01-19:00</td>
			<td><button>削除</button></td>
		</tr>
		<tr>
			<td><input type="checkbox" name="checkbox"></td>
			<td>勉強を行う</td>
			<td>2021-12-01-12:00</td>
			<td>2021-12-01-12:00</td>
			<td><button>削除</button></td>
		</tr>
	</table>
</body>
</html>