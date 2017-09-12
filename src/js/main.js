window.opener = null;
(function(){
	document.addEventListener('DOMContentLoaded', function(){
		if (document.cookie.indexOf('lang=') != -1) {
			var lang = document.cookie.indexOf('lang=');
			var temp = document.cookie.substr(lang+5, lang+8);
			if (temp === 'en') {
				translate(1);
				document.querySelector('[data-translate="resume__btn-cta"]').setAttribute('href', 'bruslik.dmitry-Frontend-developer-en.rtf');
			}
		}
	});
})();

var burger = document.querySelector('.burger');
var menu = document.querySelector('.about__menu');
var language = document.querySelector('.language');
var languageList = document.querySelector('.language__list');
// Выпадающее меню
function dropdown(elem, target, statfull = false) {
	elem.addEventListener('click', function(event) {
		elem.classList.toggle('open');
		
		// if ( elem.classList.contains('open') ) {
		// 	elem.cssText('{opacity: 1}');
		// 	elem.classList.addClass('open');
		// }
		// else {
		// 	elem.cssText('{opacity: 0}');
		// 	elem.classList.removeClass('open');
		// }

		if (statfull) {
			var state = event.target.innerHTML;
			elem.firstElementChild.innerHTML = state
		}
		if ( elem.classList.contains('open') ) {
			target.classList.add('open');
		}
		else target.classList.remove('open'); 
	});
}
dropdown(burger, menu);
dropdown(language, languageList, true);

// Слайдер
var sliderContentItems = document.querySelectorAll('.slider__content_item');
var sliderDotsItems = document.querySelectorAll('.slider__dots_item');
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
		var sliderDots = document.querySelector('.slider__dots');
		sliderDots.addEventListener('click', function(event) {
			if (event.target.parentElement.hasAttribute('data-slider-dot')){
				removeActive();
				// С помощью дата атрибутов вычисляем елемент на котором произошел клик
				i = event.target.parentElement.getAttribute('data-slider-dot') - 1;
				addActive();
			}
		});
	}
	setEventsOnSlider();
	setInterval( startSider, 4500 );
	clearInterval( startSider );
}
slider();

// Валидация
var form = document.getElementById('form');
var inputs = document.querySelectorAll('#form [name]');
var inpt_name = form.children[1];
var inpt_email = form.children[3];
var inpt_message = form.children[5];
var inpt_subm = form.children[6].firstElementChild;
var error = document.getElementById('error');
var btnLang = document.getElementById('btn-lang');
var isValide = false;
function validate(elemType) {
	var patern = '';
	var str = elemType.value.trim();
	switch(elemType.name) {
		case 'name':
		patern = /[a-zа-яіїєёґ ]*/gi;
		str = str.replace(patern, '');
		if(str.length)
			showError('Это поле может содержать только буквы и пробелы', 'This field can contains only leters and spaces');
		break;
		case 'email':
		patern = /[a-zа-яіїєёґ0-9._-]+@{1}[a-zа-яіїєёґ0-9_-]+(.{1}[a-zа-яіїєёґ]{2,}){1,2}/i;
		str = str.replace(patern, '');
		if (str)
			showError('Возможно вы ввели неправильный адрес. Пожалуйста, попробуйте снова', 'May be you\'re enter an incorrect adress. Try again, please');
		break;
		case 'message':
		str = str.replace(/</g, '&lt;');
		str = str.replace(/>/g, '&rt;');
		str = str.replace(/'/g, '&#8242;');
		str = str.replace(/‘/g, '&#8216;');
		str = str.replace(/’/g, '&#8217;');
		str = str.length + 1;
		break;
	}
	return str.length > 0 ? true : false;
}
function showError(ru, en) {
	error.classList.add('show');
	if(btnLang.innerText === 'ru') 
		error.innerText = ru;
	if(btnLang.innerText === 'en') 
		error.innerText = en;
}
// Запускаем валидацию
for (var i = 0; i < inputs.length; i++) {
	inputs[i].addEventListener('blur', function(elem){
		if(validate(elem.srcElement)){
			elem.srcElement.style.cssText = 'border: 1px solid red';
			isValide = false;
		}
		else {
			elem.srcElement.style.cssText = 'border: none';
			error.classList.remove('show');
			isValide = true;
		}
	});
}
// inpt_subm.addEventListener('click', function(event){
// 	isValide ? send(e) : showError('Проверьте корректность данных', 'Check the correctness of the entered data');
// });
// function send(e) {
// 	e.prevetnDefault();

// 	var xhr = new XMLHttpRequest();
// 	var form = document.forms.contactForm;
// 	var formData = new FormData(form);
// 	xhr.open('POST', 'mailer.php', true);
// 	xhr.send(formData);
// }

// Скрол
$('*[data-scroll]').map( function() {
	$(this).on('click', function(e) {
		scrollTo(e, $(this).attr('data-scroll'));
	});
})

// Скролл наверх
var goup = $('.go-up');

window.onscroll = function() {
	if (document.body.scrollTop > 1200 || document.documentElement.scrollTop > 700)
		goup.addClass("active");
	else
		goup.removeClass("active");
};

goup.on('click', function(e){
	e.preventDefault;
	scrollTo(e, 'menu');
})

function scrollTo(e, attr){
	e.target.prevetnDefault;
	$('html, body').animate({ scrollTop: $('#'+attr).offset().top }, 500);
}

//Hover Button 
// var buttons = $('.btn-cta');
// buttons.map(function(e){
// 	$(this).focus( function(){
// 		console.log($(this).height());
// 		console.log($(this).width());
// 	});
// });

// Мультиязычность
var elements = document.querySelectorAll('[data-translate]');
var dataLang = document.querySelectorAll('[data-lang]');
for (var i = 0; i < dataLang.length; i++) {
	dataLang[i].addEventListener('click', function(e) {
		var currentLang = e.target.getAttribute('data-lang');
		var currentDate = new Date();

		// Записываем в куки
		currentDate.setFullYear(currentDate.getFullYear() + 1, currentDate.getMonth(), currentDate.getDate(), currentDate.getHours(), currentDate.getMinutes())
		document.cookie = 'path=/, expires=' + currentDate + ', lang=' + currentLang;

		// Инициализируем флаг для масисва перевода
		if(currentLang === 'en') {
			var flag = 1;
			var link = 'bruslik.dmitry-Frontend-developer-en.rtf';
		}
		else {
			var flag = 0;
			var link = 'bruslik.dmitry-Frontend-developer.rtf';
		}
		translate(flag);
		document.querySelector('[data-translate="resume__btn-cta"]').setAttribute('href', link);
	});
}
function translate(flag){
	elements.forEach(function(item){
		var atr = item.getAttribute('data-translate');
		item.innerHTML = dataTranslate[atr][flag];
	});
}