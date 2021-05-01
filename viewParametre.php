<?php
include('navbar.php');

$pdo = getPdo();
if(isset($_SESSION['id']) AND !empty($_SESSION['id'])) {
    $pdo = getPdo();
    $get_id = htmlspecialchars($_SESSION['id']);
  
     $stmt = $pdo->prepare('SELECT * FROM membres WHERE id = ?');
     $stmt->execute(array($get_id));
  
         // Vérification que le membre existe bien
         if($stmt->rowCount() == 1) {
         $stmt = $stmt->fetch();
         $nom = $stmt['nom'];
         $prenom = $stmt['prenom'];
         $adresse = $stmt['adresse'];
         $ville = $stmt['ville'];
         $codePostal = $stmt['codePostal'];
         $email = $stmt['email'];
         $motdepasse = $stmt['motdepasse'];
        
         //..
     }
 }

 if (empty($errors) && isset($_POST['changer'])) {
     $pdo = getPdo();
     $stmt = $pdo->prepare("UPDATE membres SET
                             nom = :nom,
                             prenom= :prenom,
                             adresse = :adresse,
                             ville= :ville,
                             codePostal = :codePostal,
                             email = :email,
                             motdepasse= :motdepasse
                             WHERE id = :id");
  
     $stmt->execute(array(
                     'id' => $get_id,
                     'nom' => $_POST['nom'],
                     'prenom' => $_POST['prenom'],
                     'adresse' => $_POST['adresse'],
                     'ville' => $_POST['ville'],
                     'codePostal' => $_POST['codePostal'],
                     'email' => $_POST['email'],
                     'motdepasse' => $_POST['motdepasse']
                     ));
  
 
        if($stmt)
            {
            ?> <div class="alert alert-info">
           <strong>Succes</strong> Vos informations personnelles ont été mise à jour ! 
           </div><?php
        }else{
             ?> <div class="alert alert-info">
           <strong>Erreur</strong> Vos informations personelles n'ont pas été mise à jour ! 
           </div><?php
        }

 }

  
?>
<section class="param" id="param">

<div class="container-param-2 param">
        <div class="row">
            <div class="col-md-4">
                <h3>Vos informations  <i class="Pers-icon fas fa-user-cog"></i></h3>
                <form method="POST">
                    <div class="form-group-param">
                        <input type="text" class="form-control" name="nom" value="<?= $nom ;?>" ><br>
                        <input type="text" class="form-control" name="prenom" value=" <?= $prenom ;?>"><br>
                        <input type="text" class="form-control" name="adresse" value=" <?= $adresse ;?>"><br>
                        <input type="text" class="form-control" name="ville" value=" <?= $ville ;?>"><br>
                        <input type="text" class="form-control" name="codePostal" value=" <?= $codePostal ;?>"><br>
                        <input type="text" class="form-control" name="email" value=" <?= $email;?>"><br>
                        <input type="text" class="form-control" name="motdepasse" value=" <?= $motdepasse;?>"><br>
                    </div>
                    <button type="submit" name="changer" class="btn btn-primary btn-block">Changer</button>
                    <a class="btn btn-primary btn-block" href="ViewReservation.php?idmembre=<?php echo $_SESSION['id'];?>">Mes reservations</a>
                </form>
                    <p class="mt-xs-1"> <small>NianaVoyage- reservation vol et voyage © 2021</small> </p>
            </div>
        </div>
    </div>  
</Section>

<?php include('footer.php'); ?>

