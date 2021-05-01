<?php
include('navbar.php');

if(isset($_GET['idvols']) AND !empty($_GET['idvols'])){
    $pdo = getPdo();
    $stmt= $pdo->query('SELECT * FROM vols WHERE idvols = ' .$_GET['idvols']);
     if($stmt->rowCount() == 1) {
        $stmt = $stmt->fetch();
        $numvol = $stmt['numvol'];
        $villeD = $stmt['villeDepart'];
        $villeA = $stmt['villeArrivee'];
        $heureD = $stmt['heureDepart'];
        $heureA = $stmt['heureArrivee'];
         
    }
 
}

if(isset($_POST['reserve'])){
    $pdo = getPdo();

    $reserv = $pdo->query("INSERT INTO  reservation (nom,prenom,numvol,destination,id)

     VALUES ('$_SESSION[nom]','$_SESSION[prenom]','$numvol','$villeA' ,'$_SESSION[id]')") or die($pdo->error);

}


?>

<section class="detailvols" id=detailvols>
<div class="container-detailvol">
    <div class="input-group">
        <form class="form-inline" method="post">
            <div class="form-row">
                <div class="col">
                    <label for="label-dvol">NUMERO DE VOL</label>
                    <input type="text" class="form-control" name="numvol" value="<?= $numvol;?>" readonly="readonly">
                </div>
                <div class="col">
                    <label for="label-dvol">VILLE DEPART</label>
                    <input type="text" class="form-control" name="villeD" value="<?= $villeD;?>" readonly="readonly">
                </div>
                <div class="col">
                    <label for="label-dvol"> VILLE ARRIVEE</label>
                    <input type="text" class="form-control" name="villeA" value="<?=$villeA;?>" readonly="readonly">
                </div>
                <div class="col">
                    <label for="label-dvol">HEURE DEPART</label>
                    <input type="text" class="form-control"name="heureD" value="<?=$heureD;?>" readonly="readonly">
                </div>
                <div class="col">
                    <label for="label-dvol">HEURE ARRIVEE</label>
                    <input type="text" class="form-control" name="heureA" value="<?=$heureA;?>" readonly="readonly">
                </div>
            </div>
            <button type="submit" name="reserve" class="btn btn-primary btn-block s">Reserver</button>
        </form>
    </div>
</div>


</section>

<?php include('footer.php'); ?>