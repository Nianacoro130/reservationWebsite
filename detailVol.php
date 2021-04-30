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


?>

<section class="detailvols" id=detailvols>
<div class="container-detailvol">
    <div class="input-group">
        <form class="form-inline">
            <div class="form-row">
                <div class="col">
                    <label for="label-dvol">NUMERO DE VOL</label>
                    <input type="text" class="form-control" value="<?= $numvol;?>" readonly="readonly">
                </div>
                <div class="col">
                    <label for="label-dvol">VILLE DEPART</label>
                    <input type="text" class="form-control" value="<?= $villeD;?>" readonly="readonly">
                </div>
                <div class="col">
                    <label for="label-dvol"> VILLE ARRIVEE</label>
                    <input type="text" class="form-control" value="<?=$villeA;?>" readonly="readonly">
                </div>
                <div class="col">
                    <label for="label-dvol">HEURE DEPART</label>
                    <input type="text" class="form-control" value="<?=$heureD;?>" readonly="readonly">
                </div>
                <div class="col">
                    <label for="label-dvol">HEURE ARRIVEE</label>
                    <input type="text" class="form-control" value="<?=$heureA;?>" readonly="readonly">
                </div>
            </div>
            <button type="submit" name="reserve" class="btn btn-primary btn-block s">Reserver</button>
        </form>
    </div>
</div>


</section>

<?php include('footer.php'); ?>