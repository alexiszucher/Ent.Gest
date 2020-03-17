<?php include_once("header.php"); ?>

<form method="post" action="#">
	<div align ="center" class="row">
        <div class="col s12">
          <div class="input-field inline">
            <input id="email_inline" type="text" name="libelle" class="validate">
            <label for="email_inline">Nom de la tâche</label>
          </div>
        </div>
     </div>
    <p>
    <div align ="center" class="row">
        <div class="col s12">
          <div class="input-field inline">
            <input id="activite" type="text" name="temps" class="validate">
            <label for="activite">Temps</label>
          </div>
        </div>
    </div>
    <button style="margin-left:45%;" class="btn waves-effect waves-light" type="submit" name="action">Ajouter la tâche
    <i class="material-icons right">send</i>
  </button>
</form>


<?php

	if(isset($_POST["libelle"]))
	{
		$requete = $bdd->prepare("Insert into tache(libelle,minute) VALUES(:libelle,:minute)");
		$requete->bindParam(":libelle",$_POST["libelle"]);
		$requete->bindParam(":minute",$_POST["temps"]);

		if($requete->execute())
		{
			header('Location: http://localhost/Ent.gest');
 		 	exit();
		}
	}

?>

<?php include_once("footer.php"); ?>