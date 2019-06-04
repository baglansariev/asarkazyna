window.onload = function() {
	var headerBtn = document.getElementsByClassName('feedback-btn')[0];
	var bodyBtn = document.getElementsByClassName('feedback-btn')[1];
	var popupContainer = document.getElementsByClassName('popup-container')[0];
	var popup = document.getElementsByClassName('popup')[0];

	headerBtn.onclick = function(event){
		popupContainer.style.display = 'flex';
		var height = document.documentElement.clientHeight;
		popup.style.marginTop = height / 3 +'px';
	}
	window.onclick = function(event){
		if(event.target == popupContainer){
			popupContainer.style.display = 'none';
		}
	}
}