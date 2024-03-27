<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculateur de Recette</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		.ingredient-item {
			cursor: pointer;
		}
	</style>
</head>

<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-4">
				<h4>Ajouter un ingrédient</h4>
				<form id="ajouterIngredientForm">
					<div class="form-group">
						<label for="nomIngredient">Nom de l'ingrédient :</label>
						<input type="text" class="form-control" id="nomIngredient" required>
					</div>
					<div class="form-group">
						<label for="quantite">Quantité :</label>
						<div class="input-group">
							<input type="number" class="form-control" id="quantite" required>
							<div class="input-group-append">
								<select class="custom-select" id="unite">
									<option value="g">g</option>
									<option value="unité">unité(s)</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="calories">Calories pour 100g :</label>
						<input type="number" class="form-control" id="calories" required>
					</div>
					<div class="form-group">
						<label for="proteines">Protéines pour 100g :</label>
						<input type="number" class="form-control" id="proteines" required>
					</div>
					<div class="form-group">
						<label for="lipides">Lipides pour 100g :</label>
						<input type="number" class="form-control" id="lipides" required>
					</div>
					<div class="form-group">
						<label for="glucides">Glucides pour 100g :</label>
						<input type="number" class="form-control" id="glucides" required>
					</div>
					<div class="form-group">
						<label for="fibres">Fibres pour 100g :</label>
						<input type="number" class="form-control" id="fibres" required>
					</div>
					<button type="submit" class="btn btn-primary">Ajouter</button>
					<a href="/home" class="btn btn-primary">Retour à la page d'accueil</a>
				</form>
			</div>
			<div class="col-md-4">
				<h4>Liste des ingrédients</h4>
				<ul id="listeIngredients" class="list-group">
				</ul>
			</div>
			<div class="col-md-4">
				<h4>Tableau nutritionnel de la recette pour 100g</h4>
				<div id="tableauNutritionnel" class="card">
					<div class="card-body">
					</div>
				</div>
				<button id="exportPDF" class="btn btn-success mt-3">Exporter en PDF</button>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="../../js/nutri.js"></script>
</body>

</html>