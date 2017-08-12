<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Dmitry Bruslik Frontend Developer resume</title>
	<script src="https://use.fontawesome.com/81b0a5a4d5.js"></script>
	<link href="https://use.fontawesome.com/81b0a5a4d5.css" media="all" rel="stylesheet">
	<link rel="stylesheet" href="build/css/styles.min.css">
</head>
<body>
	<section class="home" id="home">
		<div class="wallpaper">
		</div>
		<div class="position">
			<div class="position-wrap">
				<h1 class="position__name">Frontend Developer</h1>
				<button class="btn-cta" data-translate="position__btn-cta">Узнать детальнее</button>
			</div>
		</div>
	</section>
	<section class="about" id="about">
		<header class="about__header container">
			<div class="about__logo">Dmitry Bruslik</div>
			<div class="dopdown-wrap">
				<div class="language">
					<button class="dropdown-btn" id="btn-lang">ru</button>
					<ul class="language__list">
						<li class="language__list_item"><button data-lang="ru" href="#ru" class="language__list-btn">ru</button></li>
						<li class="language__list_item"><button data-lang="en" href="#en" class="language__list-btn">en</button></li>
					</ul>
				</div>
				<div class="burger"><button class="dropdown-btn" id="btn-burger"><span class="burger__line"></span></button></div>
			</div>
			<ul class="about__menu" id="menu">
				<li>
					<a href="" data-translate="about__menu-home">Главная</a>
				</li>
				<li>
					<a href="#about" data-translate="about__menu-about">Обо мне</a>
				</li>
				<li>
					<a href="#skills" data-translate="about__menu-skills">Навыки</a>
				</li>
				<li>
					<a href="#resume" data-translate="about__menu-resume">Резюме</a>
				</li>
				<li>
					<a href="#portfolio" data-translate="about__menu-portfolio">Портфолио</a>
				</li>
				<li>
					<a href="#contacts" data-translate="about__menu-contacts">Контакты</a>
				</li>
			</ul>
		</header>
		<div class="aspirations container">
			<div class="aspirations_item">
				<h2 data-translate="aspirations__achievements">Достижения</h2>
				<div data-translate="aspirations__achievements-description"><ul><li>—&nbsp;Нес ответственность за&nbsp;переезд сайта на&nbsp;новый движок, параллельно внедрил систему создание артикулов товаров и&nbsp;устранил дубли товаров.</li><li>—&nbsp;Курировал работу отдела контент-менеджеров, в&nbsp;подчинении 2&nbsp;человека. Распределял, контролировал задачи, способствовал профессиональному росту членов команды.</li><li>—&nbsp;Реализовал скрипт парсинга картинок с&nbsp;prom.ua который сам переименует картинки под требование новой платформы. Это помогло сократить время выполнения переезда сайта на&nbsp;1&nbsp;неделю.</li><li>—&nbsp;Вел 15&nbsp;проектов одновременно по&nbsp;SEO</li><li>—&nbsp;За&nbsp;4&nbsp;дня освоил SASS перпроцессор, который с&nbsp;удовольствием использую по&nbsp;сегодняшний день (это была первая технология которую я&nbsp;освоил).</li><li>—&nbsp;Научился деплоить сайт на&nbsp;heroku.</li></ul></div>
			</div>
			<div class="aspirations_item">
				<h2 data-translate="aspirations__goals">Цели</h2>
				<div data-translate="aspirations__goals-description"><p>Стать частью команды фронтенд разработчиков, в&nbsp;окружении которых я&nbsp;смог&nbsp;бы расти и&nbsp;углубляться в&nbsp;познаниях фронтенда.</p></div>
			</div>
			<div class="aspirations_item">
				<h2 data-translate="aspirations__hobbies">Хобби</h2>
				<div data-translate="aspirations__hobbies-description"><p>В&nbsp;свободное от&nbsp;работы время люблю играть с&nbsp;друзьями в&nbsp;волейбол, кататься на&nbsp;велосипеде по&nbsp;городу, ирать на&nbsp;гитаре и&nbsp;узнавать что-то новое о&nbsp;научных открытиях.</p></div>
			</div>
		</div>
		<main class="about__main">
			<div class="about__main__photo"><div class="photo album"></div></div>
			<div class="about__main__description">
				<h2 data-translate="about__me__h2">Обо мне</h2>
				<div data-translate="about__me__description"><p>Меня зовут Дмитрий Бруслик, я&nbsp;занимаюсь Frontend разработкой. Родился в&nbsp;1990 году в&nbsp;Днепропетровске, с&nbsp;1993 переехал в&nbsp;Славутич, с&nbsp;2007 живу в&nbsp;Киеве. В&nbsp;10&nbsp;лет пошел в&nbsp;музыкальную школу по&nbsp;классу гитары, и&nbsp;с&nbsp;тех пор музыка преследует меня везде. В&nbsp;работе часто слушаю музыку, потому что хорошо знакомые мелодии способны создать рабочий настрой.</p><p>Да, кстати, я&nbsp; интроверт, но&nbsp;при этом меня не&nbsp;пугают купные, шумные компании, я&nbsp;открыт к&nbsp;новым знакомствам и&nbsp;я&nbsp;не&nbsp;боюсь публичных выступлений. Верней, маленькое волнение есть, но&nbsp;в&nbsp;ступор оно меня не&nbsp;заводит :)</p><p>Люблю читать мудрые книги про саморазвите и&nbsp;личностный рост. Люблю смотреть научно-популярные ролики, документальные и&nbsp;художественные фильмы.</p><p>Но&nbsp;кому это интересно? Вы&nbsp;ведь не&nbsp;за&nbsp;этим сюда пришли.</p><p>Взгляните на&nbsp;следующие 4&nbsp;пункта, вы&nbsp;ведь это ищете?</p></div>
				<ul class="description__list">
					<li class="description__list_item">
						<h3><i class="fa fa-keyboard-o" aria-hidden="true"></i> <span data-translate="description__list__backend">Backend</span></h3>
						<div data-translate="description__list__backend-text"><p>Написание простеньких парсеров и&nbsp;различных вспомогательных скриптов. Натяжка верстки на&nbsp;шаблон.</p></div>
					</li>
					<li class="description__list_item">
						<h3><i class="fa fa-laptop" aria-hidden="true"></i> <span data-translate="description__list__frontend">Frontend</span></h3>
						<div data-translate="description__list__frontend-text"><p>Адаптивная верстка макетов, исправление багов на&nbsp;существующем сайте. Если необходимо, могу сделать в&nbsp;pixel pirfect.</p></div>
					</li>
					<li class="description__list_item">
						<h3><i class="fa fa-link" aria-hidden="true"></i> <span data-translate="description__list__seo">SEO</span></h3>
						<div data-translate="description__list__seo-text"><p>Понимание принципов SEO. <br>Например, если мы&nbsp;пишем веб-приложение на&nbsp;React и&nbsp;у&nbsp;нас в&nbsp;роутах есть страничка 404, вопрос который у&nbsp;меня возникнет, звучит так: какой код ответа отдаст приложение, если мы&nbsp;удалили страцу, которая существовала ранее? По&nbsp;правилам хорошего тона оно должно вернуть не&nbsp;404 Not Found, а&nbsp;410&nbsp;Gone.</p></div>
					</li>
					<li class="description__list_item">
						<h3><i class="fa fa-github" aria-hidden="true"></i> <span data-translate="description__list__git">Git</span></h3>
						<div data-translate="description__list__git-text"><p>Что еще здесь добавить? Это must have. Использую Bitbucket и&nbsp;GitHub</p></div>
					</li>
				</ul>
			</div>
		</main>
	</section>
	<section class="skills container">
		<div class="skills__description">
			<h2 data-translate="skills__h2">Мои навыки</h2>
			<div data-translate="skills__description"><p>Ниже представлен перечень технологий с&nbsp;которыми имел дело. Я&nbsp;не&nbsp;претендую на&nbsp;звание широкопрофильного специалиста, но&nbsp;одно из&nbsp;моих сильных качеств&nbsp;— это любознательность. Я&nbsp;интересуюсь всем по&nbsp;чуть-чуть, но&nbsp;профессионалом быть хочу в&nbsp;чем-то одном. Во&nbsp;фронтенд разработке.</p><p>Кроме представленных технологий я&nbsp;так&nbsp;же поверхностно касался Ajax, тестирования с&nbsp;Chai/Mocha, Linux (Ubuntu, Kali), ReactJS + Redax + Routing. В&nbsp;перспективе я&nbsp;хочу полноценно освоить&nbsp;их.</p></div>
			<a href="#contacts" class="btn-cta" data-translate="skills__btn-cta">Связаться со&nbsp;мной</a>

		</div>
		<ul class="skills__list">
			<li>
				<h3>PHP</h3><div class="wrap"><div class="skills__level php"></div></div>
			</li>
			<li>
				<h3>MySQL</h3><div class="wrap"><div class="skills__level mysql"></div></div>
			</li>
			<li>
				<h3>JavaScript, jQuery</h3><div class="wrap"><div class="skills__level js"></div></div>
			</li>
			<li>
				<h3>ES6</h3><div class="wrap"><div class="skills__level es"></div></div>
			</li>
			<li>
				<h3>Git</h3><div class="wrap"><div class="skills__level git"></div></div>
			</li>
			<li>
				<h3>SEO</h3><div class="wrap"><div class="skills__level seo"></div></div>
			</li>
			<li>
				<h3>CSS, HTML5</h3><div class="wrap"><div class="skills__level html-css"></div></div>
			</li>
			<li>
				<h3>SCSS</h3><div class="wrap"><div class="skills__level scss"></div></div>
			</li>
			<li>
				<h3>Gulp, Webpack</h3><div class="wrap"><div class="skills__level packages"></div></div>
			</li>
			<li>
				<h3>Bootstrap, Foundation</h3><div class="wrap"><div class="skills__level frameworks"></div></div>
			</li>
			<li>
				<h3>Email codding</h3><div class="wrap"><div class="skills__level email"></div></div>
			</li>
			<li>
				<h3>Wordpress, Joomla</h3><div class="wrap"><div class="skills__level cms"></div></div>
			</li>
			<li>
				<h3>Photoshop</h3><div class="wrap"><div class="skills__level ps"></div></div>
			</li>
		</ul>
	</section>
	<section class="resume" id="resume">
		<div class="resume__download container">
			<h2 data-translate="resume__h2">Резюме</h2>
			<div data-translate="resume__description"><p>Кстати! Чуть не&nbsp;забыл. Вы&nbsp;можете так&nbsp;же скачать для удобства rtf версию резюме.</p></div>
			<a class="btn-cta" href="/" data-translate="resume__btn-cta">Скачать</a>
		</div>
		<div class="education container">
			<div class="global__description">
				<h2 data-translate="education__h2">Образование</h2>
				<div data-translate="education__description"><p>По&nbsp;мимо указанных ниже курсов и&nbsp;высшего образования, я&nbsp;регулярно читаю книги, смотрю ролики и&nbsp;читаю блоги профессионального направления.</p><p>Так&nbsp;же 2&nbsp;года подряд был участником «Группы Личностного Роста». На&nbsp;группе понравились такие темы:</p><ul><li>—&nbsp;Понятие зрелости и&nbsp;инфантильности.</li><li>—&nbsp;6&nbsp;ступеней развития личности.</li><li>—&nbsp;Аналитическое мышление.</li><li>—&nbsp;Как управлять своими мыслями, чувствами и&nbsp;внутренним миром.</li><li>—&nbsp;Системы планирования времени.</li><li>—&nbsp;8&nbsp;типов характера.</li></ul><p>... и&nbsp;многое другое. За&nbsp;время посещения группы мое мышление стало более глубоким, расширилось мировоззрение, я&nbsp;стал более зрелой личностью.</p></div>
			</div>
			<ul class="institution">
				<li>
					<h3 data-translate="institution__nau">Национальный авиационный университет</h3>
					<p class="activity-period">01.09.2007 — 27.02.2013</p>
					<div class="activity-total" data-translate="institution__nau__degree">Специалист</div>
					<hr>
					<div class="institution__description" data-translate="institution__nau__description"><p>Мною написана и&nbsp;успешно защита дипломная работа квалификации «специалист». Тема дипломной работы: «Система автоматического распознавания темпа аудио сигнала». Даная работа описывает систему, которая с&nbsp;помощью математических методов способна определить темп музыкального фрагмента. Целью данной работы являлось создание программного обеспечения на&nbsp;языке C#, которое реализовало&nbsp;бы систему, что опирается на&nbsp;алгоритм представленный на&nbsp;конференции Mirex в&nbsp;2006&nbsp;году. По&nbsp;данной дипломной работе мною была написана статья в&nbsp;научный журнал университета, которую опубликовали в&nbsp;2012&nbsp;году.</p></div>
				</li>
				<li>
					<h3 data-translate="institution__htmlAcademy">HTML Academy</h3>
					<p class="activity-total" data-translate="institution___htmlAcademy__period">2&nbsp;месяца</p>
					<hr>
					<div class="institution__description" data-translate="institution__htmlAcademy__description"><p>Данный курс помог мне ознакомиться с&nbsp;основами верстки.</p></div>
				</li>
				<li>
					<h3 data-translate="institution__phpAcademy">PHP Academy</h3>
					<p class="activity-period">13.02.2017 — 31.08.2017</p>
					<div class="activity-total" data-translate="institution___phpAcademy__period">6&nbsp;месяцев</div>
					<hr>
					<div class="institution__description" data-translate="institution__phpAcademy__description"><p>На&nbsp;данном курсе я&nbsp;больше углубился во&nbsp;фронтенд, открыл для себя ReactJS и&nbsp;ES-6, изучил PHP и&nbsp;базы данных.</p></div>
				</li>
			</ul>
		</div>
		<div class="container"><hr></div>
		<div class="work-experience container">
			<div class="global__description">
				<h2 data-translate="work__h2">Опыт работы</h2>
				<div data-translate="work__description"><p>Опыт работы представлен в&nbsp;хронологическом порядке, т.е. самая свежая информация в&nbsp;самом низу</p></div>
			</div>
			<ul class="institution">
				<li>
					<h3 data-translate="work__petrovskogo">Киевский завод автоматики имени Г. И. Петровского</h3>
					<p class="activity-period">15.11.2012 — 24.05.2013</p>
					<div class="activity-total" data-translate="work__petrovskogo__total">7&nbsp;месяцев</div>
					<hr>
					<div class="institution__description" data-translate="work__petrovskogo__description"><p>Работал регулировщиком радиоэлектронных приборов (III&nbsp;разряд). Проверял гироскопические приборы согласно&nbsp;ТУ и&nbsp;сдавал в&nbsp;отдел контроля качества. После защиты диплома в&nbsp;университете, понял что хочу работать в&nbsp;IT.</p></div>
				</li>
				<li>
					<h3 data-translate="work__fotos">f.ua</h3>
					<p class="activity-period">09.2013 — 10.2014</p>
					<div class="activity-total" data-translate="work__fotos__total">13&nbsp;месяцев</div>
					<hr>
					<div class="institution__description" data-translate="work__fotos__description"><p>По началу работал контент менеджером. В мои обязанности входило поиск достоверных источников информации о товарах, наполнением сайта контентом для различных групп товаров.  После нескольких месяцев работы мне доверили обязанность по отделу: редактировать инструкций в формате pdf и вносить их в карточки товаров. Чуть позже я перешел в SEO отдел, где стал помощником оптимизатора. Я составлял семантическое ядро, мета-теги и работал со ссылочной массой.</p></div>
				</li>
				<li>
					<h3 data-translate="work__beryozin">Студия Александра Берёзина</h3>
					<p class="activity-period">10.2014 — 08.2015</p>
					<div class="activity-total" data-translate="work__beryozin__total">11&nbsp;месяцев</div>
					<hr>
					<div class="institution__description" data-translate="work__beryozin__description"><p>Работал Junior SEO специалистом. В&nbsp;мои обязанности входило:</p><ul class="content-list"><li>Сбор семантического ядра и&nbsp;группировки по&nbsp;страницам</li><li>Проводил работы по&nbsp;внутренней оптимизации сайта (настройка редиректов, текстовая оптимизация, перелинковка)</li><li>Работал с&nbsp;сервисами Serpstat, Ahrefs</li><li>Составление ТЗ&nbsp;копирайтеру, верстальщику, программисту</li><li>Подключал сервисы аналитики и&nbsp;метрики, регистрировал в&nbsp;каталогах (Dmoz, Яндекс.Каталог), социальных сетях, Google Maps и&nbsp;Яндекс Картах.</li><li>Составление предложений по&nbsp;повышению удобства пользования сайтом</li></ul></div>
				</li>
				<li>
					<h3 data-translate="work__seostudio">SEO Studio</h3>
					<p class="activity-period">10.2015 — 05.2016</p>
					<div class="activity-total" data-translate="work__seostudio__total">7&nbsp;месяцев</div>
					<hr>
					<div class="institution__description" data-translate="work__seostudio__description"><p>Работал SEO специалистом. В&nbsp;мои обязанности входило:</p><ul class="content-list"><li>Составление стратегий развития проектов</li><li>Подробный аудит на&nbsp;выявление технических ошибок и&nbsp;составление&nbsp;ТЗ на&nbsp;их&nbsp;исправление</li><li>Поиск и&nbsp;устранение дублирующегося контента, аффилиатов сайта</li><li>Создание структуры сайта</li><li>Ведение ссылочных компаний</li><li>Продвижение проектов под Россию, Украину, Казахстан</li><li>Вел 10-15 проектов одновременно</li></ul></div>
				</li>
				<li>
					<h3 data-translate="work__agromat">Агромат</h3>
					<p class="activity-period">с 06.2016 — 11.2016</p>
					<div class="activity-total" data-translate="work__agromat__total">5&nbsp;месяцев</div>
					<hr>
					<div class="institution__description" data-translate="work__agromat__description"><p>Работал верстальщиком. В&nbsp;мои обязанности входило:</p><ul class="content-list"><li>Исправление багов в&nbsp;верстке</li><li>Верстка отдельных компонентов на&nbsp;страницах</li></ul><p>На&nbsp;этой работе я&nbsp;освоил SASS, научился использовать Git и&nbsp;получил небольшой опыт работы в&nbsp;команде разработчиков.</p></div>
				</li>
				<li>
					<h3 data-translate="work__ukrvet">Укрвет</h3>
					<p class="activity-period">11.09.2007 — 27.02.2013</p>
					<div class="activity-total" data-translate="work__ukrvet__total">7&nbsp;месяцев</div>
					<hr>
					<div class="institution__description" data-translate="work__ukrvet__description"><p>Занимаемая должность: руководитель контент отдела. В&nbsp;обязанности входило:</p><ul class="content-list"><li>Курировал переезд сайта с&nbsp;платформы prom.ua на&nbsp;платформу horoshop.com.ua</li><li>Создание лендинга для нового направления товаров</li><li>Постановка и&nbsp;контроль выполнения задач, помощь членам команды в&nbsp;профессиональном росте</li></ul></div>
				</li>
			</ul>
		</div>
		<div class="philosophy container">
			<h2 data-slider-content="philosophy__h2" data-translate="philosophy__h2">Несколько философских мыслей</h2>
			<p data-slider-content="philosophy__description" data-translate="philosophy__description">... от&nbsp;людей, у&nbsp;которых мне повезло учиться в&nbsp;университете, работе, жизни.</p>
			<ul class="slider__content">
				<li class="slider__content_item" data-slider-content="1">
					<blockquote data-translate="citation-1"><p>Голова&nbsp;— это не&nbsp;мусорный ящик. Не&nbsp;нужно в&nbsp;ней хранить что попало.</p>Старший преподаватель высшей математики, Погребецкая Т.А.</blockquote>
				</li>
				<li class="slider__content_item active" data-slider-content="2">
					<blockquote data-translate="citation-2"><p>Инженер&nbsp;— это не&nbsp;тот, кто все знает и&nbsp;умеет, а&nbsp;тот, кто знает где найти и&nbsp;как этим воспользоваться.</p>Профессор кафедры АКИК, Аблесимов&nbsp;А.&nbsp;К.</blockquote>
				</li>
				<li class="slider__content_item" data-slider-content="3">
					<blockquote data-translate="citation-3"><p>Ищи мотивацию.</p>Доцент и&nbsp;преподаватель микросхемотехники, Мартынюк В.С.</blockquote>
				</li>
				<li class="slider__content_item" data-slider-content="4">
					<blockquote data-translate="citation-4"><p>Трудности рождают прорыв.</p>Пастор церкви Слово Благодати, Белоножко А.А</blockquote>
				</li>
				<li class="slider__content_item" data-slider-content="5">
					<blockquote data-translate="citation-5"><p>Если какой-то пункт в&nbsp;формулировке&nbsp;ТЗ может быть истолкован исполнителем неправильно, значит со 100% вероятностью он именно так и будет истолкован.</p>Senior SEO специалист</blockquote>
				</li>
			</ul>
			<ul class="slider__dots">
				<li class="slider__dots_item active" data-slider-dot="1"><button></button></li>
				<li class="slider__dots_item" data-slider-dot="2"><button></button></li>
				<li class="slider__dots_item" data-slider-dot="3"><button></button></li>
				<li class="slider__dots_item" data-slider-dot="4"><button></button></li>
				<li class="slider__dots_item" data-slider-dot="5"><button></button></li>
			</ul>
		</div>
	</section>
	<section class="portfolio container" id="portfolio">
		<h2 data-translate="portfolio__h2">Портфолио</h2>
		<div data-translate="portfolio__description"><p>Здесь представлены некоторые из&nbsp;моих работ.</p></div>
		<div class="wrap">
			<div class="portfolio_item"><a href="#a"></a></div>
			<div class="portfolio_item"><a href="#a"></a></div>
			<div class="portfolio_item"><a href="#a"></a></div>
			<div class="portfolio_item"><a href="#a"></a></div>
		</div>
	</section>
	<section class="contacts container" id="contacts">
		<div class="contacts__data">
			<h2 data-translate="contacts__h2">Связаться со&nbsp;мной</h2>
			<div class="contacts__description" data-translate="contacts__description"><p>Заполните форму, и&nbsp;ваше сообщение сразу придет на&nbsp;мою почту.</p></div>
		</div>
		<form action="mailer.php" method="POST" class="contacts__form" id="form">
			<label for="name"><span data-translate="label-name">Имя</span><sup>*</sup></label>
			<input type="text" name="name" required="">
			<label for="email"><span data-translate="label-email">Почта</span><sup>*</sup></label>
			<input type="email" name="email" required="">
			<label for="message"><span data-translate="label-message">Сообщение</span></label>
			<textarea name="message"></textarea>
			<div class="text-center">
				<button type="submit" class="btn-contact" data-translate="form__btn-contact">Отправить</button>
			</div>
		</form>
	</section>
	<footer class="container">
		<div class="copyright container" data-translate="copyright">Сверстано с&nbsp;любовью&nbsp;— 2017</div>
		<ul class="socials">
			<li class="socials-icons"><a href="#fb" class="fb"></a></li>
			<li class="socials-icons"><a href="#fb" class="vk"></a></li>
			<li class="socials-icons"><a href="skype:dmitry.bruslik?add" class="skype"></a></li>
		</ul>
	</footer>
	<div class="go-up"><a href="#menu"></a></div>
	<div class="error" id="error"></div>
	<script src="src/translates/data-translate.js"></script>
	<script src="src/js/main.js"></script>
</body>
</html>