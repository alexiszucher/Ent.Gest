

<!------------------------------------------------------------------EN TETE DE FICHIER------------------------------------------------------>
<?php include_once("connexionBDD.php"); ?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title></title>
</head>
<body>


  <nav class="nav-extended pink darken-1">
    <div class="nav-wrapper">
      <a href="index.php" style="margin-left: 10%;margin-top: 2%;" class="brand-logo">Ent.Gest </a>
      <img src="img/logo2.png" style="margin-top: 20px; margin-left:40%; height:100px; width:100px;"></img>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li> <a style="margin-top:7%; width:600px;" href="planification.php" class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>Gestion des comptes</a>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="gestion-compte.php">Gestion de compte</a></li>
    <li><a href="planification.php">Planification</a></li>
  </ul>