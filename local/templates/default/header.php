<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700italic,400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH?>/js/skel.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH?>/js/skel-panels.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH?>/js/init.js"></script>
		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/skel-noscript.css" />
		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css" />
		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style-desktop.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<?$APPLICATION->ShowPanel();?>
	<body class="homepage">
		<div id="panel">

		</div>
	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="/">Ex Machina</a></h1>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "catalog_horizontal", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => "catalog_horizontal_old",
		"MENU_THEME" => "site",	// Тема меню
	),
	false
);?>
					</nav>

			</div>
		</div>
	<!-- Header -->
		
	<!-- Banner -->
		<div id="banner">
			<div class="container">
			</div>
		</div>
	<!-- /Banner -->
	
						