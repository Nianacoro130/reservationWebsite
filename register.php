<?php
session_start();
require("librairies/db.class.php");




$result = -300;
/*
1= succes
0= il faut remplir tous les champs
-1= email ou nom existant 
-300= default
*/


if(isset ($_POST['nom']) && !empty($_POST['nom'])&& 
isset ($_POST['prenom']) && !empty($_POST['prenom']) && isset ($_POST['adresse']) && !empty($_POST['adresse'])&& 
isset ($_POST['ville']) && !empty($_POST['ville']) && isset ($_POST['codePostal']) && !empty($_POST['codePostal'])&&
isset ($_POST['email']) && !empty($_POST['email'])&& isset ($_POST['motdepasse']) && !empty($_POST['motdepasse'])){
    
        $pdo =getPdo();

        $nom = htmlentities($_POST['nom']);
        $prenom = htmlentities($_POST['prenom']);
        $adresse = $_POST['adresse'];
        $ville = $_POST['ville'];
        $codePostal = $_POST['codePostal'];
        $email =  filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $motdepasse = $_POST['motdepasse'];
      
        
            $reqmembre = $pdo->prepare('SELECT * FROM membres WHERE email = ?  or nom = ? ');
            $reqmembre->execute(array($email, $nom));
            $membreexist = $reqmembre->rowCount();


        if ($membreexist != 0 ) {
        
            $membreinfo = $reqmembre->fetch();
            // echo "email ou nom  deja exitant dans la bdd";
            $result = -1;
            echo $result;
        }
        else{
                   

             if($membreexist == 0 ){
            
                // $pass =  password_hash($motdepasse,PASSWORD_DEFAULT);
                // $dateIns = date("Y-m-d");                   
                $enregistrer= $pdo->query("INSERT INTO membres (nom,prenom,adresse,ville,codePostal,email,motdepasse) VALUES ('$nom', '$prenom', '$adresse','$ville','$codePostal','$email', '$motdepasse')")or die($pdo->error);
                $membreinfo = $reqmembre->fetch();
                    $_SESSION['id'] = $membreinfo['id'];
                    $_SESSION['nom'] = $membreinfo['nom'];
                    $_SESSION['prenom'] = $membreinfo['prenom'];
                    $_SESSION['email'] = $membreinfo['email'];

                $result= 1;
                echo $result;
            }
        }    
           
    }else{
        $result=0;
        echo $result;

    }
      

?>

