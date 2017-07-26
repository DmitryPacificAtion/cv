var burger = document.querySelector('.burger');
var menu = document.querySelector('.about__menu');
burger.addEventListener('click', function(){
	burger.classList.toggle('open');
	if ( /open/.test(burger.getAttribute('class')) ) {
		menu.classList.add('open');
	}
	else menu.classList.remove('open'); 
});