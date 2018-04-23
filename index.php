<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Тестовое задание");
?><div id="page">
	 <!-- Extra -->
	<div id="marketing" class="container">
		<div class="row">
			<div class="3u">
 <section>
				<h2><?$APPLICATION->IncludeComponent("bitrix:news", "news_block", Array(
	"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DETAIL_DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DETAIL_FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
		"DETAIL_PAGER_TEMPLATE" => "",	// Название шаблона
		"DETAIL_PAGER_TITLE" => "Страница",	// Название категорий
		"DETAIL_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "",	// Инфоблок
		"IBLOCK_TYPE" => "Information",	// Тип инфоблока
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"LIST_FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела
		"USE_CATEGORIES" => "N",	// Выводить материалы по теме
		"USE_FILTER" => "N",	// Показывать фильтр
		"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
		"USE_RATING" => "N",	// Разрешить голосование
		"USE_REVIEW" => "N",	// Разрешить отзывы
		"USE_RSS" => "N",	// Разрешить RSS
		"USE_SEARCH" => "N",	// Разрешить поиск
		"USE_SHARE" => "N",	// Отображать панель соц. закладок
		"COMPONENT_TEMPLATE" => ".default",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"VARIABLE_ALIASES" => array(
			"SECTION_ID" => "SECTION_ID",
			"ELEMENT_ID" => "ELEMENT_ID",
		)
	),
	false
);?><br>
 
	 <!-- /Extra --> <!-- Main -->
	<div id="main" class="container">
		<div class="row">
			<div class="6u">
 <section>
				<div>
					<h2>Integer gravida nibh quis urna</h2>
 <span class="byline">Augue praesent a lacus at urna congue rutrum</span>
				</div>
				<p>
					 This is <strong>Ex Machina</strong>, a responsive HTML5 site template freebie by <a href="http://templated.co">TEMPLATED</a>. Released for free under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) – just give us credit! Check out more of our stuff at <a href="http://templated.co">our site</a> or follow us on <a href="http://twitter.com/templatedco">Twitter</a>.
				</p>
				<p>
					 Sed etiam vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl. Fusce mattis viverra elit. Fusce quis tortor. Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget lorem ipsum dolor. Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat. Sed etiam vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat.
				</p>
				<p>
					 Sed etiam vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl. Fusce mattis viverra elit. Fusce quis tortor. Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget lorem ipsum dolor. Donec placerat odio vel elit. Nullam ante orci, pellentesque eget, tempus quis, ultrices in, est. Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat. Sed etiam vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat.
				</p>
 <a href="#" class="button">More Details</a> </section>
			</div>
			<div class="3u">
 <section class="sidebar">
				<div>
					<h2>Feugiat Tempus</h2>
				</div>
				<ul class="style2">
					<li> <a href="#"><img src="/local/templates/default/images/pics07.jpg" alt=""></a>
					<p>
						 Donec leo, vivamus fermentum augue praesent a lacus at urna rutrum.
					</p>
 </li>
					<li> <a href="#"><img src="/local/templates/default/images/pics08.jpg" alt=""></a>
					<p>
						 Donec leo, vivamus fermentum augue praesent a lacus at urna rutrum.
					</p>
 </li>
					<li> <a href="#"><img src="/local/templates/default/images/pics09.jpg" alt=""></a>
					<p>
						 Donec leo, vivamus fermentum augue praesent a lacus at urna rutrum.
					</p>
 </li>
					<li> <a href="#"><img src="/local/templates/default/images/pics10.jpg" alt=""></a>
					<p>
						 Donec leo, vivamus fermentum augue praesent a lacus at urna rutrum.
					</p>
 </li>
				</ul>
 </section>
			</div>
			<div class="3u">
 <section class="sidebar">
				<div>
					<h2>Feugiat Tempus</h2>
				</div>
				<ul class="style1">
					<li><a href="#">Maecenas luctus lectus at sapien</a></li>
					<li><a href="#">Etiam rhoncus volutpat erat</a></li>
					<li><a href="#">Donec dictum metus in sapien</a></li>
					<li><a href="#">Nulla luctus eleifend purus</a></li>
					<li><a href="#">Maecenas luctus lectus at sapien</a></li>
				</ul>
 </section> <section class="sidebar">
				<div>
					<h2>Nulla luctus eleifend</h2>
				</div>
				<ul class="style1">
					<li><a href="#">Maecenas luctus lectus at sapien</a></li>
					<li><a href="#">Donec dictum metus in sapien</a></li>
					<li><a href="#">Integer gravida nibh quis urna</a></li>
					<li><a href="#">Etiam posuere augue sit amet nisl</a></li>
					<li><a href="#">Mauris vulputate dolor sit amet nibh</a></li>
				</ul>
 </section>
			</div>
		</div>
	</div>
	 <!-- Main -->
</div>
	<!-- /Main --><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>