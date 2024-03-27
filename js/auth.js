const urlParams = new URLSearchParams(window.location.search);
const errorParam = urlParams.get('error');

if (errorParam && errorParam === '1') {
	document.getElementById('error-message').style.display = 'block';
}