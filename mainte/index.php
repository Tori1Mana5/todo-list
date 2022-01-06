<?php 
require 'db_connection.php';

$sql = 'select * from todo where id = 2';
$stmt = $pdo->query($sql);  //sql実行

// echo '<pre>';
// var_dump($result);
// echo '</pre>';

$sql = 'select * from todo where id = :id'; //名前付きプレースホルダ
$stmt = $pdo->prepare($sql);
$stmt->bindValue('id', 1, PDO::PARAM_INT);  //紐付け
$stmt->execute(); //実行
$result = $stmt->fetchall();
echo '<pre>';
var_dump($result);
echo '</pre>';
?>