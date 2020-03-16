
<?php include_once("header.php"); ?>

<img src="img/logo.png" style="margin-top:10%;margin-left:40%;height:200px; width:300px;"></img>

<?php
//COMPTE
  $requete_compte = "SELECT valeur FROM compte";
  $compte = $bdd->query($requete_compte);
  $libelle_compte = "Compte Bancaire : ";
  foreach ($compte as $valeur) 
  {
    echo '<div class="row">
          <div class="col s12 m12">
            <div class="card black darken-1">
              <div class="card-content white-text">
                <H1 align="center">'.$libelle_compte.$valeur["valeur"].' €</H1>
              </div>
            </div>
          </div>
      </div>';
      $libelle_compte = "Compte Crypto : ";
  }
?>
        
<!------------------------------------------------------------------------------------------------------>

<?php include_once("footer.php"); ?>
