<?php 
function h($str){
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<head></head>
<body>

  <form method="post" action="../index/index.php">
    やること
    <input type="text" name="todo" value="<?php if(!empty($_POST['todo'])){echo h($_POST['todo']) ;}?>" required>
    <br>
    <input type="submit" value="確認する">
  </form>

</body>
</html>