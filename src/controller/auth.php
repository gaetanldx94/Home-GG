<?php
require 'src/model/database.php';

$bdd = database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = $bdd->prepare("SELECT * FROM user WHERE identifiant = :username AND mot_de_passe = :password");
	$query->bindParam(':username', $username);
	$query->bindParam(':password', $password);
	$query->execute();

	$user = $query->fetch();

	if ($user) {
		$_SESSION['user_id'] = $user['id'];
		header("Location: /home");
		exit();
	} else {
		header("Location: /?error=1");
		exit();
	}
}
?>
