<?php
/* test */
if(isset($_GET["error"])){
  $error = $_GET["error"];
  if($error == "age"){
    echo "error : vous êtes trop jeune pour rentrer dans le bar";
  }
  if($error == "password"){
    echo "error : utilisateur ou mot de passe incorrect";
  }
}


?>

<form method="POST" action="./login.php">
  <input type="text" name="userName" />
  <input type="password" name="password" />
  <input type="submit" />
</form>