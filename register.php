<?php
require ('inc/init.php');
session_start();

if (isset($_POST['username']) & isset($_POST['password'])){
    try {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $r = $pdo->prepare("INSERT INTO `user`(`username`, `password`) VALUES (:username, :password)");
        $r->bindParam(':username', $username);
        $r->bindParam(':password', $password);
        $r->execute();
        header('location: login.php');
    }catch (PDOException $e){
        print "Erreur !: " . $e->getMessage() . "<br/>";
    }
}else{
    echo "";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement</title>
    <link rel="stylesheet" href="inc/css/bootstrap.min.css">
	<link rel="stylesheet" href="inc/css/style.css">
	<script type="text/javascript" src="inc/js/script.js"></script>
</head>
<body>
    <div class="container-sm w-25 mt-5 px-4">
			<h1>Identification</h1>
			<form method="post" action="">

  				<div class="mb-3">
					<label for="" class="form-label">Identifiant</label>
					<input type="text" class="form-control" name="username" placeholder="nom d'utilisateur" />
				
				</div>
				<div class="mb-3">
					<label for="" class="form-label">Mot de passe</label>
					<input type="password" class="form-control" name="password"  placeholder="mot de passe" />
				</div>
				
				<input type="submit" class="btn btn-primary" id="submit" value="s'enregistrer" />

			</form>
		</div>
</body>
</html>