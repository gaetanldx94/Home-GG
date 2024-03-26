<?php

function database() {
	try {
		$bdd = new PDO('sqlite:home-gg.db');

		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		error_log("Accées à la base de données établie");

		return $bdd;
	} catch(PDOException $e) {
		error_log("Erreur dans l'accée à la base de données : " . $e->getMessage());
		return null;
	}
}

?>