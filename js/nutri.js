$(document).ready(function () {
	let recette = [];

	function afficherTableauNutritionnel() {
		let totalQuantite = 0;
		let totalCalories = 0;
		let totalProteines = 0;
		let totalLipides = 0;
		let totalGlucides = 0;
		let totalFibres = 0;

		recette.forEach(ingredient => {
			if (ingredient.unite === 'g') {
				totalQuantite += ingredient.quantite;
			} else {
				totalQuantite += 100;
			}
			totalCalories += (ingredient.calories / 100) * ingredient.quantite;
			totalProteines += (ingredient.proteines / 100) * ingredient.quantite;
			totalLipides += (ingredient.lipides / 100) * ingredient.quantite;
			totalGlucides += (ingredient.glucides / 100) * ingredient.quantite;
			totalFibres += (ingredient.fibres / 100) * ingredient.quantite;
		});

		const tableauNutritionnelHTML = `
					<ul class="list-group">
						<li class="list-group-item">Calories : ${totalCalories.toFixed(2)}</li>
						<li class="list-group-item">Protéines : ${totalProteines.toFixed(2)}</li>
						<li class="list-group-item">Lipides : ${totalLipides.toFixed(2)}</li>
						<li class="list-group-item">Glucides : ${totalGlucides.toFixed(2)}</li>
						<li class="list-group-item">Fibres : ${totalFibres.toFixed(2)}</li>
					</ul>`;
		$('#tableauNutritionnel .card-body').html(tableauNutritionnelHTML);
	}

	function ajouterIngredient(nom, quantite, unite, calories, proteines, lipides, glucides, fibres) {
		const nouvelIngredient = {
			nom: nom,
			quantite: parseInt(quantite),
			unite: unite,
			calories: parseInt(calories),
			proteines: parseInt(proteines),
			lipides: parseInt(lipides),
			glucides: parseInt(glucides),
			fibres: parseInt(fibres)
		};
		recette.push(nouvelIngredient);
		afficherListeIngredients();
		afficherTableauNutritionnel();
	}

	function afficherListeIngredients() {
		$('#listeIngredients').empty();
		recette.forEach((ingredient, index) => {
			const itemHTML = `<li class="list-group-item ingredient-item">${ingredient.nom} (${ingredient.quantite}${ingredient.unite})</li>`;
			$('#listeIngredients').append(itemHTML);
		});
	}

	$('#ajouterIngredientForm').submit(function (event) {
		event.preventDefault();
		const nom = $('#nomIngredient').val();
		const quantite = $('#quantite').val();
		const unite = $('#unite').val();
		const calories = $('#calories').val();
		const proteines = $('#proteines').val();
		const lipides = $('#lipides').val();
		const glucides = $('#glucides').val();
		const fibres = $('#fibres').val();
		ajouterIngredient(nom, quantite, unite, calories, proteines, lipides, glucides, fibres);
		$('#nomIngredient').val('');
		$('#quantite').val('');
		$('#unite').val('g');
		$('#calories').val('');
		$('#proteines').val('');
		$('#lipides').val('');
		$('#glucides').val('');
		$('#fibres').val('');
	});

	$('#exportPDF').click(function () {
		$.ajax({
			url: 'export',
			type: 'POST',
			data: { recette: JSON.stringify(recette) },
			xhrFields: {
				responseType: 'blob'
			},
			success: function (response) {
				var blob = new Blob([response]);
				var link = document.createElement('a');
				link.href = window.URL.createObjectURL(blob);
				link.download = 'tableau_nutritionnel.pdf';
				document.body.appendChild(link);
				link.click();
				document.body.removeChild(link);
			}
		});
	});
});