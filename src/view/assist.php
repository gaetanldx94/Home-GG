<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recherche vocale</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<a href="/home" class="btn btn-primary mb-3 ml-0" style="position: absolute; top: 1.5%; left: 1%; width: 11%;">Retour à la page d'accueil</a>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h1 class="text-center mb-4">Recherche vocale</h1>
				<button id="startSpeechBtn" class="btn btn-primary btn-block">Activer le micro</button>
				<div class="mt-4">
					<p id="spokenText" class="mb-2">Paroles :</p>
					<div id="searchResults"></div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="../../js/assist.js"></script>
</body>
</html>