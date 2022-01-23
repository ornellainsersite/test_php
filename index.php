<?php
/*******************************************************************************
Le sujet est assez basique :

-  et si l'utilisateur fait partie du groupe 2.

*******************************************************************************/
require ('inc/init.php');
session_start();

if(isset($_SESSION['id_user']) && $_SESSION['username'] != "" ) {
    echo "";
  } else { 
    header('location:login.php');
  }


?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Test GLI</title>
    <link rel="stylesheet" href="inc/css/bootstrap.min.css">
	  <link rel="stylesheet" href="inc/css/style.css">
		<script type="text/javascript" src="inc/js/script.js"></script>
	</head>
	<body>
		<div class="container-sm w-25 mt-5 px-4">
		<ul>
			<li><a href="index.php">Accueil</a></li>
			<li><a href="logout.php">Déconnexion</a></li>
		</ul>
	  <div class="clear"></div>
      <p id="clickblock" onclick="autoCorrect()">Il y a des fotes dan sete fraz. Cliké ici pour lé corrigés.</p>
	  </div>
	</body>
</html>

