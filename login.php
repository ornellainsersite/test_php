<?php
require ('inc/init.php');
session_start();

if (isset($_POST['username']) & isset($_POST['password'])){
    try {
        $r = $pdo->prepare("SELECT * FROM user WHERE username=:username");
        $r->bindParam(':username', $_POST['username']);
        $r->execute();
        $row = $r->fetch(PDO::FETCH_ASSOC);
        $hash = $row['password'];
        if (password_verify($_POST['password'], $hash)){
            $_SESSION['id_user']   = $row['id_user'];
            $_SESSION['username'] = $row['username'];
            header('Location: index.php');
        }else{
            $content .= '<div class=" alert alert-danger" role="alert" > Vos identifiants sont incorrectes </div>';
        }
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
    <title>Connexion</title>
    <link rel="stylesheet" href="inc/css/bootstrap.min.css">
	<link rel="stylesheet" href="inc/css/style.css">
	<script type="text/javascript" src="inc/js/script.js"></script>
</head>

<body>
    <div class="container-sm w-25 mt-5 px-4">
			<h1>Identification</h1>
			<form method="post" action="">

  				<div class="mb-3">
					<label for="" class="form-label">Login</label>
					<input type="text" class="form-control" name="username" placeholder="Login" />
				
				</div>
				<div class="mb-3">
					<label for="" class="form-label">Mot de passe</label>
					<input type="password" class="form-control" name="password"  placeholder="mot de passe" />
				</div>
				
				<input type="submit" class="btn btn-primary" id="submit" value="Connexion" />

			</form>
            <?= $content ?>
		</div>

        
</body>
</html>