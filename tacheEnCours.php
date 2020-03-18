<?php 
	include_once("header.php");

	if(isset($_GET["suppr"]))
	{
		$bdd->query("DELETE FROM tache where id=".$_GET["suppr"]);
		header('Location: http://localhost/Ent.gest');
 		exit();
	}

	if(isset($_GET["valider"]))
	{
		$bdd->query("UPDATE tache SET avance=100 where id=".$_GET["valider"]);
		header('Location: http://localhost/Ent.gest');
 		exit();
	}

	$requete = "SELECT * FROM tache where id=".$_GET["id"];
  	$result = $bdd->query($requete);

	  foreach ($result as $tache) 
	  {
	    echo '  <div align="center" class="row">
	            <div class="col s12 m12">
	              <div class="card blue-grey darken-1">
	                <div class="card-content white-text">
	                  <span class="card-title">'.$tache["libelle"].'</span>
	                  <p>Durée du sprint : '.$tache["minute"].' minutes</p>
	                </div>
	                <div class="card-action">
	                  <a href="tacheEnCours.php?valider='.$tache["id"].'">Valider la tâche</a>
	                </div>
	              </div>
	            </div>
	          </div>';
	  }

	echo '<a href="tacheEnCours.php?suppr='.$_GET["id"].'" class="waves-effect waves-light btn">Supprimer</a>';

	include_once("footer.php"); 
?>

