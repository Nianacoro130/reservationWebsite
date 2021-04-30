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
    <script src="js/members.js"></script>
    <title>Reservation</title>
</head>
<body>    
<section id="home" class="home-container">
    <header id="header" class="header">
        <img src="assets/images/LogoNiana.png" alt="Reservation Hotel et Vol" class="logo">
        <ul class="nav-links">
            <li>
                <a href="#" data-text="Accueil">Accueil</a>
            </li>
            <?php if (isset($_SESSION['id'])): ?>
            <li> 
                <a href="viewParametre.php#" data-text="<?=  $_SESSION['nom']." ".$_SESSION['prenom'] ?>"><?=  $_SESSION['nom']." ".$_SESSION['prenom'] ?></a> 
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
                <a href="#best-sales" data-text="Offre-Seller">Offre-Seller</a>
            </li>
            <li>
                <a href="#hotels" data-text="Hotels">Hôtels</a>
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
 <section id="delivery" class="delivery-container">
    <div class="shop">
        <i class="delivery-icon fas fa-plane-departure"></i>
        <p class="box-content">
            Plus de 100000 destinations à l'international.
        </p>
    </div>
    <div class="withdrawal">
        <i class="delivery-icon fas fa-home"></i>
        <p class="box-content">
            Hôtel et Villa, avec services d'accompagnement aux loisirs.
        </p>
    </div>
    <div class="delivery">
        <i class="delivery-icon fas fa-utensils"></i>
        <p class="box-content">
            Des milliers de restaurants partenaires.
        </p>
    </div>
    <div class="Box-Box">
        <i class="delivery-icon fas fa-ban"></i>
        <p class="box-content">
            Annulation gratuit au bout d'une 1H.
        </p>
    </div>
    
</section>
<section id="best-sales" class="best-sales-container">
    <h1 class="section-title"> Nos meilleures offres d'Hôtels</h1>
    <div class="best-hotels">
        <a href="#" class="hotel-box no-grid hotel1">
            <div class="hotel-bio">
                <h1 class="hotel-name">Burj-Al-Arab</h1>
                <h3 class="hotel-price">499,99€</h3>
            </div>
        </a>
        <a href="#" class="hotel-box no-grid hotel2">
            <div class="hotel-bio">
                <h1 class="hotel-name">Sheraton H</h1>
                <h3 class="hotel-price">309,99€</h3>
            </div>
        </a>
        <a href="#" class="hotel-box no-grid hotel3">
            <div class="hotel-bio">
                <h1 class="hotel-name">Las Vegas</h1>
                <h3 class="hotel-price">199,99€</h3>
            </div>
        </a>
        <a href="#" class="hotel-box no-grid hotel4">
            <div class="hotel-bio">
                <h1 class="hotel-name">Hôtel Bordeaux</h1>
                <h3 class="hotel-price">109,99€</h3>
            </div>
        </a>
    </div>
</section>
<section id="hotels" class="hotels-container">
    <h1 class="section-title">Nos Hôtels </h1>
    <div class="grid-hotels">
        <a href="viewMesHotels.php?=Espagne" class="hotel-box grid hotel-grid1">
            <div class="hotel-bio">
                <h1 class="hotel-name">Hôtel Espagne</h1>
                <h3 class="hotel-price">299,99€</h3>
            </div>
        </a>
        <a href="#" class="hotel-box grid hotel-grid2">
            <div class="hotel-bio">
                <h1 class="hotel-name">Hôtel Dubai</h1>
                <h3 class="hotel-price">399,99€</h3>
            </div>
        </a>
        <a href="#" class="hotel-box grid hotel-grid3">
            <div class="hotel-bio">
                <h1 class="hotel-name">Hôtel Marrakech</h1>
                <h3 class="hotel-price">179,99€</h3>
            </div>
        </a>
        <a href="#" class="hotel-box grid hotel-grid4">
            <div class="hotel-bio">
                <h1 class="hotel-name">Hôtel Espagne</h1>
                <h3 class="hotel-price">99,99€</h3>
            </div>
        </a>
        <a href="#" class="hotel-box grid hotel-grid5">
            <div class="hotel-bio">
                <h1 class="hotel-name">Hôtel Miami</h1>
                <h3 class="hotel-price">299,99€</h3>
            </div>
        </a>
        <a href="#" class="hotel-box grid hotel-grid6">
            <div class="hotel-bio">
                <h1 class="hotel-name">Hôtel Finlande</h1>
                <h3 class="hotel-price">199,99€</h3>
            </div>
        </a>
    </div>
</section>
<footer id="footer" class="footer">
    <span class="copyrights">&copy; 2021 - Reservation et Vol</span>
    <a href="#" class="conditions">Contact</a>
    <a href="#" class="conditions">Condition générales de vente</a>
</footer>

<script>
    const burgerContainer = document.querySelector('.burger-container');
    const navLinks = document.querySelector('.nav-links');

    burgerContainer.addEventListener('click', () => {
        burgerContainer.classList.toggle('active');
        navLinks.classList.toggle('active');
    })
</script>

       
</body>

</html>