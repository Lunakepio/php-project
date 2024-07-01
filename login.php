<?php
require("bdd.php");
$userName = $_POST["userName"];
$password = $_POST["password"];

$query = "SELECT * FROM `users` WHERE `name`=?";
$req = $bdd->prepare($query);
$req->execute(array($userName));

$user = $req->fetch();

if($user){
  if($password == $user["password"]){
    if($user["age"] < 18){
      header("location: /cours-php/index.php?error=age");

    } else {
      if($user["sexe"] == "F" && date('H') == 17){
        echo "Bienvenue c'est gratuit";
      } else {
        echo "Bienvenue c'est 5 euros";
      }
    }
  } else {
    header("location: /cours-php/index.php?error=password");
  }
} else {
  echo "user or password incorrect";
}