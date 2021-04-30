<?php
include('navbar.php');

$pdo = getPdo();

$destination = $pdo->query('SELECT * FROM vols ORDER BY idvols DESC');
	if(isset($_GET['q']) AND !empty($_GET['q'])) {
	   $q = htmlspecialchars($_GET['q']);
	   $destination = $pdo->query('SELECT idvols , villeArrivee FROM vols WHERE villeArrivee LIKE "%'.$q.'%" ORDER BY idvols DESC');
	   if($destination->rowCount() == 0) {
	      $destination = $pdo->query('SELECT villeArrivee FROM vols WHERE CONCAT(villeArrivee) LIKE "%'.$q.'%" ORDER BY idvols DESC');
	   }
	}

?>

<section class="lesvols" id=vol>

<div class="container-search-vol">
    <div class="input-group">
        <form class="form-inline" method="GET">
            <input class="form-control mr-sm-2" type="search" name="q" placeholder="Search destination" aria-label="Search">
            <button type="submit" name="search" class="search-icon fas fa-search-location"></button>
        </form>
    </div>
</div>

<?php if($destination->rowCount() > 0) { ?>
	   <ul>
        <div class="alert alert-success v ">
          <h5>Resultat de la recherche :</h5>
        </div>
	   <?php while($a = $destination->fetch()) { ?>
        <div class="destination-result">
            <li><a href="detailVol.php?idvols=<?=$a['idvols']; ?>"><?= $a['villeArrivee'];?></a></li>
        </div>  
	   <?php } ?>
	   </ul>
	<?php } else { ?>
    <div class="alert alert-warning ">
      <strong>Erreur</strong> Aucune destination pour : <?= $q ?>...
    </div>
	<?php } ?>

</section>

<?php include('footer.php'); ?>