<?php session_start(); 
include('librairies/db.class.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script> 
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> 
    <script src="js/members.js"></script>
    <title>Reservation</title>
</head>
<body>
<section id="home" class="home-container">
    <header id="header" class="header">
        <img src="assets/images/LogoNiana.png" alt="Reservation Hotel et Vol" class="logo">
        <ul class="nav-links">
            <li>
                <a href="index.php" data-text="Accueil">Accueil</a>
            </li>
            <?php if (isset($_SESSION['id'])): ?>
            <li> 
                <a href="viewParametre.php#param" data-text="<?=  $_SESSION['nom']." ".$_SESSION['prenom'] ?>"><?=  $_SESSION['nom']." ".$_SESSION['prenom'] ?></a> 
            </li>
            <li> 
                <a href="deconnect.php" data-text="Se deconnecter">Se deconnecter</a> 
            </li>
            <?php else: ?>
            <li>  
                <a href="viewLogin.php#connecter" data-text="Se connecter">Se connecter </a> 
            </li>
            <?php endif ;?> 
            <li>
                <a href="index.php#best-sales" data-text="Offre-Seller">Offre-Seller</a>
            </li>
            <li>
                <a href="index.php#hotels" data-text="Hotels">Hôtels</a>
            </li>
            <li>
                <a href="viewVol.php#vol" data-text="Vol">Vol</a>
            </li>
            <il>
                <div id="rolling_bar">
                    <input type="text" id="txt">
                    <a href="#" id="btn">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
            </il>
        </ul>
        
        <div class="burger-container">
            <div class="burger"></div>
        </div>
    </header>
    <div class="landing">
        <h1 class="big-title">Reservez et voyagez partout dans le monde ! </h1>
        <a href="#delivery" class="delivery-link">
            <span class="scroll-text" data-text="Scroll">Scroll</span>
            <i class="scroll-icon fas fa-angle-down"></i>
        </a>
    </div>
</section>