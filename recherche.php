<?php
include('navbar.php');

$pdo = getPdo();

$searchAll = $pdo->query('SELECT * FROM  vols ORDER BY idvols DESC');
	if(isset($_GET['q']) AND !empty($_GET['q'])) {
	   $q = htmlspecialchars($_GET['q']);
	   $searchAll = $pdo->query('SELECT idvols , villeArrivee FROM vols WHERE villeArrivee LIKE "%'.$q.'%" ORDER BY idvols DESC');
	   if($searchAll->rowCount() == 0) {
	      $searchAll = $pdo->query('SELECT villeArrivee FROM vols WHERE CONCAT(villeArrivee) LIKE "%'.$q.'%" ORDER BY idvols DESC');
	   }
	}

?>

<section class="searchA" id=searchA>


<?php if($searchAll->rowCount() > 0) { ?>
	   <ul>
        <div class="alert alert-success v ">
          <h5>Resultat de la recherche :</h5>
        </div>
	   <?php while($a = $searchAll->fetch()) { ?>
        <div class="searchAll-result">
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