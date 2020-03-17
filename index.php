
<?php include_once("header.php"); ?>

<img src="img/logo.png" style="margin-top:10%;margin-left:40%;height:200px; width:300px;"></img>

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
    echo "RIEN";
  }

?>
        
<!------------------------------------------------------------------------------------------------------>

<?php include_once("footer.php"); ?>
