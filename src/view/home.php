<?php
require 'src/model/database.php';

if (isset($_SESSION['user_id'])) {
	$bdd = database();
	$user_id = $_SESSION['user_id'];

	$query = $bdd->prepare("SELECT nom FROM user WHERE id = :user_id");
	$query->bindParam(':user_id', $user_id);
	$query->execute();

	$user = $query->fetch();

	if ($user) {
		$nom_utilisateur = $user['nom'];
	}
} else {
	header("Location: /login.php");
	exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Page d'accueil</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<h2>Bienvenue <?php echo htmlspecialchars($nom_utilisateur); ?></h2>
		<p>Choisissez une fonctionnalité :</p>

		<div class="row">
			<div class="col-md-4 mb-3">
				<a href="/directory" class="btn btn-primary btn-lg btn-block">Stockage serveur</a>
			</div>

			<div class="col-md-4 mb-3">
				<a href="/nutri" class="btn btn-success btn-lg btn-block">Calculateur nutritionnel</a>
			</div>

			<div class="col-md-4 mb-3">
				<a href="/assist" class="btn btn-info btn-lg btn-block">Home Voice</a>
			</div>
		</div>

		<form action="/disconnect" method="post">
			<button type="submit" name="logout" class="btn btn-danger">Déconnexion</button>
		</form>
	</div>
</body>
</html>