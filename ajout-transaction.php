<?php include_once("header.php"); ?>

<form method="post" action="#">
	<div class="row">
        <div class="col s12">
          <div class="input-field inline">
            <input id="email_inline" type="text" name="valeur" class="validate">
            <label for="email_inline">Valeur (numérique)</label>€
          </div>
        </div>
      </div>
    <p>
      <label>
        <input name="transaction" value="0" type="radio" checked />
        <span>Ajout</span>
      </label>
    </p>
    <p>
      <label>
        <input name="transaction" value="1" type="radio" />
        <span>Dépense</span>
      </label>
    </p>
    <div class="row">
        <div class="col s12">
          <div class="input-field inline">
            <input id="activite" type="text" name="activite" class="validate">
            <label for="activite">Activité</label>
          </div>
        </div>
    </div>
    <?php 
    	$requete = "SELECT * from compte";
    	$donnees = $bdd->query($requete);
    	foreach($donnees as $compte)
    	{
    		echo '<p>
			      <label>
			        <input name="compte" value="'.$compte["id"].'" type="radio" />
			        <span>'.$compte["libelle"].'</span>
			      </label>
			    </p>';
    	}
    ?>
    <button class="btn waves-effect waves-light" type="submit" name="action">Ajouter la transaction
    <i class="material-icons right">send</i>
  </button>
</form>

<?php
	//Traitement du formulaire
	if(isset($_POST["valeur"]))
	{
		$date = date("Y-m-d");
		$requete = $bdd->prepare("INSERT INTO transaction(idcompte, valeur, modeTransaction, activite, date) VALUES(:idcompte,:valeur,:transaction,:activite,:date)");
		$requete->bindParam(":idcompte",$_POST["compte"]);
		$requete->bindParam(":valeur",$_POST["valeur"]);
		$requete->bindParam(":transaction",$_POST["transaction"]);
		$requete->bindParam(":activite",$_POST["activite"]);
		$requete->bindParam(":date", $date);
		if($requete->execute())
		{
  			echo "<div class='card-panel teal lighten-2'>La transaction a bien été effectué !</div>";  

  			if($_POST["transaction"] == 0)
			{
				$requete = $bdd->prepare("UPDATE compte SET valeur=valeur+:valeur WHERE id=".$_POST["compte"]);
				$requete->bindParam(":valeur",$_POST["valeur"]);
				$requete->execute();
			}
			else
			{
				$requete = $bdd->prepare("UPDATE compte SET valeur=valeur-:valeur WHERE id=".$_POST["compte"]);
				$requete->bindParam(":valeur",$_POST["valeur"]);
				$requete->execute();
			}
		}

		
	}

?>

<?php include_once("footer.php"); ?>