
<?php include_once("header.php"); ?>

<?php

  $requete = "SELECT * FROM tache";
  $result = $bdd->query($requete);
  $isresult = 0;

  foreach ($result as $tache) 
  {
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
        
<!------------------------------------------------------------------------------------------------------>

<?php include_once("footer.php"); ?>
