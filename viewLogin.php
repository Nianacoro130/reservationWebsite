<?php
include('navbar.php');
?>



<section class="register" id="connecter">
    <div class="container-login-2 membres-register">
        <div class="row">
            <div class="col-md-4">
                <h3>Connexion</h3>
                <form id="form1" name="form1" method="POST">
                    <div class="form-group">
                    <i class="login-icon fas fa-user"></i>
                        <input type="email" class="form-control" name="email" id="inputEmailC"placeholder="Mail" >
                    </div>
                    <div class="form-group">
                    <i class="login-icon fas fa-key"></i>
                        <input type="password" class="form-control" name="motdepasse"  id="inputMdpC" placeholder="Password" >
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                    <a href="#"><small>Mot de Passe oublié ?</small></a>
                    <p class="text-muted text-center"><small>Vous n'avez pas de compte ?</small></p>
                    <a class="btn btn-default btn-block" href="viewRegister.php#enregister">Creer un compte</a>
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


