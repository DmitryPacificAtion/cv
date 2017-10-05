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


// Слайдер
(function(){
	function Slider() {
		var doc = document,
		sliderContentItems = doc.querySelectorAll('.slider__content_item'),
		sliderDotsItems = doc.querySelectorAll('.slider__dots_item'),
		i = 0, 
		len = sliderDotsItems.length - 1,
		sliderDots = doc.querySelector('.slider__dots');

		var findActive = function() {
			for (; i < len + 1; i++) {
				if ( sliderDotsItems[i].classList.contains('active') ) break;
				else continue;
			}
		}
		
		var removeActive = function() {
			sliderContentItems[i].classList.remove('active');
			sliderDotsItems[i].classList.remove('active');
		}

		var addActive = function() {
			sliderContentItems[i].classList.add('active');
			sliderDotsItems[i].classList.add('active');
		}

		var startSider = function() {
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

		var setEventsOnSlider = function() {
			sliderDots.addEventListener('click', function(event) {
				if (event.target.parentElement.hasAttribute('data-slider-dot')){
					removeActive();
				// С помощью дата атрибутов вычисляем елемент на котором произошел клик
				i = event.target.parentElement.getAttribute('data-slider-dot') - 1;
				addActive();
			}
		});
		}

		this.start = function() {
			findActive();
			setEventsOnSlider();
			setInterval( startSider, 4500 );
			clearInterval( startSider );
		}
	}
	new Slider().start();
})();

// Валидация
(function(){
	function Validator() {
		var doc = document;
		form = doc.getElementById('form'),
		inputs = doc.querySelectorAll('#form [name]'),
		inpt_name = form.children[1],
		inpt_email = form.children[3],
		inpt_message = form.children[5],
		inpt_subm = form.children[6].firstElementChild,
		error = doc.getElementById('error'),
		btnLang = doc.getElementById('btn-lang'),
		isValide = false;

		var isCorrect = function (elemType) {
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

		var showError = function(ru, en) {
			error.classList.add('show');
			if(btnLang.innerText === 'ru') 
				error.innerText = ru;
			if(btnLang.innerText === 'en') 
				error.innerText = en;
		}

		this.startValidation = function () {
			for (var i = 0, len = inputs.length; i < len; i++) {
				inputs[i].addEventListener('blur', function(elem){
					if(isCorrect(elem.srcElement)){
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
		}
	}
	new Validator().startValidation();
})();

var burger = document.querySelector('.burger');
var menu = document.querySelector('.about__menu');
var language = document.querySelector('.language');
var languageList = document.querySelector('.language__list');

// Выпадающее меню
function dropdown(elem, target, statfull = false) {
	elem.addEventListener('click', function(event) {
		elem.classList.toggle('open');
		
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