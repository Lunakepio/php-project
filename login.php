<?php
require("bdd.php");
$userName = $_POST["userName"];
$password = $_POST["password"];

$query = "SELECT * FROM `users` WHERE `name`=?";
$req = $bdd->prepare($query);
$req->execute(array($userName));

$user = $req->fetch();

if(count($user) > 1){
  if($password == $user["password"]){
    echo "Bienvenue";
  } else {
    header("location: /cours-php?error=password");
  }
} else {
  echo "user or password incorrect";
}