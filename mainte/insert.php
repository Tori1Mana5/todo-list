<?php 

function insertContact($request){
  //DB接続　PDO
  require 'db_connection.php';
  
  $params = [
    'id' => null,
    'todo' => $request['todo'],
  ];
  
  $count = 0;
  $columns ='';
  $values = '';
  
  foreach(array_keys($params) as $key){
    if($count++ > 0){
      $columns .= ',';
      $values .= ',';
    }
    $columns .= $key;
    $values .= ':' .$key;
  }
  
  
  $sql = 'insert into todo ('. $columns .')values('. $values .')'; //名前付きプレースホルダ
  // var_dump($sql);
  
  $stmt = $pdo->prepare($sql);
  $stmt->execute($params); //実行

}



?>