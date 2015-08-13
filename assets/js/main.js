if (navigator.onLine) {
	var appCache = window.applicationCache;
	
	appCache.addEventListener("cached", function(e){
		document.getElementById('off-download').style.display = 'block';
	}, false);
}