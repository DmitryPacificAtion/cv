// Выпадающее меню
var burger = document.querySelector('.burger');
var menu = document.querySelector('.about__menu');
burger.addEventListener('click', function(){
	burger.classList.toggle('open');
	if ( burger.classList.contains('open') ) {
		menu.classList.add('open');
	}
	else menu.classList.remove('open'); 
});

// Слайдер
var sliderContentItems = document.querySelectorAll('.slider-content-item');
var sliderDotsItems = document.querySelectorAll('.slider-dots-item');
function slider() {
	var i = 0, len = sliderDotsItems.length - 1;
	function findActive() {
		for (; i < len + 1; i++) {
			if ( sliderDotsItems[i].classList.contains('active') ) break;
			else continue;
		}
	}
	function removeActive() {
		sliderContentItems[i].classList.remove('active');
		sliderDotsItems[i].classList.remove('active');
	}
	function addActive() {
		sliderContentItems[i].classList.add('active');
		sliderDotsItems[i].classList.add('active');
	}
	function startSider() {
		removeActive();
		// Проверка на последний активный элемент в слайдере
		if (i === len) {
			i = 0;
		}
		else {
			++i;
		}
		addActive();
	}
	function setEventsOnSlider() {
		var sliderDots = document.querySelector('.slider-dots');
		sliderDots.addEventListener('click', function(event) {
			removeActive();
			// С помощью дата атрибутов вычисляем елемент на котором произошел клик
			i = event.target.parentElement.getAttribute('data-slider-dot') - 1;
			addActive();
		});
	}
	setEventsOnSlider();
	setInterval( startSider, 4500 );
	clearInterval( startSider );
}
slider();