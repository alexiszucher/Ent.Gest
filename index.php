
<?php include_once("header.php"); ?>

<?php

  $requete = "SELECT * FROM tache WHERE avance!=100";
  $result = $bdd->query($requete);
  $isresult = 0;

echo '
<div class="row">
	<div class="col s12 m12">
  		<div class="card-panel teal">';

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
			                  <a href="tacheEnCours.php?id='.$tache["id"].'">Démarrer</a>
			                </div>
			              </div>
			            </div>
			          </div>';
			    $isresult++;
			  }

			  if($isresult == 0)
			  {
			     echo '<div class="row">
				    <div class="col s12 m12">
				      <div class="card-panel teal">
				        <H5 align="center"><span align="center" class="white-text">Il n\'y a pas de tâche en attente pour le moment.</H5>
				        </span>
				      </div>
				    </div>
			  	</div>';
			  }

			?>


			<div align="center"><a href="ajoutTache.php" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a></div>

			<a style="margin-top:7%; width:600px;" href="pause.php" class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>Faire une pause</a>
 
		</div>
	</div>
</div>';


        <H5 align="center"><span align="center" class="purple-text">Productivité d'aujourd'hui</H5>
        </span>

        <?php
        	$date = date("Y-m-d");
        	$requete = 'SELECT * FROM tache where date="'.$date.'" AND avance=100';
        	$result = $bdd->query($requete);

        	echo "<table class='striped'>
			        <thead>
			          <tr>
			              <th>Tâche</th>
			              <th>Durée</th>
			          </tr>
			        </thead>
			        <tbody>";

        	foreach ($result as $tache)
        	{
        		echo "<tr>
	            <td>".$tache["libelle"]."</td>
	            <td>".$tache["minute"]."</td>";
        	}

        	echo "</tbody>
    		</table>";
        ?>


     



<!------------------------------------------------------------------------------------------------------>

<?php include_once("footer.php"); ?>
