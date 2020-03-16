<?php include_once("header.php"); ?>

<!-- Récupération du compte dans la BDD -->
<?php
//COMPTE
  $requete_compte = "SELECT valeur FROM compte where id=1";
  $compte = $bdd->query($requete_compte);
  $libelle_compte = "Compte Bancaire : ";
  foreach ($compte as $valeur) 
  {
    echo '<div class="row">
          <div class="col s12 m12">
            <div class="card blue darken-1">
              <div class="card-content white-text">
                <H1 align="center">'.$libelle_compte.$valeur["valeur"].' €</H1>
              </div>
            </div>
          </div>
      </div>';
      $libelle_compte = "Compte Crypto : ";
  }
?>


    <div style="padding-top:10%;" class="row">

      <div class="col s12">
        <a href="ajout-transaction.php" class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Ajouter une transaction</a>
      </div>

    </div>

    <!-- Affichage de toutes les transactions -->
    <?php
    	$requete = "SELECT * from transaction WHERE idcompte=1";
    	$donnees = $bdd->query($requete);


    	echo "<table class='striped'>
        <thead>
          <tr>
              <th>Activité</th>
              <th>Date</th>
              <th>Solde</th>
          </tr>
        </thead>
        <tbody>";


    	foreach ($donnees as $transaction) {
    		echo "<tr>
            <td>".$transaction["activite"]."</td>
            <td>".$transaction["date"]."</td>";
            if($transaction["modeTransaction"] == 0)
            {
            	echo "<td><span style='color:green;'>".$transaction["valeur"]." €</span></td>";
        	}
        	else
        	{
        		echo "<td><span style='color:red;'>".$transaction["valeur"]." €</span></td>";
        	}
    	}
    	echo "</tbody>
    	</table>";

    ?>

    <br/>
    <br/>
          
<?php
//COMPTE
  $requete_compte = "SELECT valeur FROM compte where id=2";
  $compte = $bdd->query($requete_compte);
  $libelle_compte = "Compte Crypto : ";
  foreach ($compte as $valeur) 
  {
    echo '<div class="row">
          <div class="col s12 m12">
            <div class="card blue darken-1">
              <div class="card-content white-text">
                <H1 align="center">'.$libelle_compte.$valeur["valeur"].' €</H1>
              </div>
            </div>
          </div>
      </div>';
      $libelle_compte = "Compte Crypto : ";
  }
?>


<!-- Affichage de toutes les transactions -->
    <?php
    	$requete = "SELECT * from transaction WHERE idcompte=2";
    	$donnees = $bdd->query($requete);


    	echo "<table class='striped'>
        <thead>
          <tr>
              <th>Activité</th>
              <th>Date</th>
              <th>Solde</th>
          </tr>
        </thead>
        <tbody>";


    	foreach ($donnees as $transaction) {
    		echo "<tr>
            <td>".$transaction["activite"]."</td>
            <td>".$transaction["date"]."</td>";
            if($transaction["modeTransaction"] == 0)
            {
            	echo "<td><span style='color:green;'>".$transaction["valeur"]." €</span></td>";
        	}
        	else
        	{
        		echo "<td><span style='color:red;'>".$transaction["valeur"]." €</span></td>";
        	}
    	}
    	echo "</tbody>
    	</table>";

    ?>



        

<?php include_once("footer.php"); ?>