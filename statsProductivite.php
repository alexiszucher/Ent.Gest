<?php include_once("header.php");

?>	

<div align="center" class="row">
    <div class="col s12 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Statistiques de productivité</span>
        </div>
        <div class="card-action">
          
        	<form action="#" method="post">
        		<div align ="center" class="row">
		        	<div class="col s12">
		          		<div class="input-field inline">
		            		<input id="dateDebut" type="text" name="dateDebut" class="validate">
		            		<label for="dateDebut">Date de début (YYYY-mm-dd)</label>
		          		</div>
		          		<div class="input-field inline">
		          			<input id="dateFin" type="text" name="dateFin" class="validate">
		            		<label for="dateFin">Date de fin (YYYY-mm-dd)</label>
		            	</div>
		            	<div class="input-field inline">
		          			<input id="duree" type="text" name="duree" class="validate">
		            		<label for="duree">Durée de la période (saisir un nombre de jour)</label>
		            	</div>
		        	</div>
		     	</div>


		     	<button style="margin-left:45%;" class="btn waves-effect waves-light" type="submit" name="action">Générer
    			<i class="material-icons right">send</i>
  				</button>
    		</form>

<?php
				if(isset($_POST["dateDebut"]) && $_POST["dateDebut"] != "")
				{
					$requete = "SELECT Count(id) as nb from tache where avance=100 and date Between '".$_POST["dateDebut"]."' and '".$_POST["dateFin"]."'";
					$result = $bdd->query($requete);

					foreach ($result as $tache) 
					{
						$moyenne = $tache["nb"] / $_POST["duree"];
						echo '<div class="row">
							    <div class="col s12 m12">
							      	<div class="card-panel teal">
						        		<H5 align="center"><span align="center" class="white-text">Tâches effectuées durant cette prériode : '.$tache["nb"].'</H5>
						        		</span><br/>
						        		<H5 align="center"><span align="center" class="white-text">Moyenne de productivité par jour : '.$moyenne.' tâches</H5>
						        		</span>
							     	</div>
								</div>
							  </div>';
					}
				}
?>

    		</div>
  		</div>
	</div>
</div>

<H5 align="center"><span align="center" class="purple-text">Productivité de cette période</span></H5>

<?php
	if(isset($_POST["dateDebut"]) && $_POST["dateDebut"] != "")
	{
    	$requete = 'SELECT * FROM tache where date BETWEEN "'.$_POST["dateDebut"].'" AND "'.$_POST["dateFin"].'" AND avance=100 Order by date asc';
    	$result = $bdd->query($requete);

    	echo "<table class='striped'>
		        <thead>
		          <tr>
		              <th>Tâche</th>
		              <th>Durée</th>
		              <th>Date</th>
		          </tr>
		        </thead>
		        <tbody>";

    	foreach ($result as $tache)
    	{
    		echo "<tr>
            <td>".$tache["libelle"]."</td>
            <td>".$tache["minute"]."</td>
            <td>".$tache["date"]."</td>";
    	}

    	echo "</tbody>
		</table>";
	}
?>

<?php include_once("footer.php"); ?>