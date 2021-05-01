<?php
include('navbar.php');

$pdo = getPdo();

$mesreserv = $pdo->query('SELECT * FROM reservation WHERE id = '.$_SESSION['id']);


if(isset($_GET['Succes']))
{
   ?> <div class="alert alert-info">
    <strong>Succes</strong> la reservation  à bien été supprimée ! 
</div>
<?php
}

if(isset($_GET['Error']))
{
   ?> <div class="alert alert-danger">
    <strong>Danger</strong> la reservation n'a pas été supprimée ! 
</div>
<?php
}
?>


<section class="reservations" id="reservations">
           <table>
            <thead>
                <tr>
                    <th scope="col">NUMERO DE RESERVATION</th>
                    <th scope="col">NUMERO DE VOL</th>
                    <th scope="col">INFOS CLIENT</th>
                    <th scope="col">DESTINATION</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>

            <?php while ($donnees = $mesreserv->fetch()){
                echo '<tbody>';
                echo '<tr>'; 
                echo  '<td data-label="n° reservation">'.$donnees['idres'].'</td>';
                echo  '<td data-label= "n° vol">'.$donnees['numvol'].'</td>';
                echo   '<td data-label= "Infos">'.$donnees['nom'].' '.$donnees['prenom'].'</td>';
                echo   '<td data-label= "Destination">'.$donnees['destination'].'</td>';
                echo   '<td data-label=""><a class="btn btn-primary btn-block r" href="viewDelete.php?idmembre='.$_SESSION['id'].'&supprimer?idres=' .$donnees['idres'] . '" value="delete">Supprimer</a></td>';
                echo '</tr>';
                echo '</tbody>';
            }   ?>
           </table>
</section>

<?php include('footer.php');?>