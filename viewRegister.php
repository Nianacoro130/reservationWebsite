<?php
include('navbar.php');
?>



<section class="register" id="enregister">
    <div class="container-login-2 membres-register">
        <div class="row">
            <div class="col-md-4">
                <h3>Inscription</h3>
                <form id="form2" name="form2" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control"  name="nom" id="inputNom" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="prenom"  id="inputPrenom"placeholder="Prenom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  name="adresse" id="inputAdr" placeholder="Adresse">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  name="ville"  id="inputVille"placeholder="Ville">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  name="codePostal"  id="inputCdp"placeholder="CodePostal">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="inputMail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="motdepasse" id="inputMdp" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                    <a href="#"><small>Mot de Passe oublié ?</small></a>
                    <p class="text-muted text-center"><small>Vous avez un compte ?</small></p>
                    <a class="btn btn-default btn-block" href="viewLogin.php#connecter ">Se connecter</a>
                </form>
                    <p class="mt-xs-1"> <small>NianaVoyage- reservation vol et voyage © 2021</small> </p>
            </div>
        </div>
    </div>  
    <div class="modal fade"  id="ErreurMembers"  tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="errormtxt">
                    <li></li>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php'); ?>