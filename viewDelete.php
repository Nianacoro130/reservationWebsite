<?php
include('navbar.php');


var_dump($_GET);

if(isset($_SESSION['id']) && isset($_GET['supprimer?idres'])){

    $pdo = getPdo();

    
    $supp= $pdo->prepare("DELETE  FROM reservation  where idres = ?");
    $supp->execute(array($_GET['supprimer?idres']));
    // var_dump($supp);
    
   //echo "Vous avez supprimer la reservation n° " .$_GET['supprimer?idres'];
    
     header('Location:ViewReservation.php?Succes');
    
     }

     else {
        header('Location:ViewReservation.php?Error');
    
    }