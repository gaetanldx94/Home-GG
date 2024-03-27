let startSpeechBtn = document.getElementById("startSpeechBtn");
let spokenText = document.getElementById("spokenText");
let searchResults = document.getElementById("searchResults");

let recognition = new webkitSpeechRecognition();
recognition.lang = 'fr-FR';
recognition.continuous = true;

startSpeechBtn.onclick = function () {
	recognition.start();
};

recognition.onresult = function (event) {
	let result = event.results[event.results.length - 1][0].transcript.trim().toLowerCase();
	spokenText.textContent = 'Paroles : ' + result;

	if (result.startsWith('recherche')) {
		let searchTerm = result.slice(9).trim();
		search(searchTerm);
	} else {
		searchResults.innerHTML = '';
	}
};

function search(query) {
	let apiKey = 'CLE_API';
	let cx = 'ID CX';
	let url = 'https://www.googleapis.com/customsearch/v1?q=' + encodeURIComponent(query) + '&key=' + apiKey + '&cx=' + cx;

	$.get(url, function (data) {
		if (data.items && data.items.length > 0) {
			let topResult = data.items[0];
			let title = topResult.title;
			let link = topResult.link;
			searchResults.innerHTML = '<p>Résultat le plus pertinent : <a href="' + link + '" target="_blank">' + title + '</a></p>';
		} else {
			searchResults.innerHTML = '<p>Aucun résultat trouvé.</p>';
		}
	});
}
