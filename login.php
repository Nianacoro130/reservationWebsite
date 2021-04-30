<?php
session_start();
include('librairies/db.class.php');

// include('js/script.js');

$result = -3;
/*
1 = succes
0 = il faut remplir tous les champs
-1 = email non existant 
-2 = mot de passe inccorect
-3 = default
*/

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['motdepasse']) && !empty($_POST['motdepasse'])){
  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $motdepasse =  $_POST['motdepasse'];

  $pdo = getPdo();
  $reqmembre = $pdo->prepare('SELECT * FROM membres WHERE email = ?');
  $reqmembre->execute(array($email));
  $membreexist = $reqmembre->rowCount();
  if($membreexist == 0){
    $result = -1;
    echo $result;

  }
  else{
    $membreinfo = $reqmembre->fetch();
     // if (password_verify ($membreinfo['motdepasse'] , $motdepasse))/
    if ($membreinfo['motdepasse'] != $motdepasse){
      $result = -2;
      echo $result;
    }
    else{
      $_SESSION['id'] = $membreinfo['id'];
      $_SESSION['nom'] = $membreinfo['nom'];
      $_SESSION['prenom'] = $membreinfo['prenom'];
      $_SESSION['adresse'] = $membreinfo['adresse'];
      $_SESSION['ville'] = $membreinfo['ville'];
      $_SESSION['codePostal'] = $membreinfo['codePostal'];
      $_SESSION['email'] = $membreinfo['email'];
      $result=1;
      echo $result;
    }

  }

}
else{
  $result = 0;
  echo  $result;

}

?>