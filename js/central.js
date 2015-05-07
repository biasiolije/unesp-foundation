function changeAccessTheme(foo) {
	el = document.getElementById('icons-acessos');
	if(foo.checked){
		el.classList.add('color');
	}
	else {
		el.classList.remove('color');
	}
}

setTimeout(function(){
	$('#central-notifications-container').append('<span class="notification-bubble alert">4</span>');
	document.getElementById('central-notifications-icon').className += ' active';
}, 2000);		

setInterval(function(){
	//$('#icons-acessos').toggleClass('color');
}, 3000);
