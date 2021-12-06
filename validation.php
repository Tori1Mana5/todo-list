<?php 
function validation($request){
  $errors = [];

  if(empty($request['do'])){
    $errors[] = 'やることは必須です';
  }

  return $errors;
}
?>