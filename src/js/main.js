var burger = document.querySelector('.burger');
burger.addEventListener('click', function(){
	var classList = burger.getAttribute('class');
	if ( /open/.test(classList) ) {
		burger.setAttribute('class');
	}
});