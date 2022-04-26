<?php

function connectDB () {

  $dsn="mysql:dbname=tdl;host=localhost:8889;port=8889";
    try{
      return new PDO($dsn,'root','root');
    }
    catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit();
    }
}

function connect(){
  $connexion = connectDB();
  $req = "SELECT * FROM `users`";
  $res = $connexion->query($req)->fetch();
  echo json_encode($res);
  
}




